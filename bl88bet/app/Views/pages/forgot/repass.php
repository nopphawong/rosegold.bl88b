<?= $this->extend('layouts/web/index'); ?>

<?= $this->section('content'); ?>

<form action="#" method="post" id="repass_form" enctype="multipart/form-data">
    <h1 class="text-center"> <i class="fas fa-question mr-2"></i><?= lang('Lang.forgot.forgot') ?></h1>
    <?= csrf_field() ?>

    <h4 id="otp_ref" class="otp-ref"><?= lang('Lang.forgot.otp_ref', [$otpref]) ?> <span id="countdown"></span></h4>

    <div class="form-group icon-inside">
        <input name="forgot_otp" class="form-control" type="text" placeholder="<?= lang('Lang.forgot.otp_code') ?>">
        <i class="fas fa-key"></i>
    </div>

    <div class="form-group icon-inside">
        <input name="forgot_user" class="form-control" type="text" value="<?= $user ?>" placeholder="<?= lang('Lang.forgot.ten_digit_phone_number') ?>" readonly>
        <i class="fas fa-mobile-android-alt"></i>
    </div>

    <div class="form-group icon-inside">
        <input name="forgot_password" class="form-control" type="password" placeholder="<?= lang('Lang.forgot.new_password') ?>">
        <i class="fas fa-key"></i>
    </div>

    <button type="submit" class="btn btn-submit"><?= lang('Lang.forgot.confirm') ?> <i class="fas fa-sign-in-alt"></i></button>

</form>

<?= $footer ?>

<script>
    const timer = localStorage.getItem('kCountdown') ? Number(localStorage.getItem('kCountdown')) : 1000 * 60 * 9.5
    let second = 1000 // 1 second
    // Update the count down every 1 second
    const x = setInterval(function() {
        // Find the distance between second and the timer
        const distance = timer - second
        second += 1000
        // Time calculations for minutes and seconds
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
        const seconds = Math.floor((distance % (1000 * 60)) / 1000)
        $('#countdown').html(`( ${minutes}m ${seconds}s )`)
        // set local storage
        localStorage.setItem('kCountdown', distance)
        // If the count down is finished, redirect forgot page.
        if (distance < 0) {
            clearInterval(x)
            localStorage.clear('kCountdown')
            window.location = '/forgot'
        }
    }, 1000)

    $(function() {
        $("#repass_form").validate({
            rules: {
                forgot_password: {
                    required: true,
                    rangelength: [6, 20],
                    alpha_numeric: true
                },
                forgot_otp: {
                    required: true
                }
            },
            messages: {
                forgot_password: {
                    required: '<?= lang('Lang.forgot.password_is_required') ?>',
                    rangelength: '<?= lang('Lang.forgot.password_is_min_length') ?>',
                    alpha_numeric: '<?= lang('Lang.forgot.password_is_alpha_numeric') ?>',
                },
                forgot_otp: {
                    required: '<?= lang('Lang.forgot.otp_is_required') ?>',
                }
            },
            submitHandler: function(form) {
                const formData = new FormData(form)
                formData.set('otpref', '<?= $otpref ?>')
                $.ajax({
                    url: '<?= base_url('/repass/submit') ?>',
                    method: 'post',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        localStorage.clear('kCountdown')
                        clearInterval(x)
                        spinner('show')
                    },
                    success: function(response) {
                        spinner('hide')
                        try {
                            const {
                                status,
                                msg
                            } = JSON.parse(response)
                            if (status === true) {
                                swalFlashAlert(msg)
                                setTimeout(function() {
                                    window.location = `/login`
                                }, 1000)
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: '<?= lang('Lang.forgot.re_pasword_error') ?>',
                                    confirmButtonText: '<?= lang('Lang.dialog.request_otp') ?>',
                                    showCancelButton: true,
                                    cancelButtonText: '<?= lang('Lang.dialog.retry') ?>',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        setTimeout(function() {
                                            window.location = `/forgot`
                                        }, 500)
                                    }
                                })
                            }
                        } catch (err) {
                            console.log(err);
                            toastr.error(err)
                        }
                    },
                    error: function(err) {
                        console.log(err);
                        swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Repass:126']) ?>')
                    }
                })
            },
        })
    });
</script>

<?= $this->endSection(); ?>