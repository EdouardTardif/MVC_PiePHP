<div>
    <?php foreach($films as $film){
        echo "<a href='./../film/info/".$film['id']."' >".$film['titre']."</a><br>";
    } ?>
</div>