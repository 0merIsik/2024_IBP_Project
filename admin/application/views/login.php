<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Yönetim Paneline Giriş</title>
    <link rel="stylesheet" href="assets/login/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/login/css/my-login.css">
    <link rel="icon" href="uploads/logofavicon/<?php echo $settings->Favicon; ?>" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>

<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="uploads/logofavicon/<?php echo $settings->Favicon; ?>"
                         alt="<?php echo $settings->Title; ?>">
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title text-center">YÖNETİM PANELİNE GİRİŞ</h4>
                        <form action="login/loginControl" method="POST" class="my-login-validation" novalidate="">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" type="email" class="form-control" name="Email" value="" required
                                       autofocus autocomplete="off">
                                <div class="invalid-feedback">
                                    Email geçersiz
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Password">Şifre</label>
                                <input id="password" type="password" class="form-control" name="Password" required
                                       data-eye>
                                <div class="invalid-feedback">
                                    Şifre geçersiz
                                </div>
                            </div>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    GİRİŞ YAP
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; <?php echo date('Y'); ?> &mdash; <?php echo $settings->Title; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="open-alert"></div>

<script src="assets/login/js/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="assets/login/js/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="assets/login/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!--<script src="assets/login/js/my-login.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>

<?php $this->load->view("alert"); ?>
</body>
</html>
