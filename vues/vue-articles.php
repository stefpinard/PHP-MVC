<?php

$titre = "Articles";
$entete = "Gestion des articles";
$pied = "Copyright 2019 IFPA";

ob_start();

?>

   <h1>Liste des articles</h1>

<form action="" method="get">
<input type="hidden" name="p" value="articles">
<label for="article">Article :</label><input type="text" id="article" name="article">
<button type="submit">Rechercher</button>

</form>
   <table>
      <thead>
         <tr>
            <th>id</th>
            <th>nom</th>
            <th>description</th>
            <th>prix HT</th>
            <th>poids</th>
         </tr>
      </thead>
      <tbody>
      <?php foreach($listeArticles as $ligne): ?>
         <tr>
            <td> <?php echo $ligne['id']; ?> </td>
            <td> <?php echo $ligne['nom']; ?> </td>
            <td> <?php echo $ligne['description']; ?> </td>
            <td> <?php echo $ligne['prixht']; ?> </td>
            <td> <?php echo $ligne['poids']; ?> </td>
         </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

<?php $contenu = ob_get_clean(); ?>

<?php require_once("templates/template.php"); ?>