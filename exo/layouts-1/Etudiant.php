<?php  

 function imgup()
{
 $url_img=basename($_FILES['PHOTO']['name']);
$verif_img=getimagesize($_FILES['PHOTO']['tmp_name']);

  if (isset($_FILES['PHOTO']) AND $_FILES['PHOTO']['error']== 0){
if ($_FILES['PHOTO']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['PHOTO']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['PHOTO']['tmp_name'],'images/'.$url_img)){
   require 'bd/connection.php';
  
            $req = $db->prepare('INSERT INTO ETUDIANT(NOM,POST_NOM,PRENOM,SEXE,EMAIL,TELEPHONE,PHOTO,PROMOTION,SECTION) VALUES (:NOM,:POST_NOM,:PRENOM,:SEXE,:EMAIL,:TELEPHONE,:PHOTO,:PROMOTION,:SECTION)');
            $req->execute(array(
            'NOM'=>$_POST['Nom'],
            'POST_NOM' => $_POST['Post-nom'],
            'PRENOM' => $_POST['Prenom'],
            'SEXE' => $_POST['Sexe'],
            'EMAIL' => $_POST['Email'],
            'TELEPHONE' => $_POST['Telephone'],
            'PHOTO' =>$_FILES['PHOTO']['name'],
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

          unlink($_FILES['PHOTO']['tmp_name']);
          unset($_FILES['PHOTO']);

      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>