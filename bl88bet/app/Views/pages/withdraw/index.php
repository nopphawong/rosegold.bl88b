<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5 px-md-5">
        <h4 class="text-while text-center mt-2"><?= lang('Lang.withdraw.withdraw') ?></h4>
        <form action="#" method="post" id="withdraw_form" enctype="multipart/form-data">
            <div class="card-dark p-2 p-md-3 mb-5">
                <div class="rosegold-block mb-3">
                    <div class="rosegold-block-inner">
                        <div class="row mb-2">
                            <div class="col-4">
                                <img src="<?= base_url() ?>assets/images/misc/scb.png" class="bank-image">
                            </div>
                            <div class="col-8">
                                <div class="blog-detail text-shrink">
                                    <p><?= lang('Lang.withdraw.bank_account_number') ?> <span id="accNo"><?= $formatter->bank_ac_no_format(session()->data->bankno) ?></span></p>
                                    <p><?= lang('Lang.withdraw.bank_name') ?> <span id="bankName"><?= $formatter->bank_format(session()->data->bankid) ?></span></p>
                                    <p><?= lang('Lang.withdraw.username') ?> <span id="accName"><?= session()->data->name ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rosegold-block mb-3">
                    <div class="rosegold-block-inner">
                        <h5 class="text-center"><?= lang('Lang.withdraw.withdraw_amount') ?></h5>
                        <hr>
                        <input type="text" name="withdraw_amount" class="rosegold-input text-right" placeholder="0.00">
                    </div>
                </div>
                <button type="submit" class="btn rosegold-light-btn w-100 btn-md"><?= lang('Lang.withdraw.confirm') ?></button>
            </div>
        </form>

        <div class="visible-md">
            <h5><?= lang('Lang.withdraw.history_last_5_withdraws') ?></h5>
            <div class="col-12 rosegold-block-table">
                <table class="table rosegold-table text-08">
                    <thead>
                        <tr>
                            <th class="w-35"><?= lang('Lang.withdraw.list') ?></th>
                            <th class="text-right"><?= lang('Lang.withdraw.date') ?></th>
                            <th class="text-right"><?= lang('Lang.withdraw.amount') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <?= lang('Lang.withdraw.withdraw_table') ?>
                            </td>
                            <td class="text-right">
                                <span>2022-12-26 06:27:11</span>
                                <br>
                                <span class="text-info"><?= lang('Lang.withdraw.pending') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <?= lang('Lang.withdraw.withdraw_table') ?>
                            </td>
                            <td class="text-right">
                                <span>2022-12-25 06:27:11</span>
                                <br>
                                <span class="text-success"><?= lang('Lang.withdraw.finished') ?></span>
                            </td>
                            <td class="text-right align-middle">
                                <?= number_format(50.00, 2) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-35 text-center align-middle">
                                <?= lang('Lang.withdraw.withdraw_table') ?>
                            </td>
                            <td class="text-right">
                                <span>2022-12-24 06:27:11</span>
                                <br>
                                <span class="text-danger"><?= lang('Lang.withdraw.finished') ?></span>
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

<script>
    $(function() {
        $.validator.addMethod(
            'check_credit',
            function(value, element) {
                console.log(Number(value), Number('<?= session()->webbalance ?>'));
                return Number(value) < Number('<?= session()->webbalance ?>')
            }
        )

        $("#withdraw_form").validate({
            rules: {
                withdraw_amount: {
                    required: true,
                    min: 1,
                    digits: true,
                    check_credit: true
                }
            },
            messages: {
                withdraw_amount: {
                    required: '<?= lang('Lang.withdraw.amount_is_required') ?>',
                    min: '<?= lang('Lang.withdraw.amount_is_min') ?>',
                    digits: '<?= lang('Lang.withdraw.amount_is_digits') ?>',
                    check_credit: '<?= lang('Lang.withdraw.amount_is_less_than_credit') ?>',
                }
            },
            submitHandler: function(form) {
                const formData = new FormData(form)
                const method = $(form).attr('method')
                console.log(formData.get('withdraw_amount'));
                $.ajax({
                    url: '<?= base_url('/withdraw/submit') ?>',
                    method,
                    data: formData,
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
                                deposit_id
                            } = JSON.parse(response)
                            if (!status) {
                                swalError('<?= lang('Lang.dialog.confirm_btn') ?>', msg)
                            } else {
                                swalFlashAlert(msg)
                                setTimeout(function() {
                                    window.location = '/transactions-history'
                                }, 1000)
                            }
                        } catch (err) {
                            toastr.error(err, '', {
                                timeOut: 5000
                            })
                        }
                    },
                    error: function(err) {
                        console.log(err);
                        swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Withdraw 169']) ?>')
                    }
                })
            },
        })
    });
</script>

<?= $this->endSection(); ?>