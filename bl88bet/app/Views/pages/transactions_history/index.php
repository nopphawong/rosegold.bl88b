<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5 px-md-5">
        <h4 class="text-center"><?= lang('Lang.transactions_history.transactions_history') ?></h4>
        <div class="visible-md">
            <div class="transaction rosegold-tabs-warpper">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" onclick="getTransaction('all')">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true"><i class="fa-solid fa-retweet"></i> <?= lang('Lang.transactions_history.all') ?></a>
                    </li>
                    <li class="nav-item" onclick="getTransaction('deposit')">
                        <a class="nav-link" data-toggle="tab" href="#deposit" role="tab" aria-controls="home" aria-selected="true"><i class="fa-solid fa-circle-arrow-down"></i> <?= lang('Lang.transactions_history.deposit') ?></a>
                    </li>
                    <li class="nav-item" onclick="getTransaction('withdraw')">
                        <a class="nav-link" data-toggle="tab" href="#withdraw" role="tab" aria-controls="profile" aria-selected="false"><i class="fa-solid fa-circle-arrow-up"></i> <?= lang('Lang.transactions_history.withdraw') ?></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all" role="tabpanel">
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
                                    <?php if ($result->status == 1) : ?>
                                        <?php if (count($result->data) > 0) : ?>
                                            <?php foreach ($result->data as $item) : ?>
                                                <tr>
                                                    <td class="w-35 text-center align-middle">
                                                        <span><?= $formatter->transactionType($item->type) ?></span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span><?= $item->date ?></span>
                                                        <br>
                                                        <span class="<?= $formatter->textStatus($item->status) ?>"><?= $formatter->transactionStatus($item->status) ?></span>
                                                    </td>
                                                    <td class="text-right align-middle">
                                                        <?= number_format($item->amount, 2) ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="3" class="w-35 text-center align-middle">
                                                    <span> <?= lang('Lang.transactions_history.no_history') ?> </span>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="deposit" role="tabpanel">
                    </div>
                    <div class="tab-pane fade" id="withdraw" role="tabpanel">
                    </div>
                </div>
            </div>
        </div>

        <div class="invisible-md">
            <div class="transaction rosegold-tabs-warpper">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" onclick="getTransaction('all')">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#all_m" role="tab" aria-controls="home" aria-selected="true"><i class="fa-solid fa-retweet"></i></a>
                    </li>
                    <li class="nav-item" onclick="getTransaction('deposit')">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#deposit_m" role="tab" aria-controls="home" aria-selected="true"><i class="fa-solid fa-circle-arrow-down"></i></a>
                    </li>
                    <li class="nav-item" onclick="getTransaction('withdraw')">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#withdraw_m" role="tab" aria-controls="profile" aria-selected="false"><i class="fa-solid fa-circle-arrow-up"></i></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all_m" role="tabpanel">
                        <h6 class="text-center mt-2 mb-2"><?= lang('Lang.transactions_history.all') ?></h6>
                        <div id="all_m_area">
                            <?php if ($result->status == 1) : ?>
                                <?php foreach ($result->data as $item) : ?>
                                    <div class="transaction-block <?= $formatter->cssTransctionType($item->type) ?>">
                                        <div class="row text-secondary">
                                            <div class="col-4 d-flex justify-content-center align-items-center">
                                                <?= $formatter->transactionType($item->type) ?>
                                            </div>
                                            <div class="col-8 d-flex flex-column align-items-end">
                                                <span class="transaction-status <?= $formatter->bgStatus($item->status) ?> text-white"><?= $formatter->transactionStatus($item->status) ?></span>
                                                <p class="text-13"><?= number_to_currency($item->amount, 'THB', 'th', 2); ?></p>
                                                <p class="text-07 text-white"><?= $item->date ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="deposit_m" role="tabpanel">
                        <h6 class="text-center mt-2 mb-2"><?= lang('Lang.transactions_history.deposit_list') ?></h6>
                        <div id="deposit_m_area"></div>
                    </div>
                    <div class="tab-pane fade" id="withdraw_m" role="tabpanel">
                        <h6 class="text-center mt-2 mb-2"><?= lang('Lang.transactions_history.withdraw_list') ?></h6>
                        <div id="withdraw_m_area"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $footer ?>

