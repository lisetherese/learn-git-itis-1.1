<?php include_once('../entete.php'); 
      include_once('../fonction.php'); 
?>
<br>
<br>


<div id ="app" >
<table> 
<td> 
<select  v-model ="idClasse"  v-on:change= "changeItem()">
    <?php $classes = selectprofClasse("15" ); // remplacer le 15 par $_SESSION['user]['id']
        echo "<option value='0' >Select Classe</option>";
    foreach($classes  as $cle)
    {
           echo '<option value="'.$cle['id'].'">'.$cle['nomClasse'].'</option>';
    }
    ?>
  </select>
{{idClasse}}
  </td>
  <td>
  <label for="matiere" class="control-label">Matiere</label>
<select v-model='idMatiere'  v-on:change="changeMatiere()"  >
          <option value='0' >Select Matiere</option>
          <option v-for='val in matieres.data' :value='val.id'>{{ val.libelleMat }}</option>
        </select>


  </td>
  </table>
  <button id="show-modal" :disabled="etat">Créer un devoir</button>


</div>
</body>
<script>
var app = new Vue({
el:"#app",
data : {
     idClasse:0,
     matieres:[],
     idMatiere:0,
     etat : true 

},
methods: {

 changeItem: function changeItem() {
      // this.idClasse = event.target.value
       axios.get('selectMatiereprofClasseController.php', {
        params: {
          id_classe : this.idClasse
          
        }
      })
      .then(response => (this.matieres = response))
      .catch(error => console.log(error)) 
},
changeMatiere: function changeMatiere() {
   this.etat = false

}
}




})
</script>

  </html>