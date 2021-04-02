<?php 
 // 1se connecter à la base de données
include_once("../connect.php");
include_once("../fonction.php");
$BASE = "http://localhost/ecolebts/";
if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['role'])&&isset($_POST['email'])&&isset($_POST['mdp'])&&isset($_POST['dateNais'])&&isset($_POST['adresse_id']))
{

 // 2 la requete SQL
 $requete = "INSERT INTO `user`( `nom`, `prenom`, `email`, `mdp`, `role`, `adresse_id`, `date_naissance`) VALUES (:nom,:prenom,:email,:mdp,:role,:adresse_id, :date_naissance )";
// 3 preparer la requete pour creer l'objet statement
  $statm =  $connect->prepare($requete);
  // 4 creer le tableau de valeurs
  $valeur = array(':nom'=>$_POST['nom'], ':prenom'=>$_POST['prenom'],':email'=>$_POST['email'],':mdp'=>$_POST['mdp'],':role'=>$_POST['role'], ':date_naissance'=>$_POST['dateNais'],":adresse_id"=>$_POST['adresse_id']);
  // 5 executer le requete
   
    $nbligne = $statm->execute($valeur);

    echo $nbligne ;
    if($nbligne){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="../homeVue.php" ;</script>';
    }else {

      echo ' <script> alert("erreur") ; </script>';
    }

  
     
}else { echo " erreur post";}