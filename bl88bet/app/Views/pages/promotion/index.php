<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5">
        <h4 class="text-center"><?= lang('Lang.promotion.promotion') ?></h4>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 p-2">
                <div class="card-dark p-2">
                    <h6>สมัครสมาชิกใหม่</h6>
                    <p class="text-07 px-3">สมาชิกใหม่ จะได้รับโบนัสเพิ่ม 50% สูงสุด 2,000บาท ทำเทิร์น 2
                        เท่า</p>
                    <a href="#" class="text-rosegold text-decoration-underline text-07 pl-3 py-1"><?= lang('Lang.promotion.more') ?></a>
                    <img src="<?= base_url() ?>assets/images/promotions/prm4.png" class="w-100">
                    <div class="text-center pt-2">
                        <button class="btn get-promotion-btn w-100"><?= lang('Lang.promotion.get_bonus') ?></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 p-2">
                <div class="card-dark p-2">
                    <h6>เพื่อนแนะนำ</h6>
                    <p class="text-07 px-3">โปรโมชั่นแนะนำเพื่อนรับ 10% ของยอดฝากแรกของเพื่อน รับูสงสุด
                        2,000 บาท</p>
                    <a href="#" class="text-rosegold text-decoration-underline text-07 pl-3 py-1"><?= lang('Lang.promotion.more') ?></a>
                    <img src="<?= base_url() ?>assets/images/promotions/prm5.png" class="w-100">
                    <div class="text-center pt-2">
                        <button class="btn get-promotion-btn w-100"><?= lang('Lang.promotion.get_bonus') ?></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 p-2">
                <div class="card-dark p-2">
                    <h6>คืนยอดเสีย 3%</h6>
                    <p class="text-07 px-3">เล่นเสียให้คืน 3% ทุกเดือน คืนให้ตัดเต็มสูงสุด 10,000 บาท</p>
                    <a href="#" class="text-rosegold text-decoration-underline text-07 pl-3 py-1"><?= lang('Lang.promotion.more') ?></a>
                    <img src="<?= base_url() ?>assets/images/promotions/prm6.png" class="w-100">
                    <div class="text-center pt-2">
                        <button class="btn get-promotion-btn w-100"><?= lang('Lang.promotion.get_bonus') ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $footer ?>

<?= $this->endSection(); ?>