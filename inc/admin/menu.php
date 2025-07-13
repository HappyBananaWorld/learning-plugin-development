<?php

add_action('admin_menu','lr_register_menu');

function lr_register_menu(): void
{
    $title = "orders";
    $page_title = "order";
    $role = "manage_options";
    $slug = "lr_orders";
    $callback = 'lr_orders';
    $icon_url = "";
    $position = 5;

    add_menu_page($page_title, $title, $role, $slug, $callback, $icon_url, $position);
}