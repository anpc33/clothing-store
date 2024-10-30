<!doctype html>
<html>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../src/output.css" rel="stylesheet">
  <link rel="stylesheet" href="../src/style.css">
  <title>KENTA | Thời Trang Nam</title>

  <link rel="shortcut icon" href="https://tse4.mm.bing.net/th?id=OIP.upxdhVUul8CEsZT3c639jQHaHa&pid=Api&P=0&h=180" type="image/x-icon">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <style>
    .nav-for-slider .swiper-slide {
      height: auto;
      width: auto;
      cursor: pointer;

    }

    .swiper-wrapper {
      height: auto;
    }

    .nav-for-slider .swiper-slide img {
      border: 2px solid transparent;
      border-radius: 10px;

    }

    .nav-for-slider .swiper-slide-thumb-active img {

      border-color: rgb(79 70 229);
    }

    .menu-container {
      position: relative;
      display: inline-block;
    }

    .menu-items {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
    }

    .menu-items>div {
      position: relative;
      cursor: pointer;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;

    }

    .menu-items>div:hover .dropdown-menu {
      display: block;
    }

    .dropdown-menu a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-menu a:hover {
      background-color: #ddd;
    }




    @layer utilities {

      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
    }


    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .myStyle {
      display: block;

      padding: 16px;
    }

    .user:hover .drop-down {
      display: block;
    }
  </style>

</head>

<body class="bg-white">
  <!-- Header -->
  <!-- Header Navbar -->
  <!-- component -->
  <div class="bg-white">
    <div class="border py-3 px-6">
      <div class="flex justify-between">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
          </svg>
          <span class="ml-2 font-semibold text-[#252C32]">KENTA</span>
        </div>

        <div class="ml-6 flex flex-1 gap-x-3">
          <div class="flex cursor-pointer select-none items-center gap-x-2 rounded-md border bg-[#4094F7] py-2 px-4 text-white hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm font-medium">Categories</span>
          </div>

          <form action="index.php?act=productshow" method="post" id="searchForm">
            <input type="text" class="w-full rounded-md border border-[#DDE2E4] px-3 py-2 text-sm" placeholder="PH51578" name="keyw" id="searchInput" />
          </form>


        </div>

        <?php

        if (isset($_SESSION['user'])) {
          extract($_SESSION['user']);
          
          ?>

          <div class="ml-2 flex">
            <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              
              <a href="index.php?act=Orders" class="text-sm font-medium">Orders</a>
            </div>

            <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm font-medium">Favorites</span>
            </div>

            <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg>
                <span class="absolute -top-2 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">3</span>
              </div>
              <a href="index.php?act=cart" class="text-sm font-medium">Cart</a>
            </div>

            <div class="flex gap-3 items-center ">
            <div class="h-10 w-10 hover:ring-4 user cursor-pointer relative ring-blue-700/30 rounded-full bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')]">
  <div class="drop-down absolute top-16 right-0 w-48 overflow-hidden bg-white rounded-md shadow z-50 transition-all duration-300 ease-in-out opacity-0 scale-0 origin-top-right">
    <ul>
      <li class="px-3 py-3 text-sm font-medium flex items-center space-x-2 hover:bg-slate-400">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </span>
        <a href="index.php?act=profile"> Setting </a>
      </li>
<?php if($Role_id ==1 ) {?>
      <li class="px-3 py-3 text-sm font-medium flex items-center space-x-2 hover:bg-slate-400">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </span>
        <a href="../../admin/index.php"> Dashboard </a>
      </li>
      <?php  }?>


      <li class="px-3 py-3 text-sm font-medium flex items-center space-x-2 hover:bg-slate-400">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
          </svg>
        </span>
        <a href="index.php?act=logout"> Logout </a>
      </li>
    </ul>
  </div>
</div>

<script>
  const userProfile = document.querySelector('.user');
  const dropDown = document.querySelector('.drop-down');

  userProfile.addEventListener('mouseenter', () => {
    dropDown.classList.remove('opacity-0', 'scale-0');
    dropDown.classList.add('opacity-100', 'scale-100');
  });

  userProfile.addEventListener('mouseleave', () => {
    dropDown.classList.remove('opacity-100', 'scale-100');
    dropDown.classList.add('opacity-0', 'scale-0');
  });
</script>
            </div>



          </div>

        <?php
        } else { ?>
          <div class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-gray-100">
            <a href="index.php?act=login" class="text-sm font-medium">Sign in</a>
          </div>
        <?php } ?>

      </div>


      <div class="mt-4 flex items-center justify-between">
        <div class="flex gap-x-2 py-1 px-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
          </svg>
          <span class="text-sm font-medium">VietNam</span>
        </div>

        <div class="flex gap-x-8">
          <a href="index.php" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Home</a>
          <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">About</span>
          <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Services</span>
          <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Contact </span>
        </div>

        <div class=""></div>
      </div>
    </div>
  </div>

  <!-- End header -->


  <!-- main -->
<div class="mt-[70px] mb-4">
  <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
    <swiper-slide><img src="https://pos.nvncdn.com/b5a043-19330/art/20210401_RRhGMiO45aFfqXXlU1HaKVxT.png" alt=""></swiper-slide>
    <swiper-slide><img src="https://file.hstatic.net/1000096703/file/web.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="https://file.hstatic.net/1000369857/collection/1919_730_polo_3da01ded33614497a1884a3b99489661.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="https://file.hstatic.net/1000096703/file/aothun_29b5a012566b4a77a8935881112303d2.jpg" alt=""></swiper-slide>

  </swiper-container>
  </div>





  <!-- component -->