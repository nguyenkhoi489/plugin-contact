<div class="wrap nkd-contact">
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <img src="<?=Plugin_URI . "image/icon.png"?>" alt="">
            Button Contact
        </h3>
    </div>
    <div class="card-body">
    <?php if (isset($_GET['settings-updated'])) { ?>
        <div id="message" class="updated">
            <p><strong><?php _e('Settings saved.') ?></strong></p>
        </div>
    <?php } ?>

    <form method="post" action="options.php">
        <?php settings_fields('nkd_button_options_group'); ?>
        <table class="form-table">
        <tr valign="top">
                <th scope="row">Hotline</th>
                <td>
                    <input placeholder="0123 456 789" type="text" name="config_hotline" value="<?php echo get_option('config_hotline'); ?>" />
                    <input placeholder="Tooltip Tile" type="text" name="config_hotline_tooltip" value="<?php echo get_option('config_hotline_tooltip'); ?>" />
                </td>
                
            </tr>
            <tr valign="top">
                <th scope="row">Zalo</th>
                <td>
                    <input placeholder="0123 456 789" type="text" name="config_zalo" value="<?php echo get_option('config_zalo'); ?>" />
                    <input placeholder="Tooltip Tile" type="text" name="config_zalo_tooltip" value="<?php echo get_option('config_zalo_tooltip'); ?>" />
                </td>
                
            </tr>
            <tr valign="top">
                <th scope="row">Telegram</th>
                <td><input placeholder="Link telegram" type="text" name="config_telegram" value="<?php echo get_option('config_telegram'); ?>" />
                <input placeholder="Tooltip Tile" type="text" name="config_telegram_tooltip" value="<?php echo get_option('config_telegram_tooltip'); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Instagram</th>
                <td><input placeholder="Link instagram" type="text" name="config_instagram" value="<?php echo get_option('config_instagram'); ?>" />
                <input placeholder="Tooltip Tile" type="text" name="config_instagram_tooltip" value="<?php echo get_option('config_instagram_tooltip'); ?>" />
            </td>
            </tr>
            <tr valign="top">
                <th scope="row">Youtube</th>
                <td><input placeholder="Link youtube" type="text" name="config_youtube" value="<?php echo get_option('config_youtube'); ?>" />
                <input placeholder="Tooltip Tile" type="text" name="config_youtube_tooltip" value="<?php echo get_option('config_youtube_tooltip'); ?>" />
            </td>
            </tr>
            <tr valign="top">
                <th scope="row">Tiktok</th>
                <td><input placeholder="Link tiktok" type="text" name="config_tiktok" value="<?php echo get_option('config_tiktok'); ?>" />
                <input placeholder="Tooltip Tile" type="text" name="config_tiktok_tooltip" value="<?php echo get_option('config_tiktok_tooltip'); ?>" />
            </td>
            </tr>
            <tr valign="top">
                <th scope="row">Link fanpage</th>
                <td><input placeholder="Link fanpage" type="text" name="config_fanpage" value="<?php echo get_option('config_fanpage'); ?>" />
                <input placeholder="Tooltip Tile" type="text" name="config_fanpage_tooltip" value="<?php echo get_option('config_fanpage_tooltip'); ?>" />
            </td>
            </tr>
            <tr valign="top">
                <th scope="row">Whatsapp</th>
                <td><input placeholder="0123456789" type="text" name="config_whatsapp" value="<?php echo get_option('config_whatsapp'); ?>" />
                <input placeholder="Tooltip Tile" type="text" name="config_whatsapp_tooltip" value="<?php echo get_option('config_whatsapp_tooltip'); ?>" />
            </td>
            </tr>
            <tr valign="top">
                <th scope="row">Viber</th>
                <td><input placeholder="0123 456 789" type="text" name="config_viber" value="<?php echo get_option('config_viber'); ?>" />
                <input placeholder="Tooltip Tile" type="text" name="config_viber_tooltip" value="<?php echo get_option('config_viber_tooltip'); ?>" />
            </td>
            </tr>
            <tr valign="top">
                <th scope="row">Link map</th>
                <td>
                    <input placeholder="Link google map" type="text" name="config_map_url" value="<?php echo get_option('config_map_url'); ?>" />
                    <input placeholder="Tooltip Tile" type="text" name="config_map_url_tooltip" value="<?php echo get_option('config_map_url_tooltip'); ?>" />
                </td>
            </tr>
            <tr valign="top" style=" border-bottom: 1px dashed #bfbfbf; ">
                <th scope="row">Contact link</th>
                <td>
                    <input placeholder="/lien-he/" type="text" name="config_contact_url" value="<?php echo get_option('config_contact_url'); ?>" />
                    <input placeholder="Tooltip Tile" type="text" name="config_contact_url_tooltip" value="<?php echo get_option('config_contact_url_tooltip'); ?>" />
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
    </div>
</div>
</div>
