<?php
/*==============================
-Add Custom Post Type
===============================*/
// カスタム投稿タイプの追加
  function create_post_type() {

  // グラフィック
    register_post_type( 'graphic_task',
      array(
        'label' => 'グラフィック',
        'public' => true,
        // 'has_archive' => true,
        'menu_position' => 5,
        'supports' => 'title',
        'rewrite' => array(
        'slug' => 'g', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
        )
      )
    );

    // add taxonomy
    register_taxonomy(
      'graphic_task_category',
      'graphic_task',
      array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリ一覧',
          'add_new_item' => 'カテゴリを追加'
        ),
        'hierarchical' => true
      )
    );

  // ウェブ
    register_post_type( 'web_task',
      array(
        'label' => 'WEB',
        'public' => true,
        // 'has_archive' => true,
        'menu_position' => 5,
        'supports' => 'title',
        'rewrite' => array(
        'slug' => 'w', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
        )
      )
    );

    // add taxonomy
    register_taxonomy(
      'web_task_category',
      'web_task',
      array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリ一覧',
          'add_new_item' => 'カテゴリを追加'
        ),
        'hierarchical' => true
      )
    );

  // 映像
    register_post_type( 'movie_task',
      array(
        'label' => '映像',
        'public' => true,
        // 'has_archive' => true,
        'menu_position' => 5,
        'supports' => 'title',
        'rewrite' => array(
        'slug' => 'm', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
        )
      )
    );

    // add taxonomy
    register_taxonomy(
      'movie_task_category',
      'movie_task',
      array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリ一覧',
          'add_new_item' => 'カテゴリを追加'
        ),
        'hierarchical' => true
      )
    );

    // 総務
      register_post_type( 'affairs_task',
        array(
          'label' => '総務',
          'public' => true,
          // 'has_archive' => true,
          'menu_position' => 5,
          'supports' => 'title',
          'rewrite' => array(
          'slug' => 'a', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
          'with_front' => false
          )
        )
      );

      // add taxonomy
      register_taxonomy(
        'affairs_task_category',
        'affairs_task',
        array(
          'label' => 'カテゴリー',
          'labels' => array(
            'all_items' => 'カテゴリ一覧',
            'add_new_item' => 'カテゴリを追加'
          ),
          'hierarchical' => true
        )
      );

  }

  add_action( 'init', 'create_post_type' );