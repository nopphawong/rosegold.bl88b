<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">
    <div class="responsive">
        <div class="col-12">
            <h5 class="text-center text-white"><?= lang('Lang.profile.profile') ?></h5>
        </div>

        <div class="col-12 text-center pad-lr-0 bg-ln-rosegold">
            <div class="card-bank-rose-gold padding-7">
                <div class="row line-h-1_6 ">
                    <div class="col-4 text-center">
                        <img src="assets/images/scb.png" class="img-bank">
                    </div>
                    <div class="col-8 text-left bank-profile-acc">
                        <p class="font-size-06"><?= lang('Lang.profile.bank_account_number', [$formatter->bank_ac_no_format(session()->bank_ac_no)]) ?></p>
                        <p class="font-size-06"><?= lang('Lang.profile.bank_name', [$formatter->bank_format(session()->bank)]) ?></p>
                        <p class="font-size-06"><?= lang('Lang.profile.username', [session()->name]) ?></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 text-center margin-top-3p pad-lr-0 bg-ln-rosegold">
            <div class="card-bank-rose-gold pad-t-0 padding-7">
                <div class="row line-h-1_6 profile-detail">

                    <div class="col-5 text-left padding-5  font-size-3vw pad-right-0">
                        <p class="text-rose-gold"><?= lang('Lang.profile.phone_number') ?> :</p>
                        <p class="text-rose-gold"><?= lang('Lang.profile.password') ?> :</p>
                        <p class="text-rose-gold"><?= lang('Lang.profile.line_id') ?> :</p>
                        <p class="text-rose-gold"><?= lang('Lang.profile.register_on') ?> :</p>
                        <p class="text-rose-gold"><?= lang('Lang.profile.last_login') ?> :</p>
                    </div>
                    <div class="col-6 text-left padding-5 font-size-3vw">
                        <p class="">091-854-6490</p>
                        <p class="">xxxxx</p>
                        <p class="">-</p>
                        <p class="">06/07/2022 11:11 น.</p>
                        <p class="">09/07/2022 12:12 น.</p>
                    </div>
                </div>
                <div class="row justify-content-center display-flex w-100 margin-auto">
                    <div class="display-flex">
                        <label class="radio-circle"><?= lang('Lang.profile.get_bonus') ?>
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        &nbsp; &nbsp;
                        <label class="radio-circle"><?= lang('Lang.profile.no_bonus') ?>
                            <input type="radio" name="radio" checked="">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn-rose-gold-deep-icon w-100 text-black font-size-07">
                        <img src="assets/images/misc/cpass.png">
                        <?= lang('Lang.profile.change_password') ?>
                    </button>
                </div>
            </div>

        </div>

        <div class="col-12 text-center margin-top-10p">
            <button class="btn-rose-gold-deep-icon w-60 text-black font-size-07">
                <img src="assets/images/misc/invite.png"><?= lang('Lang.profile.affiliate') ?>
            </button>
        </div>

        <div class="col-12 text-center margin-top-10p padding-top-10px">
            <button class="btn-rose-gold-deep-icon w-60 text-black font-size-07">
                <img src="assets/images/misc/staff.png"><?= lang('Lang.profile.contact_us') ?>
            </button>
        </div>
    </div>
</div>

<div class="container container-desktop desktop--">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1 class="text-rose-gold-shadow"><?= lang('Lang.profile.profile') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3 text-center">
        </div>
        <div class="col-6 text-center ">
            <div class="row">
                <div class="col-sm-12 text-center bg-ln-rosegold">
                    <div class="card-bank-rose-gold w-100 margin-auto">
                        <div class="row font-size-3vw">
                            <div class="col-sm-4 text-right ">
                                <img src="assets/images/scb.png" class="img-bank">
                            </div>
                            <div class="col-sm-8 text-left pad-left-0 bank-profile-acc">
                                <p><?= lang('Lang.profile.bank_account_number', [$formatter->bank_ac_no_format(session()->bank_ac_no)]) ?></p>
                                <p><?= lang('Lang.profile.bank_name', [$formatter->bank_format(session()->bank)]) ?></p>
                                <p><?= lang('Lang.profile.username', [session()->name]) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center margin-top-10 bg-ln-rosegold">
                    <div class="card-bank-rose-gold w-100 margin-auto">
                        <div class="row">

                            <div class="col-md-5 text-left padding-5">
                                <p class="text-rose-gold"><?= lang('Lang.profile.phone_number') ?> :</p>
                                <p class="text-rose-gold"><?= lang('Lang.profile.password') ?> :</p>
                                <p class="text-rose-gold"><?= lang('Lang.profile.line_id') ?> :</p>
                                <p class="text-rose-gold"><?= lang('Lang.profile.register_on') ?> :</p>
                                <p class="text-rose-gold"><?= lang('Lang.profile.last_login') ?> :</p>
                            </div>
                            <div class="col-md-7 text-left padding-5">
                                <p class="">091-854-6490</p>
                                <p class="">xxxxx</p>
                                <p class="">0999999992</p>
                                <p class="">06/07/2022 00:05:46 น.</p>
                                <p class="">09/07/2022 09:43:48 น.</p>
                            </div>

                        </div>
                        <div class="row justify-content-center display-flex w-100 margin-auto">
                            <div class="display-flex">
                                <label class="radio-circle"><?= lang('Lang.profile.get_bonus') ?>
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                &nbsp; &nbsp;
                                <label class="radio-circle"><?= lang('Lang.profile.no_bonus') ?>
                                    <input type="radio" name="radio" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <div class="col-12 text-center">
                                <button class="btn-rose-gold-deep-icon w-70 text-black font-size-07">
                                    <img src="assets/images/misc/cpass.png">
                                    <?= lang('Lang.profile.change_password') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center padding-1">
                </div>
                <div class="col-sm-12 text-center padding-1">
                </div>
            </div>
        </div>
        <div class="col-3 text-center">
        </div>
    </div>
</div>


<?= $footer ?>

<?= $this->endSection(); ?>