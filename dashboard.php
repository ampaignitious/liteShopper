<?php
include('mynav.php');
?>
<?php 
if(!($_SESSION['USER_ID'])){
    header("location:login.php");
    die();
}
?>
<div style="padding-top:40px;">
</div>
<div class="container p-1 m-auto ">
<?php
include('dashborditem.php');
?>
<p style="margin-top:20px; margin-bottom:-20px; font-size:22px;" class="d-md-none d-md-block"><span style="color:red; font-weight:bold; padding-bottom:">Admin dashboard </span><span style="padding-left:85px;"><?php 
date_default_timezone_set('Asia/Kolkata');
echo $runningTime =date('h:i:s');
?></span>
</p>
<?php
// the attendant dashboard display
if(isset($_GET['attendant'])){ 
?>
<div class="row pr-3 pt-3 m-auto" >
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Stock","Sales","View reports","System users");
        $links=array("stock.php","dashboard1.php","dashboard1.php","dashboard1.php");
        $imgs=array("img6.png","img7.png","img4.png","user2.png");
        while($i<4):
        ?>
        <!-- section -->
        <div class="col-md-3 p-5 border">
        <a href="<?php echo $links[$i]?>?msg=<?php echo $items[$i]?>"><img src="<?php echo $imgs[$i]?>" class="img-responsive" width="70%" alt=""  style="padding-left:38px;"></a>
        <br>
        <span class="d-md-none d-md-block"style="padding-left:90px;"><?php echo $items[$i]?></span>
        <div  class="d-none d-sm-block " style="text-align:center;">
        <?php if($i==2){?> 
            <span style="padding-left:12px; font-weight:bold;"><?php echo $items[$i]?></span>
        <?php  
        }
        elseif($i==3){?>
        <span style="padding-left:14px; font-weight:bold;"><?php echo $items[$i]?></span>
        <?php }else{?>
        <span style="font-weight:bold;"><?php echo $items[$i]?></span>
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
<!-- // end the attendant dashboard display -->
<?php
}else{
?>
<!-- first row -->
<div class="row pr-3 pt-3 m-auto" >
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Stock","Sales","View reports","System users");
        $links=array("stock.php","dashboard1.php","dashboard1.php","dashboard1.php");
        $imgs=array("img6.png","img7.png","img4.png","user2.png");
        while($i<4):
        ?>
        <!-- section -->
        <div class="col-md-3 p-5 border">
        <a href="<?php echo $links[$i]?>?msg=<?php echo $items[$i]?>"><img src="<?php echo $imgs[$i]?>" class="img-responsive" width="70%" alt=""  style="padding-left:38px;"></a>
        <br>
        <span class="d-md-none d-md-block"style="padding-left:90px;"><?php echo $items[$i]?></span>
        <div  class="d-none d-sm-block " style="text-align:center;">
        <?php if($i==2){?> 
            <span style="padding-left:12px; font-weight:bold;"><?php echo $items[$i]?></span>
        <?php  
        }
        elseif($i==3){?>
        <span style="padding-left:14px; font-weight:bold;"><?php echo $items[$i]?></span>
        <?php }else{?>
        <span style="font-weight:bold;"><?php echo $items[$i]?></span>
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
<!--second row -->
<div class="row pr-3 pt-4 m-auto" >
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Promotions","Logout","Stock","Reports");
        $links=array("stock.php","reports.php","users.php");
        $imgs=array("img5.png","img8.png","user1.png","user2.png");
        while($i<4):
        ?>
        <!-- section -->
        <div class="col-md-3 p-5 border">
        <a href="dashboard1.php?msg=<?php echo $items[$i]?>"><img src="<?php echo $imgs[$i]?>" class="img-responsive" width="70%" alt=""  style="padding-left:38px;"></a>
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
</div>
<!-- end of second row -->
</div>
<?php }?>