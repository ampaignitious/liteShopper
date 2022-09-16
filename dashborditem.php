<div class="d-none d-sm-block mt-4">
<ul class="list-group list-group-horizontal">
    <li class="list-group-item flex-fill justify-content-between align-items-start">
     <p style="font-size:18px;" ><b><?php echo $_SESSION['USER_USERNAME'] ?></b> welcome to the <span class="text-danger fw-bold">Admin dashboard menu</span>
</p>
    </li>
    <li class="list-group-item flex-fill justify-content-between align-items-start">
    <p class="fw-bold">DATE:<span style="margin-left:10px;"><?php echo date("y-m-d")?></span></p>
    </li>
    <li class="list-group-item  justify-content-between align-items-start">
    <p class="fw-bold text-danger">Time:<span style="padding-left:10px;"><?php 
      date_default_timezone_set('Asia/Kolkata');
      echo $runningTime =date('h:i:s');
     ?></span></p>
    </li>
</ul>
</div>