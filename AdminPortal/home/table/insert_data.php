<?php
include 'api.php';

$api_obj=new API('POST',NULL);

try {
    $res = $api_obj->processRequest($_POST);
    echo "<p>succesfull</p>";
}
catch(Exception $e)
{
    echo "<p>something went wrong</p> ";
    echo "Status : ".$e->getMessage();
}




?>