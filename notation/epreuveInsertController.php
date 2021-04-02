<?php


 // 1se connecter à la base de données
include_once("../connect.php");
include_once("../fonction.php");
session_start();
if(isset($_GET['lieu'])&&isset($_GET['dateEpreuve']) && isset($_GET['matiere_id']))
{

    $lastId =  insertEpreuve($_GET['lieu'],$_GET['dateEpreuve'], $_GET['matiere_id'], $_SESSION['user']['id']);

    if(!empty($lastId)){

      echo 'true';
    }else {

      echo 'false';
    }


}
?>