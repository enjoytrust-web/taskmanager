<?php

//投稿一覧に項目を削除する
function custom_columns ($columns) {
  unset($columns['author']);
  unset($columns['cb']);
  unset($columns['title']);
  unset($columns['author']);
  unset($columns['categories']);
  unset($columns['tags']);
  unset($columns['comments']);
  unset($columns['date']);
  return $columns;
}

add_filter( 'manage_posts_columns', 'custom_columns' );


//投稿一覧に項目を追加する
function my_posts_columns( $defaults ) {
  $defaults['date'] = '受理日'; // タスクの作成日を紐づけます
  $defaults['type'] = '案件の種類'; // 新規か修正か
  $defaults['title'] = '案件名';
  $defaults['client'] = '発注者';
  $defaults['deadline'] = '納期';
  $defaults['status'] = 'ステータス';
  $defaults['info'] = '制作物の詳細';
  $defaults['worker'] = '作業担当者';
  // $defaults['attach'] = '添付ファイル';
  // $defaults['attach_images'] = '添付画像';
  // $defaults['comment'] = '備考';
  // $defaults['fee_memo'] = 'べーメモ';

  return $defaults;
}

add_filter( 'manage_posts_columns', 'my_posts_columns' );

/* ======= 管理画面カスタマイズ ======= */
//管理者の場合

  function remove_administrator_menus () {
    if (current_user_can('administrator')) {
      remove_menu_page( 'index.php' );                  // ダッシュボード
      remove_menu_page( 'edit.php' );                   // 投稿
      remove_menu_page( 'upload.php' );                 // メディア
      // remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
      remove_menu_page( 'edit-comments.php' );          // コメント
      remove_menu_page( 'themes.php' );                 // 外観
      //remove_menu_page( 'plugins.php' );                // プラグイン
      remove_menu_page( 'tools.php' );                  // ツール
      remove_menu_page( 'profile.php' );                // プロフィール
      // remove_menu_page( 'options-general.php' );        // 設定
    }
  }

  function remove_adminuser_menus () {
    if (!current_user_can('administrator')) {
      remove_menu_page( 'index.php' );                  // ダッシュボード
      remove_menu_page( 'edit.php' );                   // 投稿
      remove_menu_page( 'upload.php' );                 // メディア
      remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
      remove_menu_page( 'edit-comments.php' );          // コメント
      remove_menu_page( 'themes.php' );                 // 外観
      remove_menu_page( 'plugins.php' );                // プラグイン
      remove_menu_page( 'users.php' );                  // ユーザー
      remove_menu_page( 'tools.php' );                  // ツール
      remove_menu_page( 'profile.php' );                // プロフィール
      remove_menu_page( 'options-general.php' );        // 設定
    }
  }

add_action('admin_menu', 'remove_administrator_menus');//管理者の場合
add_action('admin_menu', 'remove_adminuser_menus');//管理者の場合


function change_default_title( $title ) {
$screen = get_current_screen();
if ( $screen->post_type == 'post' ) {     //投稿
      $title = 'タイトルを入力してください。';
}elseif ( $screen->post_type == 'page' ) {     //固定ページ
      $title = 'ページタイトルを入力してください。';
}
  return $title;
}
add_filter( 'enter_title_here', 'change_default_title' );

function change_role_name() {
  global $wp_roles;
  if ( !isset($wp_roles) )
    $wp_roles = new WP_Roles();

    // 「購読者」を「こうどくしゃ」に変更
    $wp_roles -> roles ['subscriber']['name'] = '購読者';
    $wp_roles -> role_names ['subscriber'] = '購読者';

    // 「寄稿者」を「きこうしゃ」に変更
    $wp_roles -> roles ['contributor']['name'] = '寄稿者';
    $wp_roles -> role_names ['contributor'] = '寄稿者';

    // 「投稿者」を「とうこうしゃ」に変更
    $wp_roles -> roles ['author']['name'] = '投稿者';
    $wp_roles -> role_names ['author'] = '投稿者';

    // 「編集者」を「へんしゅうしゃ」に変更
    $wp_roles -> roles ['editor']['name'] = 'ENJOYTRUST';
    $wp_roles -> role_names ['editor'] = 'ENJOYTRUST';

    // 「管理者」を「かんりしゃ」に変更
    $wp_roles -> roles ['administrator']['name'] = 'システム管理者';
    $wp_roles -> role_names ['administrator'] = 'システム管理者';
}
add_action ( 'init', 'change_role_name' );