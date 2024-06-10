<section class="ftco-section testimony-section" style="background-image: url(admin/uploads/banner/<?php echo $banner->Image; ?>);">
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