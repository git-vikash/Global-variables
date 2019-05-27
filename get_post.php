<?php

//---------------------------GET--------------------------

echo "Hello ".$_GET['uname'].".<br>";
echo "Your gender is ".$_GET['gender'].".<br><br>";

//----------------------------POST------------------------

//echo "Hello ".$_POST['uname'].".<br>";
//echo "Your gender is ".$_POST['gender'].".<br><br>";

//------------------------------REQUEST METHOD USE FOR BOTH GET OR POST DEFINE METHOD----------------------

echo "Hello ".$_REQUEST['uname'].".<br>";
echo "Your gender is ".$_REQUEST['gender'].".<br><br>";
?>