<script>
    function getTransaction(segment) {
        if (segment === 'all' || segment === 'deposit' || segment === 'withdraw') {
            let segmentUrl = "<?= base_url() . 'transactions/all' ?>";
            switch (segment) {
                case 'deposit':
                    segmentUrl = "<?= base_url() . 'transactions/deposit' ?>";
                    break;
                case 'withdraw':
                    segmentUrl = "<?= base_url() . 'transactions/withdraw' ?>";
                    break;
                default:
                    break;
            }
            $.ajax({
                url: segmentUrl,
                method: 'get',
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {
                    spinner('show')
                },
                success: function(response) {
                    spinner('hide')
                    try {
                        const {
                            status,
                            msg,
                            data
                        } = JSON.parse(response)
                        if (!status) {
                            swalError('<?= lang('Lang.dialog.confirm_btn') ?>', msg)
                        } else {
                            let desktopBody = ''
                            let mobileBody = ''
                            if (data.length) {
                                const thBath = new Intl.NumberFormat('th-TH', {
                                    style: 'currency',
                                    currency: 'THB',
                                })
                                for (const item of data) {
                                    desktopBody += `
                                <tr>
                                <td class="w-35 text-center align-middle">
                                                <span>${transactionType(item.type)}</span>
                                            </td>
                                            <td class="text-right">
                                                <span>${item.date}</span>
                                                <br>
                                                <span class="${textStatus(item.status)}">${transactionStatus(item.status)}</span>
                                            </td>
                                            <td class="text-right align-middle">
                                                ${numberWithCommas(item.amount)}
                                            </td>
                                </tr>`

                                    mobileBody += `<div class="transaction-block ${cssTransctionType(item.type)}">
                                <div class="row text-secondary">
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                    ${transactionType(item.type)}
                                    </div>
                                    <div class="col-8 d-flex flex-column align-items-end">
                                        <span class="transaction-status ${bgStatus(item.status)} text-white">${transactionStatus(item.status)}</span>
                                        <p class="text-13">${thBath.format(item.amount)}</p>
                                        <p class="text-07 text-white">${item.date}</p>
                                    </div>
                                </div>
                            </div>`
                                }
                            } else {
                                desktopBody = `<tr>
                                            <td colspan="3" class="w-35 text-center align-middle">
                                        <span> <?= lang('Lang.transactions_history.no_history') ?> </span> </td> </tr>`
                            }

                            const desktopTable = `<div class="col-12 rosegold-block-table">
                                <table class="table rosegold-table text-08">
                                <thead>
                                <tr>
                                <th class="w-35"><?= lang('Lang.transactions_history.list') ?></th><th class="text-right"><?= lang('Lang.transactions_history.date') ?></th><th class="text-right"><?= lang('Lang.transactions_history.amount') ?></th>
                                </tr>
                                </thead>
                                <tbody>${desktopBody}</tbody>
                                </table>
                                </div>`;

                            $(`#${segment}`).html(desktopTable);
                            $(`#${segment}_m_area`).html(mobileBody);
                        }
                    } catch (err) {
                        console.log(err);
                    }
                },
                error: function(err) {
                    console.log(err);
                    swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Transaction:224']) ?>')
                }
            })
        }
    }

    /**
     * Transaction type convertor.
     */
    function transactionType($type) {
        switch ($type) {
            case '1':
                return '<?= lang('Lang.transactions_history.deposit') ?>';
            case '2':
                return '<?= lang('Lang.transactions_history.withdraw') ?>';
            case '3':
                return '<?= lang('Lang.transactions_history.add_bonus') ?>';
            default:
                return '<?= lang('Lang.transactions_history.reduce_bonus') ?>';
        }
    }

    /**
     * Transaction status convertor.
     */
    function transactionStatus($status) {
        switch ($status) {
            case 'Y':
                return '<?= lang('Lang.transactions_history.successful') ?>';
            case 'C':
                return '<?= lang('Lang.transactions_history.cancel') ?>';
            default:
                return '<?= lang('Lang.transactions_history.pending') ?>';
        }
    }

    /**
     * Css type convertor.
     */
    function cssTransctionType($type) {
        switch ($type) {
            case '1':
                return 'deposit';
            case '2':
                return 'withdraw';
            case '3':
                return 'add-bonus';
            default:
                return 'reduce-bonus';
        }
    }

    /**
     * Text color.
     */
    function textStatus($status) {
        switch ($status) {
            case 'Y':
                return 'text-success';
            case 'C':
                return 'text-danger';
            default:
                return 'text-info';
        }
    }

    /**
     * Background color status.
     */
    function bgStatus($status) {
        switch ($status) {
            case 'Y':
                return 'bg-success';
            case 'C':
                return 'bg-danger';
            default:
                return 'bg-info';
        }
    }
</script>

<?= $this->endSection(); ?>