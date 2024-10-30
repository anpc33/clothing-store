<?php session_start();

include_once 'D:/Workspace/yame_shop/Model/pdo.php';
include_once 'D:/Workspace/yame_shop/dao/comment.php';
if (isset($_GET['idpro'])) {
    $idpro =  $_GET['idpro'];
}

if (isset($_POST['guibl'])) {
    $Feedback_id = null;
    $Products_id = $_POST['idpro'];
    $User_id = $_SESSION['user']['User_id'];
    $Reviews = $_POST['Reviews'];
    $Star = $_POST['Star'];
    $CreatedAt = date('H:i:s  d/m/Y');
    $current_date = date('Y-m-d'); // Định dạng YYYY-MM-DD
    comment_insert($Feedback_id, $Products_id, $User_id, $Star, $Reviews, $current_date);
    $User_name = $_SESSION['user']['User_name'];
}
$listbl = comment_select_all();
$Html_cm = "";

foreach ($listbl as $rowcm) {
    extract($rowcm);
    $Html_cm .= '<div class="flex justify-center relative top-1/3">
<!-- This is an example component -->
<div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg">
    <div class="relative flex gap-4">
       
        <div class="flex flex-col w-full">
            <div class="flex flex-row justify-between">
                <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">'. $_SESSION['user']['User_name'].'</p>
                <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash">Đánh giá : '.$Star.' sao</i></a>
            </div>
            <p class="text-gray-400 text-sm">'.$CreatedAt.'</p>
        </div>
    </div>
    <p class="-mt-4 text-gray-500">'.$Reviews.'</p>
</div>
</div><hr> <br>';
}
?>


<h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Comment</h2>
<?php
if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {

?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="comment-form">
  <input type="hidden" name="idpro" id="" value="<?= $idpro ?>">
  <div class="mb-6">
    <label for="Star" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Đánh giá : </label>
    <select class="form-control" name="Star" id="Star" required>
      <option value="">5 sao </option>
      <option value="1">1 sao</option>
      <option value="2">2 sao</option>
      <option value="3">3 sao</option>
      <option value="4">4 sao</option>
      <option value="5">5 sao</option>
    </select>
  </div>
  <textarea name="Reviews" cols="100%" rows="10" placeholder='Type Your Comment' id="" class="rounded border border-gray-400 p-2"></textarea>
  <div class="flex justify-end">
    <input type='submit' name="guibl" class="text-white font-medium py-2 px-4 bg-blue-500 border border-gray-400 rounded-lg tracking-wide hover:bg-blue-600" value='Post Comment'>
  </div>
</form>

<?php } else {
    $_SESSION['page'] = "detal";
    $_SESSION['Products_id'] =  $_GET['Products_id'];
    echo "<a href='../../index.php?act=login'  target='_parent'  >Login để bình luận ?</a>";
}

?>
<br>
<div class="listcm">
    <?php echo $Html_cm  ?>
    
</div>


<!-- component -->
