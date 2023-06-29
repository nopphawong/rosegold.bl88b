<?= $this->extend('layouts/web/index'); ?>

<?= $this->section('content'); ?>

<form action="<?= base_url('register') ?>" method="post" id="register_form" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="col text-right">
        <a href="<?= site_url('lang/th'); ?>"><img src="assets/images/th.png" class="lang"></a>
        <a href="<?= site_url('lang/en'); ?>"><img src="assets/images/en.png" class="lang"></a>
    </div>
    <h1 class="text-center"><i class="fas fa-pen mr-2"></i><?= lang('Lang.register.register') ?></h1>

    <?= $this->renderSection('register_form') ?>
    <button type="submit" class="btn btn-submit"><?= lang('Lang.register.submit') ?> <i class="fas fa-sign-in-alt"></i></button>

    <div class="col-12 text-center" style="margin-top: 20px;">
        <div class="row">
            <div class="col-6 text-center">
                <a class="icon-prepend" style="color:#d9e0ea !important;" href="<?= site_url('forgot') ?>">
                    <i class="fas fa-question mr-2"></i><?= lang('Lang.forgot.forgot') ?>
                </a>
            </div>
            <div class="col-6 text-center">
                <a class="icon-prepend" style="color:#d9e0ea !important;" href="<?= site_url('login') ?>">
                    <i class="fas fa-arrow-alt-left mr-2"></i><?= lang('Lang.login.login') ?>
                </a>
            </div>
        </div>
    </div>
</form>

<?= $footer ?>

<script>
    $('#register_form').submit(function(e) {
        spinner('show')
    })
</script>

<?= $this->endSection(); ?>