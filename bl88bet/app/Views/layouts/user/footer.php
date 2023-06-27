<div class="bottombar-mobile mobile--">
    <ul class="nav-menu">
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/') ?>">
                <img src="assets/images/button/bag_icon.png">
                <span class="text-glow"><?= lang('Lang.home.wallet') ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g_casino" href="<?= site_url('casino') ?>">
                <img src="assets/images/casino_cion.png">
                <span class="text-glow"><?= lang('Lang.casino.casino') ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g_slot" href="<?= site_url('slot') ?>">
                <img src="assets/images/slot_icon.png">
                <span class="text-glow"><?= lang('Lang.slot.slot') ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g_sport" href="<?= site_url('sport') ?>">
                <img src="assets/images/ball_icon.png">
                <span class="text-glow"><?= lang('Lang.sport.sport') ?></span>
            </a>
        </li>
    </ul>
</div>
</div>

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
<!-- jQuery Lazy -->
<script src="https://cdn.jsdelivr.net/npm/jquery-lazyload@1.9.7/jquery.lazyload.min.js"></script>
<!-- Validator JS -->
<?= script_tag('assets/js/validator.js') ?>
<!-- Loader JS -->
<?= script_tag('assets/js/loader.js') ?>
<!-- Utility JS -->
<?= script_tag('assets/js/util.js') ?>

<script>
    $("img.lazy").lazyload();
</script>

</body>

</html>