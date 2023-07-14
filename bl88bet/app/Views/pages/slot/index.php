<?= $this->extend('layouts/user/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <?php if (isset($result) && isset($result->data)) : ?>
                <?php foreach ($result->data as $obj) : ?>
                    <div class="col-12 col-md-3 p-1 text-center">
                        <a href="#" onclick="playgame(event, '<?= $obj->code ?>')">
                            <?php if (session()->screen_width < 768) : ?>
                                <img src="<?= base_url() ?>assets/images/slot/mobile/<?= strtolower($obj->code) ?>.png" data-original="<?= base_url() ?>assets/images/slot/mobile/<?= strtolower($obj->code) ?>.png" class="img-fluid w-90 lazy" alt="<?= strtolower($obj->name) ?>">
                            <?php else : ?>
                                <img src="<?= base_url() ?>assets/images/slot/desktop/<?= strtolower($obj->code) ?>.png" data-original="<?= base_url() ?>assets/images/slot/desktop/<?= strtolower($obj->code) ?>.png" class="img-fluid w-90 lazy" alt="<?= strtolower($obj->name) ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

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
                swalError('<?= lang('Lang.dialog.confirm_btn') ?>', '<?= lang('Lang.error.something_went_wrong', ['Slot:80']) ?>')
            }
        })

    }
</script>

<?= $this->endSection(); ?>