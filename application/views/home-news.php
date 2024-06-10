<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Leziz Haberler</h2>
            </div>
        </div>
        <div class="row">

            <?php foreach ($news_limit as $new) { ?>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="news/detail/<?php echo $new->ID; ?>" class="block-20"
                           style="background-image: url('admin/uploads/news/<?php echo $new->Image; ?>');">
                        </a>
                        <div class="text px-4 pt-3 pb-4">
                            <div class="meta">
                                <div>
                                    <a href="javascript:void(0);"><?php echo getCurrentDate("d-m-Y H:i:s", $new->Create_Date); ?></a>
                                </div>
                                <div><a href="javascript:void(0);">Admin</a></div>
                            </div>
                            <h3 class="heading"><a href="news/detail/<?php echo $new->ID; ?>"><?php echo $new->Title; ?></a></h3>
                            <p class="clearfix">
                                <a href="news/detail/<?php echo $new->ID; ?>" class="float-left read btn btn-primary">Daha
                                    Fazla Oku</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>