<?php
include "views/navbar.php";
 ?>

<div class="container h-100">
      <div class="text-center">
        <h1>UNE NOUVELLE COULEUR DE BIERE</h1>

        <form action="nouvelleCouleur.view.php" method="POST">
         
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

