<?php require "Partials/header.php"; ?>

<?php foreach($all_be_product as $be_product ): ?>
<a href="singl.beeProduct.php?id_beeProduct=<?php echo $be_product->id; ?> " class="nav-link">
<div class="container">
    <div class="row">
        <div class="col-sm" >
            <div class="card" style="width: 18rem;">
                <img src=" <?php echo $be_product->picture;  ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $be_product->title; ?> </h5>
                    <p class="card-text"> <?php echo $be_product->description; ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
</a>

<?php endforeach; ?>


<?php require "Partials/footer.php"; ?>