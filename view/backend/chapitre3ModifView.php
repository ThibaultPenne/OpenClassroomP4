

 <?php ob_start(); ?>
    <h1 class="">Chapitre 3</h1>
    <p class="col-12 m-auto pb-5">
        crée le 13/09/19
    </p>
<?php $myChapInfo1 = ob_get_clean(); ?>

<!-- --------------------------- -->

<?php ob_start(); ?>

    <div class="form-group">
        <label id="labelTitreChap" for="inputAddress">Titre du chapitre</label>
        <input type="text" class="form-control" id="inputTitreChap" value="Question de bon sens">
    </div>
    <div id="champDL" class="input-group mb-3">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputfileDL">
            <label class="custom-file-label" for="inputfileDL" aria-describedby="inputGroupFileAddon02">../../public/images/chap03Img.png</label>
        </div>
    </div>

<?php $myChapInfo2 = ob_get_clean(); ?>

<!-- --------------------------- -->
<?php ob_start(); ?>

Les lumières de la ville occultaient les étoiles dans le ciel. Le bourdonnement constant de New York emplissait l’air, composé des bruits conjugués de millions de gens et de voitures. Pour les habitants de la « Grosse Pomme », c’était une symphonie envoûtante. En général, les touristes le trouvaient stimulant et excitant. En ce qui le concernait, ce bourdonnement l’agaçait au plus haut point. Comment entendre ses ennemis approcher avec un tel bruit de fond ?
Il sortit ses clés de sa poche.
— Va m’attendre dans la voiture, lança-t‑il à sa partenaire. Je fais un saut aux toilettes avant de partir. Je reviens tout de suite.
Jen serra son manteau sur elle et prit les clés.
Puis tout se passa à la vitesse de l’éclair.
Lara sortit du restaurant. Plus vite qu’il ne s’y attendait. Peut‑être courait‑elle. Elle serrait les bras sur sa taille sous le coup de fouet du vent.
— Reid ? Que…  ?
Sa voix se perdit dans un hurlement de pneus tandis qu’un SUV noir marquait un arrêt brutal le long du trottoir, et que deux hommes masqués — l’un sur le siège passager, l’autre à l’arrière — ouvraient le feu.
Reid plongea vers Lara, vaguement conscient du fait que Jen se jetait sur le sol derrière lui comme une pro. Enveloppant Lara de ses bras, il roula avec elle jusqu’à l’abri fourni par l’imposant panneau publicitaire du restaurant.
Une balle perfora celui-ci à trois centimètres de sa tête, lui rappelant s’il le fallait que les poubelles, portières de voitures et autres obstacles improvisés ne protégeaient des balles que dans les films. Mais au moins, grâce à lui, les tireurs ne pouvaient pas les viser avec précision.
Lors d’une accalmie dans les tirs, il risqua un œil hors de leur abri. Le SUV faisait marche arrière pour se rapprocher d’eux.
Il sauta sur ses pieds, releva Lara, et, s’élançant avec elle, les fit s’accroupir derrière la voiture la plus proche, puis la suivante, tandis que la fusillade reprenait et que les balles ricochaient autour d’eux.
Enfin, il fut près de son propre véhicule. L’instant d’après, grâce à un double de la clé caché sous l’aile avant, ils se glissèrent à l’intérieur.

Quelques secondes plus tard, ils quittaient cet enfer, bénéficiant d’un avantage temporaire : ils se trouvaient dans le bon sens, alors que leurs ennemis devaient effectuer une marche arrière pour les prendre en chasse.

<img src="../../public/images/chap03Img.png">

La dernière chose qu’il vit avant de s’engager sur le large boulevard fut le SUV noir opérant un demi-tour, et le corps inerte de Jen baignant dans une mare de sang, illuminé par le néon du restaurant. Une image digne d’un ancien film policier.
Sauf qu’ici, il s’agissait de la vraie vie.
Il jura sourdement.
Il venait de perdre son atout le plus prometteur dans une affaire brûlante. Les dents serrées, il écrasa la pédale d’accélérateur et slaloma entre les véhicules.
— Reid ?
La voix de Lara était faible, ce qui lui était inhabituel.
Elle était assise aussi loin que possible de lui, et son expression était celle de quelqu’un qui a vu un fantôme. Ce qui, d’une certaine manière, n’était pas faux. Car selon les informations qu’elle avait dû avoir de lui, il était mort deux ans plus tôt, la nuit où il avait perdu tout contrôle avec elle, dans la boulangerie.
— Je ne comprends pas…
— Une minute.
Il ne pouvait pas se permettre d’être distrait en ce moment précis. Levant les yeux vers le rétroviseur intérieur, il jura entre ses dents.

<?php $myChapContent = ob_get_clean(); ?>

<!-- --------------------------- -->

<?php require('templateNewChap.php'); ?>





