<?php $this->load->view("top-header"); ?>

<?php $this->load->view("header"); ?>

    <section class="hero-wrap hero-wrap-2"
             style="background-image: url('admin/uploads/banner/<?php echo $banner->Image; ?>');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Biz Kimiz?</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Anasayfa <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Biz Kimiz? <i
                                    class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-2 w-100 mr-md-2"
                         style="background-image: url(admin/uploads/about_us/<?php echo $about_us->Image; ?>);"></div>
                    <!--<div class="img img-2 w-100 ml-md-2" style="background-image: url(assets/images/bg_4.jpg);"></div>-->
                </div>
                <!--<img src="admin/uploads/about_us/<?php echo $about_us->Image; ?>" alt="<?php echo $about_us->Title; ?>">-->
                <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
                    <div class="heading-section ftco-animate mb-5">
                        <p><?php echo $about_us->Content; ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
             style="background-image: url(assets/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="row d-md-flex align-items-center">

                        <?php foreach ($counter as $count) { ?>
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number"><i class="<?php echo $count->Icon; ?>"></i></strong>
                                        <strong class="number" data-number="<?php echo $count->Count; ?>">0</strong>
                                        <span><?php echo $count->Title; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
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

    <section class="ftco-section testimony-section"
             style="background-image: url(admin/uploads/banner/<?php echo $banner->Image; ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-3 pb-2">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Mutlu Müşteriler</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-7">
                    <div class="carousel-testimony owl-carousel ftco-owl">

                        <?php foreach ($client_comments as $client_comment) { ?>
                            <div class="item">
                                <div class="testimony-wrap text-center">
                                    <div class="text p-3">
                                        <?php echo $client_comment->Content; ?>
                                        <div class="user-img mb-4"
                                             style="background-image: url(admin/uploads/client_comments/<?php echo $client_comment->Image; ?>)">
             <span class="quote d-flex align-items-center justify-content-center">
               <i class="fa fa-quote-left"></i>
             </span>
                                        </div>
                                        <p class="name"><?php echo $client_comment->Name; ?></p>
                                        <span class="position"><?php echo $client_comment->Degree; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>