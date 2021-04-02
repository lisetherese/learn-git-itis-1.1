<?php include_once('../entete.php'); 
      include_once('../fonction.php'); 
    
?>
<br>
<br>


<div id="myapp" >
<table> 
<td> 
<label for="classe" class="control-label">Classe</label>
<select  v-model='idClasse' v-on:change="selectItem()" >
    <?php $classes = selectProfClasse($_SESSION['user']['id']) ;
        echo "<option value='0' >Select Classe</option>";
    foreach($classes  as $cle){
           echo '<option value="'.$cle['id'].'">'.$cle['nomClasse'].'</option>';
    }
    ?>
  </select>

  </td>

<td>
<label for="matiere" class="control-label">Matiere</label>
<select v-model='idMatiere'  v-on:change="selectMatiere()"  >
          <option value='0' >Select Matiere</option>
          <option v-for='val in matieres.data' :value='val.id'>{{ val.libelleMat }}</option>
        </select>
    </td>

<td>
<label for="epreuve" class="control-label">Epreuve</label>
<select v-model='idEpreuve'  v-on:change="selectEpreuve()">
    <option value='0' >Select Epreuve</option>
    <option v-for='val in epreuves.data' :value='val.id'>{{ val.date_epreuve }}</option>
</select>
</td>

</table>

<h3>Etudiants en Classe</h3>
<form action = "ajouterNotesController.php" method = 'post'>
<table border = '2' style='border-collapse:collapse;' width ='30%'>
    <thead>
  <tr>
  <th>Id</th>
  <th>Nom</th>
  <th>Prenom</th>
  <th>Note</th>
  </tr>
    </thead>
    <tbody>
     <tr v-for="val in users.data" >
       <td>{{ val.id }}</td>
       <td>{{ val.nom }}</td>
       <td>{{ val.prenom }}</td>
        <td><input type='number' :id='val.id' :name = 'note' required></td>
        /*<td><input type='number' id='notes' name = 'note' required></td>*/
     </tr>
    </tbody>
</table>

<br><br>
<button type = 'submit' formaction ='ajouterNotesController.php' >Valider notes</button>
</form>
<br><br>
<button id="show-modal" @click="showModal = true" :disabled="etat">Créer une epreuve</button>
      <!-- use the modal component, pass in the prop -->
      <modal v-if="showModal" @close="showModal = false">
        <!--
      you can use custom content here to overwrite
      default content
    -->
        <!--<h3 slot="header">custom header</h3>-->
                                              <div slot="header">
                                              <button class="modal-default-button" @click="showModal = false">Close</button></div>
      </modal>

     

  </div>

</body>




<script>
Vue.component("modal", {
        template: "#modal-template",
        props: ['show'],
  data: function () {
    return {
      lieu: '',
      dateEpreuve: '',
    
    };
  },
  methods: {
    close: function () {
     
      this.$emit('close');
      this.lieu = '';
      this.dateEpreuve = '';
    },
    savePost: function () {
    
      axios.get('epreuveInsertController.php', {
        params: {
          matiere_id : app.idMatiere,
          lieu:this.lieu,
          dateEpreuve:this.dateEpreuve
        }
      })
      .then(response => (this.val = response))
      .catch(error => console.log(error))
     
      this.close();
    }
  },
  mounted: function () {
    document.addEventListener("keydown", (e) => {
      if (this.show && e.keyCode == 27) {
        this.close();
      }
    });
  }
      });

      
var app = new Vue({
  el: '#myapp',
  data: {
    idClasse: 0,
    matieres :[],
    idMatiere :0,
    users : [],
    idEpreuve : 0,
    epreuves : [],
    etat: true,
    showModal: false,
    val :0
  

  
  },
  methods: {

    selectItem: function selectItem() {
      
           const requestOne = axios.get('selectMatiereProfClasseController.php', {
        params: {
          id_classe : this.idClasse
        }
      });
       const requestTwo = axios.get('selectEtudiantByClasse.php', {
        params: {
          id : this.idClasse
        }
      });
      
       axios.all([requestOne, requestTwo ])
      .then(axios.spread((...responses) => {
      this.matieres = responses[0];
      this.users = responses[1];
     
    })
  )
      .catch(error => console.log(error))

    },
    selectMatiere:function selectMatiere() {
      const requestOne = axios.get('selectProfMatiereEpreuve.php', {
        params: {
          id_matiere : this.idMatiere
        }
      });
      axios.all([requestOne])
      .then(axios.spread((...responses) => {
      this.epreuves = responses[0];
      })
      )
      .catch(error => console.log(error))
      
    },
    selectEpreuve:function selectEpreuve(){
      this.etat = false
    }
   
 
  }
    
  });
</script>
</html>