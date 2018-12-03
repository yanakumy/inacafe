<?php 
//ウィジェット
register_sidebar([
    'name' => 'サイドバー用'
]);

// アイキャッチ画像の追加
add_theme_support('post-thumbnails');

// 抜粋数の文字数
function my_length($length) {
    return 30;
}
add_filter('excerpt_mblength', 'my_length');

// 抜粋文の省略記号
function my_more($more) {
    return '...';
}
add_filter('excerpt','my_more');