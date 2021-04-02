<?php 
include_once("../connect.php");


if( isset($_POST['id']) && isset($_POST['libelleMat']) &&    isset($_POST['coeffMat']))

{
    // 2 creation de la requete mysql preparer
    $requete= "UPDATE `matiere` SET `libelleMat`= :libelleMat, `coeffMat`=:coeffMat WHERE `id`=:id";
   
    // 3 creer l'objet PDO statement a partir de l'objet $connect
    $stm = $connect->prepare($requete);
    
    // 4 creer le tableau de valeurs
    $valeur = array(':id'=>$_POST['id'],':libelleMat'=>$_POST['libelleMat'],':coeffMat'=>$_POST['coeffMat']);

    // 5 executer la requete
    $nbligne = $stm->execute($valeur);
    // echo $nbligne;
    if($nbligne==1){
        //header('location:home.php');
        echo '<script> alert("les données sont bien modifiées") ; window.location.href ="matiereSelectController.php" ;</script>';
    }else{

        echo '<script> alert("erreur"); </script>';
    }

}else {echo "erreur post";}