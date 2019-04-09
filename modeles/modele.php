<?php

function getConnex(){
   $hote = 'localhost';
   $bdd = 'poo';
   $utilisateur = 'poo';
   $mdp = 'poo';

   $pdo = new PDO('mysql:host='.$hote.';dbname='.$bdd, $utilisateur, $mdp);
   return $pdo;
}

function getClients($nom = null, $ville = null){
   $pdo = getConnex();
   $requete = $pdo->prepare('SELECT * from clients WHERE nom LIKE ? and ville LIKE ? ORDER BY nom, ville;');
   $requete->execute(array($nom.'%', $ville.'%'));
   $liste = $requete->fetchAll(PDO::FETCH_ASSOC);
   return $liste;
}

function getArticles($nom = null){
   $pdo = getConnex();
   $requete = $pdo->prepare('SELECT * from articles WHERE nom LIKE ? ORDER BY nom;');
   $requete->execute(array($nom.'%'));
   $liste = $requete->fetchAll(PDO::FETCH_ASSOC);
   return $liste;
}

