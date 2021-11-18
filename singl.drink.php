<?php require "bootstrap.php"; ?>

<?php if(isset($_GET['id'])): ?>
<?php $singlPost =  $post->SelectSinglPost("drinks"); ?>

<!-- <?php elseif(isset($_GET['id_beeProduct'])): ?>
<?php $singlPost = $post->SelectSinglPost("bee_product"); ?>    
<?php endif; ?> -->

<?php require "View/view.singl.drink.php"; ?>   