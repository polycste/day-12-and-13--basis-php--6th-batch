<?php
require_once 'classes/login.php';
$obj=new Login();
$user_id=$_GET['user_id'];
$obj->delete_user($user_id);

?>
