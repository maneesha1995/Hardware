<?php
include 'includes/header.php'
?>

    <div class="container">
        <div class="co"></div>
        <h2>Register</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Register/RegisterUser');?>

            <div class="form-group">
                <label for="inputfname3" class="col-sm-12 control-label">First Name</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputfname3" placeholder="First Name" name="fname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputname3" class="col-sm-12 control-label">Last Name</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputname3" placeholder="Last Name" name="lname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputNIC" class="col-sm-12 control-label">NIC</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputNIC" placeholder="NIC" name="nic">
                </div>
            </div>
            <div class="form-group">
                <label for="inputadd" class="col-sm-12 control-label">Address</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Address" name="address">
                </div>
            </div>
            <div class="form-group">
                <label for="inputMobile" class="col-sm-12 control-label">Contact Number</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Contact Number  (Eg:071XXXXXXX)" name="contact">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-12 control-label">Email</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-12 control-label">Password</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword4" class="col-sm-12 control-label">Confirm Password</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="re_password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-12 col-sm-12">
                    <button type="submit" class="btn btn-default">Register</button>
                </div>
            </div>
        <?php echo form_close();?>

    </div>
    <br>
    <hr>


<?php
include 'includes/footer.php'
?>