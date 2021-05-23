<h1 align="center">Change Password</h1>

<from action="" method="post"> <!-- from beginn-->

<div class="form-group"><!-- from-gp beginn-->

<label>Your Old Password</label>

<input type="text" , name="old_pass" , class="form-control" required>

</div><!-- from-gp finish-->

<div class="form-group"><!-- from-gp beginn-->

<label>Your New Pass</label>

<input type="text" , name="new_pass" , class="form-control" required>

</div><!-- from-gp finish-->

<div class="form-group"><!-- from-gp beginn-->

<label>confirm Your New Password:</label>

<input type="text" , name="new_pass_again" , class="form-control" required>

</div><!-- from-gp finish-->

<div class="text-center">

<button type="submit" name="submit"class="btn btn-primary">

<i class="fa fa-user-md"></i> Update Now

</button>

</div>

</from> <!-- from Finish-->

<?php

if(isset($_POST['submit']))
{
    $c_email = $_SESSION['cutomer_email'];
    $c_old_pass = $_POST['old_pass'];
    $c_new_pass = $_POST['new_pass'];
    $c_new_pass_again = $_POST['new_pass_again'];

    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";

    $run_c_old_pass = mysqli_query($con,$sel_old_pass);

    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);

    if($check_c_old_pass == 0)
    {
        echo "<script>alert('Sorry , Your current password did not valid , please try agein')</script>";
        exit();

    }
    if($c_new_pass !=$c_new_pass_again)
    {
        echo "<script>alert('Sorry Your new password did not match')</script>";
        exit();
    }

    $update_c_pass = "update customers set customer_pass='$c_new_pass' where customer_email='$c_email'";

    $run_c_pass = mysqli_query($con,$update_c_pass);

    if($run_c_pass)
    {

        echo "<script>alert('Your Password has been updated')</script>";

        echo "<script>window.open('my_account?my_orders','_self')</script>";


    }

}


?>