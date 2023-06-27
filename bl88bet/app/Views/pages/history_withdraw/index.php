<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">

    <div class="responsive">
        <div class="col-12">
            <h5 class="text-center text-white"><?= lang('Lang.history_withdraw.history_withdraw') ?></h5>
        </div>

        <div id="historyWithdraw">
            <div class="col-12 padding-2">
                <div class="card-his-wd ">
                    <div class="row padding-1">
                        <div class="col-4 text-center pad-right-0">
                            <h4 class="text-vertically-center history-status text-gold-1 pd-l-8"><?= lang('Lang.history_withdraw.withdraw') ?></h4>
                        </div>
                        <div class="col-8 text-right pd-r-7 line-h-40-px">
                            <span class="success-boder text-righ font-size-08 text-white"><?= lang('Lang.history_withdraw.successful') ?></span>
                            <p class="text-gold-1 font-size-13"><?= number_to_currency(1000.00, 'THB', 'th', 2); ?></p>
                            <p class="font-line line-h-2 font-size-07">2022-12-23 06:27:11</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 padding-2">
                <div class="card-his-wd ">
                    <div class="row padding-1">
                        <div class="col-4 text-center pad-right-0">
                            <h4 class="text-vertically-center history-status text-gold-1 pd-l-8"><?= lang('Lang.history_withdraw.withdraw') ?></h4>
                        </div>
                        <div class="col-8 text-right pd-r-7 line-h-40-px pad-lr-0">
                            <span class="success-boder text-righ font-size-08 text-white"><?= lang('Lang.history_withdraw.successful') ?></span>
                            <p class="text-gold-1 font-size-13"><?= number_to_currency(1000.00, 'THB', 'th', 2); ?></p>
                            <p class="font-line line-h-2 font-size-07">2022-12-23 05:27:11</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 padding-2">
                <div class="card-his-dp ">
                    <div class="row padding-1">
                        <div class="col-4 text-center pad-right-0">
                            <h4 class="text-vertically-center history-status text-gold-1 pd-l-8"><?= lang('Lang.history_withdraw.deposit') ?></h4>
                        </div>
                        <div class="col-8 text-right pd-r-7 line-h-40-px pad-lr-0">
                            <span class="success-boder text-righ font-size-08 text-white"><?= lang('Lang.history_withdraw.successful') ?></span>
                            <p class="text-gold-1 font-size-13"><?= number_to_currency(1000.00, 'THB', 'th', 2); ?></p>
                            <p class="font-line line-h-2 font-size-07">2022-12-23 05:27:11</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 padding-2">
                <div class="card-his-wd ">
                    <div class="row padding-1">
                        <div class="col-4 text-center pad-right-0">
                            <h4 class="text-vertically-center history-status text-gold-1 pd-l-8"><?= lang('Lang.history_withdraw.withdraw') ?></h4>
                        </div>
                        <div class="col-8 text-right pd-r-7 line-h-40-px pad-lr-0 ">
                            <span class="success-boder text-righ font-size-08 text-white"><?= lang('Lang.history_withdraw.successful') ?></span>
                            <p class="text-gold-1 font-size-13"><?= number_to_currency(50.00, 'THB', 'th', 2); ?></p>
                            <p class="font-line line-h-2 font-size-07">2022-11-23 09:27:42</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container container-desktop desktop--">
    <div class="col-md-12">

        <div class="padding-2">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="text-rose-gold-shadow"><?= lang('Lang.history_withdraw.history_withdraw') ?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12  padding-3">
                    <table class="table table-tx">
                        <thead>
                            <tr>
                                <th class="w-15"></th>
                                <th class="text-left"><?= lang('Lang.history_withdraw.list') ?></th>
                                <th><?= lang('Lang.history_withdraw.date') ?></th>
                                <th><?= lang('Lang.history_withdraw.amount') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-15"></td>
                                <td class="text-left ">
                                    <span class="font-size-13 line-h-2"><?= lang('Lang.history_withdraw.deposit') ?></span>
                                </td>
                                <td class="line-h-1_5">
                                    <span>2022-12-23 06:27:11</span>
                                    <br>
                                    <span class="text-righ font-size-08 text-success-custom"><?= lang('Lang.history_withdraw.finished') ?></span>
                                </td>
                                <td class="td-text-top padding-1">
                                    <span><?= number_format(50.00, 2) ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-15"></td>
                                <td class="text-left">
                                    <span class="font-size-13 text-rose-gold line-h-2"><?= lang('Lang.history_withdraw.withdraw') ?></span>
                                </td>
                                <td class="line-h-1_5">
                                    <span>2022-12-23 06:27:11</span>
                                    <br>
                                    <span class="text-righ font-size-08 text-success-custom"><?= lang('Lang.history_withdraw.finished') ?></span>
                                </td>
                                <td class="td-text-top padding-1">
                                    <span><?= number_format(50.00, 2) ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-15"></td>
                                <td class="text-left">
                                    <span class="font-size-13 line-h-2"><?= lang('Lang.history_withdraw.deposit') ?></span>
                                </td>
                                <td class=" line-h-1_5">
                                    <span>2022-12-23 06:27:11</span>
                                    <br>
                                    <span class="text-righ font-size-08 text-success-custom"><?= lang('Lang.history_withdraw.finished') ?></span>
                                </td>
                                <td class="td-text-top padding-1">
                                    <span><?= number_format(300.00, 2) ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

<?= $footer ?>

<?= $this->endSection(); ?>