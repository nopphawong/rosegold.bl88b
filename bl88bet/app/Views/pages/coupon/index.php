<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">

    <div class="responsive">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-rose-gold"><?= lang('Lang.coupon.coupon') ?></h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <img class=" w-60" src="assets/images/coupon/coupon.png">
            </div>

        </div>
        <br>
        <div class="row justify-content-center">
            <input type="text" id="coupon_code" name="coupon_code" class="input-border-rose-gold  text-center w-60" placeholder="<?= lang('Lang.coupon.code') ?>">
        </div>
        <br>
        <div class="row justify-content-center">
            <button type="button" class="btn btn-rose-gold-deep text-bold w-60 font-size-11"><?= lang('Lang.coupon.confirm') ?></button>
        </div>

    </div>
</div>

<div class="container container-desktop desktop--">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1 class="text-rose-gold-soft-shadow"><?= lang('Lang.coupon.coupon') ?></h1>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <img class="w-35" src="assets/images/coupon/coupon.png">
        </div>

    </div>
    <br>
    <div class="row justify-content-center">
        <input type="text" id="coupon_code" name="coupon_code" class="input-border-rose-gold  text-center w-20" placeholder="<?= lang('Lang.coupon.code') ?>">
    </div>
    <br>
    <div class="row justify-content-center">
        <button type="button" class="btn btn-rose-gold-2 text-bold w-25"><?= lang('Lang.coupon.confirm') ?></button>
    </div>
</div>

<?= $footer ?>

<?= $this->endSection(); ?>