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
    $defaults['graphic'] = 'グラフィク';
    $defaults['web'] = 'Web';
    $defaults['movie'] = '映像';
    $defaults['finance'] = '経理';
    $defaults['hurry'] = '特急';
    $defaults['status'] = '状態';
    $defaults['type'] = 'タイプ';
    $defaults['media_sub'] = '媒体';
    $defaults['date_order'] = '受注日';
    $defaults['date_supply'] = '納品予定日';
    $defaults['worker'] = '作業担当者';
    $defaults['client'] = '発注者';
    // $defaults['attach'] = '添付ファイル';
    // $defaults['attach_images'] = '添付画像';
    // $defaults['comment'] = '備考';
    $defaults['fee_memo'] = 'べーメモ';

    return $defaults;
}

add_filter( 'manage_posts_columns', 'my_posts_columns' );