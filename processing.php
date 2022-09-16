<?php
include('database.php');
?>
<!-- section for logining -->
<?php
if(isset($_POST['loginuser'])){
$username=$_POST['username'];
$userpassword=$_POST['password'];
$database_checker = mysqli_query($conn, "select * from users where username='$username' and password='$userpassword'");
$user_checker=mysqli_num_rows($database_checker);
$user_details=mysqli_fetch_assoc( $database_checker);
if($user_checker==1){
if(($username==$user_details['username']) && ($userpassword == $user_details['password']))
if($user_details['usertype']=='admin'){
    header("location:dashboard.php?message=$username");
}

}else{
    header("location:login.php?message=incorrect details, try again..");
}
}
?>
<!-- end of section for loging -->
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
<?php
if(isset($_GET['deleteuser'])){
    $userid=$_GET['userid'];
    mysqli_query($conn, "delete from users where id=$userid");
    header("location:dashboard1.php?usersection=Available users");
}
?>
<!-- end section for deleting a user -->


<!-- section for updating users details -->
<?php
if(isset($_POST['updateuser'])){
    $firstname= mysqli_real_escape_string($conn, $_POST['firstname']);
    $userid =mysqli_real_escape_string($conn, $_POST['userid']);
    $userdefaultname =mysqli_real_escape_string($conn, $_POST['defaultname']);
    $userdefaultemail =mysqli_real_escape_string($conn, $_POST['defaultemail']);
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
    }elseif(($userexit>0) && ($userdefaultname!=$username)){
        header("location:register.php?errormsg='Choose another username, $username already taken..'&& firstname=$firstname&&lastname=$lastname&&username=$username&&useremail=$useremail");
    }else{

        mysqli_query($conn, "update users set firstname='$firstname', lastname='$lastname', username='$username', useremail='$useremail',usertype='$usertype',password='$password' where id = $userid");
        header("location:register.php?msg='User details updated successfully'");
    }
}
?>
<!-- end of section for updating users details -->