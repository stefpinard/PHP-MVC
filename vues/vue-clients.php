<?php

$titre = "Clients";
$entete = "Gestion des clients";
$pied = "Copyright 2019 IFPA";

ob_start();

?>

   <h1>Liste des clients</h1>

<form action="" method="get">
<input type="hidden" name="p" value="clients">
<label for="nom">Nom :</label><input type="text" id="nom" name="nom">
<label for="ville">Ville :</label><input type="text" id="ville" name="ville">
<button type="submit">Rechercher</button>

</form>

   <table>
      <thead>
         <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>cp</th>
            <th>ville</th>
            <th>mail</th>
         </tr>
      </thead>
      <tbody>
      <?php foreach($listeClients as $ligne): ?>
         <tr>
            <td> <?php echo $ligne['id']; ?> </td>
            <td> <?php echo $ligne['nom']; ?> </td>
            <td> <?php echo $ligne['prenom']; ?> </td>
            <td> <?php echo $ligne['adresse']; ?> </td>
            <td> <?php echo $ligne['cp']; ?> </td>
            <td> <?php echo $ligne['ville']; ?> </td>
            <td> <?php echo $ligne['mail']; ?> </td>
         </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

<?php $contenu = ob_get_clean(); ?>

<?php require_once("templates/template.php"); ?>