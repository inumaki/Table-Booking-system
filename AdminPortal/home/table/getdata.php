

<?php
include 'api.php';

function fetch_table()
{
    $api_obj = new API('GET',null);
    $res = $api_obj->processRequest($_POST);
}

fetch_table();


?>
