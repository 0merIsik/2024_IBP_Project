<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <!--<div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>-->
            <ul class="nav nav-primary">

                <li class="nav-item <?php echo $url == "home" ? "active" : ""; ?>">
                    <a href="home">
                        <i class="fas fa-home"></i>
                        <p>Anasayfa</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "settings" ? "active" : ""; ?>">
                    <a href="settings">
                        <i class="fas fa-cogs"></i>
                        <p>Genel Ayarlar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-briefcase"></i>
                        <p>Kurumsal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="about_us">
                                    <span class="sub-item">Biz Kimiz?</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item <?php echo $url == "sliders" ? "active" : ""; ?>">
                    <a href="sliders">
                        <i class="fas fa-images"></i>
                        <p>Slaytlar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "banner" ? "active" : ""; ?>">
                    <a href="banner">
                        <i class="fas fa-image"></i>
                        <p>Banner</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "intro" ? "active" : ""; ?>">
                    <a href="intro">
                        <i class="fas fa-image"></i>
                        <p>Intro</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "teams" ? "active" : ""; ?>">
                    <a href="teams">
                        <i class="fas fa-users"></i>
                        <p>Ekibimiz</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "client_comments" ? "active" : ""; ?>">
                    <a href="client_comments">
                        <i class="fas fa-comments"></i>
                        <p>Müşteri Yorumları</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "albums" ? "active" : ""; ?>">
                    <a href="albums">
                        <i class="far fa-images"></i>
                        <p>Albümler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "pages" ? "active" : ""; ?>">
                    <a href="pages">
                        <i class="fas fa-list"></i>
                        <p>Sayfalar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "counter" ? "active" : ""; ?>">
                    <a href="counter">
                        <i class="fas fa-sort-numeric-up"></i>
                        <p>İstatistikler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "news" ? "active" : ""; ?>">
                    <a href="news">
                        <i class="fas fa-newspaper"></i>
                        <p>Haberler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "subscribers" ? "active" : ""; ?>">
                    <a href="subscribers">
                        <i class="fas fa-user-friends"></i>
                        <p>Abone Olanlar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "messages" ? "active" : ""; ?>">
                    <a href="messages">
                        <i class="fas fa-envelope"></i>
                        <p>Gelen Mesajlar</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>