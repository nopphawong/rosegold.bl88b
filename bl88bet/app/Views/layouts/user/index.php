<div id="root" class="bg-img-dark">
    <div class="topbar-mobile mobile--">
        <a class="topbar-mobile--menu myprofile" href="<?= site_url('profile') ?>">
            <img src="assets/images/icons/profile_icon.png">
            <span><?= lang('Lang.home.profile') ?></span>
        </a>
        <a class="topbar-mobile--menu logo">
            <img src="assets/images/icons/bl88_text.png">
        </a>
        <a class="topbar-mobile--menu myprofile" target="_blank" href="http://line.me/ti/p/~@882yztsp">
            <img src="assets/images/button/line.png">
            <span><?= lang('Lang.home.contact_us') ?></span>
        </a>
    </div>



    <header>
        <nav class="navbar navbar-expand-md navbar-light navbar-desktop justify-content-between nav-locktop desktop--">
            <div class="navbar-header ">
                <a class="" href="<?= site_url('/') ?>">
                    <img src="assets/images/misc/logo-text.png" class="img-brand-text">
                </a>
            </div>

            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100">
                    <li class="nav-item  w-25">
                        <a href="<?= site_url('/') ?>">
                            <div class="post-thumb w-25">
                                <img src="assets/images/button/home.png" />
                            </div>
                            <div class="post-content">
                                <p class="text-black"><?= lang('Lang.home.home') ?></p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-25">
                        <a href="<?= site_url('casino') ?>">
                            <div class="post-thumb w-25"><img src="assets/images/button/casino.png" /></div>
                            <div class="post-content">
                                <p class="text-black"><?= lang('Lang.casino.casino') ?></p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-25">
                        <a href="<?= site_url('slot') ?>">
                            <div class="post-thumb w-35"><img src="assets/images/button/slot.png" /></div>
                            <div class="post-content">
                                <p class="text-black"><?= lang('Lang.slot.slot') ?></p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-25">
                        <a href="<?= site_url('sport') ?>">
                            <div class="post-thumb w-25"><img src="assets/images/button/sport.png" /></div>
                            <div class="post-content">
                                <p class="text-black"><?= lang('Lang.sport.sport') ?></p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="nav-left">
                <div class="form-group has-search">
                    <span class="fas fa-user-alt form-control-feedback"></span>
                    <div class="form-control user-panel">
                        <span class=""><?= session()->data->webuser ?></span>
                    </div>
                </div>
                <div class="form-group has-search">
                    <span class="fa-solid fa-wallet form-control-feedback"></span>
                    <div class="form-control user-panel">
                        <span id="nav_credit" class="-amount"><?= number_format(session()->webbalance, 2) ?></span> ฿
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <?= $this->renderSection('content') ?>