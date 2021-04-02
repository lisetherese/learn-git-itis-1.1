<?php

  include_once('../connect.php');

  //
  if(isset($_GET['id'])){

        $requete = "DELETE FROM `matiere` WHERE id=:id";

        $statm = $connect->prepare($requete);

        $valeur = array(':id'=>$_GET['id']);

        $nbligne = $statm->execute($valeur);

       if($nbligne){
        echo '<script> alert("les données sont bien supprimées") ;
        window.location.href ="matiereSelectController.php" ;
        </script>';  
        exit ;
       }else {

               echo ' <script> alert("votre table est vide") ; window.location.href ="matiereSelectController.php" ;</script>';
               
       }


  }else{ echo "erreur GET";}
  ?>