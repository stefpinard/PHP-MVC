<?php 
   function cb_fonction($tampon){
      // la fonction de call-back reçoit le tampon de sortie en paramètre
      // et le renvoie après remplacement de chaîne
      return str_replace("désappointé","content",$tampon);
   }
   // démarrage de la temporisation, avec fonction de call-back
   ob_start("cb_fonction"); 
?>

<!DOCTYPE html>
<head>
   <title>Document</title>
</head>
<body>
   <p>Je suis très désappointé !</p>
</body>
</html>

<!DOCTYPE html>
<head>
   <title>Document</title>
</head>
<body>
   <p>Je suis très content !</p>
</body>
</html>





<?php 
   // affichage et vidage du tampon de sortie
   ob_flush(); 
?>