<?php

require("modeles/modele.php");
require("controler/articles.php");
require("controler/clients.php");
require("controler/accueil.php");

// affichage de la page erreur
function affichErreur($erreur){
   $message = $erreur->getMessage();
   $code = $erreur->getCode();
   require("vues/vue-erreur.php");
}

// affichage des erreurs avec mise en forme
function var_dump2($variable){
   echo "<pre>";
   print_r($variable);
   echo "</pre>";
}


/****************** REDIRECTION PAGES ******************** */

if(isset($_GET["p"])){
   $page = $_GET["p"];
} else {
   $page = "";
}

switch($page){
   case "articles":{
      if (isset($_GET["article"])){
         $nom = $_GET["article"];
      } else {
         $nom = "";
      }
      rechArticles($nom);
      break;
   }

   case "clients":{
      if (isset($_GET["nom"]) && isset($_GET["ville"])){
         $nom = $_GET["nom"];
         $ville = $_GET["ville"];
      } else {
         $nom = "";
         $ville = "";
      }
      rechClients($nom, $ville);
      break;
   }

   default:{
      rechAccueil();
   }
}



