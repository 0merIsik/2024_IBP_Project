<?php $this->load->view("top-header"); ?>

<?php $this->load->view("header"); ?>

<?php $this->load->view("home-sliders"); ?>

<?php $this->load->view("home-about_us"); ?>

    <section class="ftco-section ftco-intro" style="background-image: url(admin/uploads/intro/<?php echo $intro->Image; ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span><?php echo $intro->Name; ?></span>
                    <h2><?php echo $intro->Content; ?></h2>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("home-projects"); ?>

<?php $this->load->view("home-client_comments"); ?>

<?php $this->load->view("home-teams"); ?>

<?php $this->load->view("home-news"); ?>

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