<?php
function init_func()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('init', 'init_func');

// カスタムメニューを追加
function add_custom_menu()
{
    register_nav_menus(array(
        'header-navi' => 'ヘッダーナビ',
        'footer-navi' => 'フッターナビ',
    ));
}
add_action('after_setup_theme', 'add_custom_menu');

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'post';
    }
    if ('works' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'works';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


function register_post_works()
{
    // カスタム投稿タイプの登録や設定などを行うコードを記述します
    $labels = [
        "name" => "制作実績"
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "description" => "",
        "menu_position" => 5,
        "has_archive" => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ];

    register_post_type('works', $args);
}

add_action('init', 'register_post_works');
