<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<?php $list = array('1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png', '9.png', '10.png', '11.png', '12.png', '13.png', '14.png', '15.png', '16.png', '17.png', '18.png', '19.png', '20.png', '21.png', '22.png', '23.png', '24.png', '25.png', '26.png', '27.png', '28.png', '29.png', '30.png', '31.png', '32.png', '33.png', '34.png'); ?>

<div class="main mobile--">
    <div class="row">
        <?php foreach ($list as $val) : ?>
            <div class="col-12 col-md-12 text-center padding-2 col-banner">
                <img src="assets/images/slot/mobile/<?= $val ?>" data-original="assets/images/slot/mobile/<?= $val ?>" class="img-fluid w-90 lazy">
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container game-container desktop--">
    <div class="row">
        <?php foreach ($list as $val) : ?>
            <div class="col-md-3 col-md-3 padding-game text-center text-center padding-2 col-banner">
                <img src="assets/images/slot/desktop/<?= $val ?>" data-original="assets/images/slot/desktop/<?= $val ?>" class="img-fluid w-90 lazy">
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $footer ?>

<?= $this->endSection(); ?>