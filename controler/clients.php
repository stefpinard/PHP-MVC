<?php

function rechClients($nom = null, $ville = null){
   try{
      $listeClients = getClients($nom, $ville);
      require_once('vues/vue-clients.php');
   }
   catch(Exception $erreur){
      affichErreur($erreur);
   }
}


?>