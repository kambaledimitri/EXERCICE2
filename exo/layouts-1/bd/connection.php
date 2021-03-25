<?php 
  $username='root';
  $password='';

$db= new PDO('mysql:host=localhost; dbname=INSCRIPTION',$username,$password);
require 'user.php';
$user=new USER($db);
?>