<?php include('l-header.php'); ?>

<div class="l-main">
  <?php if( is_home() ) : // トップページのみに表示?>
    <?php include('c-topvisual.php'); ?>
  <?php endif;?>
  <?php include('l-main.php'); //メインコンテンツエリア?>
</div>

<?php include('l-footer.php'); ?>