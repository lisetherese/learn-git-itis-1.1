<?php 
 // 1se connecter à la base de données
include_once("../connect.php");
include_once("../fonction.php");
$BASE = "http://localhost/ecolebts/";
if(isset($_POST['adresse_id'])&&isset($_POST['id'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])&&isset($_POST['numRue'])&&isset($_POST['nomRue'])&&isset($_POST['ville'])&&isset($_POST['cp']))
{

// inserer l'adresse : la fonction retourne le dernier id enregistré
$lastId =  updateAdresse($_POST['adresse_id'],$_POST['numRue'],$_POST['nomRue'],$_POST['ville'],$_POST['cp']);


 // 2 la requete SQL
 $requete = "UPDATE `user` SET `nom`=:nom,`prenom`=:prenom,`email`=:email WHERE id=:id";
// 3 preparer la requete pour creer l'objet statement
  $statm =  $connect->prepare($requete);
  // 4 creer le tableau de valeurs
  $valeur = array(':nom'=>$_POST['nom'], ':prenom'=>$_POST['prenom'],':email'=>$_POST['email']);
  // 5 executer le requete
   
    $nbligne = $statm->execute($valeur);
    print_r($connect->errorInfo());
    echo $nbligne ;
    if($nbligne){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="../homeVue.php" ;</script>';
    }else {
      print_r($connect->errorInfo());
     // echo ' <script> alert("erreur") ; </script>';
    }

  
     
}else { echo " erreur post";}