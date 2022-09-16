<?php
include('database.php');
?>
<?php
  $items = array("Stock","Sales","View reports","System users","Logout");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop WIth Us</title>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <!-- The navigation bar -->
  <nav class="navbar navbar-expand-lg bg-danger fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white">LiteShoppers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav ">
      <li class="nav-item ">
          <a class="nav-link active text-white" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-white" aria-current="page" href="dashboard1.php?msg=<?php echo $items[0]?>">Stock</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-white" aria-current="page" href="dashboard1.php?msg=<?php echo $items[1]?>">Sales</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-white" aria-current="page" href="dashboard1.php?msg=<?php echo $items[2]?>">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="dashboard1.php?msg=<?php echo $items[3]?>">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="dashboard1.php?msg=<?php echo $items[4]?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end of navigation bar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>