<?php

$allicon = get_option('config_setting_list');
    if ($allicon)
    {
        echo "<div class=\"nkd-contact-plugin ".get_option('config_setting_postion')."\" ".(get_option('config_setting_center') == 'yes' ? "style=\"top: 50% !important;bottom: unset !important;transform:translate(0,-50%);-webkit-transform:translate(0,-50%)\"" : "").">";
        foreach($allicon as $key => $item)
        {
            echo RenderViewIcon($item);
        }
        echo "</div>";
    }
?>