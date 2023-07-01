<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>


<div class="container" style="margin-top: 5rem;">

    <div class="text-center mb-2 mobile--">
        <h4 class="text-center text-white"><?= lang('Lang.change_password.change_password') ?></h4>
    </div>

    <div class="text-center mb-1 desktop--">
        <h3 class="text-rose-gold-shadow"><?= lang('Lang.change_password.change_password') ?></h3>
    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <h1 class="text-rose-gold-shadow"></h1>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center rosegold-block">
        <div class="col-sm-12 text-center bg-ln-rosegold">
            <div class="card-bank-rose-gold margin-auto">

                <form action="#" method="post" id="change_pass_form" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <input name="change_pass_current_password" class="form-control" style="height: 2rem; font-size: 18px;" type="password" placeholder="<?= lang('Lang.change_password.current_password') ?>">
                    </div>
                    <div class="form-group">
                        <input id="change_pass_new_password" name="change_pass_new_password" class="form-control" style="height: 2rem; font-size: 18px;" type="password" placeholder="<?= lang('Lang.change_password.new_password') ?>">
                    </div>
                    <div class="form-group">
                        <input name="change_pass_new_password_again" class="form-control" style="height: 2rem; font-size: 18px;" type="password" placeholder="<?= lang('Lang.change_password.new_repassword') ?>">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-rose-gold text-black font-size-07">
                            <?= lang('Lang.change_password.confirm') ?>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-3 col-md-6 offset-sm-1 col-sm-10 text-center ">
            <div class="row" style="padding: 10px">

            </div>
            <div class="row">
                <div class="col-sm-12 text-center padding-1">
                </div>
                <div class="col-sm-12 text-center padding-1">
                </div>
            </div>
        </div>
        <div class="col-3 text-center">
        </div>
    </div>
</div>

<?= $footer ?>

<script>
    $(function() {
        $("#change_pass_form").validate({
            rules: {
                change_pass_current_password: {
                    required: true,
                    alpha_numeric: true
                },
                change_pass_new_password: {
                    required: true,
                    rangelength: [6, 20],
                    alpha_numeric: true
                },
                change_pass_new_password_again: {
                    equalTo: "#change_pass_new_password"
                }
            },
            messages: {
                change_pass_current_password: {
                    required: '<?= lang('Lang.change_password.password_is_required') ?>',
                    alpha_numeric: '<?= lang('Lang.change_password.password_is_alpha_numeric') ?>',
                },
                change_pass_new_password: {
                    required: '<?= lang('Lang.change_password.new_password_is_required') ?>',
                    rangelength: '<?= lang('Lang.change_password.password_is_min_length') ?>',
                    alpha_numeric: '<?= lang('Lang.change_password.password_is_alpha_numeric') ?>',
                },
                change_pass_new_password_again: {
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