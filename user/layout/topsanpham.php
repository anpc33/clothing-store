<div class="w-full h-[1000px] flex justify-center ">
  <div class="w-[1300px] bg-white flex flex-col gap-5 ">
    <div class="text-center p-2 lkjhg "><p class="text-sm font-bold"> TOP SẢN PHẨM BÁN CHẠY </p></div>

    <div class="werty">


    <?php 
    foreach ($listdm as $rowcate ){
        extract($rowcate);
        echo '<div class="text-base	 font-bold"><a href="#">'.$CategoryName.'</a></div>';
    }
    
    
    ?>

    </div>


    <div class="ct92X flex flex-wrap gap-3">
  <?php
    $count = 0;
    foreach ($topproducts as $toppro) {
      extract($toppro);
      $hinh = $img_path . $Products_img;
      echo '<div class="Ybkix flex flex-col w-[300px] h-[377px] ">';
      echo '  <div class="Wrz3N">';
      echo '    <img class="" src="' . $hinh . '" alt="">';
      echo '    <div class=" flex justify-center text-center">';
      echo '  <button class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
              </svg>
              <span class="mx-1">Add to cart</span>
            </button>';
            
      echo '    </div>';
      echo '  </div>';
      echo '  <div class="XKsX8 h-[82px] w-[300px] flex flex-col gap-2 justify-center text-center">';
      echo '    <div class="text-sm"><a href="index.php?act=detal">' . $Products_name . '</a></div>';
      echo ' <div class=" flex justify-center text-center gap-5">';
      echo '    <div class="text-sm font-bold">' . $Products_price . '$ </div>';
      echo '    <div class="text-sm font-bold"> Đã bán : ' . $Products_Sold . '</div>';
      echo '  </div>';
  
      echo '  </div>';
      echo '</div>';
      $count++;
      if ($count % 4 == 0) {
        echo '</div><div class="ct92X flex flex-wrap gap-3">';
      }
    }
  ?>
</div>


    
    <div class="text-center flex justify-center mt-5 gap-4">
    <div class=" text-sm font-bold ofjl3"><a href="#"  class="text-white no-underline ">Xem Thêm</a></div>
    <div class=" text-sm font-bold bg-black rounded "><a href="index.php" class="text-white no-underline">Back</a></div>
    </div>
  </div>
</div>
<!-- End main -->