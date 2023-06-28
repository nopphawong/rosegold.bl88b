<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">
    <div class="col-12 col-md-12 pad-lr-0">
        <div class="wrapper wrapper-top">
            <div class="wallet mobile">
                <div class="wallet__inner">
                    <div class="wallet__main blackgray">
                        <div class="wallet__main--amount mobile">
                            <span class="font-size-09"><?= lang('Lang.home.credit_balance') ?></span>
                            <?php if (isset($result) && isset($result->status)) : ?>
                                <p class="amount-member"><?= number_to_currency($result->data->webbalance, 'THB', 'th', 2); ?></p>
                            <?php else : ?>
                                <p class="amount-member">???</p>
                            <?php endif; ?>
                        </div>
                        <div class="wallet__main--cashback text-center justify-content-center line-h-27-px">

                        </div>
                        <div class="wallet__main--bonus text-center justify-content-center  d-inline-block ">
                            <div class="wallet__datetime">
                                <img src="assets/images/misc/calendar.png" class="w-10">
                                <span class="font-size-07">12/01/2022</span>
                                <img src="assets/images/misc/time.png" class="w-10">
                                <span class="font-size-07">19:55:32</span>
                            </div>
                        </div>
                        <div class="wallet__main--bonus ">
                            <div class="boder-half-rosegold text-black">
                                <p class="font-size-07"><?= lang('Lang.home.turnover') ?> <span class="font-size-09"><?= number_format(1200.00, 2) ?>/</span><?= number_format(80.00, 2) ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 margin-top-10">
        <div class="home--menu">
            <a class="home--menu__item" href="<?= site_url('deposit') ?>">
                <div class="home--menu__item__inner">
                    <div class="home--menu__item__icon">
                        <div class="home--menu__item__icon__inner">
                            <img src="assets/images/button/deposit.png">
                            <span class="font-size-05"><?= lang('Lang.home.deposit') ?></span>
                        </div>
                    </div>
                </div>
            </a>
            <a class="home--menu__item" href="<?= site_url('withdraw') ?>">
                <div class="home--menu__item__inner">
                    <div class="home--menu__item__icon">
                        <div class="home--menu__item__icon__inner">
                            <img src="assets/images/button/withdraw.png">
                            <span class="font-size-05"><?= lang('Lang.home.withdraw') ?></span>
                        </div>
                    </div>
                </div>
            </a>
            <a class="home--menu__item" href="<?= site_url('affiliate') ?>">
                <div class="home--menu__item__inner">
                    <div class="home--menu__item__icon">
                        <div class="home--menu__item__icon__inner">
                            <img src="assets/images/button/aff.png">
                            <span class="font-size-05"><?= lang('Lang.home.affiliate') ?></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="twin-btn w-90 margin-auto">
            <div class="home--menu">
                <a class="home--menu__item_n" href="<?= site_url('promotion') ?>">
                    <div class="home--menu__item__inner_n bg-tranparent">
                        <div class="home--menu__item__icon_n">
                            <div class="home--menu__item__icon_inner_n">
                                <img src="assets/images/button/prm.png">
                                <span class="font-size-05"><?= lang('Lang.home.promotion') ?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="home--menu__item_n" href="<?= site_url('history-withdraw') ?>">
                    <div class="home--menu__item__inner_n bg-tranparent">
                        <div class="home--menu__item__icon_n">
                            <div class="home--menu__item__icon_inner_n">
                                <img src="assets/images/button/txhis.png">
                                <span class="font-size-05"><?= lang('Lang.home.history_withdraw') ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="home--menu">
            <a class="home--menu__item" href="<?= site_url('reward') ?>">
                <div class="home--menu__item__inner">
                    <div class="home--menu__item__icon">
                        <div class="home--menu__item__icon__inner">
                            <img src="assets/images/button/reward1.png">
                            <span class="font-size-05"><?= lang('Lang.home.reward') ?></span>
                        </div>
                    </div>
                </div>
            </a>
            <a class="home--menu__item" href="<?= site_url('coupon') ?>">
                <div class="home--menu__item__inner">
                    <div class="home--menu__item__icon">
                        <div class="home--menu__item__icon__inner">
                            <img src="assets/images/button/coupon1.png">
                            <span class="font-size-05"><?= lang('Lang.home.coupon') ?></span>
                        </div>
                    </div>
                </div>
            </a>
            <!--<a class="home--menu__item disabled" href="./LuckyWheel">-->

            <a class="home--menu__item disabled" href="./Wheel.php">
                <div class="home--menu__item__inner ">
                    <div class="home--menu__item__icon">
                        <div class="home--menu__item__icon__inner">
                            <img src="assets/images/button/wheel2.png">
                            <span class="font-size-05"><?= lang('Lang.home.lucky_wheel') ?></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<div class="container container-desktop desktop--">
    <div class="row ">
        <div class="col-md-12">
            <div class="wallet-desktop">
                <div class="row">
                    <div class="col-md-3 text-left user-panel-detail">
                        <p><?= lang('Lang.home.username', [session()->data->name]) ?></p>
                        <p><?= lang('Lang.home.phone_number', [$formatter->phone_format(session()->data->tel)]) ?></p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 wallet-content">
                                <div class="wrapper wrapper-top">
                                    <div class="wallet">
                                        <div class="wallet__inner">
                                            <div class="wallet__main blackgray">
                                                <div class="wallet__main--amount desktop">
                                                    <span class=""><?= lang('Lang.home.credit_balance') ?></span>
                                                    <?php if (isset($result) && isset($result->status)) : ?>
                                                        <p class="amount-member"><?= number_to_currency($result->data->webbalance, 'THB', 'th', 2); ?></p>
                                                    <?php else : ?>
                                                        <p class="amount-member">???</p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="wallet__main--bonus text-center justify-content-center  d-inline-block ">
                                                    <div class="wallet__datetime">
                                                        <img src="assets/images/misc/calendar.png" class="w-10">
                                                        <span class="font-size-07">12/01/2022</span>
                                                        <img src="assets/images/misc/time.png" class="w-10">
                                                        <span class="font-size-07">19:55:32</span>
                                                    </div>
                                                </div>
                                                <div class="wallet__main--bonus ">
                                                    <div class="boder-half-rosegold text-black">
                                                        <p class="font-size-07"><?= lang('Lang.home.turnover') ?> <span class="font-size-09"><?= number_format(1200.00, 2) ?>/</span><?= number_format(80.00, 2) ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top-5">
                            <div class="col-12 group-btn ">
                                <a href="<?= site_url('deposit') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/dp.png">
                                </a>
                                <a href="<?= site_url('withdraw') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/wd.png">
                                </a>
                                <a href="<?= site_url('history-withdraw') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/tx.png">
                                </a>
                                <a href="<?= site_url('promotion') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/promotion.png">
                                </a>
                                <a href="<?= site_url('affiliate') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/affiliate.png">
                                </a>
                            </div>
                            <div class="col-12 group-btn-2 ">
                                <a href="<?= site_url('wheel') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/wheel.png">
                                </a>
                                <a href="<?= site_url('reward') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/reward.png">
                                </a>
                                <a href="<?= site_url('coupon') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/coupon.png">
                                </a>
                                <a href="<?= site_url('profile') ?>" class="home btn btn-icon-top">
                                    <img src="assets/images/button/profile.png">
                                </a>
                                <a id="logout_btn" href="#" class="home btn btn-icon-top">
                                    <img src="assets/images/button/logout.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row text-right justify-content-end">
                            <div class="col-12 text-left user-panel-detail">
                                <p><?= lang('Lang.home.bank_account_number', [$formatter->bank_ac_no_format(session()->data->bank)]) ?></p>
                                <p><?= lang('Lang.home.bank_name', [$formatter->bank_format(session()->data->bank)]) ?></p>
                            </div>
                            <a href="http://line.me/ti/p/~@882yztsp" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/misc/line.png" style="width: 5vw;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $footer ?>

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


    // NOTE: Logout
    $('#logout_btn').on('click', function(e) {
        e.preventDefault()
        Swal.fire({
            icon: 'question',
            title: '<?= lang('Lang.home.confirm_logout') ?>',
            confirmButtonText: '<?= lang('Lang.dialog.confirm_btn') ?>',
            showCancelButton: true,
            cancelButtonText: '<?= lang('Lang.dialog.cancel_btn') ?>',
        }).then((result) => {
            if (result.isConfirmed) {
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
            }
        })
    })

    // NOTE: Flash message.
    <?php if (session()->getFlashdata('register_title')) : ?>
        Swal.fire({
            icon: 'success',
            title: '<?= session()->getFlashdata('register_title') ?>',
            text: '<?= session()->getFlashdata('register_text') ?>'
        })
    <?php endif; ?>
</script>

<?= $this->endSection(); ?>