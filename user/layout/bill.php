<!DOCTYPE html>
<html>
<head>
  <title>Trang thông tin đặt hàng</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body>
  <div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-4">Thông tin đơn hàng</h1>

   
<?php  

if (isset($_SESSION['user'])){
  $Name = $_SESSION['user']['User_name'];
  $Email = $_SESSION['user']['Email'];
}else{
  $Name ="";
  $Email ="";
}


?>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h3 class="text-xl mb-2">Thông tin khách hàng</h3>
        <form action="index.php?act=billcomfrim" method="post" enctype="multipart/form-data">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Họ và tên
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="Name" type="text" value="<?= $Name ?>">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
           Email
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="Email" type="text" value="<?= $Email ?>">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
           Địa chỉ 
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="diachi" type="text" placeholder="Nhập địa chỉ" >
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
           Phone
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="tel" type="text" placeholder="Nhập sdt" >
        </div>




  
        </div>

      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h3 class="text-xl mb-2">Thông tin đơn hàng</h3>
        <table class="w-full">
          <thead>
            <tr>
              <th class="text-left">Sản phẩm</th>
              <th class="text-right">Số lượng</th>
              <th class="text-right">Đơn giá</th>
              <th class="text-right">Thành tiền</th>
            </tr>
          </thead>
          <tbody>

          <?php
          $tong = 0;
          $i = 0;
// Kiểm tra xem giỏ hàng có tồn tại không
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Lấy dữ liệu từ giỏ hàng
    $cart = $_SESSION['cart'];
    // Hiển thị dữ liệu giỏ hàng
    foreach ($cart as $item) {
      $tt = $item[5] * $item[0];
             $tong+=$tt;
       
?>

            <tr>
              <td><?= $item[2] ?></td>
              <td class="text-right"><?= $item[5] ?></td>
              <td class="text-right"><?= $item[0] ?>$</td>
              <td class="text-right"><?= $tt ?></td>
            </tr>
            <?php 
                }
              } else {
                  echo "Giỏ hàng trống";
              }
            
            
            ?>
          </tbody>
        </table>
        <p class="text-right font-bold">Tổng : <?= $tong ?>$</p>
      </div>
    </div>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
  <h3 class="text-xl mb-2">Phương thức thanh toán</h3>
  <div class="space-y-4">
    <div class="flex items-center">
      <input id="payment-option-1" type="radio"  name="payment" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="payment-option-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Thanh toán khi nhận hàng</label>
    </div>
    <div class="flex items-center">
      <input id="payment-option-2" type="radio" name="payment" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="payment-option-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Thanh toán bằng thẻ</label>
    </div>
    <div class="flex items-center">
      <input id="payment-option-3" type="radio" name="payment" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="payment-option-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chuyển khoản ngân hàng</label>
    </div>
  </div>
</div>



    <input name="yesbill" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Hoàn tất đơn hàng
    </input>
    </form>
  </div>
</body>
</html>
