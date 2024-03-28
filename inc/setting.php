<div class="wrap nkd-contact">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <img src="<?= Plugin_URI . "image/icon.png" ?>" alt="">
                Setting Page
            </h3>
        </div>
        <div class="card-body">
            <?php
            $allItem = [];
            if (get_option('config_hotline')) {
                $allItem['config_hotline'] = get_option('config_hotline');
            }
            if (get_option('config_zalo')) {
                $allItem['config_zalo'] = get_option('config_zalo');
            }
            if (get_option('config_telegram')) {
                $allItem['config_telegram'] = get_option('config_telegram');
            }
            if (get_option('config_instagram')) {
                $allItem['config_instagram'] = get_option('config_instagram');
            }
            if (get_option('config_youtube')) {
                $allItem['config_youtube'] = get_option('config_youtube');
            }
            if (get_option('config_tiktok')) {
                $allItem['config_tiktok'] = get_option('config_tiktok');
            }
            if (get_option('config_fanpage')) {
                $allItem['config_fanpage'] = get_option('config_fanpage');
            }
            if (get_option('config_whatsapp')) {
                $allItem['config_whatsapp'] = get_option('config_whatsapp');
            }
            if (get_option('config_viber')) {
                $allItem['config_viber'] = get_option('config_viber');
            }
            if (get_option('config_map_url')) {
                $allItem['config_map_url'] = get_option('config_map_url');
            }
            if (get_option('config_contact_url')) {
                $allItem['config_contact_url'] = get_option('config_contact_url');
            }
            if (get_option('config_form')) {
                $allItem['config_form'] = get_option('config_form');
            }
            ?>
            <?php if (isset($_GET['settings-updated'])) { ?>
                <div id="message" class="updated">
                    <p><strong><?php _e('Settings saved.') ?></strong></p>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col small-8">
                    <form method="post" action="options.php">
                        <?php settings_fields('nkd_settings_options_group'); ?>
                        <table class="form-table">
                            <tr>
                                <th scope="row">
                                    Enable/Disable
                                </th>
                                <td>
                                    <input type="checkbox" name="config_setting_enable" <?= get_option('config_setting_enable') == "on" ? "checked" : "" ?> id="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Enable/Disable Tooltip
                                </th>
                                <td>
                                    <input type="checkbox" name="config_setting_enable_tooltip" <?= get_option('config_setting_enable_tooltip') == "on" ? "checked" : "" ?> id="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Select List Show
                                </th>
                                <td>
                                    <select name="config_setting_list[]" multiple="multiple" class="form-control select2">
                                        <option value="0">------</option>
                                        <?php
                                        foreach ($allItem as $key => $item) {
                                            echo " <option value=\"$key\" " . (is_array(get_option('config_setting_list')) && in_array($key, get_option('config_setting_list')) ? "selected" : "") . ">" . $key . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                Location screen
                                </th>
                                <td>
                                    <select name="config_setting_postion" class="form-control">
                                        <option value="left" <?=get_option('config_setting_postion') == 'left' ? 'selected' : ''?>>Left</option>
                                        <option value="right" <?=get_option('config_setting_postion') == 'right' ? 'selected' : ''?>>Right</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                Center the screen
                                </th>
                                <td>
                                    <select name="config_setting_center" class="form-control">
                                        <option value="no" <?=get_option('config_setting_center') == 'no' ? 'selected' : ''?>>No</option>
                                        <option value="yes" <?=get_option('config_setting_center') == 'yes' ? 'selected' : ''?>>Yes</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <?php submit_button(); ?>
                    </form>
                </div>
                <div class="col small-4">
                    <div class="demo-image">
                        <p><strong>Demo Center the screen</strong></p>
                        <div class="img">
                            <img 
                                height="200"
                                src="<?=Plugin_URI . "image/position-center.png"?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>