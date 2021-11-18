<?php require "Partials/header.php"; ?>

        <div class="col-3" >
            <div class="card" style="width: 14rem;">
                <img src=" <?php echo $singl_beeProduct->picture; ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $singl_beeProduct->title; ?> </h5>
                    <p class="card-text"> <?php echo $singl_beeProduct->description; ?> </p>
                </div>
            </div>
        </div>

<?php require "Partials/footer.php"; ?>