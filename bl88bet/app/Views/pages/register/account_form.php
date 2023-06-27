<?= $this->extend('pages/register/index'); ?>

<?= $this->section('register_form'); ?>

<div class="form-group icon-inside">
    <input name="register_user" class="form-control" type="text" value="<?= set_value('register_user') ?>" placeholder="<?= lang('Lang.register.ten_digit_phone_number') ?>" readonly>
    <i class="far fa-user"></i>
    <?php if (isset($validation) && $validation->getError('register_user')) : ?>
        <div class="error">
            <?= $validation->getError('register_user') ?>
        </div>
    <?php endif; ?>
</div>

<div class="bank_flex mb-3 disabled-bank">
    <div id="KBANK" data-value="KBANK" class="bank_box bank_kbank"> <img src="assets/images/iconbank/kbank.svg"> </div>
    <div id="BBL" data-value="BBL" class="bank_box bank_bbl"><img src="assets/images/iconbank/bbl.svg"></div>
    <div id="BAY" data-value="BAY" class="bank_box bank_bay"><img src="assets/images/iconbank/bay.svg"></div>
    <div id="SCB" data-value="SCB" class="bank_box bank_scb"><img src="assets/images/iconbank/scb.svg"></div>
    <div id="KTB" data-value="KTB" class="bank_box bank_ktb"><img src="assets/images/iconbank/ktb.svg"></div>
    <div id="UOBT" data-value="UOBT" class="bank_box bank_uob"><img src="assets/images/iconbank/uob.svg"></div>
    <div id="TTB" data-value="TTB" class="bank_box bank_ttb"><img src="assets/images/iconbank/ttb.svg"></div>
    <div id="TISCO" data-value="TISCO" class="bank_box bank_tisco"><img src="assets/images/iconbank/tisco.svg"></div>
    <div id="KKP" data-value="KKP" class="bank_box bank_kk"><img src="assets/images/iconbank/kk.svg"></div>
    <div id="GHB" data-value="GHB" class="bank_box bank_ghb"><img src="assets/images/iconbank/ghb.svg"></div>
    <div id="LHFG" data-value="LHFG" class="bank_box bank_lhb"><img src="assets/images/iconbank/lhb.svg"></div>
    <div id="GSB" data-value="GSB" class="bank_box bank_gsb"><img src="assets/images/iconbank/gsb.svg"></div>
    <div id="BAAC" data-value="BAAC" class="bank_box bank_baac"><img src="assets/images/iconbank/baac.svg"></div>
    <div id="CIMB" data-value="CIMB" class="bank_box bank_cimb"><img src="assets/images/iconbank/cimb.svg"></div>
</div>

<div class="form-group icon-inside">
    <input name="register_bankidx" class="form-control" type="text" value="<?= set_value('register_bankidx') ?>" placeholder="<?= lang('Lang.register.select_bank') ?>" readonly>
    <i class="fas fa-building  "></i>
</div>
<div class="form-group icon-inside">
    <input name="register_bankno" class="form-control" type="text" placeholder="<?= lang('Lang.register.bank_account_no') ?>" value="<?= set_value('register_bankno') ?>" readonly>
    <i class="fas fa-address-book"></i>
</div>
<div class="form-group icon-inside">
    <input name="register_bank_account_name" class="form-control" type="text" placeholder="<?= lang('Lang.register.bank_account') ?>" value="<?= isset($result) ? set_value('register_bank_account_name', $result->data->accName) : set_value('register_bank_account_name') ?>" readonly>
    <i class="far fa-user"></i>
</div>
<div class="form-group icon-inside">
    <input name="register_password" class="form-control" type="password" placeholder="<?= lang('Lang.register.password') ?>">
    <i class="fas fa-key"></i>
    <?php if (isset($validation) && $validation->getError('register_password')) : ?>
        <div class="error">
            <?= $validation->getError('register_password') ?>
        </div>
    <?php endif; ?>
</div>
<div class="form-group icon-inside">
    <input name="register_repassword" class="form-control" type="password" placeholder="<?= lang('Lang.register.confirm_password') ?>">
    <i class="fas fa-key"></i>
    <?php if (isset($validation) && $validation->getError('register_repassword')) : ?>
        <div class="error">
            <?= $validation->getError('register_repassword') ?>
        </div>
    <?php endif; ?>
</div>

<script>
    <?php if (isset($result)) : ?>
        const {
            status,
            msg
        } = JSON.parse('<?= json_encode($result) ?>')
        if (!status) {
            swalError('<?= lang('Lang.dialog.confirm_btn') ?>', msg)
        }
    <?php endif; ?>
</script>

<?= $this->endSection(); ?>