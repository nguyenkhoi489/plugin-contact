<?php

$form = get_option('config_form');

$shortcode = '[contact-form-7 id="' . $form . '"]';


?>

<div class="modal modal-form nkd-contact__form" id="modalBaoGia" tabindex="-1" aria-labelledby="modalBaoGia">
    <div class="modal-content">
        <div class="modal-header">
            <h3 style="text-align: center;">Để lại thông tin nhận báo giá</h3>
            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <?= do_shortcode($shortcode) ?>
        </div>
    </div>
</div>