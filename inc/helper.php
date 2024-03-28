<?php

function RenderView($select, $title)
{
    $allform = getAllForm();
    if ($select && $title) {

?>
        <tr valign="top">
            <th scope="row">Button Form Title</th>
            <td><input placeholder="Đặt bảng giá" class="form-control" type="text" name="config_form_title" value="<?= $title ?>"></td>
        </tr>
        <tr valign="top">
            <th scope="row">Form Poup</th>
            <td><select name="config_form" class="form-control">
                    <option value="0">---------</option>
                    <?php
                    foreach ($allform as $_item) {
                        echo "<option value=\"" . $_item->ID . "\"" . ($_item->ID == $select ? "selected" : "") . ">" . $_item->post_title . "</option>";
                    }
                    ?>
                </select> </td>
        </tr>

<?php
    } else {
        return RenderViewDefault();
    }
}


function getAllForm()
{
    return get_posts(array(
        'post_type'     => 'wpcf7_contact_form',
        'numberposts'   => -1
    ));
}

function RenderViewDefault()
{
    $allform = getAllForm();
    echo "<tr valign=\"top\"><th scope=\"row\">Button Form Title</th>";

    echo "<td><input placeholder=\"Đặt bảng giá\" class=\"form-control\" type=\"text\" name=\"config_form_title[]\" value=\"\" /></td></tr>";
    echo "<tr valign=\"top\"><th scope=\"row\">Form Poup</th>";
    echo "<td><select name=\"config_form\" class=\"form-control\"><option value=\"0\">---------</option>";
    if ($allform) {
        foreach ($allform as $item) {
            echo "<option value=\"" . $item->ID . "\">" . $item->post_title . "</option>";
        }
    }


    echo "</select> </td></tr>";
}

function RenderViewIcon($select = '')
{
    $icon = Plugin_URI;
    $html = "";
    switch ($select) {
        case 'config_hotline':
            $icon .= 'image/phone.png';
            $html .= "<div id=\"hotline\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"tel:".get_option('config_hotline')."\">				
                        <img alt=\"hotline\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_hotline_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_hotline_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
            case 'config_zalo':
                $icon .= 'image/zalo.png';
                $html .= "<div id=\"zalo\" class=\"nkd-button-contact\">
                <div class=\"nkd-phone\">
                    <div class=\"nkd-circle-fill\"></div>
                    <div class=\"nkd-img-circle\">
                        <a target=\"_blank\" href=\"https://zalo.me/".get_option('config_zalo')."\">				
                            <img alt=\"zalo\" src=\"$icon\" />
                        </a>
                    </div>";
                    if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_zalo_tooltip'))
                    {
                        $html .= "<span class=\"info-box\">".get_option('config_zalo_tooltip')."</span>";
                    }
                    $html .= "</div></div>";
                break;
        case 'config_telegram':
            $icon .= 'image/telegram.png';
            $html .= "<div id=\"telegram\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"".get_option('config_telegram')."\">				
                        <img alt=\"instagram\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_telegram_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_telegram_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
        case 'config_instagram':
            $icon .= 'image/instagram.png';
            $html .= "<div id=\"instagram\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"".get_option('config_instagram')."\">				
                        <img alt=\"instagram\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_instagram_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_instagram_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
        case 'config_youtube':
            $icon .= 'image/youtube.png';
            $html .= "<div id=\"youtube\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"".get_option('config_youtube')."\">				
                        <img alt=\"youtube\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_youtube_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_youtube_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
        case 'config_tiktok':
            $icon .= 'image/tiktok.png';
            $html .= "<div id=\"tiktok\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"".get_option('config_tiktok')."\">				
                        <img alt=\"tiktok\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_tiktok_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_tiktok_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
        case 'config_fanpage':
            $icon .= 'image/Facebook.png';
            $html .= "<div id=\"fanpage\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"".get_option('config_fanpage')."\">				
                        <img alt=\"fanpage\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_fanpage_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_fanpage_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
        case 'config_whatsapp':
            $icon .= 'image/whatsapp.png';
            $html .= "<div id=\"whatsapp\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"https://wa.me/".get_option('config_whatsapp')."\">				
                        <img alt=\"whatsapp\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_whatsapp_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_whatsapp_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
        case 'config_viber':
            $icon .= 'image/viber.png';
            $html .= "<div id=\"viber\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"viber://add?number=".preg_replace( '/\D/', '',get_option('config_viber'))."\">				
                        <img alt=\"viber\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_viber_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_viber_tooltip')."</span>";
                }
                $html .= "</div></div>";
            break;
        case 'config_map_url':
            $icon .= 'image/showroom3.png';
            $html .= "<div id=\"map\" class=\"nkd-button-contact\">
            <div class=\"nkd-phone\">
                <div class=\"nkd-circle-fill\"></div>
                <div class=\"nkd-img-circle\">
                    <a target=\"_blank\" href=\"".get_option('config_map_url')."\">				
                        <img alt=\"google map\" src=\"$icon\" />
                    </a>
                </div>";
                if(get_option('config_setting_enable_tooltip') === 'on' && get_option('config_map_url_tooltip'))
                {
                    $html .= "<span class=\"info-box\">".get_option('config_map_url_tooltip')."</span>";
                }
                $html .= "</div></div>";
    
            break;
        case 'config_contact_url':
            $icon .= 'image/icon2.png';
            break;
        case 'config_form':
            $icon .= 'image/form.png';
            if(get_option('config_form') && get_option('config_form_title'))
            {
                $html .="<div id=\"form\" class=\"nkd-button-contact\">
                <div class=\"nkd-phone\">
                    <div class=\"nkd-circle-fill\"></div>
                    <div class=\"nkd-img-circle\">
                        <a href=\"javascript:void(0)\">				
                            <img alt=\"form\" src=\"$icon\" />
                        </a>
                    </div>";
                    if(get_option('config_setting_enable_tooltip') === 'on')
                    {
                        $html .= "<span class=\"info-box\">".get_option('config_form_title')."</span>";
                    }
                    $html .= "</div></div>";
            }
            break;
    }

    return $html;
}
