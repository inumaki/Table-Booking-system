

<?php
include 'api.php';

$api_obj=new API('GET',$_POST['Number']);
$res = $api_obj->processRequest($_POST);

?>
