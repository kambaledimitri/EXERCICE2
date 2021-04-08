<?php 
include 'bd/connection.php'; 
if (isset($_POST['enregistrer'])) {
   
  $req = $db->prepare('INSERT INTO ETUDIANT(NOM,POST_NOM,PRENOM,SEXE,EMAIL,TELEPHONE,PROMOTION,SECTION) VALUES (:NOM,:POST_NOM,:PRENOM,:SEXE,:EMAIL,:TELEPHONE,:PROMOTION,:SECTION)');
            $req->execute(array(
            'NOM'=> $_POST['Nom'],
            'POST_NOM' => $_POST['Post_Nom'],
            'PRENOM' => $_POST['Prenom'],
            'SEXE' => $_POST['Sexe'],
            'EMAIL' => $_POST['Email'],
            'TELEPHONE' => $_POST['Telephone'],
            // 'PHOTO' => $_FILES['PHOTO']['name'],
            'PROMOTION' => $_POST['Promotion'],
            'SECTION' => $_POST['Section']
            ));
        //     if ($req) {
        //       echo "valide";
        // }else{
        //   echo "err";
        // }
        header('location:form-basic.php');

}
?>
