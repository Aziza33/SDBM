
<?php ob_start() ?>
<div class="container text-center mb-5">
    <img src="./public/images/accueil.jpg" alt="personnes qui s'amusent">
</div>
<div class="container text-center">

    <h1>Découvrez 5 bières au hasard :</h1>

    <table class="table">
        <thead class="thead-">
            <tr class="text-center">
                <!-- En-têtes des colonnes -->
                <th scope="col">N° bière</th>
                <th scope="col">Nom bière</th>
                <th scope="col">Couleur</th>
                <th scope="col">Type</th>
            </tr>
        </thead>

        <tbody>
        <!-- Boucle pour chaque bière dans la variable $beers qui vient de la méthode getRandBeers, découpage du tablau $beers en ligne $beer -->
        <?php foreach ($beers as $beer): ?>
            <tr class="text-center">
                <!-- Affiche la valeur dans une cellule de tableau -->
                <td><?= $beer['ID_ARTICLE'] ?></td>
                <td><?= $beer['NOM_ARTICLE'] ?></td>
                <td><?= $beer['NOM_COULEUR'] ?></td>
                <td><?= $beer['NOM_TYPE'] ?></td>
            </tr>
        <!-- Fin de la boucle -->
        <?php endforeach ?>
        </tbody>
    </table>

</div>


<?php
$titre = "Accueil";
$content = ob_get_clean();
require "template.php";
?>

