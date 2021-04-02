<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

  <?php
  $BASE = "http://localhost/ecolebts/";
 
    echo '<link rel="stylesheet" type="text/css" href="'.$BASE.'/css\menu.css" />';
  ?>
  <script type="text/x-template" id="modal-template">
      <transition name="modal">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container">

                            <label for="fname">Lieu:</label><br>
                           <input type="text" id="lieu" name="lieu" v-model="lieu" required><br>

                             <label for="fname">Date :</label><br>
                                <input type="datetime-local" id="date" v-model="dateEpreuve" required><br>


              <div class="modal-footer">
                <slot name="footer">
               
                  <button class="modal-default-button" @click="savePost()">
                    Ajouter 
                  </button>
                </slot>
              </div>
            </div>
          </div>
        </div>
      </transition>
    </script>
</head>
<body>
<ul>
<li><a href="<?php echo $BASE;?>homeVue.php">Home</a></li>
  <?php
  if (!isset($_SESSION['user'])) 
  {  
    
    
    ?>
          <li><a href="<?php echo $BASE;?>user\loginFormulaire.php">Se Connecter</a></li>
         

  <?php 
  } else {   
               
                        if( $_SESSION['user']['role']== 'ROLE_ADMIN')
                          { ?>

                                <li><a href="<?php echo $BASE;?>user\inscriptionFormulaire.php">S'inscrire</a></li>
                              <li><a href="<?php echo $BASE;?>user\userSelectController.php">Afficher users</a></li>

                              <li> <div class="dropdown">
                                              <button class="dropbtn">Adresse</button>
                                      <div class="dropdown-content">
                                      <a href="<?php echo $BASE;?>adresse\adresseFormulaire.php">Ajouter</a>
                                      <a href="<?php echo $BASE;?>adresse\adresseSelectController.php">Afficher</a>
                                      </div>
                              </li>

                              <li> <div class="dropdown">
                                              <button class="dropbtn">Matière</button>
                                      <div class="dropdown-content">
                                      <a href="<?php echo $BASE;?>matiere\matiereFormulaire.php">Ajouter</a>
                                      <a href="<?php echo $BASE;?>matiere\matiereSelectController.php">Afficher</a>
                                      </div>
                              </li>

                              <li> <div class="dropdown">
                                              <button class="dropbtn">Epreuve</button>
                                      <div class="dropdown-content">
                                      <a href="<?php echo $BASE;?>epreuve\epreuveFormulaire.php">Ajouter</a>
                                      <a href="<?php echo $BASE;?>epreuve\epreuveSelectController.php">Afficher</a>
                                      </div>
                              </li>
                              <li> <div class="dropdown">
                                              <button class="dropbtn">Notes</button>
                                      <div class="dropdown-content">
                                      <a href="<?php echo $BASE;?>notation\noteFormulaire.php">Ajouter</a>
                                      <a href="<?php echo $BASE;?>notation\notesSelectControllerProf.php">Afficher</a>
                                      </div>
                              </li>
                            <?php } elseif( $_SESSION['user']['role']== "ROLE_ETUDIANT")
                                       {?>

                                       <li><a href="<?php echo $BASE;?>notation\notesSelectControllerEtudiant.php">Notes</a></li>

                                         
                                       <?php } else {
                                              ?>
                                              <li><a href="<?php echo $BASE;?>notation\notesSelectControllerProf.php">Afficher Notes</a></li>
                                                    <li><a href="<?php echo $BASE;?>notation\noteFormulaire.php">Ajouter Notes</a></li>
                                           
                                       <?php }?>
                  <li><a href="<?php echo $BASE;?>deconnecterController.php">Se déconnecter</a></li>
                                            
         
    <?php }?>
          
</div>
                

       
</ul>