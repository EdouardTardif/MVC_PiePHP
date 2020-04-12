<div>
    <?php foreach($films as $film){
        echo "<a href='./../genre/info/".$film['id']."' >".$film['nom']."</a><br>";
    } ?>
</div>