<?php $this->load->view("top-header"); ?>

<?php $this->load->view("header"); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('admin/uploads/banner/<?php echo $banner->Image; ?>');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Haberler</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Anasayfa <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Haberler <i
                                    class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                <?php foreach ($news as $new) { ?>
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="news/detail/<?php echo $new->ID; ?>" class="block-20"
                               style="background-image: url('admin/uploads/news/<?php echo $new->Image; ?>');">
                            </a>
                            <div class="text px-4 pt-3 pb-4">
                                <div class="meta">
                                    <div>
                                        <a href="javascript:void(0);"><?php echo getCurrentDate('d-m-Y H:i:s', $new->Create_Date); ?></a>
                                    </div>
                                    <div><a href="javascript:void(0);">Admin</a></div>
                                </div>
                                <h3 class="heading"><a
                                            href="news/detail/<?php echo $new->ID; ?>"><?php echo $new->Title; ?></a>
                                </h3>
                                <p class="clearfix">
                                    <a href="news/detail/<?php echo $new->ID; ?>"
                                       class="float-left read btn btn-primary">Daha Fazla Oku</a>
                                </p>
                            </div>
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