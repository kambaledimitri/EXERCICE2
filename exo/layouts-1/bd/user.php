<?php 
// require '_header.php';
class USER{
	private $db;

	public function __construct($db){

		if (!isset($_SESSION)) {
	session_start();
			}

		if (!isset($_SESSION['user'])) {

			$_SESSION['user']=array();
			
		}
			
			

$this->DB=$db;

}


public function con($user_id){



	$_SESSION['user'][$user_id]= $user_id;	
	$connexion=$this->DB->prepare('SELECT * FROM utilisateur WHERE ID=:ID ');
 $connexion->execute(array(
'ID' => $user_id
));
$con=$connexion->fetchAll(PDO::FETCH_OBJ);
foreach ($con as $user ) {

	$_SESSION['user']['ID']= $user->ID;
	$_SESSION['user']['NOM']= $user->NOM;
	$_SESSION['user']['POST_NOM']= $user->POST_NOM;
	$_SESSION['user']['USERNAME']= $user->USERNAME;
	$_SESSION['user']['PHOTO']= $user->PHOTO;
	$_SESSION['user']['EMAIL']= $user->EMAIL;
	$_SESSION['user']['TELEPHONE']= $user->TELEPHONE;
	$_SESSION['user']['MOTDEPASSE']= $user->MOTDEPASSE;
	



}






return true;


}

 public function decon($user_id){
	unset($_SESSION['user']);
	session_destroy();
	header('location:connexionn.php');

}


}
 





 ?>