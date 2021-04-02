<?php 
 // 1se connecter à la base de données
include_once("../connect.php");
$BASE = "http://localhost/ecolebts/";
if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])&&isset($_POST['id']))
{

 // 2 la requete SQL
 $requete = "Update user SET  nom = :nom , prenom =:prenom , email=:email where id=:id";
// 3 preparer la requete pour creer l'objet statement
  $statm =  $connect->prepare($requete);
  // 4 creer le tableau de valeurs
  $valeur = array(':nom'=>$_POST['nom'], ':prenom'=>$_POST['prenom'],':email'=>$_POST['email'],':id'=>$_POST['id']);
  // 5 executer le requete
   
    $nbligne = $statm->execute($valeur);

    echo $nbligne ;
    if($nbligne){

      echo ' <script> alert("les données sont bien modifiées") ; window.location.href ="userSelectController.php" ;</script>';
    }else {

      echo ' <script> alert("erreur") ; </script>';
    }

  
     
}else { echo " erreur post";}