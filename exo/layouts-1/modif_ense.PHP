<?php


if(isset($_POST['modifier'])){

    function imgup()
   {
     
     $url_img=basename($_FILES['IMAGE']['name']);
     if($url_img!=""){
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
     
               $req=$db->prepare("UPDATE ENSEIGNANT SET NOM=:NOM,PRENOM=:PRENOM,DOMAINE=:DOMAINE,EMAIL=:EMAIL,TELEPHONE=:TELEPHONE,NIVEAU=:NIVEAU,PHOTO=:PHOTO WHERE ID=:ID");
               $req->execute(array(
                'ID' => $_POST['ID_EN'],
               'NOM' => $_POST['Nom'],
               'PRENOM' => $_POST['Prenom'],
               'DOMAINE' =>$_POST['Domaine'],
               'EMAIL' =>$_POST['Email'],
             'TELEPHONE' =>$_POST['Telephone'],
             'NIVEAU' =>$_POST['Niveau'],
             'PHOTO' => $_FILES['IMAGE']['name']
            ));
        if ($req) {
                echo "valide";
            }else{
            echo "err";
            }
//    header('location:Enseignant.php');  
//echo "valider";
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
   else{
         require 'bd/connection.php';
         $req=$db->prepare("UPDATE ENSEIGNANT SET NOM=:NOM,PRENOM=:PRENOM,DOMAINE=:DOMAINE,EMAIL=:EMAIL,TELEPHONE=:TELEPHONE,NIVEAU=:NIVEAU WHERE ID=:ID");
               $req->execute(array(
                'ID' => $_POST['ID_EN'],
               'NOM' => $_POST['Nom'],
               'PRENOM' => $_POST['Prenom'],
               'DOMAINE' =>$_POST['Domaine'],
               'EMAIL' =>$_POST['Email'],
             'TELEPHONE' =>$_POST['Telephone'],
             'NIVEAU' =>$_POST['Niveau']
             ));
  
   header('location:Enseignant.php');
   return true;
   }
   }
   
   
   
   if(imgup()){
   
   
   
   }
   // var_dump($_FILES);
   
    
    
    
  }
?>





	