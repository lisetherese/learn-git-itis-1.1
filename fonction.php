<?php

include_once("connect.php");

function insertAdresse(int $numRue , string $nomRue, string $ville, string $cp): string
{
    
    // 2 la requete SQL
 $requete = "INSERT INTO `adresse`(`numRue`, `nomRue`, `ville`, `cp`,) VALUES (:numRue,:nomRue,:ville,:cp)";
 // 3 preparer la requete pour creer l'objet statement
   $statm =   $GLOBALS["connect"]->prepare($requete);
   // 4 creer le tableau de valeurs
   $valeur = array(':numRue'=>$numRue, ':nomRue'=>$nomRue,':ville'=>$ville,':cp'=>$cp);
   // 5 executer le requete
    
     $nbligne = $statm->execute($valeur);
     $lastId =  $GLOBALS["connect"]->lastInsertId();

     print_r( $statm->errorInfo());
    
     return  $lastId ;


}

function selectAdresse():Array
{
    $requete = "SELECT `id`, `numRue`, `nomRue`, `ville`, `cp` FROM `adresse` ";
    $result = $GLOBALS["connect"]->query($requete);
    $adresseArray =  $result->fetchAll(PDO::FETCH_ASSOC);
    print_r( $result->errorInfo());
    return   $adresseArray;

}


function insertMatiere(string $libelleMat, int $coeffMat): string
{
    
    // 2 la requete SQL
 $requete = "INSERT INTO `matiere`( `libelleMat`, `coeffMat`) VALUES (:libelleMat, :coeffMat)";
 // 3 preparer la requete pour creer l'objet statement
   $statm =   $GLOBALS["connect"]->prepare($requete);
   // 4 creer le tableau de valeurs
   $valeur = array(':libelleMat'=>$libelleMat, ':coeffMat'=>$coeffMat);
   // 5 executer le requete
    
     $nbligne = $statm->execute($valeur);
     $lastId =  $GLOBALS["connect"]->lastInsertId();
     print_r( $statm->errorInfo());
    
     return  $lastId ;

}


function selectMatiere():Array
{
    $requete = "SELECT `id`, `libelleMat`, `coeffMat` FROM `matiere`";
    $result = $GLOBALS["connect"]->query($requete);
    $matiereArray =  $result->fetchAll(PDO::FETCH_ASSOC);
    print_r( $result->errorInfo());
    return   $matiereArray;

}

function selectNoteBy($id){

   $requete = "SELECT user.id, user.nom , user.prenom, matiere.libelleMat,matiere.coeffMat,epreuve.lieu, epreuve.date_epreuve, notation.note FROM `notation` , user , epreuve,matiere WHERE notation.etudiant_id= user.id and notation.epreuve_id= epreuve.id and epreuve.matiere_id = matiere.id and etudiant_id = :id order by epreuve.date_epreuve";

   $statm = $GLOBALS['connect']->prepare($requete);

   $valeur = array(":id"=>$id);

   $result = $statm->execute($valeur);
   $noteArray = $statm->fetchAll(PDO::FETCH_ASSOC);

   return $noteArray;

}

function selectNotes():Array
{
    $requete = "SELECT notation.id, user.nom, user.prenom, classe.nomClasse, matiere.libelleMat, notation.note, epreuve.prof_id  FROM `notation`, `user`, `matiere`, `epreuve`, `classe` WHERE notation.etudiant_id = user.id AND user.classe_id = classe.id AND notation.epreuve_id = epreuve.id AND epreuve.matiere_id=matiere.id ORDER BY notation.id";
    $result = $GLOBALS["connect"]->query($requete);
    $notesArray = $result->fetchAll(PDO::FETCH_ASSOC);

    return   $notesArray;

}

