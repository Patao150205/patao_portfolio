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
  <title>Patao Portfolio</title>
</head>

<body class="relative max-h-screen w-full">
  <div style="background-image: url('./images/balloons.jpg')" class="h-4/5 bg-cover">
    <header id="header" class="fixed z-50 top-0 left-0 w-full transition duration-1000 opacity-90">
      <div class="px-8 text-white py-2 mx-auto justify-between flex max-w-5xl">
        <h1 class="cursor-pointer" onclick="window.scroll(0, 0)">
          <img src="./images/favicon.ico" class="inline-block mr-4 w-12 h-12 rounded-full" alt="ぱたおのプロフィール画像" />
          <p class="inline-block font-bold text-3xl align-middle">Portfolio</p>
        </h1>
        <nav id="nav-menu" class="hidden sm:block">
          <ul class="flex space-x-11 h-full items-center">
            <li name="nav-top" class="cursor-pointer  transition text-sm hover:text-cyan-300">TOP</li>
            <li name="nav-profile" class="cursor-pointer transition text-sm hover:text-cyan-300">PROFILE</li>
            <li name="nav-skill" class="cursor-pointer transition text-sm hover:text-cyan-300">SKILL</li>
            <li name="nav-works" class="cursor-pointer transition text-sm hover:text-cyan-300">WORKS</li>
            <li name="nav-contact" class="cursor-pointer transition text-sm hover:text-cyan-300">CONTACT</li>
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
          <li name="nav-top" class="cursor-pointer py-4 border border-l-8 border-gray-400 pl-12 text-lg transition hover:border-black hover:text-cyan-300">TOP</li>
          <li name="nav-profile" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">PROFILE</li>
          <li name="nav-skill" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">SKILL</li>
          <li name="nav-works" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">WORKS</li>
          <li name="nav-contact" class="cursor-pointer border border-l-8 border-gray-400 pl-12 text-lg py-4 transition hover:border-black hover:text-cyan-300">CONTACT</li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="py-40 bg-black bg-opacity-10 md:py-60">
        <h2 style="letter-spacing: -0.08em" class="patao-portfolio px-8 text-center text-white opacity-100 text-7xl sm:text-8xl font-bold track">
          <div class="inline-block">
            <span>
              <span id="signle-char-1">P</span>
              <span id="signle-char-2">a</span>
              <span id="signle-char-3">t</span>
              <span id="signle-char-4">a</span>
              <span id="signle-char-5">o&nbsp;&nbsp;</span>
            </span>
            <span>
              <span id="signle-char-6">P</span>
              <span id="signle-char-7">o</span>
              <span id="signle-char-8">r</span>
              <span id="signle-char-9">t</span>
              <span id="signle-char-10">f</span>
              <span id="signle-char-11">o</span>
              <span id="signle-char-12">l</span>
              <span id="signle-char-13">i</span>
              <span id="signle-char-14">o</span>
            </span>
          </div>
        </h2>
      </div>
    </main>
  </div>
  <h3 id="section1" class="sub-header relative text-center text-4xl py-8 border-cyan-500">PROFILE</h3>
  <section class="fade-in fade-in-down text-center max-w-5xl space-y-8 py-16 mx-auto px-8 flex flex-col items-center sm:space-x-8 sm:space-y-0 sm:flex-row sm:justify-evenly">
    <img src="./images/favicon.ico" class="rounded-full w-60 h-60 shadow-xl" />
    <div class="max-w-lg text-left">
      <p>
        　はじめまして！こんにちは。平成15年生まれ、18歳のぱたお<a href="https://twitter.com/Patao_program" class="text-cyan-500">@Patao_program</a>です。
      </p>

      <p>　プログラミングは、高3の11月に始めました。以来、プログラミングを使い、自分でものを作りだすということに、楽しさを覚え、サーバーサイドエンジニアになることを目指すきっかけになりました！</p>
      <p>　高校卒業後は、その目標に向かって、独学でプログラミングを学習を続けています。</p>
      <p>ひよっこの僕ですが、早くから、現場で働き、一人前のエンジニアとして成長していきたいです！！</p>
    </div>
  </section>

  <div class="bg-gray-50">
    <h3 id="section2" class="sub-header relative text-center text-4xl py-8 pb-4 border-cyan-500">SKILL</h3>
    <div class="fade-in fade-in-left p-8 grid row-span-2 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
      <section class="text-center max-w-5xl mx-auto">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full h-60" src="./images/html-css-logo.jpg" alt="HTML & CSS">
          <div class="font-bold text-xl mb-2">HTML & CSS</div>
        </div>
      </section>
      <section class="text-center max-w-5xl mx-auto">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full h-60 object-cover" src="./images/javascript.png" alt="javascript">
          <div class="font-bold text-xl mb-2">javascript</div>
        </div>
      </section>
      <section class="text-center max-w-5xl mx-auto">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full h-60" src="./images/react.png" alt="React.js">
          <div class="font-bold text-xl mb-2">React.js</div>
        </div>
      </section>
      <section class="text-center max-w-5xl mx-auto">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full h-60" src="./images/node.png" alt="Node.js">
          <div class="font-bold text-xl mb-2">Node.js</div>
        </div>
      </section>
      <section class="text-center max-w-5xl mx-auto">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full h-60" src="./images/php.jpg" alt="PHP">
          <div class="font-bold text-xl mb-2">PHP</div>
        </div>
      </section>
      <section class="text-center max-w-5xl mx-auto">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full h-60" src="./images/laravel.jpg" alt="Laravel">
          <div class="font-bold text-xl mb-2">Laravel</div>
        </div>
      </section>
    </div>
  </div>


  <h3 id="section3" class="sub-header text-center relative text-4xl my-8 pb-4 border-cyan-500">WORKS</h3>
  <article class="fade-in fade-in-right text-center works-wrapper p-8 max-w-7xl mx-auto">
    <section class="text-center mx-auto">
      <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden">
        <img class="w-full" src="./images/Yuruhuwa.png" alt="ぬいぐるみショップ">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 mt-2">ぬいぐるみショップ</div>
          <p class="text-gray-700 text-base">
            かわいいぬいぐるみたちを心も穏やかに癒やされる、そんなぬいぐるみたちのショップです！
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#React.js</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Express.js</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Node.js</span>
        </div>
      </div>
    </section>
    <section class="mx-auto">
      <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden">
        <img class="w-full" src="./images/Quize_de_pon.png" alt="クイズでぽん！！">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 mt-2">クイズでぽん！！</div>
          <p class="text-gray-700 text-base">
            暇なときに最適な暇つぶしになる投稿型のクイズアプリ！！
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#HTML/CSS</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Laravel</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#JavaScript</span>
        </div>
      </div>
    </section>

    <section class="text-center mx-auto">
      <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden">
        <img class="w-full" src="./images/Studious.png" alt="学習管理アプリ">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">学習管理アプリ</div>
          <p class="text-gray-700 text-base">
            日々の学習を記録できて、自動でグラフかもしてくれる！視覚的に学習状況のデータが得られるので、やる気アップできる学習管理アプリ
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#React.js</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Firebase</span>
        </div>
      </div>
    </section>

    <section class="text-center mx-auto">
      <div style="box-shadow: 0px 5px 10px #06b6d4" class="max-w-sm rounded overflow-hidden">
        <img class="w-full" src="./images/Portfolio.png" alt="ポートフォリオ">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">ポートフォリオ</div>
          <p class="text-gray-700 text-base">
            Who is Patao ?? 🤔
            ぱたおがどういう人間かがざっと分かります。
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#HTML/CSS</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#JavaScript</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#PHP</span>
        </div>
      </div>
    </section>
  </article>
  <section class="bg-gray-50">
    <h3 id="section4" class="sub-header text-center relative text-4xl py-8 pb-4 px-4 border-cyan-500">CONTACT</h3>
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