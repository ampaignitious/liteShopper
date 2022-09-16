<?php
include('mynav1.php');
$message='';
if(isset($_GET['message'])){
$message = $_GET['message'];
}
?>
<div class="container">
<div class="row m-auto pt-5 mt-5">
     <div class="col-md-5 ">
        <img src="user1.png" class="img-responsive" width="50%" alt="">
 <p style="font-weight:bold; color:red;"><?php echo $message?></p>
     </div>
    <div class="col-md-7">
        <h3 class="text-collapse"><small>Enter valid details to continue</small></h3>
       <form action="processing.php" method="POST">
        <label for="firstname" class="form-label">Username:</label>
        <input type="text" class="form-control" id="firstname" name="username" required>
        <label for="firstname" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <br>
        <button class="btn btn-sm bg-danger text-white p-2" type="submit" name="loginuser">Login to continue</a></button>
       </form>
    </div>
</div>
</div>