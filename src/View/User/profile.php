<div>
   <form action="./../update" method="POST">
      <label>Mon id: </label><p><?php echo $user->id ?></p><br>
      <label>Mon email: </label><input type="email" name="email" value="<?php echo $user->email ?>"><br>
      <label>Mon nom: </label><input type="text" name="nom" value="<?php echo $user->nom ?>"><br>
      <label>Mon prenom: </label><input type="text" name="prenom" value="<?php echo $user->prenom ?>"><br>
      <label>Mon adresse: </label><input type="text" name="adresse" value="<?php echo $user->adresse ?>"><br>
      <label>Mon ville: </label><input type="text" name="ville" value="<?php echo $user->ville ?>"><br>
      <label>Mon code postal: </label><input type="text" name="cpostal" value="<?php echo $user->cpostal ?>"><br>
      <label>Mon pays: </label><input type="text" name="pays" value="<?php echo $user->pays ?>"><br>
      <button class="btn btn-primary" type="submit">Changer mes informations</button>
      <a href="./../user/delete" class="btn btn-danger">SUPPRIMER SON PROFILE</a>
   </form>
    
</div>