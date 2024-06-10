<section class="hero-wrap">
    <div class="home-slider owl-carousel js-fullheight">

        <?php foreach ($sliders as $slider) { ?>
            <div class="slider-item js-fullheight"
                 style="background-image:url(admin/uploads/sliders/<?php echo $slider->Image; ?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 mt-5 text-center">
                                <span class="subheading"><?php echo $slider->Title; ?></h2></span>
                                <h1><?php echo $slider->Content; ?></h1>
                                <span class="subheading-2 sub"><?php echo $slider->SubTitle; ?></span>
                            </div>
                            <div class="text w-100 mt-5 text-center">
                                <a href="<?php echo $slider->Btn_Left_Link; ?>"
                                   class="btn btn-white btn-outline-white btn-lg"><?php echo $slider->Btn_Left; ?></a>
                                <a href="<?php echo $slider->Btn_Right_Link; ?>"
                                   class="btn btn-white btn-outline-white btn-lg"><?php echo $slider->Btn_Right; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</section>