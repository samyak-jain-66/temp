<?php

require_once "razorpay-php/Razorpay.php";

use Razorpay\Api\Api;

$keyid='rzp_test_zXp4l7H7cXKeew';
$secretKey='DwAoXVDh99uumnZ6ZUeAn1JQ';
$api = new Api($keyid, $secretKey);

session_start();
$email = $_SESSION['semail'];
$name = $_SESSION['sname'];
$phone = $_SESSION['sphone'];
$amount=$_POST['amount'];
$month=$_POST['month'];
$famount=$amount*100;
echo $email;
echo $name;
echo $phone;
echo $amount;
$_SESSION['samount']=$amount;
$_SESSION['smonth']=$month;

$order = $api->order->create(array(
  'receipt' => rand(1000,9999).'ORD',
  'amount' => $famount,
  'payment_capture' => 1,
  'currency' => 'INR'
  )
);
$_SESSION['orderReceipt']=$order->receipt;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="charge.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key ="<?php echo $keyid ?>" 
    data-amount ="<?php echo $order->amount ?>" 
    data-currency ="INR"
    data-order_id ="<?php echo $order->id ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Hostel"
    data-description="Hostel fees"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="<?php echo $name ?>"
    data-prefill.email="<?php echo $email ?>"
    data-prefill.contact="<?php echo $phone ?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hn Element" name="hidden">idde
</form>  
</body>
</html>