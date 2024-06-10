<!-- TOP HEADER -->
<?php $this->load->view("top-header"); ?>
<!-- END TOP HEADER -->

<div class="wrapper">

    <!-- HEADER -->
    <?php $this->load->view("header"); ?>
    <!-- END HEADER -->

    <!-- SIDEBAR -->
    <?php $this->load->view("sidebar"); ?>
    <!-- END SIDEBAR -->

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Admin Profil Güncelle</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">

                                        <form action="profil/updateprofilimage/<?php echo $admin->ID; ?>" method="POST"
                                              enctype="multipart/form-data">

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="image">Yüklü Olan Fotoğraf</label><br>
                                                        <img class="rounded"
                                                             src="uploads/admin/<?php echo $admin->Image; ?>"
                                                             width="350"
                                                             alt="Admin">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image">Fotoğraf Yükle</label><br>
                                                        <input type="file" name="Image" class="form-control">
                                                    </div>

                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary btn-block">Güncelle</button>
                                                    </div>

                                                </div>

                                            </div>

                                        </form>

                                    </div>

                                    <div class="col-md-9">

                                        <form action="profil/updateprofilinfo/<?php echo $admin->ID; ?>" method="POST"
                                              enctype="multipart/form-data">

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="name">İsim</label><br>
                                                        <input type="text" name="Name" class="form-control"
                                                               value="<?php echo $admin->Name; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label><br>
                                                        <input type="email" name="Email" class="form-control"
                                                               value="<?php echo $admin->Email; ?>">
                                                    </div>

                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary btn-right">Güncelle</button>
                                                    </div>

                                                </div>

                                            </div>

                                        </form>

                                        <form action="profil/updateprofilpassword/<?php echo $admin->ID; ?>"
                                              method="POST"
                                              enctype="multipart/form-data">

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="name">Yeni Şifre</label><br>
                                                        <input type="password" name="yenisifre1" class="form-control"
                                                               placeholder="Yeni Şifre">
                                                        <?php if (isset($form_error)) { ?>
                                                            <small class="text-danger"><?php echo form_error("yenisifre1"); ?></small>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name">Yeni Şifre (Tekrar)</label><br>
                                                        <input type="password" name="yenisifre2" class="form-control"
                                                               placeholder="Yeni Şifre (Tekrar)">
                                                        <?php if (isset($form_error)) { ?>
                                                            <small class="text-danger"><?php echo form_error("yenisifre2"); ?></small>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary btn-right">Güncelle</button>
                                                    </div>

                                                </div>

                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php $this->load->view("footer"); ?>
        <!-- END FOOTER -->

    </div>

    <!-- Custom template | don't include it in your project! -->
    <!-- <div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div> -->
    <!-- End Custom template -->
</div>

<!-- BOTTOM FOOTER -->
<?php $this->load->view("bottom-footer"); ?>
<!-- END BOTTOM FOOTER -->