<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Telefon:</span> <a
                            href="tel:<?php echo $settings->Phone; ?>"><?php echo $settings->Phone; ?></a> <span
                            class="mailus">Email:</span> <a
                            href="mailto: <?php echo $settings->Mail; ?>"><?php echo $settings->Mail; ?></a></p>
            </div>
            <div class="col-12 col-md d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <?php foreach ($socialmedia as $sm) { ?>
                            <a href="<?php echo $sm->Link; ?>" class="d-flex align-items-center justify-content-center"><span
                                        class="<?php echo $sm->Icon; ?>"><i
                                            class="sr-only"><?php echo $sm->Title; ?></i></span></a>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href=""><img height="100"
                                             src="admin/uploads/logofavicon/<?php echo $settings->Logo; ?>"
                                             alt="<?php echo $settings->Title; ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menü
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo($url != "about_us" && $url != "menu" && $url != "news" && $url != "contact" ? "active" : "") ?>">
                    <a href="" class="nav-link">Anasayfa</a></li>
                <li class="nav-item <?php echo($url == "about_us" ? "active" : "") ?>"><a href="about_us"
                                                                                          class="nav-link">Biz
                        Kimiz?</a></li>
                <li class="nav-item <?php echo($url == "menu" ? "active" : "") ?>"><a href="menu" class="nav-link">Menülerimiz</a>
                </li>
                <li class="nav-item <?php echo($url == "news" ? "active" : "") ?>"><a href="news" class="nav-link">Haberler</a>
                </li>
                <li class="nav-item <?php echo($url == "contact" ? "active" : "") ?>"><a href="contact"
                                                                                         class="nav-link">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->