<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e7d4730b9e.js" crossorigin="anonymous"></script>
    <style type = "text/css">
        body{font-family:"Kanit", sans-serif !important;}
        a { text-decoration: underline; }
    </style>
</head>

<body class="bg-light">

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url("indexCon/index"); ?>">
            <i class="fas fa-shopping-basket">
            เว็บขายของ
            </i>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <form class="mx-2 my-auto d-inline w-100">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search...">
                <span class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </form>
        <div class="navbar-nav">
            <li class="nav-item"><a class="nav-link mr-sm-2" href="#"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="nav-item"></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url("userCon/index"); ?>">Login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </div>
    </div>
</nav>
<!-- แสดงรูปภาพ -->
<div style="background-color:black;">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="height:200px;">
    <div class="carousel-item active">
      <img src="https://image.freepik.com/free-photo/milky-way_1401-347.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://image.freepik.com/free-photo/milky-way_1401-347.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- แสดงสินค้า -->
<div class="card container my-2 border-0 bg-light" style="background-color:#F5F6FA;">
<h4>หมวดหมู่</h4>
    <div class="row">
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
        <div class="col text-center">
        <a href="#" > 
        <img class="card-img-top" src="https://drive.google.com/uc?id=1GIEamQkYK55EGyt7eJA2X_4nwRPTIKn5" 
        alt="IT" height="100" >
        <span>IT</span>
        </a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>