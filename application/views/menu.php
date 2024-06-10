<?php $this->load->view("top-header"); ?>

<?php $this->load->view("header"); ?>

    <section class="hero-wrap hero-wrap-2"
             style="background-image: url('admin/uploads/banner/<?php echo $banner->Image; ?>');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Menülerimiz</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Anasayfa <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Menülerimiz <i
                                    class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <?php foreach ($albums as $album) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="menu-wrap">
                            <div class="heading-menu text-center ftco-animate">
                                <h3><?php echo $album->Name; ?></h3>
                            </div>
                            <?php foreach ($yemekler[$album->ID][1] as $yemek) { ?>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img img"
                                         style="background-image: url(admin/uploads/album_images/<?php echo $yemek->Image; ?>);"></div>
                                    <div class="text">
                                        <div class="d-flex">
                                            <div class="one-half">
                                                <h3><?php echo $yemek->Name; ?></h3>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price"><?php echo $yemek->Price; ?> ₺</span>
                                            </div>
                                        </div>
                                        <p><span><?php echo $yemek->Content; ?></span>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php foreach ($yemekler[$album->ID][0] as $yemek) { ?>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img img"
                                         style="background-image: url(admin/uploads/album_images/<?php echo $yemek->Image; ?>);"></div>
                                    <div class="text">
                                        <div class="d-flex">
                                            <div class="one-half">
                                                <h3><?php echo $yemek->Name; ?>
                                                    <div class="one-forth">
                                                        <span class="price">(Mevcut Değil)</span>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price"><?php echo $yemek->Price; ?> ₺</span>
                                            </div>
                                        </div>
                                        <p><span><?php echo $yemek->Content; ?></span>
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

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
        <div class="container py-5">
            <div class="row py-2">
                <div class="col-md-12 text-center">
                    <h2><?php echo $intro->Content; ?></h2>
                    <a href="<?php echo $intro->Btn_Link; ?>"
                       class="btn btn-white btn-outline-white"><?php echo $intro->Btn; ?></a>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>