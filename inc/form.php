<div class="wrap nkd-contact">
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <img src="<?=Plugin_URI . "image/icon.png"?>" alt="">
            Form Contact
        </h3>
    </div>
    <div class="card-body">
    <?php if (isset($_GET['settings-updated'])) { ?>
        <div id="message" class="updated">
            <p><strong><?php _e('Settings saved.') ?></strong></p>
        </div>
    <?php } ?>
    <?php
    ?>
    <form method="post" action="options.php">
        <?php settings_fields('nkd_form_options_group'); ?>
        <table class="form-table">
            <?php
            if(get_option('config_form') && get_option('config_form_title'))
            {
                RenderView(get_option('config_form'),get_option('config_form_title'));
            } else {
                RenderViewDefault();
            }
            ?>
        </table>
        <hr>
        <?php submit_button(); ?>
    </form>
    </div>
</div>
</div>
