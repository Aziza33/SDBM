<? ob_start() ?>
Bien que SDBM soit une entreprise française, elle importe des bières du monde entier. Les bières sont sélectionnées pour leur qualité, leur goût unique et leur histoire. 

SDBM travaille avec des brasseries artisanales et familiales pour offrir une sélection de bières de qualité supérieure du monde entier. 
Europe, Asie, Océanie, Amérique ou Afrique, voyagez avec SDBM !

<div class="text-center mt-5">
<img src="./public/images/mappemonde2.jpg" alt="mappemonde">
</div>
<?php

$content = ob_get_clean();
$titre = "D'où viennent nos bières ?";
require "template.php";
?>