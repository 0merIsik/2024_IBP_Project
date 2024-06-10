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
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Video Listesi</h4>
                                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                            data-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Yeni Ekle
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">Yeni Video Ekle</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="small">Bu formu kullanarak yeni
                                                    bir video ekleyin, hepsini
                                                    doldurduğunuzdan emin olun.</p>
                                                <form action="videos/insert" method="POST"
                                                      enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="alert alert-info">
                                                                <b>Not: </b>YouTube.com'a yüklediğiniz videoları buraya
                                                                ekleyebilirsiniz. Lütfen video seçmek için <a
                                                                        target="_blank"
                                                                        href="https://www.youtube.com/">YouTube</a>'a
                                                                giriniz.
                                                                <br>
                                                                <b>Nasıl Video Eklenir?</b>
                                                                <br>
                                                                <p>
                                                                    YouTube.com'da bir video girdiğinizde adres
                                                                    çubuğundaki linkin sonundaki eşittir işaretinden (=)
                                                                    sonraki kodu kopyalayın.
                                                                    <br>
                                                                    <b>Örnek: </b>https://www.youtube.com/watch?v=<b>-Bh44j-nhZU</b>
                                                                    <br>
                                                                    Bu kodu <b>YouTube Link Kodu</b> bölümüne
                                                                    yapıştırın.
                                                                </p>
                                                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label>YouTube Link Kodu</label>
                                                                <input id="addName" type="text" class="form-control"
                                                                       name="Link" placeholder="YouTube Link Kodu">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Başlık</label>
                                                                <input id="addOffice" type="text" class="form-control"
                                                                       name="Title" placeholder="Başlık">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer no-bd">
                                                        <button type="submit" class="btn btn-primary">Ekle</button>
                                                        <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Kapat
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover text-center">
                                        <thead>
                                        <tr>
                                            <th><i class="fa fa-bars"></i></th>
                                            <th>#</th>
                                            <th>Link</th>
                                            <th>Başlık</th>
                                            <th>Durum</th>
                                            <th style="width: 10%">İşlem</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th><i class="fa fa-bars"></i></th>
                                            <th>#</th>
                                            <th>Link</th>
                                            <th>Başlık</th>
                                            <th>Durum</th>
                                            <th>İşlem</th>
                                        </tr>
                                        </tfoot>
                                        <tbody id="sortable"
                                               data-url="<?php echo base_url("videos/ranksetter"); ?>">

                                        <?php if ($videos) {
                                            $i = 1;
                                            foreach ($videos as $video) { ?>

                                                <tr id="rank-<?php echo $video->ID; ?>">
                                                    <td><i class="fa fa-bars"></i></td>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a href="https://www.youtube.com/embed/<?php echo $video->Link; ?>"
                                                           target="_blank">
                                                            <i class="fas fa-video fa-2x"
                                                               title="Videoyu açmak için icona tıkla."></i>
                                                        </a></td>
                                                    <td><?php echo $video->Title; ?></td>
                                                    <td>
                                                        <label class="switch">
                                                            <input id="isActive" type="checkbox"
                                                                   data-url="<?php echo base_url("videos/isactivesetter/$video->ID"); ?>"
                                                                <?php echo ($video->Status == 1) ? "checked" : ""; ?>>
                                                            <span class="slider"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="modal"
                                                                    data-target="#updateRowModal<?php echo $video->ID; ?>"
                                                                    title="" class="btn btn-primary btn-sm m-1"
                                                                    data-original-title="Düzenle">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <a href="videos/delete/<?php echo $video->ID; ?>"
                                                               class="btn btn-danger btn-sm m-1"
                                                               data-original-title="Sil">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade"
                                                     id="updateRowModal<?php echo $video->ID; ?>"
                                                     tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header no-bd">
                                                                <h5 class="modal-title">
                                                                    <span class="fw-mediumbold">Video Güncelleme</span>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="videos/update/<?php echo $video->ID; ?>"
                                                                      method="POST" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>YouTube Videosu</label>
                                                                                <iframe class="rounded" width="100%" height="400"
                                                                                        src="https://www.youtube.com/embed/<?php echo $video->Link; ?>"
                                                                                        frameborder="0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="alert alert-info">
                                                                                <b>Not: </b>YouTube.com'a yüklediğiniz
                                                                                videoları buraya
                                                                                ekleyebilirsiniz. Lütfen video seçmek
                                                                                için <a
                                                                                        target="_blank"
                                                                                        href="https://www.youtube.com/">YouTube</a>'a
                                                                                giriniz.
                                                                                <br>
                                                                                <b>Nasıl Video Eklenir?</b>
                                                                                <br>
                                                                                <p>
                                                                                    YouTube.com'da bir video
                                                                                    girdiğinizde adres
                                                                                    çubuğundaki linkin sonundaki eşittir
                                                                                    işaretinden (=)
                                                                                    sonraki kodu kopyalayın.
                                                                                    <br>
                                                                                    <b>Örnek: </b>https://www.youtube.com/watch?v=<b>-Bh44j-nhZU</b>
                                                                                    <br>
                                                                                    Bu kodu <b>YouTube Link Kodu</b>
                                                                                    bölümüne
                                                                                    yapıştırın.
                                                                                </p>
                                                                            </div>
                                                                            <div class="form-group form-group-default">
                                                                                <label>YouTube Link Kodu</label>
                                                                                <input id="addName" type="text"
                                                                                       class="form-control"
                                                                                       name="Link"
                                                                                       value="<?php echo $video->Link; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Başlık</label>
                                                                                <input id="addOffice" type="text"
                                                                                       class="form-control" name="Title"
                                                                                       value="<?php echo $video->Title; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer no-bd">
                                                                        <button type="submit"
                                                                                class="btn btn-primary">Güncelle
                                                                        </button>
                                                                        <button type="button" class="btn btn-danger"
                                                                                data-dismiss="modal">Kapat
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
                                                <td colspan="7">Herhangi bir video eklenmemiştir.</td>
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