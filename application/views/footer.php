<footer class="ftco-footer ftco-no-pb ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><a class="navbar-brand" href=""><img height="100"
                                                                                    src="admin/uploads/logofavicon/<?php echo $settings->Logo; ?>"
                                                                                    alt="<?php echo $settings->Title; ?>"></a>
                    </h2>
                    <?php echo $about_us->Content; ?>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <?php foreach ($socialmedia as $sm) { ?>
                            <li class="ftco-animate"><a href="<?php echo $sm->Link; ?>"><span
                                            class="<?php echo $sm->Icon; ?>"></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">SAYFALAR</h2>
                    <ul class="list-unstyled open-hours">
                        <?php foreach ($pages as $page) { ?>
                            <li><i class="<?php echo $page->Icon; ?>" aria-hidden="true"></i> <a
                                        href="home/page/<?php echo $page->ID; ?>"><?php echo $page->Title; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Menülerimiz</h2>
                    <ul class="list-unstyled open-hours">
                        <?php foreach ($albums as $album) { ?>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
                                        href="menu"><?php echo $album->Name; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Haberdar Ol!</h2>
                    <p>Kampanya ve aktivitelerden haberdar olmak için mailini gönder :)</p>
                    <form action="subscribers/insert" class="subscribe-form" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control mb-2 text-center" name="Email"
                                   placeholder="E-mail adresi" autocomplete="off">
                            <input type="submit" value="Gönder" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 bg-primary py-3">
        <div class="row no-gutters">
            <div class="col-md-12 text-center">

                <p class="mb-0"><?php echo $settings->Footer; ?>Ömer Işık</p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>