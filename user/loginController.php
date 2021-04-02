<?php
  include_once('../connect.php');
$BASE = "http://localhost/ecolebts/";


if( isset($_POST['email'])    &&    isset($_POST['mdp']))

{  
    $requete = "SELECT `id`, `nom`, `prenom`, `email`, `role` FROM `user` WHERE
     email = :email and mdp =:mdp ";
    $stm = $connect->prepare($requete);
    // tableau valeur
    $valeur = array(":email"=>$_POST['email'], ":mdp"=>$_POST['mdp']);
    $stm->execute($valeur);
    // PDOStatement::fetch — Récupère la ligne suivante d'un jeu de résultats PDO
    $user = $stm->fetch(PDO::FETCH_ASSOC);
     var_dump($user);
         if( !empty($user)   )
                     {     
                           session_start();
                           $_SESSION['user'] = $user ;
                            
                           // redirect
                           header('location:'.$BASE.'\homeVue.php');
                           exit ;
                    }else {
                                 // ? = la methode $_GET['erreur'] = email ou mot de passe  non valide
                                 header('location:loginFormulaire.php?erreur=email ou mot de passe  non valide');    

                    }
}else {   echo "erreur post"  ;}




?>