<?php

use App\Libraries\CustomFormatter;

$formatter = new CustomFormatter()
?>

<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<script>
    setInterval(() => {
        $('#real_date_m').html(dayjs().format('DD/MM/YYYY'))
        $('#real_time_m').html(dayjs().format('HH:mm:ss'))
        $('#real_date').html(dayjs().format('DD/MM/YYYY'))
        $('#real_time').html(dayjs().format('HH:mm:ss'))
    }, 1000);
</script>

<main>
    <div class="container-fluid">
        <div class="d-flex flex-row mt-md-4">
            <div class="content-left flex-column">
                <p><?= lang('Lang.home.username', [session()->data->name]) ?></p>
                <p><?= lang('Lang.home.phone_number', [$formatter->phone_format(session()->data->tel)]) ?></p>
            </div>
            <div class="content-center">
                <div class="wallet-container">
                    <div class="wallet-wrapper">
                        <div class="wallet-inner">
                            <div class="wallet blackgray">
                                <div class="wallet-total-credit">
                                    <span class=""><?= lang('Lang.home.credit_balance') ?></span>
                                    <?php if (isset($result) && isset($result->status) && $result->status == 1) : ?>
                                        <p id="d_credit" class="member-credit">฿0.00</p>
                                    <?php else : ?>
                                        <p id="d_credit" class="member-credit">???</p>
                                    <?php endif; ?>
                                </div>
                                <button onclick="refreshCredit()" class="btn rosegold-btn wallet-btn"><?= lang('Lang.home.refresh_btn') ?></button>
                                <div class="wallet-turnover-container">
                                    <div class="wallet-datetime">
                                        <img src="assets/images/misc/calendar.png" class="w-10">
                                        <div id="real_date" class="text-07">01/01/2023</div>
                                        <img src="assets/images/misc/time.png" class="w-10">
                                        <div id="real_time" class="text-07">00:00:00</div>
                                    </div>
                                </div>
                                <div class="wallet-turnover-container">
                                    <div class="rosegold-border text-black">
                                        <p class="text-07"><?= lang('Lang.home.turnover') ?> <span class="text-09"><?= number_format(1200.00, 2) ?>/</span><?= number_format(80.00, 2) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-container">
                    <div class="menu-desktop">
                        <div>
                            <a href="<?= site_url('deposit') ?>" class="btn menu-btn">
                                <img src="assets/images/button/dp.png">
                            </a>
                            <a href="<?= site_url('withdraw') ?>" class="btn menu-btn">
                                <img src="assets/images/button/wd.png">
                            </a>
                            <a href="<?= site_url('history-withdraw') ?>" class="btn menu-btn">
                                <img src="assets/images/button/tx.png">
                            </a>
                            <a href="<?= site_url('promotion') ?>" class="btn menu-btn">
                                <img src="assets/images/button/promotion.png">
                            </a>
                            <a href="<?= site_url('affiliate') ?>" class="btn menu-btn">
                                <img src="assets/images/button/affiliate.png">
                            </a>
                        </div>
                        <div>
                            <a href="<?= site_url('wheel') ?>" class="btn menu-btn">
                                <img src="assets/images/button/wheel.png">
                            </a>
                            <a href="<?= site_url('reward') ?>" class="btn menu-btn">
                                <img src="assets/images/button/reward.png">
                            </a>
                            <a href="<?= site_url('coupon') ?>" class="btn menu-btn">
                                <img src="assets/images/button/coupon.png">
                            </a>
                            <a href="<?= site_url('profile') ?>" class="btn menu-btn">
                                <img src="assets/images/button/profile.png">
                            </a>
                            <a id="logout_btn" href="#" class="btn menu-btn">
                                <img src="assets/images/button/logout.png">
                            </a>
                        </div>
                    </div>
                    <div class="menu-mobile">
                        <div class="menu-mobile-wrapper">
                            <a class="menu-mobile-item" href="<?= site_url('deposit') ?>">
                                <div class="menu-item-inner">
                                    <div class="menu-item-icon">
                                        <div class="menu-item-content">
                                            <img src="assets/images/button/deposit.png">
                                            <span class="text-05"><?= lang('Lang.home.deposit') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="menu-mobile-item" href="<?= site_url('withdraw') ?>">
                                <div class="menu-item-inner">
                                    <div class="menu-item-icon">
                                        <div class="menu-item-content">
                                            <img src="assets/images/button/withdraw.png">
                                            <span class="text-05"><?= lang('Lang.home.withdraw') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="menu-mobile-item" href="<?= site_url('affiliate') ?>">
                                <div class="menu-item-inner">
                                    <div class="menu-item-icon">
                                        <div class="menu-item-content">
                                            <img src="assets/images/button/aff.png">
                                            <span class="text-05"><?= lang('Lang.home.affiliate') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="menu-mobile-group m-auto">
                            <div class="menu-mobile-wrapper">
                                <a class="menu-mobile-item-group" href="<?= site_url('promotion') ?>">
                                    <div class="menu-item-inner-group">
                                        <div class="menu-item-icon-group">
                                            <div class="menu-item-content-group">
                                                <img src="assets/images/button/prm.png">
                                                <span class="text-05"><?= lang('Lang.home.promotion') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="menu-mobile-item-group" href="<?= site_url('history-withdraw') ?>">
                                    <div class="menu-item-inner-group">
                                        <div class="menu-item-icon-group">
                                            <div class="menu-item-content-group">
                                                <img src="assets/images/button/txhis.png">
                                                <span class="text-05"><?= lang('Lang.home.history_withdraw') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="menu-mobile-wrapper">
                            <a class="menu-mobile-item" href="<?= site_url('reward') ?>">
                                <div class="menu-item-inner">
                                    <div class="menu-item-icon">
                                        <div class="menu-item-content">
                                            <img src="assets/images/button/reward1.png">
                                            <span class="font-size-05"><?= lang('Lang.home.reward') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="menu-mobile-item" href="<?= site_url('coupon') ?>">
                                <div class="menu-item-inner">
                                    <div class="menu-item-icon">
                                        <div class="menu-item-content">
                                            <img src="assets/images/button/coupon1.png">
                                            <span class="font-size-05"><?= lang('Lang.home.coupon') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a class="menu-mobile-item disabled" href="<?= site_url('wheel') ?>">
                                <div class="menu-item-inner">
                                    <div class="menu-item-icon">
                                        <div class="menu-item-content">
                                            <img src="assets/images/button/wheel2.png">
                                            <span class="font-size-05"><?= lang('Lang.home.lucky_wheel') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="content-right">
                <div>
                    <a href="http://line.me/ti/p/~@882yztsp" target="_blank" rel="noopener noreferrer" class="line-fab">
                        <img src="assets/images/misc/line.png" style="width: 5vw;">
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <p><?= lang('Lang.home.bank_account_number', [$formatter->bank_ac_no_format(session()->data->bank)]) ?></p>
                    <p><?= lang('Lang.home.bank_name', [$formatter->bank_format(session()->data->bank)]) ?></p>
                </div>

            </div>
        </div>

    </div>
