<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account</title>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout" style="background-color:#DBE2FD;">
    <?php $this->load->view('layout/navbar'); ?>
    <div class="container">
        <div class="row  my-3">
            <div class="col-md-6" style="background-color:white; ">
                <h1 class="my-3">Login</h1>
                <form action="<?php echo base_url("userCon/post_login"); ?>" method="post" name="loginform">
                    <label for="auth">Email or Phone Number</label>
                    <input class="form-control mb-2" type="text" name="auth" id="auth" placeholder="Email / Phone Number">
                    <label for="p">password</label>
                    <input class="form-control" type="password" name="pwloginfield" id="pwloginfield">
                    <input class="btn btn-success btn-block my-3" type="submit" value="Login">
                </form>
            </div>
            <div class="col-md-6" style="background-color:white;">
                <h1 class="my-3">Register</h1>
                <form action="<?php echo base_url("userCon/register"); ?>" method="post" name="Registerform">
                    <table class="table table-borderless">
                        <tr>
                            <td><b>Name</b> <label style="color:red">*</label></td>
                            <td><input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname"></td>
                            <td><input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname"></td>
                        </tr>
                        <tr>
                            <td><b>Email</b> <label style="color:red">*</label></td>
                            <td colspan="2"><input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email"></td>

                        </tr>
                        <tr>
                            <td><b>Password</b> <label style="color:red"> * </label></td>
                            <td colspan="2"><input class="form-control mb-3" type="password" id="passwordfield" name="passwordfield" placeholder="Enter Password"></td>
                        </tr>
                        <tr>
                            <td><b>Confirm Password</b> <label style="color:red"> * </label></td>
                            <td colspan="2"><input class="form-control mb-3" type="password" name="confirmpasswordfield" placeholder="Enter Password Again"></td>
                        </tr>
                        <tr>
                        <tr>
                            <td><b>Phone Number</b> <label style="color:red"> * </label></td>
                            <td colspan="2"><input class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number"></td>
                        </tr>
                        <tr>
                            <td><b>Address</b> (Optional)</td>
                            <td colspan="2">
                                <textarea class="form-control mb-3" rows="3" name="address"></textarea>
                            </td>
                        </tr>

                    </table>

                    <input class="btn btn-success btn-block my-3" type="submit" value="Register">
                </form>

            </div>



        </div>


    </div>
    <div id="plant" class="footer layout_padding">
        <div class="container">
            <p>This Website As part of the subjects ITE-416, ITE-417 <a href="https://www.tni.ac.th/home/"> Thai-Nichi Institute of Technology.</a></p>
        </div>
    </div>
    <?php $this->load->view("layout/mainnavJS"); ?>
</body>

</html>