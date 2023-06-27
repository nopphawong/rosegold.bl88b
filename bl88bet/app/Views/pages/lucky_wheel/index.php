<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">
    <div class="row">
        <div class="col-6">
            <img src="images/misc/backimg.png" class="w-15"> <span class="font-size-09">กลับสู่หน้าแรก</span>
        </div>
        <div class="col-6 text-righ justify-content-end d-flex padding-2">
            <img src="assets/images/misc/redeemtext.png" class="w-70">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img src="assets/images/misc/spintext.png" class="w-80">
        </div>

    </div>
    <div class="row">
        <div class="col-12 text-center top-d-20px">
            <img src="assets/images/wheel.png" class="w-90">
        </div>
    </div>

    <div class="row bg-score padding-08vh w-80  margin-auto">
        <div class="col-12 text-center padding-2">
            <div class="bg-back ">BL88BET6490</div>
        </div>
        <div class="col-6 text-center padding-2">
            <div class="bg-back ">
                <img src="assets/images/icons/whee_ic.png" width="20hv"><span id="Ecredit"></span>
            </div>
        </div>
        <div class="col-6 text-center padding-2">
            <div class="bg-back ">
                <img src="assets/images/icons/coin.png" width="20hv"> 0
            </div>
        </div>

    </div>
</div>

<div class="main-desktop desktop--">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2 class="text-rose-gold-shadow">กงล้อนำโชค</h2>
        </div>
    </div>
    <div class="row justify-content-center padding-top-1-rem">
        <div class="col-md-5 text-center">

            <img src="assets/images/wheel.png" class="w-80">


        </div>
    </div>
    <div class="row text-center justify-content-center padding-top-1-rem">
        <div class="row bg-score padding-08vh w-25">
            <div class="col-12 text-center padding-2">
                <div class="bg-back ">BL88BET6490</div>
            </div>
            <div class="col-6 text-center padding-2">
                <div class="bg-back ">
                    <img src="assets/images/icons/whee_ic.png" width="20hv"><span id="Ecredit"></span>
                </div>
            </div>
            <div class="col-6 text-center padding-2">
                <div class="bg-back ">
                    <img src="assets/images/icons/coin.png" width="20hv"> 0
                </div>
            </div>
        </div>
    </div>
</div>


<?= $footer ?>

<?= $this->endSection(); ?>