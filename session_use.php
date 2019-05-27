<?php

session_start();

if(isset($_SESSION['username'])){
echo '<h2><center>Hello '.$_SESSION["username"]."<br>You are welcome.<center><h2>";
echo '<h3><a href="logout.php" >Logout</a></h3> ';
}
else{
    echo '<h2><center>You are not login.</center></h2>';
    echo '<p><center>Click here to login <a href="session_set.php" style="color: green;">Login</a></center></p> 
   ';
}

//header("location: session_set.php");


?>

<html>
    <body>
         </body>
</html>