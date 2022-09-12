<?php
include('mynav.php');
?>
<div style="padding-top:45px;">

</div>
<div class="container p-2 m-auto ">
    <div class="row pr-3 pt-4 m-auto" >
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Available stock","Register stock","Add users","Report");
        $colors=array("primary","danger","warning","primary");
        $imgs=array("user1.png","user2.png","user1.png","user2.png");
        while($i<4):
        ?>
        <!-- section -->
        <div class="col-md-3 p-5 border">
            <img src="<?php echo $imgs[$i]?>" class="img-responsive" width="70%" alt=""  style="padding-left:38px;">
        <br>
        <span class="d-md-none d-md-block"style="padding-left:30px;">Available stock</span>
        <div  class="d-none d-sm-block " style="margin-left:20px"> 
        <button class ="btn btn-<?php echo $colors[$i]?>"><span><?php echo $items[$i]?></span></button>
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