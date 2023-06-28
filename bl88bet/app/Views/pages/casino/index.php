<?= $this->extend('pages/user_templates/index'); ?>

<?= $this->section('content'); ?>

<div class="main mobile--">
    <div class="row">
        <?php if (isset($result) && isset($result->data)) : ?>
            <?php foreach ($result->data as $obj) : ?>
                <div class="col-12 col-md-12 text-center padding-2 col-banner">
                    <a href="#" onclick="playgame(event, '<?= $obj->code ?>')">
                        <img src="assets/images/casino/mobile/<?= strtolower($obj->code) ?>.png" data-original="assets/images/casino/mobile/<?= strtolower($obj->code) ?>.png" class="img-fluid w-90 lazy" alt="<?= strtolower($obj->name) ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<div class="container game-container desktop--">
    <div class="row">
        <?php if (isset($result) && isset($result->data)) : ?>
            <?php foreach ($result->data as $obj) : ?>
                <div class="col-md-3 col-md-3 padding-game text-center text-center padding-2 col-banner">
                    <a href="#" onclick="playgame(event, '<?= $obj->code ?>')">
                        <img src="assets/images/casino/desktop/<?= strtolower($obj->code) ?>.png" data-original="assets/images/casino/desktop<?= strtolower($obj->code) ?>.png" class="img-fluid w-90 lazy" alt="<?= strtolower($obj->name) ?>">
                    </a>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?= $footer ?>

<script>
    <?php if (isset($result)) : ?>
        <?php unset($result->data); ?>
        const {
            status,
            msg
        } = JSON.parse('<?= json_encode($result) ?>')
        if (!status) {
            swalError('<?= lang('Lang.dialog.confirm_btn') ?>', msg)
        }
    <?php endif; ?>


    function playgame(event, code) {
        event.preventDefault();
        const formData = new FormData()
        formData.set('game_code', code)
        $.ajax({
            url: '<?= base_url('/playgame') ?>',
            method: 'post',
            data: formData,
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
                        msg,
                        data
                    } = JSON.parse(response)
                    if (status === true) {
                        window.location.href = data.url
                    }
                } catch (err) {
                    console.log(err);
                    toastr.error(err)
                }
            },
            error: function(err) {
                swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Casino:80']) ?>')
            }
        })

    }
</script>

<?= $this->endSection(); ?>