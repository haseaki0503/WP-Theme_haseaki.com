<?php
//ウィジェット
register_sidebar( array(
'name' => 'ウィジェット-カテゴリ',
'id' => 'sidebar-category',
'description' => '',
'before_widget' => '',
'after_widget' => '</div><!-- /.category -->',
'after_title'   => '</h2><div class="category">',
) );
register_sidebar( array(
'name' => 'ウィジェット-最近の投稿',
'id' => 'sidebar-nearly',
'description' => '',
'before_widget' => '',
'after_widget' => '</div><!-- /.category -->',
'after_title'   => '</h2><div class="category">',
) );
?>
<?php
//ナビゲーション
add_theme_support( 'menus' );
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
?>
<?php
//ビジュアルエディター
add_editor_style();
?>