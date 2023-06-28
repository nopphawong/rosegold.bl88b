<?= $this->extend('pages/web_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="col text-right">
    <a href="<?= site_url('lang/th'); ?>"><img src="assets/images/th.png" class="lang"></a>
    <a href="<?= site_url('lang/en'); ?>"><img src="assets/images/en.png" class="lang"></a>
</div>
<h1 class="text-center"><?= lang('Lang.login.login') ?></h1>
<p class="text-white-50"><?= lang('Lang.login.for_member_login') ?><?= session()->logged_in ?></p>

<form action="#" method="post" id="login_form" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="form-group icon-inside">
        <input name="login_user" class="form-control" type="text" placeholder="<?= lang('Lang.login.username') ?>">
        <i class="far fa-user"></i>
    </div>

    <div class="form-group icon-inside">
        <input name="login_password" class="form-control" type="password" placeholder="<?= lang('Lang.login.password') ?>">
        <i class="fas fa-lock"></i>
    </div>

    <button type="submit" class="btn btn-submit"><?= lang('Lang.login.login') ?> <i class="fas fa-sign-in-alt"></i></button>
</form>

<div class="col-12 text-center" style="margin-top: 20px;">
    <div class="row">
        <div class="col-6 text-center">
            <a class="icon-prepend" style="color:#d9e0ea !important;" href="<?= site_url('forgot') ?>">
                <i class="fas fa-question mr-2"></i><?= lang('Lang.forgot.forgot') ?>
            </a>
        </div>
        <div class="col-6 text-center">
            <a class="icon-prepend" style="color:#d9e0ea !important;" href="<?= site_url('register') ?>">
                <i class="fas fa-pen mr-2"></i><?= lang('Lang.register.register') ?>
            </a>
        </div>
    </div>
</div>

<?= $footer ?>

<script>
    $(function() {
        $("#login_form").validate({
            rules: {
                login_user: {
                    required: true
                },
                login_password: {
                    required: true
                }
            },
            messages: {
                login_user: {
                    required: '<?= lang('Lang.login.username_is_required') ?>',
                },
                login_password: {
                    required: '<?= lang('Lang.login.password_is_required') ?>',
                }
            },
            submitHandler: function(form) {
                const formData = new FormData(form)
                const method = $(form).attr('method')
                $.ajax({
                    url: '<?= base_url('/login/submit') ?>',
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
                                    window.location = './'
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
                        swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Login 101']) ?>')
                    }
                })
            },
        })
    });
</script>

<?= $this->endSection(); ?>

<?= $this->renderSection('footer') ?>