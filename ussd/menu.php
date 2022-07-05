<?php

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];


if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome dear registered voter to myKura election nominations\n";
    $response .= "1. Start voting \n";
} 
else if ($text == "1") {
     // Business logic for first level response
     
     $response = "CON Reply with 1 OR 2.\nPosition: Governor \n";
     $response .= "1. Ryan Mukiti \n";
     $response .= "2. Lewis Mutoni \n";
} 
else if($text == "1*1") { 
    $response = "CON Reply with 1 to confirm your vote: \n";
    $response .= "1. Ryan Mukiti \n";

    $url = "http://localhost:5000";
    $cURLConnection = curl_init();
    curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost:5000/api/candidate/vote/62c31f65322b4bca794cda32');
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    $phoneList = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $curl('');
    
} 
else if($text == "1*2") { 
    $response = "CON Reply with 1 to confirm your vote: \n";
    $response .= "1. Lewis Mutoni \n";

}
else if(($text == "1*1*1") || ($text == "1*2*1")) { 
    $response = "CON Reply with 1 OR 2.\nPosition: Member of Parliament \n";
    $response .= "1. Leo Bikuri \n";
    $response .= "2. Natasha Gichuhi \n";
}
else if(($text == "1*1*1*1") || ($text == "1*2*1*1")){ 
    $response = "CON Reply with 1 to confirm your vote: \n";
    $response .= "1. Leo Bikuri \n";
}
else if(($text == "1*1*1*2") || ($text == "1*2*1*2")){ 
    $response = "CON Reply with 1 to confirm your vote: \n";
    $response .= "1. Natasha Gichuhi \n";
}
else if(($text == "1*1*1*1*1") || ($text == "1*2*1*1*1") || ($text == "1*1*1*2*1") || ($text == "1*2*1*2*1"))  { 
    $response = "CON Reply with  1 OR 2.\nPosition: Member of County Assembly \n";
    $response .= "1. Yahya Khalif \n";
    $response .= "2. Jason Jabez \n";
}
else if(($text == "1*1*1*1*1*1") || ($text == "1*2*1*1*1*1") || ($text == "1*1*1*2*1*1") || ($text == "1*2*1*2*1*1")){ 
    $response = "CON Repl With 1 to confirm your vote: \n";
    $response .= "1. Yahya Khalif \n";
}
else if(($text == "1*1*1*1*1*2") || ($text == "1*2*1*1*1*2") || ($text == "1*1*1*2*1*2") || ($text == "1*2*1*2*1*2")){ 
    $response = "CON REPLY WITH 1.\n Confirm your vote: \n";
    $response .= "1. Jason Jabez \n";
}
 else if(($text == "1*1*1*1*1*1*1") || ($text == "1*2*1*1*1*1*1") || ($text == "1*1*1*2*1*1*1") || ($text == "1*2*1*2*1*1*1") || ($text == "1*1*1*1*1*2*1") || ($text == "1*2*1*1*1*2*1") || ($text == "1*1*1*2*1*2*1") || ($text == "1*2*1*2*1*2*1")){ 
     $response = "END Thank you for using myKura to cast your vote.\n Together we can make voting a hassle-free process\n";
}

// Echo the response back to the API
 header('Content-type: text/plain');
 echo $response;