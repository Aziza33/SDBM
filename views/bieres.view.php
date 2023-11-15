<?php ob_start() ?>

<!--j'ai mis en place un buffer, une tamporisation via la fonction ob_start. La fonction ob_get_clean permet de déverser directement dans ma variable content tout ce qu'il y a entre les 2.    
Mon buffer se remplit entre les 2 fonctions ob_start et ob_get_clean puis se déverse dans la variable $content. Je vais pouvoir coder sans problème en html.

<h1>Toutes nos bières</h1> -->

<button type="submit" class="btn btn-success float-end clearfix">Ajouter</button>
<table class="table text-center">
<thead>
<tr class="table-white">
    <th>Image</th>
    <th>ID</th>
    <th>Nom</th>
    <th>Volume</th>
    <th>Marque</th>
    <th>Couleur</th>
    <th>type</th>
    <th colspan="2">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach ($beers as $beer): ?>
            <tr class="text-center justify-content">
                <!-- Affiche la valeur dans une cellule de tableau -->
                <td><img src="./public/images/<?= $beer['IMAGE'] ?>" alt=""></td> 
                <td><?= $beer['ID_ARTICLE'] ?> </td>
                <td><?= $beer['NOM_ARTICLE'] ?></td>
                <td><?= $beer['VOLUME'] ?> </td>
                <td><?= $beer['NOM_MARQUE'] ?> </td>
                <td><?= $beer['NOM_COULEUR'] ?> </td>
                <td><?= $beer['NOM_TYPE'] ?> </td>
                <td><a href="blondes/<?= $beer['ID_ARTICLE'] ?>/delete">Delete</a></td>
                <td><a href="blondes/<?= $beer['ID_ARTICLE'] ?>/update">Update</a></td>
            </tr>
        <!-- Fin de la boucle -->
        <?php endforeach ?>

</tbody>
</table>



<?php

$content = ob_get_clean();
require "template.php";
?>

