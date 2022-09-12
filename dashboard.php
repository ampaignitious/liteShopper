<?php
include('mynav.php');
?>
<div style="padding-top:45px;">
</div>
<div class="container p-2 m-auto ">
<p style="margin-top:20px; margin-bottom:-20px; font-size:25px;"><b>User</b> welcome to the <span class="text-danger">Admin dashboard</span></p>
<!-- first row -->
<div class="row pr-3 pt-4 m-auto" >
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Available stock","Register stock","Reports","Add users");
        $links=array("stock.php","reports.php","users.php");
        $imgs=array("user1.png","user2.png","user1.png","user2.png");
        while($i<4):
        ?>
        <!-- section -->
        <div class="col-md-3 p-5 border">
        <a href="dashboard1.php?msg=<?php echo $items[$i]?>"><img src="<?php echo $imgs[$i]?>" class="img-responsive" width="70%" alt=""  style="padding-left:38px;"></a>
        <br>
        <span class="d-md-none d-md-block"style="padding-left:30px;">Available stock</span>
        <div  class="d-none d-sm-block " style="margin-left:20px ">
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
<!--second row -->
<div class="row pr-3 pt-4 m-auto" >
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Available stock","Register stock","Reports","Add users");
        $links=array("stock.php","reports.php","users.php");
        $imgs=array("user1.png","user2.png","user1.png","user2.png");
        while($i<4):
        ?>
        <!-- section -->
        <div class="col-md-3 p-5 border">
        <a href="dashboard.php?msg=<?php echo $items[$i]?>"><img src="<?php echo $imgs[$i]?>" class="img-responsive" width="70%" alt=""  style="padding-left:38px;"></a>
        <br>
        <span class="d-md-none d-md-block"style="padding-left:30px;">Available stock</span>
        <div  class="d-none d-sm-block " style="margin-left:20px ">
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
