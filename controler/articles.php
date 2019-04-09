<?php

function rechArticles($nom = null){
try{
   $listeArticles = getArticles($nom);
   require_once('vues/vue-articles.php');
}
catch(Exception $erreur){
   affichErreur($erreur);
}
}

?>