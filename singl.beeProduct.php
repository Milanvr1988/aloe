<?php require "bootstrap.php";?>

<?php if(isset($_GET['id_beeProduct'])): ?>
<?php $singl_beeProduct = $post->SelectSinglPostBee("bee_product"); ?>
<?php endif; ?>

<?php require "View/view.singl.beeProduct.php"; ?>
