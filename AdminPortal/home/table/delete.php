<?php
include 'api.php';

$api_obj=new API('DELETE',$_POST['table_number']);


$res = $api_obj->processRequest($_POST);
  






?>