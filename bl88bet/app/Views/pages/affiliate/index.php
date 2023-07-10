<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container pb-5 px-md-5">
        <h4 class="text-while text-center mt-2"><?= lang('Lang.affiliate.affiliate') ?></h4>
        <div class="visible-md">
            <div class="rosegold-circle mt-4 mx-auto text-center">
                <div class="rosegold-qr-inner">
                    <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=https://reg2bl.com/DoLHf" alt="qrcode" class="rosegold-light-border w-50">
                    <a href="" class="download-qr-btn" id="downloadQR"><?= lang('Lang.affiliate.download_your_qrcode') ?></a>
                    <div class="text-code">
                        <?= lang('Lang.affiliate.affiliate_code') ?>
                        <br>
                        GETFND00125
                    </div>
                </div>
            </div>
        </div>

        <div class="invisible-md w-80 mx-auto">
            <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=https://reg2bl.com/DoLHf" alt="qrcode" class="rosegold-light-border w-100">
        </div>

        <div class="copy-link">
            <div class="copy-link-inner">
                <div id="cp_link" class="text-center text-07">https://reg2bl.com/DoLHf</div>
                <a onclick="copyClipboard(cp_link)"><i class="fa fa-copy fa-xs"></i></a>
            </div>
        </div>

        <div class="social-wrapper">
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://reg2bl.com/DoLHf&amp;quote=สมัครเพื่อร่วมสนุกกับ BL88BET" target="blank">
                <img src="assets/images/facebook.png">
            </a>
            <a href="https://twitter.com/intent/tweet?url=https://reg2bl.com/DoLHf&amp;via=bl88bet&amp;text=สมัครสมาชิกเพื่อร่วมสนุก กับ BL88BET" target="blank">
                <img src="assets/images/twitter.png">
            </a>
            <a href="https://line.me/R/share?text=https://reg2bl.com/DoLHf สมัครเพื่อร่วมสนุกกับ BL88BET" target="blank">
                <img src="assets/images/line_cicle.png">
            </a>
            <a href="https://t.me/share/url?url=https://reg2bl.com/DoLHf&amp;text=สมัครเพื่อร่วมสนุกกับ BL88BET" target="blank">
                <img src="assets/images/telegram.png">
            </a>
        </div>

        <div class="rosegold-tabs-warpper">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#get_income" role="tab" aria-controls="home" aria-selected="true"><?= lang('Lang.affiliate.income') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#affiliate_history" role="tab" aria-controls="profile" aria-selected="false">Affiliate</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="get_income" role="tabpanel">
                    <div class="d-flex flex-column justify-content-center align-content-center">
                        <div class="text-center text-08"><?= lang('Lang.affiliate.income_amount') ?></div>
                        <div class="rosegold-border text-center py-1 px-3 mb-3">
                            <span class="text-black"><?= number_to_currency(10.00, 'THB', 'th', 2); ?></span>
                        </div>
                        <button class="btn rosegold-light-btn"><?= lang('Lang.affiliate.get') ?></button>
                    </div>
                </div>
                <div class="tab-pane fade" id="affiliate_history" role="tabpanel">
                    <select name="month-list" id="month-list" class="rosegold-border text-center w-100 mb-3">
                        <option value="2023-01-24">รอบบิล 24 มกราคม 2023</option>
                        <option value="2023-01-23">รอบบิล 23 มกราคม 2023</option>
                        <option value="2023-01-22">รอบบิล 22 มกราคม 2023</option>
                        <option value="2023-01-21">รอบบิล 21 มกราคม 2023</option>
                        <option value="2023-01-20">รอบบิล 20 มกราคม 2023</option>
                        <option value="2023-01-19">รอบบิล 19 มกราคม 2023</option>
                        <option value="2023-01-18">รอบบิล 18 มกราคม 2023</option>
                    </select>

                    <div class="text-right"><?= number_to_currency(0.00, 'THB', 'th', 2); ?></div>
                    <table class="table text-08">
                        <thead>
                            <tr>
                                <th class="w-75">
                                    <?= lang('Lang.affiliate.create_date') ?>
                                </th>
                                <th>
                                    <?= lang('Lang.affiliate.affiliate_username') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2022-12-19 20:10:14</td>
                                <td>bl88aa0015</td>
                            </tr>
                            <tr>
                                <td>2022-12-19 20:10:14</td>
                                <td>bl88aa0015</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</main>

<?= $footer ?>

<?= $this->endSection(); ?>