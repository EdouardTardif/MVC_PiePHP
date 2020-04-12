<div>
   <form action="./../../film/update/<?php echo $film->id ?>" method="POST">
      <label>id: </label><p><?php echo $film->id ?></p><br>
      <label>Titre: </label><input type="text" name="titre" value="<?php echo $film->titre ?>"><br>
      <label>Resume: </label><input type="text" name="resum" value="<?php echo $film->resum ?>"><br>
      <label>Debut Affiche: </label><input type="text" name="date_debut_affiche" value="<?php echo $film->date_debut_affiche ?>"><br>
      <label>Fin affiche: </label><input type="text" name="date_fin_affiche" value="<?php echo $film->date_fin_affiche ?>"><br>
      <label>Duree en minutes: </label><input type="text" name="duree_min" value="<?php echo $film->duree_min ?>"><br>
      <label>Annee de production: </label><input type="text" name="annee_prod" value="<?php echo $film->annee_prod ?>"><br>
      <label>genre: </label><p><?php echo $film->genre->nom ?></p><br>
      <button class="btn btn-primary" type="submit">Changer les informations</button>
      <a href="./../../film/delete/<?php echo $film->id ?>" class="btn btn-danger">SUPPRIMER LE FILM</a>
   </form>
    
</div>