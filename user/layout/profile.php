<!-- This is an example component -->

<div class="h-full">

  <div class="border-b-2 block md:flex">
    <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
      <form action="index.php?act=profile" method="post" enctype="multipart/form-data">
        <div class="flex justify-between">
          <span class="text-xl font-semibold block">Profile</span>
          <input type="submit" name="capnhatpl" class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800" value="Update" />
        </div>

        <span class="text-gray-600">This information is secret so be careful</span>
        <div class="w-full p-8 mx-2 flex justify-center">
          <img id="showImage" class="max-w-xs h-32 w-32 items-center border" src="https://i.imgur.com/Egv10oM.jpeg" alt="">
        </div>
    </div>

    <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
      <?php
      if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
      ?>
        <div class="rounded  shadow p-6">
          <div class="pb-6">
            <label for="name" class="font-semibold text-gray-700 block pb-1">UserName</label>
            <div class="flex">
              <input id="username" class="border-1  rounded-r px-4 py-2 w-full" type="text" name="User_name" value="<?= $User_name ?>" />
            </div>
          </div>
          <div class="pb-4">
            <label for="about" class="font-semibold text-gray-700 block pb-1">Email</label>
            <input id="email" class="border-1  rounded-r px-4 py-2 w-full" type="text" name="Email" value="<?= $Email ?>" />
            <label for="about" class="font-semibold text-gray-700 block pb-1">Password</label>
              <input type="password" id="password-field-<?= $User_id ?>"class="border-1  rounded-r px-4 py-2 w-full" value="<?= $Password ?> " disabled>
              <br>
            <a href="index.php?act=forgotpass" class="text-blue-600	">         Forgot your password?</a>
            <input type="hidden" class="" name="User_id" value="<?= $User_id ?>">
          </div>
        </div>
      <?php } ?>
    </div>
    </form>
  </div>

</div>