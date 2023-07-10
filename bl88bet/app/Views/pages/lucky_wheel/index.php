<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5">
        <h4 class="text-center"><?= lang('Lang.lucky_wheel.lucky_wheel') ?></h4>
        <div class="lucky-wheel-content">
            <img src="assets/images/wheel.png">
            <img src="assets/images/misc/spintext.png" class="spintext">
            <img src="assets/images/misc/redeemtext.png" class="redeemtext">
            <div class="block-content">
                <p class="text-glow">BL88BET6490</p>
                <div class="d-flex">
                    <div class="w-50 text-center">
                        <img src="assets/images/icons/whee_ic.png">
                    </div>
                    <div class="w-50 text-center">
                        <img src="assets/images/icons/coin.png"> 0
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?= $footer ?>

<?= $this->endSection(); ?>