<div>
   <form action="./../../genre/update/<?php echo $genre->id ?>" method="POST">
      <label>id: </label><p><?php echo $genre->id ?></p><br>
      <label>Nom du genre: </label><input type="text" name="nom" value="<?php echo $genre->nom ?>"><br>
      <button class="btn btn-primary" type="submit">Changer les informations</button>
      <a href="./../../genre/delete/<?php echo $genre->id ?>" class="btn btn-danger">SUPPRIMER LE GENRE</a>
   </form>
</div>