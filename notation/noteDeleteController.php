<?php
include_once('../connect.php');

if(isset($_GET['id'])){
    
    $requete = "DELETE FROM notation WHERE id=:id";
    $stm = $connect->prepare($requete);
    $valeur = array(":id"=>$_GET['id']);
    $nbligne = $stm->execute($valeur);
    if($nbligne){
        echo '<script> alert("les données sont bien supprimées") ;
         window.location.href ="notesSelectControllerProf.php" ;
         </script>';
    }else{
        echo '<script> alert("erreur"); </script>';
    }

}else{ echo 'erreur GET';}
