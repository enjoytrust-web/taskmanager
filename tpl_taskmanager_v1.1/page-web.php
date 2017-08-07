<?php get_header(); ?>


<div class="l-full">

  <section class="side l-tile-grid-2">

  <header class="header">
  <div class="side-contents">
    <h1 class="admin-header">
      <a href="<?php bloginfo('url'); ?>?order=DESC&orderby=modified">
      <?php $user = wp_get_current_user(); ?>
        <p class="admin-image"><?php echo get_avatar($user->get('ID'), 128); // アバター取得 ?></p>
        <p class="admin-name"><?php echo $user->get('display_name'); // 表示用の名前を取得 ?></p>
      </a>
    </h1>

    <div class="subheader">
      <ul>
    <?php if(is_user_logged_in()) : ?>
        <li><a href="<?php bloginfo('url'); ?>/wp-admin/edit.php">ダッシュボード</a></li>
        <li><a href="<?php bloginfo('url'); ?>/wp-admin/profile.php">プロフィールを編集</a></li>
        <li><a href="<?php echo wp_logout_url(); ?>">ログアウト</a></li>
        <?php else : ?>
        <li><a href="<?php bloginfo('url'); ?>/wp-admin/edit.php">ダッシュボード</a></li>
        <li><a href="<?php bloginfo('url'); ?>/wp-admin/profile.php">プロフィールを編集</a></li>
        <li><a href="<?php echo wp_login_url(); ?>">ログイン</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div><!-- side-contents -->
  </header><!-- header -->




    <div class="side-contents">
    <nav class="nav">
      <h2 class="nav-menu-header">作業ステータス</h2>

        <ul class="nav-menu-list">
          <li class="nav-menu-listin"><a href="<?php bloginfo('url'); ?>?order=DESC&orderby=meta_key=status&meta_value=notstarted">未着手<i class="nav-menu-list-arrow fa fa-chevron-right" aria-hidden="true"></i></a></li>
          <li class="nav-menu-listin"><a href="<?php bloginfo('url'); ?>?order=DESC&orderby=meta_key=status&meta_value=progress">作業中<i class="nav-menu-list-arrow fa fa-chevron-right" aria-hidden="true"></i></a></li>
          <li class="nav-menu-listin"><a href="<?php bloginfo('url'); ?>?order=DESC&orderby=meta_key=status&meta_value=correction">クライアントCB<i class="nav-menu-list-arrow fa fa-chevron-right" aria-hidden="true"></i></a></li>
          <li class="nav-menu-listin"><a href="<?php bloginfo('url'); ?>?order=DESC&orderby=meta_key=status&meta_value=korrectionprogresz">修正<i class="nav-menu-list-arrow fa fa-chevron-right" aria-hidden="true"></i></a></li>
          <li class="nav-menu-listin"><a href="<?php bloginfo('url'); ?>?order=DESC&orderby=meta_key=status&meta_value=correctonceeck">作業完了<i class="nav-menu-list-arrow fa fa-chevron-right" aria-hidden="true"></i></a></li>
          <li class="nav-menu-listin"><a href="<?php bloginfo('url'); ?>?order=DESC&orderby=meta_key=status&meta_value=output">納品済み<i class="nav-menu-list-arrow fa fa-chevron-right" aria-hidden="true"></i></a></li>
          <li class="nav-menu-listin"><a href="<?php bloginfo('url'); ?>?order=DESC&orderby=meta_key=status&meta_value=ask">保留<i class="nav-menu-list-arrow fa fa-chevron-right" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    </div>
  </section>

  <section class="main l-tile-grid-10">
    <div class="main-contents">bbbbb</div>
  </section>

</div><!-- l-full -->


<?php get_footer(); ?>