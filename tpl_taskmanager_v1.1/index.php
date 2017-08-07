<?php get_header(); ?>


<div class="subheader">
  <?php $user = wp_get_current_user(); ?>
    <p class="admin-image"><?php echo get_avatar($user->get('ID'), 128); // アバター取得 ?></p>
    <p class="admin-name"><?php echo $user->get('display_name'); // 表示用の名前を取得 ?></p>
    <a href="" class="task-edit">タスクの追加</a>
</div>

<div class="l-wrapper">
  <div class="l-full">
    <div class="l-grid-12">
      <a href="<?php the_permalink($post->ID);?>" class="task-list-card">
        <p class="task-title">フライヤー制作</p>
        <p class="task-label">クライアント</p>
        <p class="task-lead">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="task-label">制作物の種類</p>
        <p class="task-lead">フライヤー制作</p>
        <p class="task-label">担当者</p>
        <p class="task-lead">中村</p>
        <p class="task-label">作業ステータス</p>
        <p class="task-lead">未着手</p>
      </a>
    </div>
    <div class="l-grid-12">
      <a href="<?php the_permalink($post->ID);?>" class="task-list-card">
        <p class="task-title">フライヤー制作</p>
        <p class="task-label">クライアント</p>
        <p class="task-lead">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="task-label">制作物の種類</p>
        <p class="task-lead">フライヤー制作</p>
        <p class="task-label">担当者</p>
        <p class="task-lead">中村</p>
      </a>
    </div>
    <div class="l-grid-12">
      <a href="<?php the_permalink($post->ID);?>" class="task-list-card">
        <p class="task-title">フライヤー制作</p>
        <p class="task-label">クライアント</p>
        <p class="task-lead">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="task-label">制作物の種類</p>
        <p class="task-lead">フライヤー制作</p>
        <p class="task-label">担当者</p>
        <p class="task-lead">中村</p>
      </a>
    </div>
    <div class="l-grid-12">
      <a href="<?php the_permalink($post->ID);?>" class="task-list-card">
        <p class="task-title">フライヤー制作</p>
        <p class="task-label">クライアント</p>
        <p class="task-lead">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="task-label">制作物の種類</p>
        <p class="task-lead">フライヤー制作</p>
        <p class="task-label">担当者</p>
        <p class="task-lead">中村</p>
      </a>
    </div>
    <div class="l-grid-12">
      <a href="<?php the_permalink($post->ID);?>" class="task-list-card">
        <p class="task-title">フライヤー制作</p>
        <p class="task-label">クライアント</p>
        <p class="task-lead">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="task-label">制作物の種類</p>
        <p class="task-lead">フライヤー制作</p>
        <p class="task-label">担当者</p>
        <p class="task-lead">中村</p>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>