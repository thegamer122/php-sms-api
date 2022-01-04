<?php

 $to = 'Receiver number';
 $sender_id = "Your Sender id";
 $token = 'Your Token';
 $message = 'message';
 //open connection
 $curl = curl_init();

 curl_setopt_array($curl, array(
   CURLOPT_URL => 'Your API URL ',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_SSL_VERIFYPEER => false,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'POST',
   CURLOPT_POSTFIELDS => array('token' => $token,'sender' => $sender_id,'to' => $to,'message' => $message),
 ));

 $response = curl_exec($curl);

 curl_close($curl);
 
  echo $response;


?>