<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>


<div class="main mobile--">
    <div class="responsive">
        <div class="col-12">
            <h5 class="text-center text-white"><?= lang('Lang.withdraw.withdraw') ?></h5>
        </div>

        <form action="#" method="post" id="m_withdraw_form" enctype="multipart/form-data">
            <div class="warpper-form">
                <div class="col-12 padding-3">
                    <div class="card-bank-withdraw mg-at w-90 padding-4 ">
                        <div class="row amount-pad ">
                            <div class="col-md-12 text-left padding-bot-35px">
                                <h4 class="text-white text-sq-1"><?= lang('Lang.withdraw.withdraw_amount_mobile') ?></h4>
                                <hr>
                                <input type="text" name="withdraw_amount" class="btn-block input-withdraw" placeholder="0.00">
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
                                <p class="letter-spacing-1"><?= lang('Lang.withdraw.bank_account_number') ?> <span id="accNo"><?= $formatter->bank_ac_no_format(session()->data->bank) ?></span></p>
                                <p class="letter-spacing-1"><?= lang('Lang.withdraw.bank_name') ?> <span id="bankName"><?= $formatter->bank_format(session()->data->bank) ?></span></p>
                                <p class="letter-spacing-1"><?= lang('Lang.withdraw.username') ?> <span id="accName"><?= session()->data->name ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 padding-3">
                    <button type="submit" class="btn boder-half-rosegold text-black font-size-1_5vw w-80 line-h-2 ">ยืนยันการถอนเงิน</button>
                </div>

            </div>
        </form>
    </div>
</div>

<div class="main-desktop desktop--">

    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="text-rose-gold-shadow"><?= lang('Lang.withdraw.withdraw') ?></h3>
        </div>
    </div>
    <form action="#" method="post" id="withdraw_form" enctype="multipart/form-data">
        <div class="row padding-1">
            <div class="col-md-12">
                <div class="card-bank-withdraw mg-at w-50">
                    <div class="row amount-pad">
                        <div class="col-md-12 text-left padding-bot-35px">
                            <h5 class="bold text-white text-bold text-sq-1"><?= lang('Lang.withdraw.withdraw_amount') ?></h5>
                            <hr>
                            <input type="text" name=" " class="btn-block input-withdraw" placeholder="0.00">
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

                                <p class="font-size-08 letter-spacing-1"><?= lang('Lang.withdraw.bank_account_number') ?> <span id="accNo"><?= $formatter->bank_ac_no_format(session()->data->bank) ?></span></p>
                                <p class="font-size-08 letter-spacing-1"><?= lang('Lang.withdraw.bank_name') ?> <span id="bankName"><?= $formatter->bank_format(session()->data->bank) ?></span></p>
                                <p class="font-size-08 letter-spacing-1"><?= lang('Lang.withdraw.username') ?> <span id="accName"><?= session()->data->name ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center padding-1">
            <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-rose-gold w-50 text-black font-size-08 m-auto"><?= lang('Lang.withdraw.confirm') ?></button>
            </div>
        </div>
    </form>
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

<script>
    $(function() {
        $("#m_withdraw_form, #withdraw_form").validate({
            rules: {
                withdraw_amount: {
                    required: true,
                    number: true
                }
            },
            messages: {
                withdraw_amount: {
                    required: '<?= lang('Lang.withdraw.amount_is_required') ?>',
                    number: '<?= lang('Lang.withdraw.amount_must_be_number') ?>',
                }
            },
            submitHandler: function(form) {
                const formData = new FormData(form)
                const method = $(form).attr('method')
                console.log(formData.get('withdraw_amount'));;
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
                        console.log(response);
                        // try {
                        //     const {
                        //         status,
                        //         msg,
                        //         data
                        //     } = JSON.parse(response)
                        //     if (!status) {
                        //         swalError('<?= lang('Lang.dialog.confirm_btn') ?>', msg)
                        //     } else {
                        //         swalFlashAlert(msg)
                        //         setTimeout(function() {
                        //             window.location = './'
                        //         }, 1000)
                        //     }
                        // } catch (err) {
                        //     toastr.error(err, '', {
                        //         timeOut: 5000
                        //     })
                        // }
                    },
                    error: function(err) {
                        console.log(err);
                        swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Login 101']) ?>')
                    }
                })
            },
        })
    });
</script>

<?= $this->endSection(); ?>