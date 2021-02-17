<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account</title>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body>
    <?php $this->load->view('layout/navbar'); ?>
    <div class="clothes_main">
        <div class="container">
            <div class="row mb-3" >
                <div class="col-md-6 " style="background-color:white; border-bottom-left-radius: 15px; border-top-left-radius: 15px;">
                    <h1 class="my-3">Login</h1>
                    <form action="<?php echo base_url("user/login_out"); ?>" method="post" name="loginform">
                        <label for="auth">Email or Phone Number</label>
                        <input class="form-control mb-2" type="text" name="auth" id="auth" placeholder="Email / Phone Number">
                        <?php echo form_error('auth'); ?>
                        <label for="p">password</label>
                        <input class="form-control" type="password" name="pwloginfield" id="pwloginfield">
                        <?php echo form_error('pwloginfield'); ?>
                        <input class="btn btn-success btn-block my-3" type="submit" value="Login">
                    </form>
                </div>
                <div class="col-md-6 " style="background-color:white; border-bottom-right-radius: 15px; border-top-right-radius: 15px;">
                    <h1 class="my-3">Register</h1>
                    <form action="<?php echo base_url("user/register"); ?>" method="post" name="Registerform">
                        <table class="table table-borderless">
                            <tr>
                                <td><b>Name</b> <label style="color:red">*</label></td>
                                <td>
                                    <input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname">
                                    <?php echo form_error('firstname'); ?>
                                </td>
                                <td>
                                    <input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname">
                                     <?php echo form_error('lastname'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Email</b>
                                    <label style="color:red">*</label>
                                </td>
                                <td colspan="2">
                                    <input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email">
                                    <?php echo form_error('emailfield'); ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Password</b>
                                    <label style="color:red"> * </label>
                                </td>
                                <td colspan="2">                                    
                                    <input class="form-control mb-3" type="password" id="passwordfield" name="passwordfield" placeholder="Enter Password">
                                    <?php echo form_error('passwordfield'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Confirm Password</b>
                                    <label style="color:red"> * </label>
                                </td>
                                <td colspan="2">                                    
                                    <input class="form-control mb-3" type="password" name="confirmpasswordfield" placeholder="Enter Password Again">
                                    <?php echo form_error('confirmpasswordfield'); ?>
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>
                                    <b>Phone Number</b>
                                    <label style="color:red"> * </label>
                                </td>
                                <td colspan="2">                                    
                                    <input class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number">
                                    <?php echo form_error('phonenumber'); ?>
                                </td>
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
    </div>
    <div id="plant" class="footer layout_padding">
        <div class="container">
            <p>This Website As part of the subjects ITE-416, ITE-417 <a href="https://www.tni.ac.th/home/"> Thai-Nichi Institute of Technology.</a></p>
        </div>
    </div>
    <?php $this->load->view("layout/mainJS"); ?>
</body>

</html>