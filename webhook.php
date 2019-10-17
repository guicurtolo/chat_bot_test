<?php

sendMessage(array(
    "source" => "RMC",
    "speech" => "Test Webhook!",
    "displayText" => "Test Webhook!",
    "contextOut" => array(),
    "fullfilmentText" => "TESTANDO"
));

function sendMessage($parameters)
{
    header('Content-Type: application/json');
    $data = str_replace('\/','/',json_encode($parameters));
    echo $data;
}

?>
