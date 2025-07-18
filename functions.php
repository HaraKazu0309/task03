<?php

add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  //メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
    // 'footer_nav' => 'フッターナビゲーション',
  ]);
});

/* アイキャッチ画像がなければ、標準画像を取得する */
function get_eycatch_with_default()
{
  if (has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
  endif;

  return $img;
}

// カスタム投稿を使う場合はコメントアウト
// add_action('init', function () {
// register_post_type('item', [
// 'label' => '商品',
// 'public' => true,
// 'menu_position' => 5,
// 'menu_icon' => 'dashicons-store',
// 'supports' => ['thumbnail', 'title', 'editor']
// ]);
// });
