<?php
include('mynav.php');
?>
<!-- beginning of system users section -->
<div class="container">
<div class="row m-auto pt-4 mt-4">
<p style="margin-top:15px; margin-bottom:4px; font-size:23px; color:red;" class=" d-none d-sm-block"><b>System Users section</b></p>
<p style="margin-top:1px; margin-bottom:-2px; font-size:20px; padding:15px; text-align:center;" class="text-danger d-md-none d-md-block"><b>System Users section</b></p>
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Add Users","Available users","Login Tracker");
        $links=array("stock.php","reports.php","users.php");
        $imgs=array("img3.png","user2.png","user1.png","user2.png");
        while($i<3):
        ?>
        <!-- section -->
        <div class="col-md-4 col-sm-12 p-5 border">
        <a href="users.php?usersection=<?php echo $items[$i]?>" style="padding-left:38px;"><img src="<?php echo $imgs[$i]?>" class="img-responsive" width="60%" alt=""  style="padding-left:38px;"></a>
        <br>
        <span class="d-md-none d-md-block"style="padding-left:90px;"><?php echo $items[$i]?></span>
        <div  class="d-none d-sm-block " style="text-align:center; ">
        <?php if($i==2){?> 
            <span style="padding-left:28px;"><?php echo $items[$i]?></span>
        <?php  
        }
        elseif($i==3){?>
        <span style="padding-left:28px;"><?php echo $items[$i]?></span>
        <?php }else{?>
        <span><?php echo $items[$i]?></span>
        <?php }?>
        </div>
        </div>
        <!-- endsection -->
       <?php
       $i=$i+1;
       endwhile
       ?>
       <!-- the dashboard section -->
    </div>
<!-- end of first row -->
</div>
</div>
<!-- end of system users section -->



<?php
$usersection='';
if(isset($_GET['usersection'])){
    $usersection = $_GET['usersection'];
    echo $usersection;?>
<?php }
if($usersection=="Add Users"){
header('location:register.php');
 }elseif($usersection=="Available users"){
?>
<div class="container">
<div class="row pt-4 mt-4 d-none d-sm-block">
<!-- getting the total number of attendents in the database -->
<?php
            $totalattendants=mysqli_query($conn, "select count(usertype) as total from users where usertype='attendant'");
            $no_of_attendants = mysqli_fetch_assoc($totalattendants);
?>
<p style="font-weight:bold; color:red;">Total Attendants registered:<span style="color:black; padding-left:15px;"><?php echo $no_of_attendants['total'];?> users</span></p>
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <th >#</th>
                <th >First-name</th>
                <th >Last-name</th>
                <th >Username</th>
                <th >User-type</th>
                <th >User-email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mysql=mysqli_query($conn, "select * from users");
            $available_users = mysqli_num_rows($mysql);
            $available_users =$available_users +1;
            $i=1;
            while($i<$available_users):
            while($users=$mysql->fetch_assoc()):
            ?>
            <tr>
                <th><?php echo $i?></th>
                <td><?php echo $users['firstname']?></td>
                <td><?php echo $users['lastname']?></td>
                <td><?php echo $users['username']?></td>
                <td><?php echo $users['usertype']?></td>
                <td><?php echo $users['useremail']?></td>
                <td><button class="btn btn-primary"><a href="register.php?edituser=true&&userid=<?php echo $users['id']?>" style="text-decoration:none; color:white;">Edit-user</button></td>
                <td><button class="btn btn-danger"><a href="processing.php?deleteuser='deleting'&&userid=<?php echo $users['id']?>" style="text-decoration:none; color:white;">Delete-user</a></button></td>
            </tr>
            <?php 
            $i=$i+1;
            endwhile?>
            <?php
            endwhile?>
        </tbody>
    </table>
    <?php if(isset($_GET['deletesucces'])){?>
        <script>
            alert('User successfully deleted...');
        </script>
    <?php }?>
 </div>
 <!-- available user display at small screens -->
 <div class="row m-auto pt-4 mt-4 d-md-none d-md-block">
<?php
            $totalattendants=mysqli_query($conn, "select count(usertype) as total from users where usertype='attendant'");
            $no_of_attendants = mysqli_fetch_assoc($totalattendants);
?>
<p style="font-weight:bold; color:red;">Total Attendants registered:<span style="color:black; padding-left:15px;"><?php echo $no_of_attendants['total'];?> users</span></p>
    <table class="table table-striped table-sm">
        <thead class="table-light">
            <tr>
                <th >#</th>
                <th >Username</th>
                <th >User-type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mysql=mysqli_query($conn, "select * from users");
            $available_users = mysqli_num_rows($mysql);
            $available_users =$available_users +1;
            $i=1;
            while($i<$available_users):
            while($users=$mysql->fetch_assoc()):
            ?>
            <tr>
                <th><?php echo $i?></th>
                <td><?php echo $users['username']?></td>
                <td><?php echo $users['usertype']?></td>
                <td><button class="btn btn-sm btn-primary"><a href="register.php?edituser=true&&userid=<?php echo $users['id']?>" style="text-decoration:none; color:white;">Edit</button></td>
                <td><button class="btn btn-sm btn-danger"><a href="processing.php?deleteuser='deleting'&&userid='<?php $users['id']?>'" style="text-decoration:none; color:white;">Delete</a></button></td>
            </tr>
            <?php 
            $i=$i+1;
            endwhile?>
            <?php
            endwhile?>
        </tbody>
    </table>
 </div>
 <!-- end of available user diaplay on small screen -->
 </div> 
<?php }?>
<!-- end of section Add user item click -->
