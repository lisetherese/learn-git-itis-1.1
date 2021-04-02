<?php 
include_once("../connect.php");


if( isset($_POST['id']) && isset($_POST['nom']) &&    isset($_POST['prenom'])&& isset($_POST['libelleMat'])&& isset($_POST['note']))

{
    
    $requete= "UPDATE `notation` SET `note`= :note WHERE `id`=:id";
    
    $stm = $connect->prepare($requete);
 
    $valeur = array(':id'=>$_POST['id'],':note'=>$_POST['note']);

    $nbligne = $stm->execute($valeur);
   
    if($nbligne==1){
        
        echo '<script> alert("les données sont bien modifiées") ; window.location.href ="notesSelectControllerProf.php" ;</script>';
    }else{

        echo '<script> alert("erreur"); </script>';
    }

}else {echo "erreur post";}