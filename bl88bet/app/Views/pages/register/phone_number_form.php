<?= $this->extend('pages/register/index'); ?>

<?= $this->section('register_form'); ?>

<div class="form-group icon-inside">
    <input name="register_user" class="form-control" type="text" value="<?= set_value('register_user') ?>" placeholder="<?= lang('Lang.register.ten_digit_phone_number') ?>">
    <i class="far fa-user"></i>
    <?php if (isset($validation) && $validation->getError('register_user')) : ?>
        <div class="error">
            <?= $validation->getError('register_user') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>