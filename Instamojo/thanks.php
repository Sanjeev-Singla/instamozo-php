<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<title>Payment Details!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">
    <h1 class='w3-center'>Your Payment Details! <a href='index.php'>Go back Home</a></h1>

<?php

    include 'src/instamojo.php';
    
    $servername = "localhost";
    $username = "db_username";
    $password = "db_password";
    $dbname = "db_name";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


  
    $api = new Instamojo\Instamojo($api_key, $api_secret,'https://'.mode.'.instamojo.com/api/1.1/');
    $payid = $_GET["payment_request_id"];
    $response = $api->paymentRequestStatus($payid);
    
    $user_id = '1';
    $package =  $response['purpose'];
    $quantity = $response['payments'][0]['quantity'];
    $currency = $response['payments'][0]['currency'];
    $total_amount = $response['amount'];
    $payment_status = $response['status'];
    $credit_status = $response['payments'][0]['status'];
    $payment_id = $response['payments'][0]['payment_id'];
    $instamojo_id = $response['id'];
    $sms_status = $response['sms_status'];
    $email_status =  $response['email_status'];
    $created_at =  $response['payments'][0]['created_at'];
    
    $email = $response['email'];
    $payment_id_exist = $conn->query("SELECT payment_id FROM payment where payment_id = '$payment_id'");
    if($payment_id_exist->field_count > 0){
        header('location:index.php');
        die();
    }

    try {
        $query = mysqli_query($conn,"INSERT INTO payment (user_id,package,quantity,currency,total_amount,payment_status,credit_status,payment_id,instamojo_id,email_status,sms_status,created_at)
                          VALUES($user_id,'$package',$quantity,'$currency',$total_amount,'$payment_status','$credit_status','$payment_id','$instamojo_id','$email_status','$sms_status','$created_at')");
        if ($query) {
            $response = $api->paymentRequestStatus($payid);
            echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
            echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
            echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
            echo "<h4>Package: " . $response['purpose'] . "</h4>" ;
            echo "<h4>Payment Status: " . $response['status'] . "</h4>" ;
            echo "<h4>Payment Amount: " . $response['amount'] . " ".$response['payments'][0]['currency']."</h4>" ;
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
    
  ?>
 </div>
 </body>
 </html>
