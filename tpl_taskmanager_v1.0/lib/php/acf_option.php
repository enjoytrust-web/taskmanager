<?php

if( function_exists('acf_add_options_page') ) {
  $option_page = acf_add_options_page(array(
    'page_title' => '料金表', // 設定ページで表示される名前
    'menu_title' => '料金表', // ナビに表示される名前
    'menu_slug' => 'system_fee',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

  $option_page = acf_add_options_page(array(
    'page_title' => '施策バナー', // 設定ページで表示される名前
    'menu_title' => '施策バナー', // ナビに表示される名前
    'menu_slug' => 'cp_bnr',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

  $option_page = acf_add_options_page(array(
    'page_title' => 'YouTube', // 設定ページで表示される名前
    'menu_title' => 'YouTube', // ナビに表示される名前
    'menu_slug' => 'youtube',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

  $option_page = acf_add_options_page(array(
    'page_title' => 'レギュラーイベント更新', // 設定ページで表示される名前
    'menu_title' => 'レギュラー更新', // ナビに表示される名前
    'menu_slug' => 'reg_ev',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

  $option_page = acf_add_options_page(array(
    'page_title' => 'INFORMATION / バナー一覧', // 設定ページで表示される名前
    'menu_title' => 'バナー', // ナビに表示される名前
    'menu_slug' => 'info_bnr',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

  $option_page = acf_add_options_page(array(
    'page_title' => 'ドリンクメニュー', // 設定ページで表示される名前
    'menu_title' => 'ドリンクメニュー', // ナビに表示される名前
    'menu_slug' => 'drink_menu',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

  $option_page = acf_add_options_page(array(
    'page_title' => 'フードメニュー', // 設定ページで表示される名前
    'menu_title' => 'フードメニュー', // ナビに表示される名前
    'menu_slug' => 'food_menu',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}