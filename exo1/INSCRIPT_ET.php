<?php  
include 'bd/connection.php';

if (isset($_POST['envoyer'])) {
   
     $req = $db->prepare('INSERT INTO TEMPO (NOM,POST_NOM,PRENOM,SEXE,EMAIL,TELEPHONE,PROMOTION,SECTION) VALUES (:NOM,:POST_NOM,:PRENOM,:SEXE,:EMAIL,:TELEPHONE,:PROMOTION,:SECTION)');
       $req->execute(array(

            'NOM' => $_POST['Nom'],
            'POST_NOM' => $_POST['Post_nom'],
            'PRENOM' => $_POST['Prenom'],
            'SEXE'=>$_POST['Sexe'],
            'EMAIL'=>$_POST['email'],
            'TELEPHONE'=> $_POST['Telephone'],
            'PROMOTION'=>$_POST['Promotion'],
            'SECTION'=>$_POST['Section']));

  if ($req) {
        echo "valide";
  }else{
    echo "err";
  }
  
}

?>