<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">

    <div class="responsive">
        <h4 class="text-center text-white"><?= lang('Lang.affiliate.affiliate') ?></h4>
        <div class="col-12 text-center pad-lr-0">
            <div class="col-12 padding-2">
                <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=https://reg2bl.com/DoLHf" class="img-fluid qr-border w-100" title="Your Link">
            </div>
            <div class="col-12 padding-2">
                <button type="submit" class="btn-icon-back btn-aff-copy w-100">
                    https://reg2bl.com/DoLHf <i class="fa fa-copy fa-xs icon-btn-inside" id="status_clipboard"></i>
                </button>
            </div>
            <div class="col-12 ">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://reg2bl.com/DoLHf&amp;quote=สมัครเพื่อร่วมสนุกกับ BL88BET" target="blank">
                    <img src="assets/images/facebook.png" class="padding-2 w-20">
                </a>
                <a href="https://twitter.com/intent/tweet?url=https://reg2bl.com/DoLHf&amp;via=bl88bet&amp;text=สมัครสมาชิกเพื่อร่วมสนุก กับ BL88BET" target="blank">
                    <img src="assets/images/twitter.png" class="padding-2 w-20">
                </a>
                <a href="https://line.me/R/share?text=https://reg2bl.com/DoLHf สมัครเพื่อร่วมสนุกกับ BL88BET" class="" target="_blank">
                    <img src="assets/images/line_cicle.png" class="padding-2 w-20">
                </a>
                <a href="https://t.me/share/url?url=https://reg2bl.com/DoLHf&amp;text=สมัครเพื่อร่วมสนุกกับ BL88BET" target=" _blank">
                    <img src="assets/images/telegram.png" class="padding-2 w-20">
                </a>
            </div>
            <div class="col-12 padding-2 ">
                <ul class="nav nav-tabs nav-justified nav-header-ct">
                    <li class="nav-item nav-header-ct-left">
                        <a class="nav-link active " data-toggle="tab" href="#home"><?= lang('Lang.affiliate.income') ?></a>
                    </li>
                    <li class="nav-item nav-header-ct-right">
                        <a class="nav-link nav-header-ct-right " data-toggle="tab" href="#aff">Affiliate</a>
                    </li>
                </ul>
                <div class="tab-content tab-content-ct">
                    <div class="tab-pane container active" id="home">
                        <div class="row padding-3">
                            <div class="col-12 ">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <th class="text-white w-40 font-size-08"><?= lang('Lang.affiliate.income') ?></th>
                                        </tr>
                                        <tr>
                                            <td class="white-border-rad"><span id="amountAff"><?= number_format(0.00, 2) ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="row padding-3">
                            <div class="col-12 ">
                                <button type="button" class="btn-rose-gold-1-sq w-100">
                                    <?= lang('Lang.affiliate.get') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="aff">
                        <div class="row">
                            <div class="col-12 pad-rl-02rem">
                                <div class="warp-tranpatent">
                                    <select name="month-list" id="month-list" class="ddl-aff">
                                        <option value="2023-01-24">รอบบิล 24 มกราคม 2023</option>
                                        <option value="2023-01-23">รอบบิล 23 มกราคม 2023</option>
                                        <option value="2023-01-22">รอบบิล 22 มกราคม 2023</option>
                                        <option value="2023-01-21">รอบบิล 21 มกราคม 2023</option>
                                        <option value="2023-01-20">รอบบิล 20 มกราคม 2023</option>
                                        <option value="2023-01-19">รอบบิล 19 มกราคม 2023</option>
                                        <option value="2023-01-18">รอบบิล 18 มกราคม 2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 text-right pd-r-7 bold text-white">
                                <span id="amountAffiliate">0.00</span> บาท
                            </div>
                            <div class="col-12 pad-rl-02rem">
                                <table class="table table-aff w-100 table-loadmore" id="table-affiliate">
                                    <thead>
                                        <tr>
                                            <th class="">วันที่สมัคร</th>
                                            <th>เพื่อนแนะนำ (Username)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="affiliate-user">
                                        <tr>
                                            <td class="text-left">2022-12-19 20:10:14</td>
                                            <td>bl88aa0015</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">2022-12-02 01:45:15</td>
                                            <td>0855657898 </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container container-desktop desktop--">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2 class="text-rose-gold-shadow"><?= lang('Lang.affiliate.affiliate') ?></h2>
        </div>
    </div>
    <div class="row justify-content-center padding-top-1-rem">
        <div class="col-md-9 text-center">
            <div class="row circle- padding-4">
                <!--<div class="row">-->
                <div class="col-md-12 qr-code">
                    <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=https://reg2bl.com/DoLHf" id="qrcode" class="w-50">
                </div>
                <div class="col-md-12 top-d-10">
                    <a href="" class="title dw-qrcode" id="downloadQR"><?= lang('Lang.affiliate.download_your_qrcode') ?></a>
                </div>
                <div class="col-md-12 top-d-27-p">
                    <p class="font-size-1_5vw"><?= lang('Lang.affiliate.affiliate_code') ?></p>
                </div>
                <div class="col-md-12 top-d-27-p">
                    <p class="font-size-1_5vw">GETFND00125</p>
                </div>
            </div>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="https://reg2bl.com/DoLHf">
                <button type="submit" class="searchButton w-20">
                    <i class="fa fa-copy" id="status_clipboard"></i>
                </button>
            </div>
            <p class="font-size-1_5vw padding-1"><?= lang('Lang.affiliate.income_amount') ?></p>
            <div class="boder-half-rosegold w-30">
                <span class="font-size-3vw text-black bold"><?= number_to_currency(10.00, 'THB', 'th', 2); ?></span>
            </div>
            <br>
            <div class="row justify-content-center padding-2">
                <button type="button" class="btn-rose-gold-soft-icon w-20 bold"><?= lang('Lang.affiliate.confirm') ?></button>
            </div>
        </div>
    </div>

</div>

<?= $footer ?>

<?= $this->endSection(); ?>