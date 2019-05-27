<?php

ECHO '<br>HTTP_HOST = '.$_SERVER['HTTP_HOST'];
ECHO '<br>HTTP_USER_AGENT = '.$_SERVER['HTTP_USER_AGENT'];
echo '<br>REMOTE_ADDR = '.$_SERVER['REMOTE_ADDR'];
echo '<br>SERVER_PORT = '.$_SERVER['SERVER_PORT'];
echo '<br>PHP_SELF = '.$_SERVER['PHP_SELF'].'<br><br><br>';


function showbrowser(){
    return $_SERVER['HTTP_USER_AGENT'];
}
?>