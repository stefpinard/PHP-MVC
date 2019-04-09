<?php

$titre = "Accueil";
$entete = "Bienvenue";
$pied = "Copyright 2019 IFPA";

ob_start();
?>

<h1>Accueil</h1>
<a href="http://localhost/poo/projet1?p=clients"><img src="img/clt.png" alt="clients"></a>
<a href="http://localhost/poo/projet1?p=articles"><img src="img/art.png" alt="articles"></a>


<?php

//$contenu = ob_get_clean();

require("templates/template.php");

?>