<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>
<?php $list = array('1.png', '2.png', '3.png', '4.png', '5.png'); ?>

<div class="main mobile--">
    <div class="row">
        <?php foreach ($list as $val) : ?>
            <div class="col-12 col-md-12 text-center padding-2 col-banner">
                <img src="assets/images/casino/mobile/<?= $val ?>" data-original="assets/images/casino/mobile/<?= $val ?>" class="img-fluid w-90 lazy">
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container game-container desktop--">
    <div class="row">
        <?php foreach ($list as $val) : ?>
            <div class="col-md-3 col-md-3 padding-game text-center text-center padding-2 col-banner">
                <img src="assets/images/casino/desktop/<?= $val ?>" data-original="assets/images/casino/desktop/<?= $val ?>" class="img-fluid w-90 lazy">
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $footer ?>

<?= $this->endSection(); ?>