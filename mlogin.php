<?php
 include 'header.php';

?>

<div class="jumbotron">
	<h1>Hi Hotel Manager,<br> Welcome to <span style="color:green;">The local Taphouse </span></h1>
	<p class="pt-3" style="font-size: 21px;">Kindly LOGIN to continue.</p>
</div>
   

   <div class="container">
   	<div class="row">
   	<div class="login col-md-6">

      
     <?php
       if (isset($_GET['login'])) {
         $logincheck = $_GET['login'];
         if ($logincheck == "error") {
          echo "<p class='text-center alert alert-danger'>Kindly Check Your Username & Password</p>";
        }elseif ($logincheck == "empty") {
          echo "<p class='text-center alert alert-danger'>You'll Need To Fill Up All The Details Inorder to Login</p>";
        }elseif ($logincheck == "disabled") {
          echo "<p class='text-center alert alert-danger'>You'll Need To Get Approval From Admin Inorder To Login</p>";
        }
       }

       if (isset($_GET['msignup'])) {
         $check = $_GET['msignup'];
         if ($check == "success"){
          echo "<p class='text-center alert alert-success'>Account Created, Please wait for Admin Approval inorder to Login</p>";
        }           
       }
     ?>
   	  <form method="POST" action="inc/mlogin.inc.php" class="pb-5">
   	  	<legend style="border: 1px solid black; border-radius: 6px; color: black; font-size: 20px; font-weight: 500; margin: 0 auto;" class="pl-3 pr-3 pb-3 pt-1" >Login
      	<div class="form-group">
      	 <label>Username</label>
      		<input type="text" name="muname" autocomplete="off" placeholder="username" class="form-control">
      	</div>
      	<div class="form-group">
      	 <label>Password</label>
      	    <input type="password" name="mpwd" autocomplete="off" placeholder="password" class="form-control">
      	</div>
      		<button class="btn btn-default btn-md" name="submit">Login</button>
           <span class="pl-2 pr-2" style="font-weight: 700; font-size: 15px;">Or</span>
      		<a class="btn btn-default btn-md" href="msignup.php"></i>Register</a>
      	</legend>
      </form>
     </div>
     </div>
    </div>


<?php
 include 'footer.php';
?>