<?php


 // 1se connecter à la base de données
include_once("../connect.php");
include_once("../fonction.php");
session_start();
if(isset($_POST['lieu'])&&isset($_POST['dateEpreuve']) && isset($_POST['matiere_id']))
{

    $lastId =  insertEpreuve($_POST['lieu'],$_POST['dateEpreuve'], $_POST['matiere_id'], $_SESSION['user']['id']);

    if(!empty($lastId)){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="../homeVue.php" ;</script>';
    }else {

      echo ' <script> alert("erreur") ; </script>';
    }


}
?>