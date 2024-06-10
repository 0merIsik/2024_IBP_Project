<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Menülerimiz</h2>
            </div>
        </div>
        <div class="row">

            <?php foreach ($albums as $album) { ?>
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3><?php echo $album->Name; ?></h3>
                        </div>
                        <?php foreach ($yemekler[$album->ID] as $yemek) { ?>
                            <div class="menus d-flex ftco-animate">
                                <div class="menu-img img"
                                     style="background-image: url(admin/uploads/album_images/<?php echo $yemek->Image; ?>);"></div>
                                <div class="text">
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3><?php echo $yemek->Name; ?><?php if ($yemek->Status == 0) print "<span class='text-danger'> (Mevcut değil)</span>"; ?></h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price"><?php echo $yemek->Price; ?> ₺</span>
                                        </div>
                                    </div>
                                    <p><?php echo $yemek->Content; ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>

                        <span class="flat flaticon-bread" style="left: 0;"></span>
                        <span class="flat flaticon-breakfast" style="right: 0;"></span>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</section>