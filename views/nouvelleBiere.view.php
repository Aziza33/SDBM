<?php
include "views/navbar.php";
 ?>

<div class="container h-100">
      <div class="text-center">
        <h1>UNE NOUVELLE BIERE</h1>

        <form action="nouvelleBiere.view.php" method="POST">
          <label for="NOM_ARTICLE">Name of beer:</label>
            <input type="text" id="NOM_ARTICLE" name="beerName" required>

          <label for="VOLUME">Volume:</label>
            <input type="text" id="VOLUME" name="volume" required>

          <label for="marque">Brand:</label>
            <input type="text" id="marque" name="brandName" required>

          <label for="ID_COULEUR">Color:</label>
            <input type="text" id="ID_COULEUR" name="color" required>

          <label for="typebiere">kind:</label>
            <input type="text" id="typebiere" name="type" required><br>
              <br>

           <input type="submit" class="btn btn-success d-block" value="ADD">
        </form>
      </div>
<br><br>
<a href="" type="submit" class="btn btn-success d-block">Ajouter</a>

