<center>

<h1>Do You Really want To Delete Your Account From The website?</h1>

<form action="" method="post">

<input type="submit" name= "yes"   value= "Yes,I want to Delete" class="btn btn-danger">
<input type="submit" name="no" value="NO ,I dont want to Delete" class="btn btn-primary">





</form>

</center>

<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['yes']))
{

    $delete_customer = " delete from customers where customer_email='c_email'";

    $run_delete_customer = mysqli_query($con,$delete_customer);

    if($run_delete_customer)
    {
        session_destroy();

        echo "<script>alert('Successfully delete Your account , feel sorry about this , Good Bye')</script>";
        echo "<script>window.open('../index.php','_self') </script>";

    }


}

if(isset($_POST['no']))
{

    echo "<script>window.open('my_account.php?my_orders','_self') </script>";


}

?>