<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5 px-md-5">
        <h4 class="text-while text-center mt-2"><?= lang('Lang.deposit.deposit') ?></h4>

        <div class="card-dark p-2 p-md-3 mb-5">
            <div class="rosegold-block mb-3">
                <div class="rosegold-block-inner">
                    <div class="row mb-2">
                        <div class="col-4">
                            <img src="<?= base_url() ?>assets/images/misc/scb.png" class="bank-image">
                        </div>
                        <div class="col-8">
                            <div class="blog-detail text-shrink">
                                <?php if ($result->status == 1) : ?>
                                    <div id="deposit_ac" class="d-none"><?= $result->data->bankno ?></div>
                                    <p><?= lang('Lang.deposit.bank_account_number', [$formatter->bank_ac_no_format($result->data->bankno)]) ?></p>
                                    <p><?= lang('Lang.deposit.bank_name', [$formatter->bank_format($result->data->bankid)]) ?></p>
                                    <p><?= lang('Lang.deposit.name', [$result->data->bankname]) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <button type="button" class="btn rosegold-dark-btn w-75 mx-auto mt-3" onclick="copyClipboard(deposit_ac)">
                            <img src="<?= base_url() ?>assets/images/misc/copy.png">
                            <?= lang('Lang.deposit.copy') ?>
                        </button>
                    </div>
                </div>
            </div>
            <form action="#" method="post" id="deposit_form" enctype="multipart/form-data">
                <div class="rosegold-block mb-3">
                    <div class="rosegold-block-inner">
                        <h5 class="text-center text-09"><?= lang('Lang.deposit.deposit_amount') ?></h5>
                        <hr>
                        <input type="text" name="deposit_amount" class="rosegold-input text-right" placeholder="0.00">
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-center">
                    <label class="rosegold-radio"><?= lang('Lang.deposit.get_bonus') ?>
                        <input type="radio" name="radio" checked>
                        <span class="rosegold-checkmark"></span>
                    </label>
                    &nbsp; &nbsp;
                    <label class="rosegold-radio"><?= lang('Lang.deposit.no_bonus') ?>
                        <input type="radio" name="radio">
                        <span class="rosegold-checkmark"></span>
                    </label>
                </div> -->
                <button type="submit" class="btn rosegold-light-btn w-100 btn-md"><?= lang('Lang.deposit.confirm') ?></button>
            </form>

            <div class="col-12 text-rosegold mt-3">
                <h5><?= lang('Lang.deposit.note') ?></h5>
                <div class="blog-detail text-rosegold text-07 mb-3">
                    <p>- <?= lang('Lang.deposit.note_detail_1') ?></p>
                    <p>- <?= lang('Lang.deposit.note_detail_2') ?></p>
                    <p>- <?= lang('Lang.deposit.note_detail_3') ?></p>
                </div>
                <a target="_blank" href="http://line.me/ti/p/~@882yztsp" class="btn rosegold-dark-btn w-75 m-auto invisible-md">
                    <img src="<?= base_url() ?>assets/images/misc/staff.png">
                    <?= lang('Lang.deposit.contact_us') ?>
                </a>
            </div>
        </div>

    </div>
</main>

<?= $footer ?>

<script>
    // NOTE: Deposit
    $(function() {
        $("#deposit_form").validate({
            rules: {
                deposit_amount: {
                    required: true,
                    min: 1,
                    digits: true,
                },
            },
            messages: {
                deposit_amount: {
                    required: '<?= lang('Lang.deposit.amount_is_required') ?>',
                    min: '<?= lang('Lang.deposit.amount_is_min') ?>',
                    digits: '<?= lang('Lang.deposit.amount_is_digits') ?>',
                },
            },
            submitHandler: function(form) {
                const method = $(form).attr('method')
                const formData = new FormData(form)
                formData.set('bankid', '<?= $result->data->bankid ?>')
                formData.set('bankno', '<?= $result->data->bankno ?>')
                $.ajax({
                    url: '<?= base_url('/deposit/submit') ?>',
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
                                data
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
                        swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Deposit 194']) ?>')
                    }
                })
            },
        })
    });
</script>

<?= $this->endSection(); ?>