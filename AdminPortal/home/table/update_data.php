<?php
include 'api.php';

$api_obj=new API('PUT',$_POST['table_number']);
unset($_POST['submit']);
unset($_POST['table_number']);

if(!$_POST['number_of_seats'])
unset($_POST['number_of_seats']);
if (!$_POST['table_cost'])
unset($_POST['table_cost']);

 
$res = $api_obj->processRequest($_POST);
  

?>