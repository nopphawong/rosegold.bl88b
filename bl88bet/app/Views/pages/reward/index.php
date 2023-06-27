<?php
$language = \Config\Services::language();
$locale = $language->getLocale();
?>

<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<?php // if ($locale == 'en') {
//     echo lang('Lang.reward.point', [counted(1, 'point')]);
// } else {
//     echo lang('Lang.reward.point', [number_format(1)]);
// } 
?>

<div class="main mobile--">

    <div class="col-md-12">
        <div class="">
            <div class="row">
                <div class="col-md-3 text-center">

                </div>
                <div class="col-md-6 text-center">
                    <h3 class="text-rose-gold-shadow"><?= lang('Lang.reward.reward') ?></h3>
                </div>
                <div class="col-md-3 text-center">
                    <div class="col-12 bg-reward-point">
                        200
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-6 text-center padding-2 ">
                    <div class="card-reward">
                        <div class="row pad-lr-0">
                            <div class="col-12 text-center pad-lr-0">
                                <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                                <img class="padding-03" src="assets/images/rewards/100.png" width="90vw">
                            </div>
                        </div>
                        <div class="row padding-03 text-center ">
                            <div class="col-12 text-center pad-lr-0">
                                <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                                <button class=" btn-rose-gold-1-sq bold font-size-4vw w-50 text-black" onclick="redeem(5)"><?= lang('Lang.reward.get_reward') ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 text-center padding-2 ">
                    <div class="card-reward">
                        <div class="row pad-lr-0">
                            <div class="col-12 text-center pad-lr-0">
                                <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                                <img class="padding-03" src="assets/images/rewards/100.png" width="90vw">
                            </div>
                        </div>
                        <div class="row padding-03 text-center ">
                            <div class="col-12 text-center pad-lr-0">
                                <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                                <button class=" btn-rose-gold-1-sq bold font-size-4vw w-50 text-black" onclick="redeem(5)"><?= lang('Lang.reward.get_reward') ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="container container-desktop desktop--">

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 text-center">

            </div>
            <div class="col-md-6 text-center">
                <h3 class="text-rose-gold-soft-shadow"><?= lang('Lang.reward.reward') ?></h3>
            </div>
            <div class="col-md-3 text-center ">
                <div class="col-12 bg-reward-point">
                    200
                </div>
            </div>
        </div>


        <div class="row reward-desktop">
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center padding-2">
                <div class="card-reward">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <p class="text-glow "><?= lang('Lang.reward.credit_to_chaged', [100]) ?></p>
                            <img class="padding-03" src="assets/images/rewards/100.png" width="">
                        </div>
                    </div>
                    <div class="row padding-03 text-center ">
                        <div class="col-12 text-center">
                            <p class=""><?= lang('Lang.reward.redeem_points', [100]) ?></p>
                        </div>
                        <div class="col-12 text-center padding-2-rem">
                            <button class=" btn-rose-gold-1-sq  font-size-1_3vw line-h-2 bold  w-100 text-black"><?= lang('Lang.reward.get_reward') ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $footer ?>

<?= $this->endSection(); ?>