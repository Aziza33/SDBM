<? ob_start() ?>
<div class="">Chez SDBM, nous sommes fiers de servir une clientèle diversifiée, allant des bars et restaurants locaux aux grandes chaînes de distribution nationales. <br>Nous travaillons avec des professionnels du CHR (Café, Hôtel, Restaurant) pour fournir des bières de qualité supérieure. 
Nous sommes passionnés par notre travail et nous nous efforçons de proposer des produits de qualité supérieure à nos clients. Nous sommes convaincus que vous trouverez la bière parfaite pour votre goût !
</div>
<div class="text-center mt-5">
    <img src="./public/images/clients.jpg" alt="personnes dans un bar">
</div>

<?php

$content = ob_get_clean();
/*echo "clients 2 php";*/
$titre = "Nos clients";
require "template.php";

?>