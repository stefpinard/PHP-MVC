<?php

$titre = "Erreur";
$entete = "Gestion des erreurs";
$pied = "Copyright 2019 IFPA";

$contenu = <<<FIN

<h1>Une erreur est survenue</h1>

<p>Message : $message </p>
<p>Code : $code </p>


FIN;

require_once("templates/template.php");