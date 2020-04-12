<div class="container">
    <form action="./user/register" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nom</label>
        <input name="nom" type="text" class="form-control" placeholder="Nom">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Prenom</label>
        <input name="prenom" type="text" class="form-control" placeholder="Prenom">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Date de naissance</label>
        <input name="date_naissance" type="date" class="form-control" placeholder="Prenom">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Adresse</label>
        <input name="adresse" type="text" class="form-control" placeholder="Adresse">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Ville</label>
        <input name="ville" type="text" class="form-control" placeholder="Ville">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Code Postal</label>
        <input name="cpostal" type="text" class="form-control" placeholder="Code postal">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Pays</label>
        <input name="pays" type="text" class="form-control" placeholder="Pays">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">S'incrire</button>
    </form>
</div>
