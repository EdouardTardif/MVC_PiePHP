<div>
    <?php echo $user->email ?><br>
    <?php echo 'My favorite foods are : '.PHP_EOL; foreach($user->food as $food){
       echo $food->name.PHP_EOL;
    } ?>
    <?php echo 'My list contain : '.PHP_EOL; foreach($user->article as $article){
       echo $article->content." ".$article->price.PHP_EOL;
    } ?>

    <?php echo "My promo is {$user->promo->year}" ?>
</div>