</main>

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

    // NOTE: Refresh Credit
    function refreshCredit() {
        $.ajax({
            url: '<?= base_url('/refresh') ?>',
            method: 'get',
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
                        const {
                            data
                        } = JSON.parse(response)
                        $('#nav_credit').html(Number(data.webbalance).toLocaleString('en', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }))
                        const thBath = new Intl.NumberFormat('th-TH', {
                            style: 'currency',
                            currency: 'THB',
                        })
                        $('#m_credit').html(thBath.format(data.webbalance))
                        $('#d_credit').html(thBath.format(data.webbalance))
                    }
                } catch (err) {
                    console.log(err);
                }
            },
            error: function(err) {
                console.log(err);
                swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Logout:261']) ?>')
            }
        })
    }

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


    // NOTE: Set Resolution Screen.
    setTimeout(() => {
        if ($(window).width() != Number('<?= session()->screen_width ?>')) {
            const formData = new FormData()
            formData.set('width', $(window).width())
            formData.set('height', $(window).height())
            console.log($(window).width(), $(window).height());
            $.ajax({
                url: '<?= base_url('/screen') ?>',
                method: 'post',
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {},
                success: function() {},
                error: function(err) {
                    console.log(err);
                    swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Login 101']) ?>')
                }
            })
        }
    }, 200);
</script>

<?= $this->endSection(); ?>