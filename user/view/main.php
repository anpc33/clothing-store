


<div class="pt-32  bg-white">
<h1 class="text-center text-2xl font-bold text-gray-800">All Products</h1>
</div>

<!-- Tab Menu -->
<div class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center   bg-white text-gray-800">
<?php
    foreach ($listdm as $rowcate) {
      extract($rowcate);
      echo '<a rel="noopener noreferrer" href="index.php?act=productshow&CategoryID=' . $CategoryID . '" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 text-gray-600">';
      echo '    <span class="font-bold">' . $CategoryName . '</span>';
      echo '</a>';
  }
        ?>
</div>

<section class="py-10 bg-gray-100">
  <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
  <?php
          $count = 0;
          foreach ($newproducts as $spnew) {
            extract($spnew);
            $hinh = $img_path . $Products_img;
            $count++;
            if ($count % 4 == 0) {
              // echo '<div class="flex flex-col items-center justify-center w-full max-w-lg mx-auto">';
            }
          
          
          ?>
    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
      <a href="index.php?act=detal&Products_id=<?=$Products_id ?>" >

        <div class="relative flex items-end overflow-hidden rounded-xl">
          <img src="<?= $hinh ?>" alt="Hotel Photo" />
          <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
          </div>
        </div>

        <div class="mt-1 p-2">
          <h2 class="text-slate-700"><?= $Products_name ?></h2>
          <p class="mt-1 text-sm text-slate-400">Đã bán :<?= $Products_Sold ?></p>

          <div class="mt-3 flex items-end justify-between">
              <p class="text-lg font-bold text-blue-500">$<?= $Products_price?></p>

            <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>
              <form action="index.php?act=cart&Products_id=<?= $Products_id ?>"  method="post">
                <input type="hidden" name="Products_price" id="" value="<?= $Products_price?>">
                <input type="hidden" name="Products_Sold" id="" value="<?= $Products_Sold?>">
                <input type="hidden" name="Products_name" id="" value="<?= $Products_name?>">
                <input type="hidden" name="Products_id" id="" value="<?= $Products_id?>">
                <input type="hidden" name="hinh" id="" value="<?= $hinh?>">
                <input type="submit" name="cart"  id="" value="Add to cart">
              </form>
             
            </div>
          </div>
        </div>
      </a>
    </article>
<?php }?>

  
<div class="text-center flex justify-center mt-5 gap-4 pb-5 ">
  <div class=" text-sm font-bold rounded-lg bg-blue-500 px-4 "><a href="index.php" class="text-white no-underline">Xem Thêm</a></div>
      <div class=" text-sm font-bold rounded-lg bg-blue-500 px-4 "><a href="index.php?act=topsanpham" class="text-white no-underline">Top Sản Phẩm Bán Chạy</a></div>
    </div>


</section>


<section>


<!-- component -->
<div class="fixed bottom-0 right-0 mb-4 mr-4">
        <button id="open-chat" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Hỗ Trợ Khách Hàng
        </button>
    </div>
    <div id="chat-container" class="hidden fixed bottom-16 right-4 w-96">
        <div class="bg-white shadow-md rounded-lg max-w-lg w-full">
            <div class="p-4 border-b bg-blue-500 text-white rounded-t-lg flex justify-between items-center">
                <p class="text-lg font-semibold">Admin Bot</p>
                <button id="close-chat" class="text-gray-300 hover:text-gray-400 focus:outline-none focus:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="chatbox" class="p-4 h-80 overflow-y-auto">
              <!-- Chat messages will be displayed here -->
              <div class="mb-2 text-right">
                <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">Hi</p>
              </div>
              <div class="mb-2">
                <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">Hi how can i help you</p>
              </div>
              <div class="mb-2 text-right">
                <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">this example of chat</p>
              </div>
              <div class="mb-2">
                <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
              </div>
              <div class="mb-2 text-right">
                <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">Em ăn cơm chưa ?</p>
              </div>
              <div class="mb-2">
                <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">Xin chào liên hệ 0388927126 để được hỗ trợ ..</p>
              </div>
            </div>
            <div class="p-4 border-t flex">
                <input id="user-input" type="text" placeholder="Type a message" class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button id="send-button" class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600 transition duration-300">Send</button>
            </div>
        </div>
    </div>
</section>