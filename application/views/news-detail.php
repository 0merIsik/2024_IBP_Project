<?php $this->load->view("top-header"); ?>

<?php $this->load->view("header"); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('admin/uploads/banner/<?php echo $banner->Image; ?>');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread"><?php echo $news->Title; ?></h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Anasayfa <i
                                        class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
                                    href="news">Haberler <i class="fa fa-chevron-right"></i></a></span>
                        <span><?php echo $news->Title; ?> <i
                                    class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="admin/uploads/news/<?php echo $news->Image; ?>" alt="<?php echo $news->Title; ?>"
                             class="img-fluid">
                    </p>
                    <?php echo $news->Content; ?>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <b style="font-size: 20px;">Etiketler: </b>
                            <?php $seo = explode(",", $news->Seo_Tags);
                            foreach ($seo as $seoo) { ?>
                                <a href="javascript:void(0);" class="tag-cloud-link">#<?php echo $seoo; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar ftco-animate">

                    <div class="sidebar-box ftco-animate">
                        <h3>Son Yazılar</h3>

                        <?php foreach ($news_limit as $neew) { ?>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                   style="background-image: url(admin/uploads/news/<?php echo $neew->Image; ?>);"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                                href="news/detail/<?php echo $neew->ID; ?>"><?php echo $neew->Title; ?></a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="javascript:void(0);"><span
                                                        class="icon-calendar"></span> <?php echo getCurrentDate("d-m-Y H:i:s", $neew->Create_Date); ?>
                                            </a></div>
                                        <div><a href="javascript:void(0);"><span class="icon-person"></span> Admin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div><!-- END COL -->
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