</div>
<div class="pc-pathnership pc-x">
    <?= $partner ?>
</div>
</div>
</div>
</div>
</div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- jQuery Validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<!-- Bootstrap Select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<!-- Toastr -->
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>

<!-- Validator JS -->
<?= script_tag('assets/js/validator.js') ?>
<!-- Loader JS -->
<?= script_tag('assets/js/loader.js') ?>
<!-- Utility JS -->
<?= script_tag('assets/js/util.js') ?>
<?php
$uri = \Config\Services::uri();
$request = \Config\Services::request();
?>
<?php if (trim($uri->getPath()) == 'register') : ?>

    <script>
        var banklist = {
            "KBANK": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e01\u0e2a\u0e34\u0e01\u0e23\u0e44\u0e17\u0e22",
            "BBL": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e",
            "BAY": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e01\u0e23\u0e38\u0e07\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32",
            "SCB": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e44\u0e17\u0e22\u0e1e\u0e32\u0e13\u0e34\u0e0a\u0e22\u0e4c",
            "KTB": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e01\u0e23\u0e38\u0e07\u0e44\u0e17\u0e22",
            "SCIB": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e19\u0e04\u0e23\u0e2b\u0e25\u0e27\u0e07\u0e44\u0e17\u0e22",
            "UOBT": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e22\u0e39\u0e42\u0e2d\u0e1a\u0e35",
            "TISCO": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e17\u0e34\u0e2a\u0e42\u0e01\u0e49",
            "KKP": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e40\u0e01\u0e35\u0e22\u0e23\u0e15\u0e34\u0e19\u0e32\u0e04\u0e34\u0e19",
            "TBANK": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e18\u0e19\u0e0a\u0e32\u0e15",
            "GHB": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e2d\u0e32\u0e04\u0e32\u0e23\u0e2a\u0e07\u0e40\u0e04\u0e23\u0e32\u0e30\u0e2b\u0e4c",
            "GSB": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e2d\u0e2d\u0e21\u0e2a\u0e34\u0e19",
            "BAAC": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e40\u0e1e\u0e37\u0e48\u0e2d\u0e01\u0e32\u0e23\u0e40\u0e01\u0e29\u0e15\u0e23\u0e41\u0e25\u0e30\u0e2a\u0e2b\u0e01\u0e23\u0e13\u0e4c\u0e01\u0e32\u0e23\u0e40\u0e01\u0e29\u0e15\u0e23 (\u0e18\u0e01\u0e2a)",
            "ISBT": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e2d\u0e34\u0e2a\u0e25\u0e32\u0e21\u0e41\u0e2b\u0e48\u0e07\u0e1b\u0e23\u0e30\u0e40\u0e17\u0e28\u0e44\u0e17\u0e22",
            "LHFG": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e41\u0e25\u0e19\u0e14\u0e4c \u0e41\u0e2d\u0e19\u0e14\u0e4c \u0e40\u0e2e\u0e32\u0e2a\u0e4c",
            "CIMB": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e0b\u0e35\u0e44\u0e2d\u0e40\u0e2d\u0e47\u0e21\u0e1a\u0e35\u0e44\u0e17\u0e22",
            "TTB": "\u0e18\u0e19\u0e32\u0e04\u0e32\u0e23\u0e17\u0e2b\u0e32\u0e23\u0e44\u0e17\u0e22\u0e18\u0e19\u0e0a\u0e32\u0e15"
        };
        let bankSelected = '<?= $request->getVar('register_bankidx') ?>';
        let bidx = bankSelected ? bankSelected : 'BBL';

        $('#register_bankid').val(banklist[bidx]);
        $('#register_bankidx').val(bidx);

        let aa = '<div class="-check-right is-active"><i class="fas fa-check-circle"></i></div>';
        $(".-check-right.is-active").show();
        $(".-check-right.is-active").remove();
        $(".bank_box").removeClass('is-active');
        $(`#${bidx}`).addClass('is-active');
        $(`#${bidx}`).append(aa);

        $('.bank_box').click(function() {
            $(".-check-right.is-active").show();
            $(".-check-right.is-active").remove();
            $(".bank_box").removeClass('is-active');
            $(this).addClass('is-active');
            $(this).append(aa);

            let bid = $(".bank_box.is-active").data('value');
            // let arrbank = getCashBank(bid);
            $('#register_bankid').val(banklist[bid]);
            $('#register_bankidx').val(bid);
        });
    </script>
<?php endif; ?>