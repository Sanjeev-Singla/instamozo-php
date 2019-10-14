<?php

    $email = 'abc@gmail.com'; //To Sent to a notify email whenever a user complete a payment.
    $api_key = 'YOUR_API_KEY';
    $api_secret = 'YOUR_API__SECRET_KEY';
    $api_salt = 'YOUR_SALT_KEY';
    $webhook_url = 'YOUR_REDICTED_WEBHOOK_FILE_URL';
    $redirect_url = 'YOUR_REDICTED_URL_AFTER_PAYMENT';
    $mode = "test"; //You can change it to live by jest replacing it by 'live'

    if($mode == 'live'){
        $mode = 'www';
    }else{
        $mode = 'test';
    }
    
?>
