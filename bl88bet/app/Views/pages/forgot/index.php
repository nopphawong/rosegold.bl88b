<?= $this->extend('pages/web_templates/index'); ?>

<?= $this->section('content'); ?>

<form action="#" method="post" id="forgot_form" enctype="multipart/form-data">
    <div class="col text-right">
        <a href="<?= site_url('lang/th'); ?>"><img src="assets/images/th.png" class="lang"></a>
        <a href="<?= site_url('lang/en'); ?>"><img src="assets/images/en.png" class="lang"></a>
    </div>
    <h1 class="text-center"> <i class="fas fa-question mr-2"></i><?= lang('Lang.forgot.forgot') ?></h1>
    <?= csrf_field() ?>
    <div class="form-group icon-inside">
        <input name="forgot_user" class="form-control" type="text" placeholder="<?= lang('Lang.forgot.ten_digit_phone_number') ?>">
        <i class="fas fa-mobile-android-alt"></i>
    </div>

    <button type="submit" class="btn btn-submit"><?= lang('Lang.forgot.verify') ?> <i class="fas fa-sign-in-alt"></i></button>

    <div class="col-12 text-center" style="margin-top: 20px;">
        <div class="row">
            <div class="col-6 text-center">
                <a class="icon-prepend" style="color:#d9e0ea !important;" href="<?= site_url('register') ?>">
                    <i class="fas fa-pen mr-2"></i><?= lang('Lang.register.register') ?>
                </a>
            </div>
            <div class="col-6 text-center">
                <a class="icon-prepend" style="color:#d9e0ea !important;" href="<?= site_url('login') ?>">
                    <i class="fas fa-arrow-alt-left mr-2"></i><?= lang('Lang.login.login') ?>
                </a>
            </div>
        </div>
    </div>
</form>

<?= $footer ?>

<script>
    $(function() {
        $("#forgot_form").validate({
            rules: {
                forgot_user: {
                    required: true,
                    digits: true
                }
            },
            messages: {
                forgot_user: {
                    required: '<?= lang('Lang.forgot.username_is_required') ?>',
                    digits: '<?= lang('Lang.forgot.username_is_numeric') ?>',
                }
            },
            submitHandler: function(form) {
                const formData = new FormData(form)
                const user = formData.get('forgot_user')
                $.ajax({
                    url: '<?= base_url('/forgot/request-otp') ?>',
                    method: 'post',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    // Set to 5 seconds for timeout limit.
                    timeout: 5000,
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
                            if (status === false && msg === 'notfound') {
                                swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.dialog.user_not_found') ?>')
                                return
                            }
                            console.log(response);
                            if (status === true) {
                                setTimeout(function() {
                                    window.location = `/repass?user=${user}&otpref=${data}`
                                }, 500)
                            }
                        } catch (err) {
                            console.log(err)
                            toastr.error(err)
                        }

                    },
                    error: function(xhr, textStatus, errorThrown) {
                        swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Forgot:92']) ?>')
                    }
                })
            },
        })
    });
</script>

<?= $this->endSection(); ?>