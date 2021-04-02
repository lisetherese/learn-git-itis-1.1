<?php


 // 1se connecter à la base de données
include_once("../connect.php");
include_once("../fonction.php");
$BASE = "http://localhost/ecolebts/";
if(isset($_POST['numRue'])&&isset($_POST['nomRue'])&&isset($_POST['ville'])&&isset($_POST['cp']))
{

    $lastId =  insertAdresse($_POST['numRue'],$_POST['nomRue'],$_POST['ville'],$_POST['cp']);

    if(!empty($lastId)){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="../homeVue.php" ;</script>';
    }else {

      echo ' <script> alert("erreur") ; </script>';
    }


}
?>