<?php
include('mynav.php');
?>
<div class="container">
<div class="row m-auto pt-5 mt-5">
     <div class="col-md-5 ">
        <img src="user1.png" class="img-responsive" width="50%" alt="">

     </div>
    <div class="col-md-7">
        <h3 class="text-collapse"><small>Register a user</small></h3>
       <form action="homepage.php" action="get">
        <label for="firstname" class="form-label">First-name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter first name"required>
        <label for="firstname" class="form-label">Last-name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="enter second name"required>
        <label for="username" class="form-label">User-name:</label>
        <input type="text" class="form-control" id="username" name="username"  placeholder="enter  username"required>
        <label for="user-email" class="form-label">User-email:</label>
        <input type="email" class="form-control" id="useremail" name="useremail" placeholder="enter a valid email"required>
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Create Password"required>
        <label for="password2" class="form-label">Confirm password:</label>
        <input type="paassword2" class="form-control" id="password2" name="password2" placeholder="Re-enter the password"required>
        <br>
        <button class="btn btn-sm bg-danger text-white p-2" type="submit">Login to continue</a></button>
       </form>
    </div>
</div>
</div>