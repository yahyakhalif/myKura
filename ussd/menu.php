<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome to myKura election nominations\n";
    $response .= "1. Enter your voter number \n";
} 
else if ($text == "1") {
     // Business logic for first level response
     $response = "CON Position: Governor \n";
     $response .= "1. Ryan Mukiti \n";
     $response .= "2. Lewis Mutoni \n";
} 
else if($text == "1*1") { 
    $response = "CON Confirm your vote: \n";
    $response .= "1. Ryan Mukiti \n";
} 
else if($text == "1*2") { 
    $response = "CON Confirm your vote: \n";
    $response .= "1. Lewis Mutoni \n";
}
else if(($text == "1*1*1") || ($text == "1*2*1")) { 
    $response = "CON Position: Member of Parliament \n";
    $response .= "1. Leo Bikuri \n";
    $response .= "2. Natasha Gichuhi \n";
}
else if(($text == "1*1*1*1") || ($text == "1*2*1*1")){ 
    $response = "CON Confirm your vote: \n";
    $response .= "1. Leo Bikuri \n";
}
else if(($text == "1*1*1*2") || ($text == "1*2*1*2")){ 
    $response = "CON Confirm your vote: \n";
    $response .= "1. Natasha Gichuhi \n";
}
else if(($text == "1*1*1*1*1") || ($text == "1*2*1*1*1") || ($text == "1*1*1*2*1") || ($text == "1*2*1*2*1"))  { 
    $response = "CON Position: Member of County Assembly \n";
    $response .= "1. Yahya Khalif \n";
    $response .= "2. Jason Jabez \n";
}
else if(($text == "1*1*1*1*1*1") || ($text == "1*2*1*1*1*1") || ($text == "1*1*1*2*1*1") || ($text == "1*2*1*2*1*1")){ 
    $response = "CON Confirm your vote: \n";
    $response .= "1. Yahya Khalif \n";
}
else if(($text == "1*1*1*1*1*2") || ($text == "1*2*1*1*1*2") || ($text == "1*1*1*2*1*2") || ($text == "1*2*1*2*1*2")){ 
    $response = "CON Confirm your vote: \n";
    $response .= "1. Jason Jabez \n";
}
 else if(($text == "1*1*1*1*1*1*1") || ($text == "1*2*1*1*1*1*1") || ($text == "1*1*1*2*1*1*1") || ($text == "1*2*1*2*1*1*1") || ($text == "1*1*1*1*1*2*1") || ($text == "1*2*1*1*1*2*1") || ($text == "1*1*1*2*1*2*1") || ($text == "1*2*1*2*1*2*1")){ 
     $response = "END Thank you for using myKura to cast your vote.\n Together we can make voting a hassle-free process\n";
}

// Echo the response back to the API
 header('Content-type: text/plain');
 echo $response;