function insertEpreuve(string $lieu, string $dateEpreuve, int $matiere_id , int $prof_id): string
{
    //echo "ok";
    // 2 la requete SQL
 $requete = "INSERT INTO `epreuve`( `lieu`, `date_epreuve`, matiere_id, prof_id) VALUES (:lieu, :date_epreuve, :matiere_id,:prof_id)";
 // 3 preparer la requete pour creer l'objet statement
   $statm =   $GLOBALS["connect"]->prepare($requete);
   // 4 creer le tableau de valeurs
   $valeur = array(':lieu'=>$lieu, ':date_epreuve'=>$dateEpreuve, ':matiere_id'=>$matiere_id, ':prof_id'=>$prof_id);
   // 5 executer le requete
    
     $nbligne = $statm->execute($valeur);
     $lastId =  $GLOBALS["connect"]->lastInsertId();
     print_r( $statm->errorInfo());
     return  $lastId ;

}

function insertNote(string $userid, string $epreuveid , float $note): string
{
    // echo "ok";
    // 2 la requete SQL
 $requete = "INSERT INTO `notation`( `etudiant_id`, `epreuve_id`, note) VALUES (:userid, :epreuveid,:note)";
 // 3 preparer la requete pour creer l'objet statement
   $statm =   $GLOBALS["connect"]->prepare($requete);
   // 4 creer le tableau de valeurs
   $valeur = array(':userid'=>$userid, ':epreuveid'=>$epreuveid, ':note'=>$note);
   // 5 executer le requete
    
     $nbligne = $statm->execute($valeur);
     $lastId =  $GLOBALS["connect"]->lastInsertId();
     //print_r( $statm->errorInfo());
     return  $lastId ;

}

function selectProfClasse(string $idprof):Array
{
    $requete = "SELECT DISTINCT classe.id , classe.nomClasse FROM `profclassematiere` , classe WHERE profclassematiere.id_classe= classe.id and profclassematiere.id_prof =:idprof"  ;
    $statm = $GLOBALS["connect"]->prepare($requete);
        $statm->execute(array(':idprof'=>$idprof));
    $classeArray =  $statm->fetchAll(PDO::FETCH_ASSOC);
    print_r( $statm->errorInfo());
    return   $classeArray;
}
function selectProfMatiereEpreuve(string $idprof, string $idMatiere):Array
{
    $requete = "SELECT epreuve.id , epreuve.date_epreuve FROM epreuve WHERE epreuve.matiere_id= :idMatiere and epreuve.prof_id =:idprof"  ;
    $statm = $GLOBALS["connect"]->prepare($requete);
        $statm->execute(array(":idMatiere"=>$idMatiere,':idprof'=>$idprof));
    $epreuveArray =  $statm->fetchAll(PDO::FETCH_ASSOC);
    //print_r( $statm->errorInfo());
    return   $epreuveArray;
}
function selectProfMatiereClasse(string $idprof, string $idClasse):Array
{
    $requete = "SELECT matiere.id , matiere.libelleMat FROM `profclassematiere` , matiere WHERE profclassematiere.id_matiere= matiere.id and profclassematiere.id_classe = :idClasse and profclassematiere.id_prof =:idprof"  ;
  
    $statm = $GLOBALS["connect"]->prepare($requete);
        $statm->execute(array(":idClasse"=>$idClasse,':idprof'=>$idprof));
    $matiereArray =  $statm->fetchAll(PDO::FETCH_ASSOC);
    return   $matiereArray;

}
function selectEtudiantByclasse(string $idClasse):Array
{
    $requete = "SELECT `id`, `nom`, `prenom` FROM `user` WHERE USER.classe_id = :idClasse and USER.role = :role"  ;
  
    $statm = $GLOBALS["connect"]->prepare($requete);
        $statm->execute(array(":idClasse"=>$idClasse,':role'=>"ROLE_ETUDIANT"));
    $userArray =  $statm->fetchAll(PDO::FETCH_ASSOC);
    
    // $epreuveArray = [0=>['id'=>6, "Coeff"=>5]], ........
    //print_r( $statm->errorInfo());
    return   $userArray;

}

?>