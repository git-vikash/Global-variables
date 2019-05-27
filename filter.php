<?php

$email = "vk@c.         com";

$sanatised = filter_var($email,FILTER_SANITIZE_EMAIL);
$validated = filter_var($sanatised,FILTER_VALIDATE_EMAIL);
if($validated){
    echo "The email ($email) is sanatized and valid.";
}
 else {
    echo "The email ($email) is canatized but not valid";    
}
?>

