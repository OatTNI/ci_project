<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo base_url("userCon/login"); ?>" method="post">
        <input type="text" name="auth">
        <input type="text" name="p">
        <input type="submit" value="Login">
    </form>
</body>

</html>