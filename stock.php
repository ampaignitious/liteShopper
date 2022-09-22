<?php
include('mynav.php');
?>
<?php
$prdtname='';
$buyingprice='';
$sellingprice='';
$quantity='';
$enteredon='';
$regmsg='';
$returnmessage='';
?>
<?php 
if(!($_SESSION['USER_ID'])){
    header("location:login.php");
    die();
}
?>
<?php
$usersection='';
$msg='';
if(isset($_GET['msg'])){
$msg =$_GET['msg'];
}
if(isset($_GET['returnmessage'])){
    $returnmessage=$_GET['returnmessage'];
if($returnmessage!='Product registered successfully'){
$details =mysqli_query($conn,"select * from stock where id ='$returnmessage'");
$return_details = mysqli_fetch_assoc($details);
$return_details_no = mysqli_num_rows($details);
if($return_details_no > 0){
    $prdtname=$return_details['productname'];
    $buyingprice=$return_details['buyingprice'];
    $sellingprice=$return_details['sellingprice'];
    $quantity=$return_details['quantity'];
    $enteredon=$return_details['enteredon'];
    $returnmessage ="Product name, $prdtname already exits.....";
}
}else{
    
}
}
?>
<?php if($msg=="Stock" ){?>
    
<!-- beginning of stocksection -->
<div style="padding-top:40px;">
</div>
<div class="container">
<?php 
include('dashborditem.php');
 ?>
<div class="row m-auto pt-1 mt-0">
<p style="margin-top:8x; margin-bottom:4px; font-size:20px; color:red;" class=" d-none d-sm-block"><b>Stock section</b></p>
<p style="margin-top:1px; margin-bottom:-2px; font-size:20px; padding:15px; text-align:center;" class="text-danger d-md-none d-md-block"><b>System Users section</b></p>
        <!-- the dashboard section -->
        <?php 
        $i=0;
        $items = array("Available stock","Register stock","Login Tracker");
        $links=array("stock.php","stock.php","users.php");
        $imgs=array("img5.png","img3.png","user1.png","user2.png");
        while($i<3):
        ?>
        <!-- section -->
        <div class="col-md-4 col-sm-12 p-5 border">
        <a href="stock.php?msg=<?php echo $items[$i]?>" style="padding-left:38px;"><img src="<?php echo $imgs[$i]?>" class="img-responsive" width="60%" alt=""  style="padding-left:38px;"></a>
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
<!-- end of stock section dashboard-->

<!-- start of available stock -->
<?php }elseif($msg=="Available stock"){?>
<div class="container ">
<div class="row pt-5 mt-5 d-none d-sm-block">
<p class="text-danger fw-bold" style="font-size:20px;">Available stock </p>
<!-- getting the products in the database -->
    <table class="table table-striped table-sm">
        <thead class="table-light">
            <tr>
                <th >#</th>
                <th >Product-name</th>
                <th >Buying-price</th>
                <th >Selling-price</th>
                <th >Measurement-type</th>
                <th >Quanity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mysql=mysqli_query($conn, "select * from stock");
            $available_products = mysqli_num_rows($mysql);
            $i=1;
            while($i<$available_products):
            while($products=$mysql->fetch_assoc()):
            ?>
            <tr>
                <th><?php echo $i?></th>
                <td><?php echo $products['productname']?></td>
                <td><?php echo $products['buyingprice']?></td>
                <td><?php echo $products['sellingprice']?></td>
                <td><?php echo $products['measurementtype']?></td>
                <td><?php echo $products['quantity']?></td>
                <td><button class="btn btn-sm btn-primary"><a href="stock.php?edituser=true&&userid=<?php echo $products['id']?>" style="text-decoration:none; color:white;">Edit</button></td>
                <td><button class="btn btn-sm btn-danger"><a href="processing.php?deleteproduct='<?php $products['id']?>'" style="text-decoration:none; color:white;">Delete</a></button></td>
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
<!-- end of section Add user item click -->


 <!-- available user display at small screens -->
 <div class="row m-auto pt-5 mt-4 d-md-none d-md-block">
 <p class="text-danger fw-bold" style="font-size:20px;">Available stock </p>
    <table class="table table-striped table-sm">
        <thead class="table-light">
            <tr>
                <th >#</th>
                <th >Product-name</th>
                <th >Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mysql=mysqli_query($conn, "select * from stock");
            $available_products = mysqli_num_rows($mysql);
            $available_products =$available_products +1;
            $i=1;
            while($i<$available_products):
            while($products=$mysql->fetch_assoc()):
            ?>
            <tr>
                <th><?php echo $i?></th>
                <td><?php echo $products['productname']?></td>
                <td><?php echo $products['quantity']?></td>
                <td><button class="btn btn-sm btn-primary"><a href="stock.php?editproduct=true&&productid=<?php echo $products['id']?>" style="text-decoration:none; color:white;">Edit</button></td>
                <td><button class="btn btn-sm btn-danger"><a href="processing.php?deleteproduct='<?php $products['id']?>'" style="text-decoration:none; color:white;">Delete</a></button></td>
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

<!-- this condition helps to check wether the user is registering a prodcut and also checking if the product name already exits using the OR operator -->
<?php }elseif($msg=="Register stock" || $regmsg !="Product registered successfully"){?>
<!-- register stock section -->
<div class="container">
<div class="row m-auto pt-4 mt-5" >
        <div class="col-md-3">
        <img src="img3.png" class=" pt-4 d-none d-sm-block img-fluid" width="50%" alt="">
        <p class="text-danger fw-bold"><?php echo $returnmessage;?></p>
        </div>
        <div class="col-md-9">
        <div class="col-md-9">
        <h3 class="text-collapse"><small>Register Stock</small></h3>
       <form action="processing.php" method="POST">
        <label for="product-name" class="form-label">product-name:</label>
        <input type="text" class="form-control" id="productname" name="productname" value="<?php echo $prdtname?>" placeholder="enter product name"required>
        <label for="buying-price" class="form-label">buying-price(shs):</label>
        <input type="number" class="form-control" id="buyingprice" name="buyingprice" value="<?php echo $buyingprice?>" placeholder="enter buying price"required>
        <label for="selling-price" class="form-label">selling-price(shs):</label>
        <input type="number" class="form-control" id="sellingprice" name="sellingprice" value="<?php echo $sellingprice?>" placeholder="enter selling price"required>
        <label for="user-email" class="form-label">Registered by:</label>
        <select class="form-select" aria-label="User type" name="registeredby">
         <option selected>select username</option>
         <option value="admin">Admin</option>
         <option value="attendant">Attendant</option>
        </select>
        <option selected>Select Measurement type</option>
        <select class="form-select" aria-label="User type" name="measurementtype">
         <option selected>Measurement</option>
         <option value="boxes">boxes</option>
         <option value="litres">litres</option>
         <option value="kilograms">kilograms</option>
         <option value="tins">tins</option>
         <option value="tins">dozens</option>
         <option value="onebyone">one by one</option>
        </select>
        <label for="date" class="form-label">Quantity:</label>
        <input type="number" class="form-control" id="quantity" value="<?php echo $quantity?>" name="quantity" placeholder="enter product quantity"required>
        <label for="date" class="form-label">Entered on:</label>
        <input type="date" class="form-control" id="date" value="<?php echo $enteredon?>" name="registeredon" placeholder="select registration date"required>
        <br>
        <button class="btn btn-sm bg-danger text-white p-2" type="submit" name="registerproduct">submit</a></button>
        <br>
        <br>
       </form>
    </div>  
        </div>
    </div>
</div>
<!-- end of register stock section -->

<?php }?>
