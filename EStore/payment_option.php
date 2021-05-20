<div class="box"><!--Box Begin -->

<?php

$session_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email = '$session_email' ";

$run_customer = mysqli_query($con ,$select_customer );

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['cutomer_id'];



?>

<h1 class="text-center">Payment Options For You</h1>

<p class="lead text-center"><!--lead text-center Begin -->

<a href="order.php?c_id= <?php echo $customer_id ?>">Offline payment</a>


</p><!--lead text-center Finish -->

<center><!--Center Begin -->

<p class="lead"><!--lead Begin -->

<a href="#">

Paypall Payment

<img src="images/paypall_img.png" alt="img-paypall" class="img-responsive">


</a>

</p><!--lead Finish -->

</center><!--center Finish -->


</div><!--Box Finish -->