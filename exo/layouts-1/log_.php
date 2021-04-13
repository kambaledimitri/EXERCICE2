<?php 
 include 'bd/connection.php';
  

 if (isset($_POST['nom_user']) && isset($_POST['motdepasse'])) {
 	
 	$n_user=htmlspecialchars($_POST['nom_user']);
 	$m_depasse=htmlspecialchars($_POST['motdepasse']);

 	$req=$db->prepare('SELECT * FROM admin WHERE username=:username AND password=:password');

 	$req->execute(array(
 	'username' => $n_user,
 	'password' => $m_depasse ));

 	$res=$req->fetchAll(PDO::FETCH_OBJ);

 	if ($res) {
 		$user->con($res[0]->ID);
 		header('location:index.php');
 	}else{
 		header('location:login.php');
 	}
 }else{
 	echo "err";
 }

 ?>