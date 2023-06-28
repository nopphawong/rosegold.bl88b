<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">

    <div class="responsive">
        <div class="col-12">
            <h4 class="text-center text-white"><?= lang('Lang.deposit.deposit') ?></h4>
        </div>

        <div class="warpper-form">
            <div class="col-12 text-center">
                <div class="col-sm-12 text-center bg-ln-rosegold">
                    <div class="card-bank-rose-gold">
                        <div class="row padding-03 font-size-3vw">

                            <div class="col-4 text-right ">
                                <img src="assets/images/misc/scb.png" class="img-bank">
                            </div>
                            <div class="col-8 text-left gf-pd-r-0 gf-pd-l-0">
                                <p class="text-white font-line  gf-font"><?= lang('Lang.deposit.bank_account_number', [$formatter->bank_ac_no_format('0000000000')]) ?></p>
                                <p class="text-white font-line  gf-font"><?= lang('Lang.deposit.bank_name', [$formatter->bank_format('SCB')]) ?></p>
                                <p class="text-white font-line  gf-font"><?= lang('Lang.deposit.name', ['ณัฏฐ์พัชร ธนภัทรไพบูล']) ?></p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12 text-center">
                                <button class="btn-rose-gold-deep-icon w-90 text-black font-size-07 bold">
                                    <img src="assets/images/misc/copy.png">
                                    <?= lang('Lang.deposit.copy') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 font-size-3vw padding-5 letter-spacing-1">
                <p class="text-white font-line font-size-07"><?= lang('Lang.deposit.account_registered') ?></p>
                <p class="text-white font-line font-size-07"><?= lang('Lang.deposit.bank_name', [$formatter->bank_format(session()->data->bank)]) ?></p>
                <p class="text-white font-line font-size-07"><?= lang('Lang.deposit.bank_account_number', [$formatter->bank_ac_no_format(session()->data->bank)]) ?></p>
                <p class="text-white font-line font-size-07"><?= lang('Lang.deposit.username', [session()->data->name]) ?></p>
                <div class="row pad-l-4vw padding-2 display-flex w-100 margin-auto">
                    <div class="display-flex">
                        <label class="radio-circle"><?= lang('Lang.deposit.get_bonus') ?>
                            <input type="radio" name="radio" checked="">
                            <span class="checkmark"></span>
                        </label>
                        &nbsp; &nbsp;
                        <label class="radio-circle"><?= lang('Lang.deposit.no_bonus') ?>
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <p class="text-rose-gold-soft font-line font-size-10"><?= lang('Lang.deposit.note') ?></p>
                <p class="text-rose-gold-soft font-line font-size-07">- <?= lang('Lang.deposit.note_detail_1') ?></p>
                <p class="text-rose-gold-soft font-line font-size-07">- <?= lang('Lang.deposit.note_detail_2') ?></p>
                <p class="text-rose-gold-soft font-line font-size-07">- <?= lang('Lang.deposit.note_detail_3') ?></p>
            </div>
            <div class="row">
                <div class="col-2 text-center"></div>
                <div class="col-8 text-center">
                    <button class="btn-rose-gold-deep-icon w-100 text-black font-size-07 bold">
                        <img src="assets/images/misc/staff.png">
                        <?= lang('Lang.deposit.contact_us') ?>
                    </button>
                </div>
                <div class="col-2 text-center"></div>
            </div>
        </div>

    </div>
</div>
<div class="main-desktop desktop--">

    <div class="row">
        <div class="col-md-3 text-center">

        </div>
        <div class="col-md-6 text-center">
            <h3 class="text-rose-gold-shadow"><?= lang('Lang.deposit.deposit') ?></h3>
        </div>
        <div class="col-md-3 text-center">

        </div>
    </div>


    <div class="row">
        <div class="col-md-6 text-center padding-2">
            <div class="bg-ln-rose-tb">
                <div class="card-bank-rose-gold">
                    <div class="row">
                        <div class="col-sm-4 text-center pad-right-0">
                            <img src="assets/images/misc/scb.png" class="img-bank w-75">
                        </div>
                        <div class="col-sm-8 text-left pad-left-0">
                            <p class="font-size-08"><?= lang('Lang.deposit.bank_name', [$formatter->bank_format('SCB')]) ?></p>
                            <p class="font-size-08"><?= lang('Lang.deposit.bank_account_number', [$formatter->bank_ac_no_format('0000000000')]) ?></p>
                            <p class="font-size-08"><?= lang('Lang.deposit.name', ['ณัฏฐ์พัชร ธนภัทรไพบูล']) ?></p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 text-center padding-3 ">
                            <button class="btn-rose-gold-deep-icon w-80 text-black font-size-07 bold">
                                <img src="assets/images/misc/copy.png">
                                <?= lang('Lang.deposit.copy') ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-left pad-left-0 padding-4">
            <div class="col-12 font-size-08  letter-spacing-1 padding-4">
                <p class="text-white font-line font-size-08"><?= lang('Lang.deposit.account_registered') ?></p>
                <p class="text-white font-line font-size-08"><?= lang('Lang.deposit.bank_name', [$formatter->bank_format(session()->data->bank)]) ?></p>
                <p class="text-white font-line font-size-08"><?= lang('Lang.deposit.bank_account_number', [$formatter->bank_ac_no_format(session()->data->bank)]) ?></p>
                <p class="text-white font-line font-size-08"><?= lang('Lang.deposit.username', [session()->data->name]) ?></p>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-left letter-spacing-1 ">
            <p class="text-rose-gold-soft font-line font-size-13"><?= lang('Lang.deposit.note') ?></p>
            <p class="text-rose-gold-soft font-line font-size-07">- <?= lang('Lang.deposit.note_detail_1') ?></p>
            <p class="text-rose-gold-soft font-line font-size-07">- <?= lang('Lang.deposit.note_detail_2') ?></p>
            <p class="text-rose-gold-soft font-line font-size-07">- <?= lang('Lang.deposit.note_detail_3') ?></p>
        </div>
        <div class="col-md-6 text-left">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12  padding-3">
            <?= lang('Lang.deposit.history_last_5_deposits') ?>
            <div class="bg-ln-rosegold-tb">
                <table class="table table-tx">
                    <thead>
                        <tr>
                            <th class="w-15"></th>
                            <th class="text-left"><?= lang('Lang.deposit.list') ?></th>
                            <th><?= lang('Lang.deposit.date') ?></th>
                            <th><?= lang('Lang.deposit.amount') ?></th>
                        </tr>
                    </thead>
                    <tbody id="historyWithdraw">
                        <tr>
                            <td class="w-15"></td>
                            <td class="text-left ">
                                <span class="font-size-07 line-h-55px"><?= lang('Lang.deposit.deposit_table') ?></span>
                            </td>
                            <td class="line-h-1_5">
                                <span>2022-12-23 06:27:11</span>
                                <br>
                                <span class="text-righ font-size-08 text-success-custom"><?= lang('Lang.deposit.finished') ?></span>
                            </td>
                            <td class="td-text-top padding-1">
                                <span><?= number_format(50.00, 2) ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-15"></td>
                            <td class="text-left ">
                                <span class="font-size-07 line-h-55px"><?= lang('Lang.deposit.deposit_table') ?></span>
                            </td>
                            <td class="line-h-1_5">
                                <span>2022-12-23 06:27:11</span>
                                <br>
                                <span class="text-righ font-size-08 text-success-custom"><?= lang('Lang.deposit.finished') ?></span>
                            </td>
                            <td class="td-text-top padding-1">
                                <span><?= number_format(50.00, 2) ?></span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $footer ?>

<?= $this->endSection(); ?>