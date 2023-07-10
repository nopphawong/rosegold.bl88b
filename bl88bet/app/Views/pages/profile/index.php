<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5 px-md-5">
        <h4 class="text-while text-center mt-2"><?= lang('Lang.profile.profile') ?></h4>
        <div class="card-dark p-2 p-md-3 mb-5">
            <div class="rosegold-block mb-4">
                <div class="rosegold-block-inner">
                    <div class="row mb-2">
                        <div class="col-4">
                            <img src="assets/images/misc/scb.png" class="bank-image">
                        </div>
                        <div class="col-8">
                            <div class="blog-detail text-shrink">
                                <p><?= lang('Lang.profile.bank_account_number', [$formatter->bank_ac_no_format(session()->data->bank)]) ?></p>
                                <p><?= lang('Lang.profile.bank_name', [$formatter->bank_format(session()->data->bank)]) ?></p>
                                <p><?= lang('Lang.profile.username', [session()->data->name]) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rosegold-block">
                <div class="rosegold-block-inner">
                    <div class="row mb-3">
                        <div class="col-5">
                            <div class="blog-detail text-shrink">
                                <p class="text-rosegold"><?= lang('Lang.profile.phone_number') ?> :</p>
                                <p class="text-rosegold"><?= lang('Lang.profile.password') ?> :</p>
                                <p class="text-rosegold"><?= lang('Lang.profile.line_id') ?> :</p>
                                <p class="text-rosegold"><?= lang('Lang.profile.register_on') ?> :</p>
                                <p class="text-rosegold"><?= lang('Lang.profile.last_login') ?> :</p>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="blog-detail text-shrink">
                                <p>091-854-6490</p>
                                <p>xxxxx</p>
                                <p>0999999992</p>
                                <p>06/07/2022 00:05:46 น.</p>
                                <p>09/07/2022 09:43:48 น.</p>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label class="rosegold-radio"><?= lang('Lang.profile.get_bonus') ?> <input type="radio" name="radio" checked>
                            <span class="rosegold-checkmark"></span>
                        </label>
                        &nbsp; &nbsp;
                        <label class="rosegold-radio"><?= lang('Lang.profile.no_bonus') ?> <input type="radio" name="radio">
                            <span class="rosegold-checkmark"></span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="<?= site_url('change-password') ?>" class="btn rosegold-dark-btn w-75">
                            <img src="assets/images/misc/cpass.png">
                            <?= lang('Lang.profile.change_password') ?> </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?= $footer ?>

<?= $this->endSection(); ?>