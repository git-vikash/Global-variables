<?php
session_start();
if(isset($_SESSION['username'])){
    echo '<h3><center>You are already login.</center></h3>';
    exit();
}
?>

<html>
    <head>
        <title>submitting data...</title>
    </head>
    <body>
        <div style="background-color:powderblue ;width:50%;border: 2px solid gray;padding: 20px;">
            <form  method="post" >
            Name : <input type="text" name="uname" placeholder="Enter your name..." required /><br>
            Male <input type="radio" name="gender" value="Male"/><br>
            Female <input type="radio" name="gender" value="Female"/><br>
            <input type="submit" name="submit" value="OK"/>
        </form>
        </div>
    </body>
</html>

<!-----------------Session start and setting------------------------------->
<?php

//session_start();

if(isset($_POST['submit'])){
$_SESSION["username"]=$_POST['uname'];
header("location: session_use.php");
}
?>