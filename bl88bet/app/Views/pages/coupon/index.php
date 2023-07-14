<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5">
        <h4 class="text-center"><?= lang('Lang.coupon.coupon') ?></h4>
        <div class="gift-voucher-content my-4">
            <img src="<?= base_url() ?>assets/images/coupon/coupon.png">
            <input type="text" class="rosegold-border-input text-center" placeholder="<?= lang('Lang.coupon.code') ?>">
            <button class="btn rosegold-dark-btn"><?= lang('Lang.coupon.confirm') ?></button>
        </div>
    </div>
</main>

<?= $footer ?>

<?= $this->endSection(); ?>