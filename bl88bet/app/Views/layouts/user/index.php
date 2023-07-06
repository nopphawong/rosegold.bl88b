<div class="bg-roseglod">
    <header>
        <nav class="navbar navbar-expand-md justify-content-between navbar-roseglod">
            <div class="navbar-header">
                <a href="<?= site_url('/') ?>">
                    <img src="assets/images/misc/logo-text.png" class="navbar-logo">
                </a>
            </div>

            <div class="navbar-collapse">
                <ul class="navbar-nav m-auto w-100">
                    <li class="nav-item w-25">
                        <a href="<?= site_url('/') ?>">
                            <div class="menu-icon w-25">
                                <img src="assets/images/button/home.png" alt="home">
                            </div>
                            <div class="menu-label">
                                <p class="text-black"><?= lang('Lang.home.home') ?></p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-25">
                        <a href="<?= site_url('casino') ?>">
                            <div class="menu-icon w-25">
                                <img src="assets/images/button/casino.png" alt="casino">
                            </div>
                            <div class="menu-label">
                                <p class="text-black"><?= lang('Lang.casino.casino') ?></p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-25">
                        <a href="<?= site_url('slot') ?>">
                            <div class="menu-icon w-35">
                                <img src="assets/images/button/slot.png" alt="slot">
                            </div>
                            <div class="menu-label">
                                <p class="text-black"><?= lang('Lang.slot.slot') ?></p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-25">
                        <a href="<?= site_url('sport') ?>">
                            <div class="menu-icon w-25">
                                <img src="assets/images/button/sport.png" alt="sport">
                            </div>
                            <div class="menu-label">
                                <p class="text-black"><?= lang('Lang.sport.sport') ?></p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="nav-left">
                <div class="form-group form-label">
                    <span class="fas fa-user-alt form-control-feedback"></span>
                    <div class="form-control user-panel">
                        <span><?= session()->data->webuser ?></span>
                    </div>
                </div>
                <div class="form-group form-label">
                    <span class="fa-solid fa-wallet form-control-feedback"></span>
                    <div class="form-control user-panel">
                        <span id="nav_credit"><?= number_format(session()->webbalance, 2) ?></span> ฿
                    </div>
                </div>

            </div>
        </nav>

        <div class="mobile-header">
            <a class="mobile-header-menu mobile-head-icon" href="<?= site_url('profile') ?>">
                <img src="assets/images/icons/profile_icon.png">
                <span><?= lang('Lang.home.profile') ?></span>
            </a>
            <a class="mobile-header-menu mobile-head-logo">
                <img src="assets/images/icons/bl88_text.png">
            </a>
            <a class="mobile-header-menu mobile-head-icon" target="_blank" href="http://line.me/ti/p/~@882yztsp">
                <img src="assets/images/button/line.png">
                <span><?= lang('Lang.home.contact_us') ?></span>
            </a>
        </div>
    </header>

    <?= $this->renderSection('content') ?>