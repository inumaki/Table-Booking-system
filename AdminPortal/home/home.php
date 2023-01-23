
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$=jQuery;
</script>
    <title>Home Page</title>
</head>
<body>

<div class="panel">
<?php
include 'navbar.php';
session_start();
if ( !isset($_SESSION) || empty($_SESSION['username']))
{
    header("Location: ../login.php");
} 
?>      
<?php        
    if(isset($_REQUEST['submit']))
    {
    unset($_SESSION["username"]);
session_destroy();
header("Location: ../login.php");
    }


    ?>

    </div>
    <table id="mytable" class="w3-table-all"></table>




    <script src="myscript.js"></script>
</body>



</html>