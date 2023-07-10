<?php
$language = \Config\Services::language();
$locale = $language->getLocale();
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<?php // if ($locale == 'en') {
//     echo lang('Lang.reward.point', [counted(1, 'point')]);
// } else {
//     echo lang('Lang.reward.point', [number_format(1)]);
// } 
?>

<main>
    <div class="container pb-5">
        <h4 class="text-center"><?= lang('Lang.reward.reward') ?></h4>
        <div class="d-flex justify-content-center justify-content-md-end">
            <div class="reward-point-wrapper mb-3">
                <div class="reward-point"><?= number_format(50.00, 0) ?></div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-lg-4 mb-3">
                <div class="card-dark text-center p-1 p-md-3">
                    <div class="reward-content">
                        <p class="text-08 text-glow"><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                        <img class="m-2" src="assets/images/rewards/100.png">
                        <p class="text-08"><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                    </div>
                    <button class="btn rosegold-light-btn mt-3 mb-2 mb-md-0 mx-auto"><?= lang('Lang.reward.get_reward') ?></button>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card-dark text-center p-1 p-md-3">
                    <div class="reward-content">
                        <p class="text-08 text-glow"><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                        <img class="m-2" src="assets/images/rewards/100.png">
                        <p class="text-08"><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                    </div>
                    <button class="btn rosegold-light-btn mt-3 mb-2 mb-md-0 mx-auto"><?= lang('Lang.reward.get_reward') ?></button>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card-dark text-center p-1 p-md-3">
                    <div class="reward-content">
                        <p class="text-08 text-glow"><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                        <img class="m-2" src="assets/images/rewards/100.png">
                        <p class="text-08"><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                    </div>
                    <button class="btn rosegold-light-btn mt-3 mb-2 mb-md-0 mx-auto"><?= lang('Lang.reward.get_reward') ?></button>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card-dark text-center p-1 p-md-3">
                    <div class="reward-content">
                        <p class="text-08 text-glow"><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                        <img class="m-2" src="assets/images/rewards/100.png">
                        <p class="text-08"><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                    </div>
                    <button class="btn rosegold-light-btn mt-3 mb-2 mb-md-0 mx-auto"><?= lang('Lang.reward.get_reward') ?></button>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card-dark text-center p-1 p-md-3">
                    <div class="reward-content">
                        <p class="text-08 text-glow"><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                        <img class="m-2" src="assets/images/rewards/100.png">
                        <p class="text-08"><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                    </div>
                    <button class="btn rosegold-light-btn mt-3 mb-2 mb-md-0 mx-auto"><?= lang('Lang.reward.get_reward') ?></button>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card-dark text-center p-1 p-md-3">
                    <div class="reward-content">
                        <p class="text-08 text-glow"><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                        <img class="m-2" src="assets/images/rewards/100.png">
                        <p class="text-08"><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                    </div>
                    <button class="btn rosegold-light-btn mt-3 mb-2 mb-md-0 mx-auto"><?= lang('Lang.reward.get_reward') ?></button>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $footer ?>

<?= $this->endSection(); ?>