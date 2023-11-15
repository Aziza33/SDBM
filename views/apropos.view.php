<? ob_start() ?>
<div class="text-justify-content" >
    <p class="paragraphe text-justify-content">
SDBM est une entreprise spécialisée dans l'importation et la vente de bières de qualité supérieure du monde entier. 
Nous avons été fondés en 1991 par Jean-Luc Gutierrez et depuis, nous sommes devenus un acteur majeur de la bière en France. 
Nous sommes fiers de proposer une sélection unique de bières de spécialité soigneusement sélectionnées pour être distribuées partout en France.
Notre mission est de fournir les meilleures bières aux professionnels du CHR comme de la grande distribution. Nous sommes passionnés par notre travail et nous efforçons de proposer des produits de qualité supérieure à nos clients.
</p>
</div>
<div class="text-center mt-5">
    <img src="./public/images/apropos.jpg" alt="notre equipe">
</div>
<?php

$content = ob_get_clean();

$titre = "A propos";
require "template.php";
?>