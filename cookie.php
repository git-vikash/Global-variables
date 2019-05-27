<?php

$value="v!kash";
$expire= time()+86400;
setcookie('name',$value,$expire);
echo $_COOKIE['name'];

//-------------------------------resetting cookie-------------------------------------

$value="tiwari";
setcookie('name',$value,$expire);
echo $_COOKIE['name'];

//--------------------------------unset cookie-------------------------

//$expire= time()-86400;  
setcookie('name',$value,$expire);
echo $_COOKIE['name'];
?>
