<?php  

 function imgup()
{
 $url_img=basename($_FILES['IMAGE']['name']);
$verif_img=getimagesize($_FILES['IMAGE']['tmp_name']);

  if (isset($_FILES['IMAGE']) AND $_FILES['IMAGE']['error']== 0){
if ($_FILES['IMAGE']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['IMAGE']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['IMAGE']['tmp_name'],'images/'.$url_img)){
   require 'bd/connection.php';
  
            $req = $db->prepare('INSERT INTO ETUDIANT(NOM,POST_NOM,PRENOM,SEXE,EMAIL,TELEPHONE,PHOTO,PROMOTION,SECTION) VALUES (:NOM,:POST_NOM,:PRENOM,:SEXE,:EMAIL,:TELEPHONE,:PHOTO,:PROMOTION,:SECTION)');
            $req->execute(array(
            'NOM'=> $_POST['Nom'],
            'POST_NOM' => $_POST['Post-nom'],
            'PRENOM' => $_POST['Prenom'],
            'SEXE' => $_POST['Sexe'],
            'EMAIL' => $_POST['Email'],
            'TELEPHONE' => $_POST['Telephone'],
            'PHOTO' => $_FILES['PHOTO']['name'],
            'PROMOTION' => $_POST['Promotion'],
            'SECTION' => $_POST['Section']
            ));
            if ($req) {
              echo "valide";
        }else{
          echo "err";
        }

// header('location:form-basic.php');
return true;

}

}


      }

      else{

          unlink($_FILES['IMAGE']['tmp_name']);
          unset($_FILES['IMAGE']);

      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>