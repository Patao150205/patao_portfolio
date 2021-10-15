<?php
session_start();
$toke_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($toke_byte);

$_SESSION['csrf_token'] = $csrf_token;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./images/favicon.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/tailwind.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Mizuki Portfolio</title>
</head>

<body id="section" class="relative max-h-screen w-full">
  <div style="background-image: url('./images/balloons.jpg')" class="h-4/5 bg-cover">
    <header id="header" class="fixed z-50 top-0 left-0 w-full transition duration-1000 opacity-90">
      <div class="px-8 text-white py-2 mx-auto justify-between flex max-w-5xl">
        <h1 class="cursor-pointer" onclick="window.scroll(0, 0)">
          <img src="./images/favicon.ico" class="inline-block mr-4 w-12 h-12 rounded-full" alt="ぱたおのプロフィール画像" />
          <p class="inline-block font-bold text-3xl align-middle">Portfolio</p>
        </h1>
        <nav id="nav-menu" class="hidden sm:block">
          <ul class="flex space-x-11 h-full items-center">
            <li name="nav" class="cursor-pointer  transition text-sm hover:text-cyan-300">TOP</li>
            <li name="nav" class="cursor-pointer transition text-sm hover:text-cyan-300">PROFILE</li>
            <li name="nav" class="cursor-pointer transition text-sm hover:text-cyan-300">SKILL</li>
            <li name="nav" class="cursor-pointer transition text-sm hover:text-cyan-300">WORKS</li>
            <li name="nav" class="cursor-pointer transition text-sm hover:text-cyan-300">CONTACT</li>
          </ul>
        </nav>
        <span id="hamburger" style="padding-top: 0.35rem" class="
              fas
              fa-bars
              sm:hidden
              transition
              inline-block
              border-2
              w-12
              h-12
              text-center
              text-2xl
              cursor-pointer
              hover:bg-cyan-500
            "></span>
      </div>
      <!-- Navigation Header Small -->
      <nav id="nav-header-small" class="sm:hidden invisible h-0 opacity-0 transition duration-700 bg-white">
        <ul>
          <li name="hamburger-nav" class="cursor-pointer py-4 border border-l-8 border-gray-400 pl-12 text-lg transition hover:border-black hover:text-cyan-300">TOP</li>
          <li name="hamburger-nav" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">PROFILE</li>
          <li name="hamburger-nav" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">SKILL</li>
          <li name="hamburger-nav" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">WORKS</li>
          <li name="hamburger-nav" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">CONTACT</li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="py-40 bg-black bg-opacity-10 md:py-60">
        <h2 style="letter-spacing: -0.08em" class="patao-portfolio px-8 text-center text-white opacity-100 text-7xl sm:text-8xl font-bold track">
          <div class="inline-block">
            <span>
              <span id="signle-char-1">M</span>
              <span id="signle-char-2">i</span>
              <span id="signle-char-3">z</span>
              <span id="signle-char-4">u</span>
              <span id="signle-char-5">k</span>
              <span id="signle-char-6">i&nbsp;&nbsp;</span>
            </span>
            <span>
              <span id="signle-char-7">P</span>
              <span id="signle-char-8">o</span>
              <span id="signle-char-9">r</span>
              <span id="signle-char-10">t</span>
              <span id="signle-char-11">f</span>
              <span id="signle-char-12">o</span>
              <span id="signle-char-13">l</span>
              <span id="signle-char-14">i</span>
              <span id="signle-char-15">o</span>
            </span>
          </div>
        </h2>
      </div>
    </main>
  </div>
  <h3 name="section" class="sub-header relative text-center text-4xl py-8 border-cyan-500">PROFILE</h3>
  <section class="fade-in fade-in-down text-center max-w-5xl space-y-8 py-16 mx-auto px-8 flex flex-col items-center sm:space-x-8 sm:space-y-0 sm:flex-row sm:justify-evenly">
    <img src="./images/favicon.ico" class="rounded-full w-60 h-60 shadow-xl" />
    <div class="max-w-lg text-left">
      <p>
        　はじめまして！こんにちは。平成15年生まれ、18歳のみずき<a href="https://twitter.com/Patao_program" class="text-cyan-500">@Patao_program</a>です。
      </p>

      <p>　プログラミングは、高校の時に始めました。以来、プログラミングを使い、自分でものを作りだすということに、楽しさを覚え、エンジニアになることを目指そうと思いました。</p>
      <p>　完全に独学でプログラミングを学習を続けてきました。</p>
      <p>　実務経験は無くひよっこですが、早くから現場で働き、一人前のエンジニアとして成長していきたいと考えています。</p>
    </div>
  </section>

  <div class="bg-gray-50">
    <h3 name="section" class="sub-header relative text-center text-4xl py-8 pb-4 border-cyan-500">SKILL</h3>
    <div class="fade-in fade-in-up ">
      <div class="text-center mx4 mt-8">
        <p>アプリ開発の全体像の把握や自分の適性を確認したかったので、フロントからバックエンド、インフラまで一通りのことは勉強しました。</p>
        <p>一つ一つの専門性が低いと自覚しているので、まずは、バックエンド一筋で極めていきたいと思っています。</p>
      </div>
      <div class="w-full p-8 grid row-span-2 md:grid-cols-2 justify-center items-center lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/html-css-logo.jpg" alt="HTML & CSS">
            <div class="font-bold text-xl mb-2">HTML & CSS</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60 object-cover" src="./images/javascript.png" alt="javascript">
            <div class="font-bold text-xl mb-2">javascript</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/react.png" alt="React.js">
            <div class="font-bold text-xl mb-2">React.js</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/nodejsandexpress.png" alt="Node.js$Express.js">
            <div class="font-bold text-xl mb-2">Node.js & Express.js</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/php.jpg" alt="PHP">
            <div class="font-bold text-xl mb-2">PHP</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/laravel.jpg" alt="Laravel">
            <div class="font-bold text-xl mb-2">Laravel</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/docker.png" alt="Laravel">
            <div class="font-bold text-xl mb-2">Docker</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/mongo.png" alt="Laravel">
            <div class="font-bold text-xl mb-2">MongoDB</div>
          </div>
        </section>
        <section class="text-center w-full max-w-5xl mx-auto">
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-60" src="./images/mariadb.jpg" alt="Laravel">
            <div class="font-bold text-xl mb-2">MariaDB</div>
          </div>
        </section>
      </div>
    </div>
  </div>


  <h3 name="section" class="sub-header text-center relative text-4xl my-8 pb-4 border-cyan-500">WORKS</h3>
  <div class="fade-in fade-in-down ">
    <div class="text-center my-8 px-4">
      <p>これまで作ってきたアプリの一部を公開しています！</p>
      <p>使用した技術や機能についての詳細は、GitHubのREADME.mdに記載しています。</p>
    </div>
    <article class="text-center works-wrapper p-8 max-w-7xl mx-auto">
      <section class="mx-auto">
        <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden card-scale-up">
          <img class="w-full cursor-pointer" src="./images/Portfolio.png" alt="ポートフォリオ" onclick="location.href='https://patao-program'">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 cursor-pointer hover:text-cyan-600" onclick="location.href='https://patapatao.com'">ポートフォリオ</div>
            <p class="text-gray-700 text-base">
              Who is Patao ?? 🤔
            </p>
            <p>スキルセットや成果物を公開してます。</p>
          </div>
          <a href="https://github.com/Patao150205/patao_portfolio" class="text-cyan-500 underline">GitHubへ</a>
          <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#HTML/CSS</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#JavaScript</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#PHP</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#PHPUnit</span>
          </div>
        </div>
      </section>
      <section class="mx-auto">
        <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden card-scale-up">
          <img class="w-full cursor-pointer" src="./images/Quize_de_pon.png" alt="クイズでぽん！！" onclick="location.href='https://quize.patao-program'">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 mt-2 cursor-pointer hover:text-cyan-600" onclick="location.href='https://quize.patapatao.com'">クイズでぽん！！</div>
            <p class="text-gray-700 text-base">
              暇なときに最適な暇つぶしになる投稿型のクイズアプリ！！
            </p>
          </div>
          <a href="https://github.com/Patao150205/quize_de_pon" class="text-cyan-500 underline">GitHubへ</a>
          <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#HTML/CSS</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Laravel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#JavaScript</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Docker</span>
          </div>
        </div>
      </section>
      <section class="mx-auto">
        <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden card-scale-up">
          <img class="w-full cursor-pointer" src="./images/Yuruhuwa.png" alt="ぬいぐるみショップ" onclick="location.href='https://blush-toy-shop.herokuapp.com/'">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 mt-2 cursor-pointer hover:text-cyan-600" onclick="location.href='https://blush-toy-shop.herokuapp.com/'">ぬいぐるみショップ</div>
            <p class="text-gray-700 text-base">
              かわいい💗ぬいぐるみ達に、癒やされる、そんなぬいぐるみ専門のECショップです！
            </p>
          </div>
          <a href="https://github.com/Patao150205/plush_toy_shop" class="text-cyan-500 block underline">GitHubへ</a>
          <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#React.js</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Express.js</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Node.js</span>
          </div>
        </div>
      </section>
      <section class="mx-auto">
        <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden card-scale-up">
          <img class="w-full cursor-pointer" src="./images/Studious.png" alt="学習管理アプリ" onclick="location.href='https://studious-two.vercel.app/home'">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 hover:text-cyan-600 cursor-pointer" onclick="location.href='https://studious-two.vercel.app/home'">学習管理アプリ</div>
            <p class="text-gray-700 text-base">
              日々の学習を記録できて、自動でグラフかもしてくれる！視覚的に学習状況のデータが得られるので、やる気アップできる学習管理アプリ
            </p>
          </div>
          <a href="https://github.com/Patao150205/Studious" class="text-cyan-500 underline">GitHubへ</a>
          <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#React.js</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Firebase</span>
          </div>
        </div>
      </section>


    </article>
  </div>
  <section class="bg-gray-50">
    <h3 name="section" class="sub-header text-center relative text-4xl py-8 pb-4 px-4 border-cyan-500">CONTACT</h3>
    <div class="fade-in fade-in-up text-center max-w-2xl mx-auto px-4">
      <p class="pt-8 text-cyan-500 text-left">入力していただいたメールアドレスに、返信させていただきます。お間違えのないようご注意ください！もしくは、TwitterのDMまでメッセージをお願いいたします。</p>
      <form action="" method="POST" class="py-8 text-left">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>" />

        <div id="validation1" class="text-center text-red-500"></div>
        <div class="relative mt-8 mb-4">
          <label class="absolute left-6 -top-6" for="name">Name<span class="text-red-500">*</span></label>
          <input name="name" class="outline-none border inline-block w-full border-cyan-500 p-2" type="text" name="name" id="name" placeholder="Name" />
        </div>
        <div id="validation2" class="text-center text-red-500"></div>
        <div class="relative mt-8 mb-4">
          <label class="absolute left-6 -top-6" for="email">Email<span class="text-red-500">*</span></label>
          <input name="email" class="outline-none border inline-block w-full border-cyan-500 p-2" type="text" name="email" id="email" placeholder="Email" />
        </div>
        <div id="validation3" class="text-center text-red-500"></div>
        <div class="relative mt-8 mb-4 ">
          <label class="absolute left-6 -top-6" for="message">Message <span class="text-red-500">*</span></label>
          <textarea rows="4" name="message" class="text-left inline-block w-full outline-none border border-cyan-500 p-2" placeholder="Message"></textarea>
        </div>
        <div class="text-center">
          <button id="message-btn" type="button" class="bg-cyan-500 py-2 px-4 shadow-lg my-8 sm:my-0 hover:bg-cyan-400 rounded-md">メッセージを送信する。</button>
        </div>
      </form>
    </div>
  </section>
  <footer class="sticky bottom-0 left-0 bg-cyan-600 opacity-90">
    <div class="text-center text-lg py-4">
      <a href="https://twitter.com/Patao_program" class="mr-4 hover:text-cyan-400"><span class="fab fa-twitter mr-2"></span>Twitter</a>
      <a href="https://github.com/Patao150205" class="ml-4 hover:text-cyan-400"><span class="fab fa-github mr-2 "></span>GitHub</a>
    </div>
  </footer>
  <div class="bg-gray-400">
    <p class="py-8 text-center">Copyright © All Rights Reserved</p>
  </div>
  <div id="to-top" onclick="window.scroll(0, 0);" class="opacity-0 invisible fixed bottom-20 right-10 w-18 h-18 p-4 bg-cyan-300 rounded-md text-gray-600 transition duration-1000 transform hover:scale-150 cursor-pointer hover:bg-cyan-400">
    <div class="scroll"></div>
    TOPへ
  </div>
  <script type="module" src="./js/index.js"></script>
</body>

</html>