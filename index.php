<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Projet 4</title> <!-- Onglet -->

        <!-- Mon CSS -->
        <link rel="stylesheet" href="css/fonts.css"/> <!-- Polices -->
        <link rel="stylesheet" href="css/style.css"/> <!-- Main CSS -->   
    </head>


    <body>
      

    <!-- Contenair englobant toute la page HTML -->  
    <div id="blocPage">



        <p>
            Cette page contient du code HTML avec des balises PHP. <br>
            <br>
            <?php echo "Bonjour ! "; ?> <!-- echo = insérer du texte -->
            Voici quelques petits tests :
        </p>
        <ul>
            <li>1. echo date('d/m/Y h:i:s') = <?php echo date('d/m/Y h:i:s'); ?></li>
            <li>2. echo $variable = <?php $variable = 28; echo "J'ai " . $variable . " ans." ?></li>
            <li>3. echo date('d/m/Y h:i:s') =</li>
        </ul>


       

    </div> <!-- Fin du blocPage -->



      
    </body>
 </html>    






