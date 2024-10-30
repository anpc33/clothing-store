


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
          foreach ($Catecute as $spnew) {
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
              <a href="#" class="text-sm">Add to cart</a>
            </div>
          </div>
        </div>
      </a>
    </article>
<?php }?>

  



</section>