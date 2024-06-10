<?php $this->load->view("top-header"); ?>

<?php $this->load->view("header"); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('admin/uploads/banner/<?php echo $banner->Image; ?>');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread"><?php echo $page->Title; ?></h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Anasayfa <i
                                        class="fa fa-chevron-right"></i></a></span> <span><?php echo $page->Title; ?> <i
                                    class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <?php echo $page->Content; ?>
                </div> <!-- .col-md-8 -->
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