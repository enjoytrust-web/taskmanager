<?php get_header(); ?>

<div class="subheader">
  <?php $user = wp_get_current_user(); ?>
    <p class="admin-image"><?php echo get_avatar($user->get('ID'), 128); // アバター取得 ?></p>
    <p class="admin-name"><?php echo $user->get('display_name'); // 表示用の名前を取得 ?></p>
    <a href="" class="task-edit">タスクの追加</a>
</div>

<div class="l-wrapper">
  <div class="l-full">

    <div class="l-grid-4">
      <div class="task-list-card">
        <p class="task-info-date">
        <p class="index">Order Date - 受理日</p>
        <p class="lead lead-minimum">2017/08/01</p>
        <p class="index">Order Title - 案件名</p>
        <p class="lead lead-title">フライヤー制作</p>
        <p class="index">Client - クライアント</p>
        <p class="lead lead-large">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="index">Deadline - 納期</p>
        <p class="lead lead-large">2017/08/07</p>
        <p class="index">Order Info - 制作物の種類</p>
        <p class="lead lead-small">フライヤー / ポスター</p>
        <p class="index">Charger - 作業担当者</p>
        <p class="lead lead-label">中村</p>
        <p class="index">Status - 作業ステータス</p>
        <p class="lead lead-label">未着手</p>
        <div class="l-row button-group">
          <div class="l-grid-6">
            <a href="" class="tasklist-edit">このタスクを更新する</a>
          </div>
          <div class="l-grid-6">
            <a href="" class="tasklist-info">詳細を確認する</a>
          </div>
        </div>

        <div class="card-corner graphic"></div>
      </div>
    </div>

    <div class="l-grid-4">
      <div class="task-list-card">
        <p class="task-info-date">
        <p class="index">Order Date - 受理日</p>
        <p class="lead lead-minimum">2017/08/01</p>
        <p class="index">Order Title - 案件名</p>
        <p class="lead lead-title">フライヤー制作</p>
        <p class="index">Client - クライアント</p>
        <p class="lead lead-large">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="index">Deadline - 納期</p>
        <p class="lead lead-large">2017/08/07</p>
        <p class="index">Order Info - 制作物の種類</p>
        <p class="lead lead-small">フライヤー / ポスター</p>
        <p class="index">Charger - 作業担当者</p>
        <p class="lead lead-label">中村</p>
        <p class="index">Status - 作業ステータス</p>
        <p class="lead lead-label">未着手</p>
        <div class="l-row button-group">
          <div class="l-grid-6">
            <a href="" class="tasklist-edit">このタスクを更新する</a>
          </div>
          <div class="l-grid-6">
            <a href="" class="tasklist-info">詳細を確認する</a>
          </div>
        </div>

        <div class="card-corner web"></div>
      </div>
    </div>

    <div class="l-grid-4">
      <div class="task-list-card">
        <p class="task-info-date">
        <p class="index">Order Date - 受理日</p>
        <p class="lead lead-minimum">2017/08/01</p>
        <p class="index">Order Title - 案件名</p>
        <p class="lead lead-title">フライヤー制作</p>
        <p class="index">Client - クライアント</p>
        <p class="lead lead-large">GIRAFFE JAPAN
          <span class="keishou">&nbsp;様</span>
        </p>
        <p class="index">Deadline - 納期</p>
        <p class="lead lead-large">2017/08/07</p>
        <p class="index">Order Info - 制作物の種類</p>
        <p class="lead lead-small">フライヤー / ポスター</p>
        <p class="index">Charger - 作業担当者</p>
        <p class="lead lead-label">中村</p>
        <p class="index">Status - 作業ステータス</p>
        <p class="lead lead-label">未着手</p>
        <div class="l-row button-group">
          <div class="l-grid-6">
            <a href="" class="tasklist-edit">このタスクを更新する</a>
          </div>
          <div class="l-grid-6">
            <a href="" class="tasklist-info">詳細を確認する</a>
          </div>
        </div>
        <div class="card-corner movie"></div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>