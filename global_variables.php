<?php
include 'server-var.php';


//--------------------function------------------------------------------------

$fname = "vikash";
$lname = "tiwari";
$roll = 111;


function disp(){
    global $fname;
    echo 'Hello '.$fname.' <br>';
   // return 'Hello '.$fname.' <br>';
}


function detail(){
    global $roll;
    
    print 'Your full name is '. $GLOBALS['fname']."".$GLOBALS['lname'].'<br>';
    echo 'Your roll code is <b>'.$roll.'</b>'.' <br>';
}
 disp();
detail();
?>

<html>
    <?php echo '.......'.disp();?>
    <p>Your browser is :<i> <?php ECHO showbrowser();?></i></p>
</html>

<!----------------form--------get-post----------files--------->

<html>
    <head>
        <title>submitting data...</title>
    </head>
    <body>
        <div style="background-color:powderblue ;width:50%;border: 2px solid gray;padding: 20px;">
        <form action="get_post.php" method="get" >
            Name : <input type="text" name="uname" placeholder="Enter your name..." required /><br>
            Male <input type="radio" name="gender" value="Male"/><br>
            Female <input type="radio" name="gender" value="Female"/><br>
            <input type="submit" value="OK"/>
        </form>
            
            <form action="file.php " method="post" enctype="multipart/form-data">
                <center><b>Upload Files</b></center><br>
                <input type="file" name="files" value="Upload"><br><br>
                <input type="submit" value="OK"/>
            </form>
        </div>
    </body>
</html>