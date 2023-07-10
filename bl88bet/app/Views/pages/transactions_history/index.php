<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5 px-md-5">
        <h4 class="text-center"><?= lang('Lang.transactions_history.transactions_history') ?></h4>
        <div class="visible-md">
            <div class="col-12 rosegold-block-table">
                <table class="table rosegold-table text-08">
                    <thead>
                        <tr>
                            <th class="w-35"><?= lang('Lang.transactions_history.list') ?></th>
                            <th class="text-right"><?= lang('Lang.transactions_history.date') ?></th>
                            <th class="text-right"><?= lang('Lang.transactions_history.amount') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <span><?= lang('Lang.transactions_history.deposit') ?></span>
                            </td>
                            <td class="text-right">
                                <span>2022-12-26 06:27:11</span>
                                <br>
                                <span class="text-info"><?= lang('Lang.transactions_history.pending') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-35 text-center align-middle ">
                                <span class="text-rosegold"><?= lang('Lang.transactions_history.withdraw') ?></span>
                            </td>
                            <td class="text-right">
                                <span>2022-12-25 06:27:11</span>
                                <br>
                                <span class="text-success"><?= lang('Lang.transactions_history.finished') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <span class="text-rosegold"><?= lang('Lang.transactions_history.withdraw') ?></span>
                            </td>
                            <td class="text-right">
                                <span>2022-12-24 06:27:11</span>
                                <br>
                                <span class="text-danger"><?= lang('Lang.transactions_history.failed') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="invisible-md">
            <div class="transaction-block withdraw">
                <div class="row text-secondary">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <?= lang('Lang.transactions_history.withdraw') ?>
                    </div>
                    <div class="col-8 d-flex flex-column align-items-end">
                        <span class="transaction-status bg-success text-white"><?= lang('Lang.transactions_history.successful') ?></span>
                        <p class="text-13"><?= number_to_currency(1000.00, 'THB', 'th', 2); ?></p>
                        <p class="text-07 text-white">2022-12-23 06:27:11</p>
                    </div>
                </div>
            </div>
            <div class="transaction-block deposit">
                <div class="row text-secondary">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <?= lang('Lang.transactions_history.deposit') ?>
                    </div>
                    <div class="col-8 d-flex flex-column align-items-end">
                        <span class="transaction-status bg-success text-white"><?= lang('Lang.transactions_history.successful') ?></span>
                        <p class="text-13"><?= number_to_currency(1000.00, 'THB', 'th', 2); ?></p>
                        <p class="text-07 text-white">2022-12-23 06:27:11</p>
                    </div>
                </div>
            </div>
            <div class="transaction-block withdraw">
                <div class="row text-secondary">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <?= lang('Lang.transactions_history.withdraw') ?>
                    </div>
                    <div class="col-8 d-flex flex-column align-items-end">
                        <span class="transaction-status bg-success text-white"><?= lang('Lang.transactions_history.successful') ?></span>
                        <p class="text-13"><?= number_to_currency(1000.00, 'THB', 'th', 2); ?></p>
                        <p class="text-07 text-white">2022-12-23 06:27:11</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $footer ?>

<?= $this->endSection(); ?>