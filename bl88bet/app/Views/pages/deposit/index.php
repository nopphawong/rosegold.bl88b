<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5">
        <h4 class="text-while text-center mt-2"><?= lang('Lang.deposit.deposit') ?></h4>
        <div class="card-dark p-2 p-md-3 mb-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="rosegold-block">
                        <div class="rosegold-block-inner">
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img src="assets/images/misc/scb.png" class="bank-image">
                                </div>
                                <div class="col-8">
                                    <div class="deposit-account">
                                        <div id="deposit_ac" class="d-none">0000000001</div>
                                        <p><?= lang('Lang.deposit.bank_account_number', [$formatter->bank_ac_no_format('0000000000')]) ?></p>
                                        <p><?= lang('Lang.deposit.bank_name', [$formatter->bank_format('SCB')]) ?></p>
                                        <p><?= lang('Lang.deposit.name', ['ณัฏฐ์พัชร ธนภัทรไพบูล']) ?></p>
                                    </div>
                                </div>
                            </div>
                            <button class="btn rosegold-dark-btn w-75 m-auto" onclick="copyClipboard(deposit_ac)">
                                <img src="assets/images/misc/copy.png">
                                <?= lang('Lang.deposit.copy') ?>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-08 mt-3 mt-md-4">
                    <div class="blog-detail">
                        <p><?= lang('Lang.deposit.account_registered') ?></p>
                        <p><?= lang('Lang.deposit.bank_account_number', [$formatter->bank_ac_no_format(session()->data->bank)]) ?></p>
                        <p><?= lang('Lang.deposit.bank_name', [$formatter->bank_format(session()->data->bank)]) ?></p>
                        <p><?= lang('Lang.deposit.username', [session()->data->name]) ?></p>
                    </div>
                </div>
                <div class="col-12 mt-2 invisible-md">
                    <div class="d-flex">
                        <label class="rosegold-radio"><?= lang('Lang.deposit.get_bonus') ?>
                            <input type="radio" name="radio" checked>
                            <span class="rosegold-checkmark"></span>
                        </label>
                        &nbsp; &nbsp;
                        <label class="rosegold-radio"><?= lang('Lang.deposit.no_bonus') ?>
                            <input type="radio" name="radio">
                            <span class="rosegold-checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 text-rosegold mt-3">
                    <h5><?= lang('Lang.deposit.note') ?></h5>
                    <div class="blog-detail text-rosegold text-07 mb-3">
                        <p>- <?= lang('Lang.deposit.note_detail_1') ?></p>
                        <p>- <?= lang('Lang.deposit.note_detail_2') ?></p>
                        <p>- <?= lang('Lang.deposit.note_detail_3') ?></p>
                    </div>
                    <button class="btn rosegold-dark-btn w-75 m-auto invisible-md">
                        <img src="assets/images/misc/staff.png">
                        <?= lang('Lang.deposit.contact_us') ?>
                    </button>
                </div>
            </div>
        </div>

        <div class="visible-md">
            <h5><?= lang('Lang.deposit.history_last_5_deposits') ?></h5>
            <div class="col-12 rosegold-block-table">
                <table class="table rosegold-table text-08">
                    <thead>
                        <tr>
                            <th class="w-35"><?= lang('Lang.deposit.list') ?></th>
                            <th class="text-right"><?= lang('Lang.deposit.date') ?></th>
                            <th class="text-right"><?= lang('Lang.deposit.amount') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <?= lang('Lang.deposit.deposit_table') ?>
                            </td>
                            <td class="text-right">
                                <span>2022-12-26 06:27:11</span>
                                <br>
                                <span class="text-info"><?= lang('Lang.deposit.pending') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <?= lang('Lang.deposit.deposit_table') ?>
                            </td>
                            <td class="text-right">
                                <span>2022-12-25 06:27:11</span>
                                <br>
                                <span class="text-success"><?= lang('Lang.deposit.finished') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <?= lang('Lang.deposit.deposit_table') ?>
                            </td>
                            <td class="text-right">
                                <span>2022-12-24 06:27:11</span>
                                <br>
                                <span class="text-success"><?= lang('Lang.deposit.finished') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?= $footer ?>

<?= $this->endSection(); ?>