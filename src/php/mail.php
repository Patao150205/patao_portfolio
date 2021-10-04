<?php
session_start();
require_once('../../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$json = file_get_contents('php://input');
	$data = json_decode($json, true);

	if (empty($_SESSION) || ($_SESSION['csrf_token'] !== $data['csrf_token'])) {
		http_response_code(400);
		echo json_encode(['status' => 'csrfError', 'message' => 'CSRFエラー。ブラウザを再読み込みをしてください。']);
		return;
	}

	// 送信準備
	$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
	$dotenv->load();

	define('TO', $_ENV['YAHOO_FROM_USER_NAME'] . '@yahoo.co.jp');
	define('SUBJECT', mb_encode_mimeheader('ポートフォリオの問い合わせ'));
	define(
		'HEADERS',
		[
			'FROM' => $_ENV['YAHOO_FROM_USER_NAME'] . '@yahoo.co.jp',
			'Content-Type' => 'text/html'
		]
	);

	function createHTML($name, $email, $message)
	{
		$html = <<< HTML
		<h1>ポートフォリオのお問い合わせ</h1>
		<br>
		<p>NAME: $name</p>
		<br>
		<p>EMAIL: $email</p>
		<br>
		<p>MESSAGE: $message</p>
		<br>
		HTML;

		return $html;
	}

	function send($name, $email, $message)
	{
		try {

			$mail = new PHPMailer(true);

			$mail->SMTPDebug = 0;
			$mail->SMTPAuth   = true;   // SMTP authentication を有効に
			$mail->isSMTP(true);   // SMTP を使用
			$mail->Host       = 'smtp.sendgrid.net';  // SMTP サーバーを指定
			$mail->Username   = 'apikey';  // SMTP ユーザ名
			$mail->Password   = $_ENV['MAIL_USER_PASSWORD'];  // SMTP パスワード
			$mail->SMTPSecure = 'ssl';  // 暗号化を有効に
			$mail->Port       = 465;  // TCP ポートを指定

			//差出人アドレス, 差出人名
			$mail->setFrom($_ENV['YAHOO_FROM_USER_NAME'] . '@yahoo.co.jp');
			//受信者アドレス, 受信者名（受信者名はオプション）
			$mail->addAddress($_ENV['YAHOO_TO_USER_NAME'] . '@yahoo.co.jp');

			$mail->CharSet = 'UTF-8';
			$mail->isHTML(true);
			$mail->Subject = SUBJECT;
			$mail->Body = createHTML($name, $email, $message);

			$mail->send();

			$mail->SMTPOptions = [
				'ssl' => [
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true,
				]
			];

			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	Valitron\Validator::lang('ja');

	$v = new Valitron\Validator($data);
	$v->rule('required', ['name', 'email', 'message']);
	$v->rule('email', ['email']);

	if ($v->validate()) {
		$isSuccess = send($data['name'], $data['email'], $data['message']);
		if ($isSuccess) {
			echo json_encode(['status' => 'success', 'message' => 'メッセージの送信に成功しました。']);
			return;
		} else {
			http_response_code(500);
			echo json_encode(['status' => 'ServerError', 'message' => 'メッセージの送信に失敗しました。サーバー側の不具合で何らかのトラブルが、発生しています。管理者までお問い合わせください。\n Twiiter DMまで https://twitter.com/Patao_program']);
			return;
		}
	} else {
		$errors = $v->errors();
		http_response_code(422);
		echo json_encode(['status' => 'validationError', 'message' => 'メッセージの送信に失敗しました。入力された値が正しくありません。もう一度お試しください。', 'validation' => $errors]);
		return;
	}
}
