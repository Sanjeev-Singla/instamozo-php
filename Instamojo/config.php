<?php

    $email = 'abc@gmail.com'; //To Sent to a notify email whenever a user complete a payment.
    $api_key = 'test_7e5663ee09d6acb94f26a3791ae';
    $api_secret = 'test_fc5ce2630983b82cc1d2b01cbd5';
    $api_salt = '1c5b8e01305a4e22bda9e4817f87e009';
    $webhook_url = 'https://voicemycomplaint.com/google_login_php/Instamojo/webhook.php';
    $redirect_url = 'https://voicemycomplaint.com/google_login_php/Instamojo/thanks.php';
    $mode = "test"; //You can change it to live by jest replacing it by 'live'

    if($mode == 'live'){
        $mode = 'www';
    }else{
        $mode = 'test';
    }
    
?>
