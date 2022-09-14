<?php
include('database.php');
?>
<!-- section for registering users -->
<?php
if(isset($_POST['registeruser'])){
    $firstname= mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname =mysqli_real_escape_string($conn, $_POST['lastname']);
    $username =mysqli_real_escape_string($conn, $_POST['username']);
    $useremail=mysqli_real_escape_string($conn,$_POST['useremail']);
    $usertype=mysqli_real_escape_string($conn, $_POST['usertype']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $password2=mysqli_real_escape_string($conn, $_POST['password2']);
    $checkuser=mysqli_query($conn, "select * from users where username='$username' and useremail='$useremail'");
    $userexit =mysqli_num_rows($checkuser);
    if($password!=$password2){
        header("location:register.php?errormsg='passwords didnt match try again'&& firstname=$firstname&&lastname=$lastname&&username=$username&&useremail=$useremail");
    }elseif($userexit>0){
        header("location:register.php?msg=Choose another username, $username already taken..");
    }else{
        mysqli_query($conn, "insert into users(firstname,lastname,username,useremail,usertype,password) values('$firstname','$lastname','$username','$useremail','$usertype','$password')");
        header("location:register.php?msg='User registered successfully'");
    }
}
?>
<!-- end for the section for registering users -->
<!-- section for deleting a user -->