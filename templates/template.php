<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php echo $titre; ?></title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
   
<div id="principal">

   <header><?php echo $entete; ?></header>
   <nav><ul>
      <a href="./"><li>Accueil</li></a>
      <a href="?p=clients"><li>Clients</li></a>
      <a href="?p=articles"><li>Articles</li></a>
   </ul></nav>
   <div id="contenu"><?php echo $contenu; ?></div>
   <footer><?php echo $pied; ?></footer>


</div>


</body>
</html>