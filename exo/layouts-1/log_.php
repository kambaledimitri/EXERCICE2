<?php 
 include 'bd/connection.php';
  

 if (isset($_POST['nom_user']) && isset($_POST['motdepasse'])) {
 	
 	$nom_user=htmlspecialchars($_POST['nom_user']);
 	$mot_depasse=htmlspecialchars($_POST['motdepasse']);

 	$req=$db->prepare('SELECT * FROM utilisateur WHERE USERNAME=:USERNAME AND MOTDEPASSE=:MOTDEPASSE');

 	$req->execute(array(
 	'USERNAME' => $nom_user,
 	'MOTDEPASSE' => $mot_depasse ));

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