<!-- component -->
<!-- Create by joker banny -->
<div class="h-screen bg-indigo-100 flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3">

		<form class="bg-white p-10 rounded-lg shadow-lg min-w-full" method="post" action="index.php?act=register" >
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Formregister</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="" />
      </div>
				<div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="an51578@email.com" />
      </div>
					<div>
						<label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
						<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="password" id="password" placeholder="" />
      </div>
						<div>
							<label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password</label>
							<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="confirm" id="confirm" placeholder="" />
      </div>
							<input type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans cursor-pointer" name="dangky" value="Register"/>
							<input type="reset" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans cursor-pointer"  value="Reset"/>
							<br>
							<div class="mt-5">	</div>
							  
							<a href="index.php?act=login" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">Login</a>
		</form>
<h1 style="color: red;">
<?php 

if(isset($Notification) && ($Notification!="")){

	echo "<script>window.location.href = 'index.php?act=login';</script>";
	
}else{
	$Notification = "Error";
}


?>
</h1>
	</div>
</div>