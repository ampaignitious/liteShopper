<?php
include('mynav.php');
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo $msg;
?>
<?php }?>
<?php     
if($msg=="Register stock"){?>
<!-- register stock section -->
<div class="container">
<div class="row m-auto pt-4 mt-4">
        <div class="col-md-4">
        <img src="user1.png" class="img-responsive" width="50%" alt="">
        </div>
        <div class="col-md-8">
        <div class="col-md-7">
        <h3 class="text-collapse"><small>Register Stock</small></h3>
       <form action="homepage.php" action="get">
        <label for="product-name" class="form-label">product-name:</label>
        <input type="text" class="form-control" id="productname" name="productname" placeholder="enter product name"required>
        <label for="buying-price" class="form-label">buying-price(shs):</label>
        <input type="number" class="form-control" id="buyingprice" name="buyingprice" placeholder="enter buying price"required>
        <label for="selling-price" class="form-label">selling-price(shs):</label>
        <input type="number" class="form-control" id="sellingprice" name="sellingprice" placeholder="enter selling price"required>
        <label for="user-email" class="form-label">Registered by:</label>
        <select class="form-select" aria-label="User type" >
         <option selected>username</option>
         <option value="admin">Admin</option>
         <option value="attendant">Attendant</option>
        </select>
        <option selected>Select Measurement type</option>
        <select class="form-select" aria-label="User type" >
         <option selected>Measurement</option>
         <option value="boxes">boxes</option>
         <option value="litres">litres</option>
         <option value="kilograms">kilograms</option>
         <option value="tins">tins</option>
         <option value="onebyone">one by one</option>
        </select>
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Create Password"required>
        <label for="password2" class="form-label">Confirm password:</label>
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Re-enter the password"required>
        <br>
        <button class="btn btn-sm bg-danger text-white p-2" type="submit">Login to continue</a></button>
       </form>
    </div>  
        </div>
    </div>
</div>
<!-- end of register stock section -->
<?php }elseif($msg=="Available stock"){?>
<div class="container">
<div class="row m-auto pt-4 mt-4">
<table>
    <caption>Available stock</caption>
    </table>
</div>
</div>
<?php }?>
