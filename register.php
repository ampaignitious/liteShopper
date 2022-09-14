<?php
include('mynav.php');
$firstname='';
$lastname ='';
$username ='';
$useremail='';
?>
<div class="container">
<div class="row m-auto pt-5 mt-4">
     <div class="col-md-5 ">
        <img src="user1.png" class="d-none d-sm-block img-fluid" width="50%" alt="">
        <?php
if(isset($_GET['errormsg'])){
   $msg=$_GET['errormsg'];
   $firstname=$_GET['firstname'];
   $lastname =$_GET['lastname'];
   $username =$_GET['username'];
   $useremail=$_GET['useremail'];
?>
 <p style="color:red; font-weight:bold;"><?php echo $msg?></p>
<?php }?>
<!-- message for userregisteration -->
<?php
if(isset($_GET['msg'])){
   $msgsc=$_GET['msg'];
?>
<p style="color:red; font-weight:bold;"><?php echo $msgsc?></p>
<?php }?>
<!-- erromessage for mismatching passwords -->
     </div>
    <div class="col-md-7">
        <h3 class="text-collapse"><small>Register a user</small></h3>
       <form action="processing.php" method="POST">
        <label for="firstname" class="form-label">First-name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter first name"required value="<?php echo $firstname?>">
        <label for="firstname" class="form-label">Last-name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="enter second name"required value="<?php echo $lastname?>">
        <label for="username" class="form-label">User-name:</label>
        <input type="text" class="form-control" id="username" name="username"  placeholder="enter  username"required value="<?php echo $username?>">
        <label for="user-email" class="form-label">User-email:</label>
        <input type="email" class="form-control" id="useremail" name="useremail" placeholder="enter a valid email"required value="<?php echo $useremail?>">
        <label for="usertype" class="form-label">Select User type:</label>
        <select  name="usertype" class="form-select">
         <option selected>Select User type</option>
         <option value="admin">Admin</option>
         <option value="attendant">Attendant</option>
        </select>
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Create Password"required>
        <label for="password2" class="form-label">Confirm password:</label>
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Re-enter the password"required>
        <br>
        <button class="btn btn-sm bg-danger text-white pr-5" type="submit" name="registeruser">submit</button>
        <br>
       </form>
    </div>
</div>
</div>