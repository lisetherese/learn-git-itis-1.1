  <script>
 

  let one = "selectMatiereprof.php?id=".this.idClasse
        let two = "selectEtudiantByClasse.php?id=".this.idClasse

           const requestOne = axios.get(one);
       const requestTwo = axios.get(two);



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








    changeMatiere:function changeMatiere() {
        axios.get('selectEtudiantByClasse.php', {
        params: {
          id : this.idClasse
        }
      })
      .then(response => (this.users = response))
      .catch(error => console.log(error))
       

    }
    
  }
  </script>