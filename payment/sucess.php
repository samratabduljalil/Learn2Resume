<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Successful</title>
</head>
<?php session_start();
if(isset($_SESSION['user'])){




?>
<body>
  <div class="flex">
<h1 class="sucess">Your payment is successful</h1>
<h3 class="redirect">You will be automatic redirected to your cours in a moment</h3>
<a href="\Cvit-CVgenerator/user2/index.php"><button class="dash_btn">Go to Dashboard</button></a>
</div>  


<?php
include('connection.php');
$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("abc6535a78e3e415");
$store_passwd=urlencode("abc6535a78e3e415@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;


  $query="INSERT INTO `total`(`total`) VALUES ('{$store_amount}')";

  if (mysqli_query($connection, $query)) {
  
	

  
  } else {
    echo "Error inserting data: " . mysqli_error($connection);
  }



  


$payment=$_POST['amount'];
$course_id=$_POST['value_a'];
$currentDate = date("Y-m-d");
$user_id = $_POST['value_b'];
$query="INSERT INTO `payment_course`(`course_id`, `user_id`, `payment_money`, `Current_d`) VALUES ('{$course_id}','{$user_id}','{$payment}','{$currentDate}')";

if (mysqli_query($connection, $query)) {

	//$redirectURL ="\Cvit-CVgenerator/user/in_course.php?id=".$course_id;
	//header("location:".$redirectURL);


} else {
  echo "Error inserting data: " . mysqli_error($connection);
}


} else {

	echo "Failed to connect with SSLCOMMERZ";
}
?>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6541e338a84dd54dc48758ba/1he4lv6c6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>
</body>
</html>
