<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">
    <div class="responsive">
        <div class="col-12">
            <h5 class="text-center text-white"><?= lang('Lang.withdraw.withdraw') ?></h5>
        </div>

        <div class="warpper-form">
            <div class="col-12 padding-3">
                <div class="card-bank-withdraw mg-at w-90 padding-4 ">
                    <div class="row amount-pad ">
                        <div class="col-md-12 text-left padding-bot-35px">
                            <h4 class="text-white text-sq-1"><?= lang('Lang.withdraw.withdraw_amount_mobile') ?></h4>
                            <hr>
                            <input type="text" id="withdraw_amount" name="f_amount" class="btn-block input-withdraw number2digit" pattern="[0-9]*" placeholder="0.00">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 padding-3">
                <div class="card-bank-withdraw mg-at w-90 padding-7">
                    <div class="media">
                        <div class="media-left">
                            <img src="assets/images/scb.png" id="bankIcon" width="70vw">
                        </div>
                        <div class="media-body text-left pd-l-6 padding-1 font-size-3vw">
                            <p class="letter-spacing-1"><?= lang('Lang.withdraw.bank_account_number') ?> <span id="accNo">0-0534112521-1</span></p>
                            <p class="letter-spacing-1"><?= lang('Lang.withdraw.bank_name') ?> <span id="bankName">ธนาคารออมสิน</span></p>
                            <p class="letter-spacing-1"><?= lang('Lang.withdraw.username') ?> <span id="accName">dummy </span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 padding-3">
                <button type="button" class="btn boder-half-rosegold text-black font-size-1_5vw w-80 line-h-2 ">ยืนยันการถอนเงิน</button>
            </div>

        </div>

    </div>
</div>

<div class="main-desktop desktop--">

    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="text-rose-gold-shadow"><?= lang('Lang.withdraw.withdraw') ?></h3>
        </div>
    </div>

    <div class="row padding-1">
        <div class="col-md-12">
            <div class="card-bank-withdraw mg-at w-50">
                <div class="row amount-pad">
                    <div class="col-md-12 text-left padding-bot-35px">
                        <h5 class="bold text-white text-bold text-sq-1"><?= lang('Lang.withdraw.withdraw_amount') ?></h5>
                        <hr>
                        <input type="text" id="withdraw_amount" name="f_amount" class="btn-block input-withdraw number2digit" pattern="[0-9]*" placeholder="0.00">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row padding-1">
        <div class="col-md-12">
            <div class="col-12 text-center">
                <div class="card-bank-withdraw mg-at w-50">
                    <div class="media">
                        <div class="media-left">
                            <img src="assets/images/scb.png" id=" bankIcon" width="70vw">
                        </div>
                        <div class="media-body text-left pd-l-6 line-height-1">

                            <p class="font-size-08 letter-spacing-1"><?= lang('Lang.withdraw.bank_account_number') ?> <span id="accNo">0-0534112521-1</span></p>
                            <p class="font-size-08 letter-spacing-1"><?= lang('Lang.withdraw.bank_name') ?> <span id="bankName">ธนาคารออมสิน</span></p>
                            <p class="font-size-08 letter-spacing-1"><?= lang('Lang.withdraw.username') ?> <span id="accName">dummy </span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="row justify-content-center padding-1">
        <div class="col-md-6 text-center">
            <button type="button" class="btn btn-rose-gold w-50 text-black font-size-08"><?= lang('Lang.withdraw.confirm') ?></button>
        </div>

    </div>
    <div class="row">

        <div class="col-md-12  padding-3">
            <?= lang('Lang.withdraw.history_last_5_withdraws') ?>
            <table class="table table-tx">
                <thead>
                    <tr>
                        <th class="w-15"></th>
                        <th class="text-left"><?= lang('Lang.withdraw.list') ?></th>
                        <th><?= lang('Lang.withdraw.date') ?></th>
                        <th><?= lang('Lang.withdraw.amount') ?></th>
                    </tr>
                </thead>
                <tbody id="historyWithdraw">
                    <tr>
                        <td class="w-15"></td>
                        <td class="text-left ">
                            <span class="font-size-07 line-h-55px"><?= lang('Lang.withdraw.withdraw_table') ?></span>
                        </td>
                        <td class="line-h-1_5">
                            <span>2022-12-23 14:13 น.</span>
                            <br>
                            <span class="text-righ font-size-08 text-success-custom"><?= lang('Lang.withdraw.finished') ?></span>
                        </td>
                        <td class="td-text-top padding-1">
                            <span><?= number_format(50.00, 2) ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-15"></td>
                        <td class="text-left ">
                            <span class="font-size-07 line-h-55px"><?= lang('Lang.withdraw.withdraw_table') ?></span>
                        </td>
                        <td class="line-h-1_5">
                            <span>2022-12-23 14:13 น.</span>
                            <br>
                            <span class="text-righ font-size-08 text-success-custom"><?= lang('Lang.withdraw.finished') ?></span>
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

<?= $footer ?>

<?= $this->endSection(); ?>