<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous" />
  <link rel="stylesheet" href="./tailwind.css" />
  <link rel="stylesheet" href="./styles.css" />
  <title>Patao Portfolio</title>
</head>

<body class="relative min-h-screen w-full">
  <div style="background-image: url('./images/balloons.jpg')" class="h-4/5 bg-cover">
    <header class="sticky bg-gray-400 opacity-90">
      <div class="px-8 text-white py-2 mx-auto justify-between flex max-w-5xl">
        <h1 class="">
          <img src="./images/favicon.ico" class="inline-block mr-4 w-12 h-12 rounded-full" alt="ぱたおのプロフィール画像" />
          <p class="inline-block font-bold text-3xl align-middle">Portfolio</p>
        </h1>
        <nav class="hidden sm:block">
          <ul class="flex space-x-12 h-full items-center">
            <li class="cursor-pointer transition text-sm hover:">TOP</li>
            <li class="cursor-pointer transition text-sm hover:">PROFILE</li>
            <li class="cursor-pointer transition text-sm hover:">SKILL</li>
            <li class="cursor-pointer transition text-sm hover:">WORKS</li>
            <li class="cursor-pointer transition text-sm hover:">CONTACT</li>
          </ul>
        </nav>
        <span style="padding-top: 0.35rem" class="
              fas
              fa-bars
              sm:hidden
              transition
              inline-block
              border-2
              px-3
              text-2xl
              cursor-pointer
              hover:bg-cyan-500
            "></span>
      </div>
    </header>
    <main>
      <div class="py-40 bg-black bg-opacity-10 md:py-60">
        <h2 class="px-8 text-center text-white opacity-100 text-8xl font-bold">Patao Portfolio</h2>
      </div>
    </main>
  </div>
  <section class="text-center max-w-5xl mx-auto">
    <h3 class="sub-header relative inline-block text-4xl my-8 pb-4 border-cyan-500">PROFILE</h3>
    <div class="flex justify-evenly p-8 items-center">
      <img src="./images/favicon.ico" class="rounded-full w-60 h-60 shadow-xl" />
      <div>
        <p class="max-w-lg text-left">
          はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。はじめまして。
        </p>
      </div>
    </div>
  </section>

  <section class="bg-gray-50 text-center">
    <div class=" max-w-5xl mx-auto">
      <h3 class="sub-header relative inline-block text-4xl my-8 pb-4 border-cyan-500">SKILL</h3>
    </div>
  </section>
  <section class="text-center max-w-5xl mx-auto">
    <h3 class="sub-header relative inline-block text-4xl my-8 pb-4 border-cyan-500">WORKS</h3>
  </section>
  <section class="text-center max-w-5xl mx-auto">
    <h3 class="sub-header relative inline-block text-4xl my-8 pb-4 border-cyan-500">CONTACT</h3>
    <div class="flex flex-col space-y-8 items-center">
      <img src="./images/favicon.ico" class="rounded-full w-16 h-16 shadow-xl" />
      <p>
        <a href="https://twitter.com/Patao_program"><span class="fab fa-twitter mr-4"></span>Twitter</a>
      </p>
    </div>
  </section>
  <script src="./index.js"></script>
</body>

</html>