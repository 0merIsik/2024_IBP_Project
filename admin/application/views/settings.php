<!-- TOP HEADER -->
<?php $this->load->view("top-header"); ?>
<!-- END TOP HEADER -->

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
</style>

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
                <div class="page-header">
                    <h4 class="page-title">GENEL AYARLAR</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="home">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="settings">Genel Ayarlar</a>
                        </li>
                    </ul>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <!-- <div class="card-header">
									 <h4 class="card-title">Nav Pills With Icon (Vertical Tabs)</h4> 
									</div> -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 col-md-3">
                                        <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons"
                                             id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-site-tab-icons" data-toggle="pill"
                                               href="#v-pills-site-icons" role="tab" aria-controls="v-pills-site-icons"
                                               aria-selected="true">
                                                <i class="flaticon-imac"></i>
                                                Site Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-iletisim-tab-icons" data-toggle="pill"
                                               href="#v-pills-iletisim-icons" role="tab"
                                               aria-controls="v-pills-iletisim-icons" aria-selected="false">
                                                <i class="flaticon-mailbox"></i>
                                                İletişim Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-smtp-tab-icons" data-toggle="pill"
                                               href="#v-pills-smtp-icons" role="tab" aria-controls="v-pills-smtp-icons"
                                               aria-selected="false">
                                                <i class="flaticon-envelope-1"></i>
                                                Smtp Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-lf-tab-icons" data-toggle="pill"
                                               href="#v-pills-lf-icons" role="tab" aria-controls="v-pills-lf-icons"
                                               aria-selected="false">
                                                <i class="flaticon-paint-palette"></i>
                                                Logo & Favicon Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-sm-tab-icons" data-toggle="pill"
                                               href="#v-pills-sm-icons" role="tab" aria-controls="v-pills-sm-icons"
                                               aria-selected="false">
                                                <i class="flaticon-share"></i>
                                                Sosyal Medya Ayarları
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-9">
                                        <div class="tab-content" id="v-pills-with-icon-tabContent">

                                            <div class="tab-pane fade show active" id="v-pills-site-icons"
                                                 role="tabpanel" aria-labelledby="v-pills-site-tab-icons">
                                                <form
                                                        action="settings/update_site_ayarlari/<?php echo $settings->ID; ?>"
                                                        method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Site Title</label>
                                                        <input class="form-control" type="text" name="title"
                                                               value="<?php echo $settings->Title; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Description</label>
                                                        <input class="form-control" type="text" name="description"
                                                               value="<?php echo $settings->Description; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Keywords</label>
                                                        <input class="form-control" type="text" name="keywords"
                                                               value="<?php echo $settings->Keywords; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Author</label>
                                                        <input class="form-control" type="text" name="author"
                                                               value="<?php echo $settings->Author; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Footer</label>
                                                        <input class="form-control" type="text" name="footer"
                                                               value="<?php echo $settings->Footer; ?>">
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary" type="submit">Güncelle</button>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-iletisim-icons" role="tabpanel"
                                                 aria-labelledby="v-pills-iletisim-tab-icons">
                                                <form action="settings/update_iletisim_ayarlari/<?php echo $settings->ID; ?>"
                                                      method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Telefon</label>
                                                        <input class="form-control" type="text" name="phone"
                                                               value="<?php echo $settings->Phone; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Mail</label>
                                                        <input class="form-control"
                                                               type="text" name="mail"
                                                               value="<?php echo $settings->Mail; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Adres</label>
                                                        <input class="form-control" type="text" name="adress"
                                                               value="<?php echo $settings->Adress; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Harita</label>
                                                        <textarea class="form-control" type="text" name="map"
                                                                  rows="5"><?php echo $settings->Map; ?></textarea>
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary" type="submit">Güncelle</button>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-smtp-icons" role="tabpanel"
                                                 aria-labelledby="v-pills-smtp-tab-icons">
                                                <form
                                                        action="settings/update_smtp_ayarlari/<?php echo $settings->ID; ?>"
                                                        method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Host</label>
                                                        <input class="form-control" type="text" name="host"
                                                               value="<?php echo $settings->Host; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kullanıcı Mail</label>
                                                        <input class="form-control" type="text" name="user_mail"
                                                               value="<?php echo $settings->User_Mail; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Şifre</label>
                                                        <input class="form-control" type="text" name="user_password"
                                                               value="<?php echo $settings->User_Password; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Port</label>
                                                        <input class="form-control" type="text" name="port"
                                                               value="<?php echo $settings->Port; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Bilgilendirilen Mail</label>
                                                        <input class="form-control" type="text" name="notification_mail"
                                                               value="<?php echo $settings->Notification_Mail; ?>">
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary" type="submit">Güncelle</button>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-lf-icons" role="tabpanel"
                                                 aria-labelledby="v-pills-lf-tab-icons">
                                                <form
                                                        action="settings/update_logo_ayarlari/<?php echo $settings->ID; ?>"
                                                        method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Yüklü Olan Logo</label><br>
                                                        <img class="img-thumbnail"
                                                             src="uploads/logofavicon/<?php echo $settings->Logo ?>"
                                                             width="250" height="200">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Yüklenecek Logo</label>
                                                        <input class="form-control" type="file" name="logo">
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary" type="submit">Güncelle</button>
                                                    </div>

                                                </form>

                                                <form
                                                        action="settings/update_favicon_ayarlari/<?php echo $settings->ID; ?>"
                                                        method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Yüklü Olan Favicon</label><br>
                                                        <img class="img-thumbnail"
                                                             src="uploads/logofavicon/<?php echo $settings->Favicon; ?>"
                                                             width="100" height="100">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Yüklenecek Favicon</label>
                                                        <input class="form-control" type="file" name="favicon">
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary" type="submit">Güncelle</button>
                                                    </div>

                                                </form>

                                            </div>

                                            <div class="tab-pane fade" id="v-pills-sm-icons" role="tabpanel"
                                                 aria-labelledby="v-pills-sm-tab-icons">

                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="d-flex align-items-center">
                                                                <h4 class="card-title">Hesap Listesi</h4>
                                                                <button class="btn btn-primary btn-round ml-auto"
                                                                        data-toggle="modal" data-target="#addRowModal">
                                                                    <i class="fa fa-plus"></i>
                                                                    Yeni Ekle
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="addRowModal" tabindex="-1"
                                                                 role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header no-bd">
                                                                            <h5 class="modal-title">
                                                                                <span class="fw-mediumbold">Yeni Hesap
                                                                                    Ekle</span>
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="small">Bu formu kullanarak yeni
                                                                                bir hesap oluşturun, hepsini
                                                                                doldurduğunuzdan emin olun.</p>
                                                                            <form action="socialmedia/account_insert"
                                                                                  method="POST">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div
                                                                                                class="form-group form-group-default">
                                                                                            <label>Başlık</label>
                                                                                            <input id="addName"
                                                                                                   type="text"
                                                                                                   class="form-control"
                                                                                                   name="Title"
                                                                                                   placeholder="Başlık">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <small>Icon seçmek için <a
                                                                                                    href="https://fontawesome.com/icons"
                                                                                                    target="_blank">buraya
                                                                                                tıklayınız.</a></small>
                                                                                        <div
                                                                                                class="form-group form-group-default">
                                                                                            <label>Icon</label>
                                                                                            <input id="addPosition"
                                                                                                   type="text"
                                                                                                   class="form-control"
                                                                                                   name="Icon"
                                                                                                   placeholder="Icon">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div
                                                                                                class="form-group form-group-default">
                                                                                            <label>Link</label>
                                                                                            <input id="addOffice"
                                                                                                   type="url"
                                                                                                   class="form-control"
                                                                                                   name="Link"
                                                                                                   placeholder="Link">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer no-bd">
                                                                                    <button type="submit"
                                                                                            class="btn btn-primary">Ekle
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn btn-danger"
                                                                                            data-dismiss="modal">Kapat
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table id="add-row"
                                                                       class="display table table-striped table-hover text-center">
                                                                    <thead>
                                                                    <tr>
                                                                        <th><i class="fa fa-bars"></i></th>
                                                                        <th>#</th>
                                                                        <th>Icon</th>
                                                                        <th>Başlık</th>
                                                                        <th>Link</th>
                                                                        <th>Durum</th>
                                                                        <th style="width: 10%">İşlem</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th><i class="fa fa-bars"></i></th>
                                                                        <th>#</th>
                                                                        <th>Icon</th>
                                                                        <th>Başlık</th>
                                                                        <th>Link</th>
                                                                        <th>Durum</th>
                                                                        <th>İşlem</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                    <tbody id="sortable"
                                                                           data-url="<?php echo base_url("socialmedia/ranksetter"); ?>">

                                                                    <?php if ($socialmedia) {
                                                                        $i = 1;
                                                                        foreach ($socialmedia as $sm) { ?>

                                                                            <tr id="rank-<?php echo $sm->ID; ?>">
                                                                                <td><i class="fa fa-bars"></i></td>
                                                                                <td><?php echo $i; ?></td>
                                                                                <td><i
                                                                                            class="<?php echo $sm->Icon; ?> fa-2x"></i>
                                                                                </td>
                                                                                <td><?php echo $sm->Title; ?></td>
                                                                                <td><?php echo $sm->Link; ?></td>
                                                                                <td>
                                                                                    <label class="switch">
                                                                                        <input id="isActive"
                                                                                               type="checkbox"
                                                                                               data-url="<?php echo base_url("socialmedia/isactivesetter/$sm->ID"); ?>"
                                                                                            <?php echo ($sm->Status == 1) ? "checked" : ""; ?>>
                                                                                        <span class="slider"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-button-action">
                                                                                        <button type="button"
                                                                                                data-toggle="modal"
                                                                                                data-target="#updateRowModal<?php echo $sm->ID; ?>"
                                                                                                title=""
                                                                                                class="btn btn-primary btn-sm m-1"
                                                                                                data-original-title="Düzenle">
                                                                                            <i class="fa fa-edit"></i>
                                                                                        </button>
                                                                                        <a href="socialmedia/account_delete/<?php echo $sm->ID; ?>"
                                                                                           class="btn btn-danger btn-sm m-1"
                                                                                           data-original-title="Sil">
                                                                                            <i class="fa fa-times"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- Modal -->
                                                                            <div class="modal fade"
                                                                                 id="updateRowModal<?php echo $sm->ID; ?>"
                                                                                 tabindex="-1" role="dialog"
                                                                                 aria-hidden="true">
                                                                                <div class="modal-dialog"
                                                                                     role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header no-bd">
                                                                                            <h5 class="modal-title">
                                                                                            <span
                                                                                                    class="fw-mediumbold"><?php echo $sm->Title; ?>
                                                                                                Hesabı Güncelleme</span>
                                                                                            </h5>
                                                                                            <button type="button"
                                                                                                    class="close"
                                                                                                    data-dismiss="modal"
                                                                                                    aria-label="Close">
                                                                                            <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form
                                                                                                    action="socialmedia/account_update/<?php echo $sm->ID; ?>"
                                                                                                    method="POST">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div
                                                                                                                class="form-group form-group-default">
                                                                                                            <label>Başlık</label>
                                                                                                            <input
                                                                                                                    id="addName"
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    name="Title"
                                                                                                                    value="<?php echo $sm->Title; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <small>Icon
                                                                                                            seçmek
                                                                                                            için <a
                                                                                                                    href="https://fontawesome.com/icons"
                                                                                                                    target="_blank">buraya
                                                                                                                tıklayınız.</a></small>
                                                                                                        <div
                                                                                                                class="form-group form-group-default">
                                                                                                            <label>Icon</label>
                                                                                                            <input
                                                                                                                    id="addPosition"
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    name="Icon"
                                                                                                                    value="<?php echo $sm->Icon; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <div
                                                                                                                class="form-group form-group-default">
                                                                                                            <label>Link</label>
                                                                                                            <input
                                                                                                                    id="addOffice"
                                                                                                                    type="url"
                                                                                                                    class="form-control"
                                                                                                                    name="Link"
                                                                                                                    value="<?php echo $sm->Link; ?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                        class="modal-footer no-bd">
                                                                                                    <button type="submit"
                                                                                                            class="btn btn-primary">
                                                                                                        Güncelle
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                            class="btn btn-danger"
                                                                                                            data-dismiss="modal">
                                                                                                        Kapat
                                                                                                    </button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <?php $i++;
                                                                        }
                                                                    } else { ?>

                                                                        <tr>
                                                                            <td colspan="7">Herhangi bir hesap
                                                                                eklenmemiştir.
                                                                            </td>
                                                                        </tr>

                                                                    <?php } ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
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