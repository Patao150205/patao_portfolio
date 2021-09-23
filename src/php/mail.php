<?php

namespace App\Mail;

require_once('../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

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
		$mail->Host       = 'smtp.mail.yahoo.co.jp';  // SMTP サーバーを指定
		$mail->Username   = $_ENV['YAHOO_FROM_USER_NAME'];  // SMTP ユーザ名
		$mail->Password   = $_ENV['YAHOO_USER_PASSWORD'];  // SMTP パスワード
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

		return true;
	} catch (Exception $e) {
		return false;
	}
}
