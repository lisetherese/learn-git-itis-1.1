<?php


 // 1se connecter à la base de données
include_once("../connect.php");
include_once("../fonction.php");
if(isset($_POST['libelleMat'])&&isset($_POST['coeffMat']))
{

    $lastId =  insertMatiere($_POST['libelleMat'],$_POST['coeffMat']);

    if(!empty($lastId)){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="../homeVue.php" ;</script>';
    }else {

      echo ' <script> alert("erreur") ; </script>';
    }


}
?>