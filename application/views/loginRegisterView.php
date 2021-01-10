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

<body style="background-color:#DBE2FD;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url("indexCon/index"); ?>">
            <i class="fas fa-shopping-basket">
            เว็บขายของ
            </i>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <span>เข้าสู่ระบบ</span>
           
        </div>
        
    </div>
</nav>
<div class="container my-md-2">
    <div class="row">
        <form action="<?php echo base_url("userCon/login"); ?>" method="post">
            <table>
                <tr>
                    <td>Email or Phone Number</td>
                    <td><input class="form-control" type="text" name="auth"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input class="form-control" type="text" name="p"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input class="btn btn-success" type="submit" value="Login"></td>
                </tr>
            </table>
            
           
        </form>
    </div>
    <div class="row">
        <img src="">
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>