<div class="container">
    <form action="./../film/register" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Id</label>
        <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Id Genre</label>
        <input name="id_genre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id genre">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Id Distrib</label>
        <input name="id_distrib" type="text" class="form-control" placeholder="id Distributeur">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Titre</label>
        <input name="titre" type="text" class="form-control" placeholder="titre">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Resume</label>
        <input name="resum" type="text" class="form-control" placeholder="Resume">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">debut affiche</label>
        <input name="date_debut_affiche" type="text" class="form-control" placeholder="Debut affiche">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Fin affiche</label>
        <input name="date_fin_affiche" type="text" class="form-control" placeholder="Fin affiche">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Duree en minutes</label>
        <input name="duree_min" type="text" class="form-control" placeholder="Duree">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Annee de production</label>
        <input name="annee_prod" type="text" class="form-control" placeholder="Annee de production">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer un nouveau film</button>
    </form>
</div>
