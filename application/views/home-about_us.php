<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-2 w-100 mr-md-2"
                     style="background-image: url(admin/uploads/about_us/<?php echo $about_us->Image; ?>);"></div>
                <!--<div class="img img-2 w-100 ml-md-2" style="background-image: url(assets/images/bg_4.jpg);"></div>-->
            </div>
            <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
                <div class="heading-section ftco-animate mb-5">
                    <h2 class="mb-4"><?php echo $about_us->Title; ?></h2>
                    <p><?php
                        $text = $about_us->Content;
                        $text = trim($text);
                        $short_text = substr($text, '0', '150') . "...";

                        echo $short_text;
                        ?>
                    </p>
                    <p><a href="about_us" class="btn btn-primary">Daha Fazla</a></p>
                </div>
            </div>
        </div>
    </div>
</section>