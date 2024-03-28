<?php

function loadComponent()
{
    $data = RenderViewDefault();
    return json_encode(['data' => $data]);
}
add_action('wp_ajax_loadComponent', 'loadComponent');
add_action('wp_ajax_nopriv_loadComponent', 'loadComponent');