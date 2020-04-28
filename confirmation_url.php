<?php
header("Content-type:application/json");
$reponse ='{"ResultCode":0,
            "ResultDesc":"Confirmation Received Succesfully!!"

 }';
 //Data
 $mpesaResponse=file_get_contents('php://input');

  //log the rresponse
 $logfile="mpesaResponse.txt";
 $jsonMpesaResponse=json_decode($mpesaResponse,true);

 //write to file
 $log =fopen($logfile,"a" );
 fwrite($log, $mpesaResponse);
 fclose($log);
 echo $reponse;


?>