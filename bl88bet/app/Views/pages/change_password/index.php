<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5 px-md-5">
        <h4 class="text-while text-center mt-2"><?= lang('Lang.change_password.change_password') ?></h4>
        <div class="change-password-content card-dark p-2 p-md-3 mb-5 mx-auto">
            <div class="rosegold-block">
                <div class="rosegold-block-inner">
                    <form action="#" method="post" id="change_pass_form" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="current_password" class="text-rosegold"><?= lang('Lang.change_password.current_password') ?></label>
                            <input type="password" id="current_password" name="current_password" class="rosegold-border-input w-100">
                        </div>
                        <div class="form-group">
                            <label for="new_password" class="text-rosegold"><?= lang('Lang.change_password.new_password') ?></label>
                            <input type="password" id="new_password" name="new_password" class="rosegold-border-input w-100">
                        </div>
                        <div class="form-group">
                            <label for="renew_password" class="text-rosegold"><?= lang('Lang.change_password.new_repassword') ?></label>
                            <input type="password" id="renew_password" name="renew_password" class="rosegold-border-input w-100">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn rosegold-dark-btn w-100">
                                <?= lang('Lang.change_password.confirm') ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $footer ?>

<script>
    $(function() {
        $("#change_pass_form").validate({
            rules: {
                current_password: {
                    required: true,
                    alpha_numeric: true
                },
                new_password: {
                    required: true,
                    rangelength: [6, 20],
                    alpha_numeric: true
                },
                renew_password: {
                    equalTo: "#new_password"
                }
            },
            messages: {
                current_password: {
                    required: '<?= lang('Lang.change_password.password_is_required') ?>',
                    alpha_numeric: '<?= lang('Lang.change_password.password_is_alpha_numeric') ?>',
                },
                new_password: {
                    required: '<?= lang('Lang.change_password.new_password_is_required') ?>',
                    rangelength: '<?= lang('Lang.change_password.password_is_min_length') ?>',
                    alpha_numeric: '<?= lang('Lang.change_password.password_is_alpha_numeric') ?>',
                },
                renew_password: {
                    equalTo: '<?= lang('Lang.change_password.repassword_is_matches') ?>',
                }
            },
            submitHandler: function(form) {
                const formData = new FormData(form)
                $.ajax({
                    url: '<?= base_url('/change-password/submit') ?>',
                    method: 'post',
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
                                msg
                            } = JSON.parse(response)
                            if (status === true) {
                                swalFlashAlert(msg)
                                setTimeout(function() {
                                    $.ajax({
                                        url: '<?= base_url('/logout') ?>',
                                        method: 'get',
                                        processData: false,
                                        contentType: false,
                                        cache: false,
                                        success: function() {
                                            setTimeout(function() {
                                                window.location = '/login'
                                            }, 500)
                                        },
                                        error: function(err) {
                                            console.log(err);
                                            swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Logout:261']) ?>')
                                        }
                                    })
                                }, 1000)
                            } else {
                                swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.change_password.change_pasword_error') ?>', msg)
                            }
                        } catch (err) {
                            console.log(err);
                            toastr.error(err)
                        }
                    },
                    error: function(err) {
                        console.log(err);
                        swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['ChangePass:126']) ?>', err)
                    }
                })
            },
        })
    });
</script>

<?= $this->endSection(); ?>