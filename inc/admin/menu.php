<?php

add_action('admin_menu', 'lr_register_menu');

function lr_register_menu(): void
{
    $title = "learning plugin dashboard";
    $page_title = "Dashboard";
    $role = "manage_options";
    $slug = "lr_orders";
    $callback = 'lr_dashboard_page';
    $icon_url = "";
    $position = 5;

    add_menu_page($page_title, $title, $role, $slug, $callback, $icon_url, $position);

    // sub menu
    $parent_slug = $slug;
    $page_title = "add-option";
    $menu_title = "add option";
    $role = 'manage_options';
    $menu_slug = 'add-option';
    $callback = 'lr_add_option_page';
    add_submenu_page($parent_slug, $page_title, $menu_title, $role, $menu_slug, $callback);
}

function lr_dashboard_page()
{
    echo "hello";
}

function lr_add_option_page()
{
    lr_include('view/add-option/index.php');
}