<?php include_once('../entete.php'); 
    include_once('../fonction.php');
?>
<br>
<br>
<br>
<br>


<form action="epreuveInsertController.php" method ="post">


  <label for="fname">Lieu:</label><br>
  <input type="text" id="lieu" name="lieu" required><br>

  <label for="fname">Date :</label><br>
  <input type="datetime-local" id="date" name="dateEpreuve" required><br>

  <label for="fmat">Matiere :</label><br> 
  <select name="matiere_id" >
    <?php $matieres = selectMatiere() ;
        var_dump($matieres);
    foreach($matieres  as $cle){
           echo '<option value="'.$cle['id'].'">'.$cle['libelleMat'].'</option>';
    }
    ?>
  </select>
  <select name="prof_id" >
    <?php $profs = selectProf() ;
        var_dump($matieres);
    foreach($matieres  as $cle){
           echo '<option value="'.$cle['id'].'">'.$cle['NomProf'].'</option>';
    }
    ?>
  </select>


  <input type="submit" value="Ajouter">
</form> 

<?php   //   $_POST = ['lieu'=> 'itisEvry'  ,  'dateEpreuve'=> '2020-11-29' , 'matiere_id'=> 1 ] ?>


</body>
</html>