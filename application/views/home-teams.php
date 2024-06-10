<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Usta Ekibimiz</h2>
            </div>
        </div>
        <div class="row">

            <?php foreach ($teams as $team) { ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img"
                             style="background-image: url(admin/uploads/teams/<?php echo $team->Image; ?>);"></div>
                        <div class="text px-4 pt-2">
                            <h3><?php echo $team->Name; ?></h3>
                            <span class="position mb-2"><?php echo $team->Degree; ?></span>
                            <div class="faded">
                                <?php echo $team->Content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>