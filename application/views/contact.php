<?php $this->load->view("top-header"); ?>

<?php $this->load->view("header"); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('admin/uploads/banner/<?php echo $banner->Image; ?>');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">İletişim</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="">Anasayfa <i
                                        class="fa fa-chevron-right"></i></a></span> <span>İletişim <i
                                    class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12">
                    <h2 class="h4 font-weight-bold">İletişim Bilgileri</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Adres:</span> <?php echo $settings->Adress; ?></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Telefon:</span> <a
                                    href="tel:<?php echo $settings->Phone; ?>"><?php echo $settings->Phone; ?></a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Email:</span> <a
                                    href="mailto: <?php echo $settings->Mail; ?>"><?php echo $settings->Mail; ?></a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Website</span> <a href=""><?php echo base_url(); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-5 order-md-last">
                    <h2 class="h4 mb-5 font-weight-bold">Bize Ulaşın</h2>
                    <form action="contact/insert" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="İsim">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="Email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Subject" placeholder="Konu">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Phone" placeholder="Telefon">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" class="form-control"
                                      name="Content"
                                      placeholder="Mesaj"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Gönder" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <?php echo $settings->Map; ?>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>