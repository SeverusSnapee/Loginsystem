<?php 
session_start();
if(isset($_SESSION['id'],$_SESSION['user_name'])){

}
?>
<html>
    <head>
        <title>LOGIN PAGE</title>
    </head>
    <body>
        <h1>Hello,<?php echo $_SESSION['name']?></h1>
        <a href="logout.php">Logut</a>
   
    </body>
</html>