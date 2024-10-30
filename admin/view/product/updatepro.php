





<?php 


if(is_array($productup)){
    extract($productup);
}

$hinh = "../upload/".$Products_img;
                    
if(is_file($hinh)){
    $load = "<img src='".$hinh."'  height='50' width='50'>";
}
else{
    $load = "Not img";
}
?>

<div class="max-w-2xl mx-auto bg-white p-16 mt-3">

<form action="index.php?act=updatepro" method="POST" enctype="multipart/form-data" >
    <div class="grid gap-6 mb-6 lg:grid-cols-2">
        <div>
            <label for="Products_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ID</label>
            <input type="number" id="Products_id"  name="Products_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $Products_id ?>"  >
        </div>

        <div>
            <label for="Products_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Products-name</label>
            <input type="text" id="Products_name" name="Products_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $Products_name ?>"  >
        </div>
        <div>
            <label for="Products_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Products-description</label>
            <input type="text" id="Products_description" name="Products_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $Products_description ?>" >
        </div>  
        <div>
            <label for="Products_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
            <input type="number" id="Products_price" name="Products_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $Products_price ?>" >
        </div>
        <div>
            <label for="Products_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
            <br>
            <select class="form-control" name="Products_category" id="" >
          <?php foreach ($cateselect as $row){?>
          <option <?= $row['CategoryID'] === $Products_category ? 'selected' : ''  ?> value="<?= $row['CategoryID'] ?>"><?= $row['CategoryName'] ?></option>
         <?php } ?>
        </select>
        </div>

        <div>
            <label for="Products_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quantity</label>
            <input type="number" id="Products_quantity" name="Products_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $Products_quantity ?>">
        </div>
    </div>

    <div class="mb-6">
        <label for="Products_img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image</label>
        <input type="file" name="Products_img" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $hinh ?>">
    </div> 

    <div class="mb-6">
        <label for="Products_sku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sku</label>
        <input type="text" id="Products_sku" name="Products_sku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"    value="<?= $Products_sku  ?>"  >
    </div> 

    <div class="mb-6">
        <label for="Products_Sold" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sold</label>
        <input type="number" id="Products_Sold" name="Products_Sold" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"     value="<?= $Products_Sold ?>" >
    </div> 

    <div class="mb-6">
        <label for="Products_brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Brand</label>
        <input type="text" id="Products_brand" name="Products_brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"    value="<?= $Products_brand ?>"  >
    </div> 

    <div class="mb-6">
        <label for="Products_Feedback" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feedback</label>
        <input type="text" id="Products_Feedback" name="Products_Feedback" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"   value="<?= $Products_Feedback ?>"  >
    </div> 

    <div class="mb-6">
        <label for="Created_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Created_at</label>
        <input type="date" id="Created_at" name="Created_at" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"    value="<?= $Created_at ?>"  >
    </div> 

    <div class="mb-6">
        <label for="Updated_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Updated_at</label>
        <input type="date" id="Updated_at" name="Updated_at" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5             dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"      value="<?= $Updated_at ?>">
    </div> 

    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300             dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>
    <input type="hidden" class="" name="Products_id" value="<?= $Products_id ?>">
    <input type="submit" name="updatepro1"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Done"/>
    <br>
   
</form>

	<p class="mt-5">These input field components is part of a larger, open-source library of Tailwind CSS components. Learn
		more by going to the official <a class="text-blue-600 hover:underline"
			href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
			Documentation</a>.
	</p>
    <br>
    <a  href="index.php?act=listproduct"  class="text-white bg-blue-700 mt-3 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="">Back</a>
</div>

<?php
    if(isset($Notification) && ($Notification !=""))  echo $Notification;
    
    ?>