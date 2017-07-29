<?php get_header(); ?>
<section class="section-main js-fade">

  <figure class="main-visual">
    <div class="main-visual-box">
      <img class="main-visual-media" src="<?php bloginfo('template_url'); ?>/lib/image/logo-white.svg">
    </div>
  </figure>

</section><!-- / main -->

<section class="l-wrapper section-event js-fade">

  <h2 class="section-topics-header">EVENT<span class="section-topics-number">01</span></h2>

 <?php
        $args = array(
          'post_type' => array('specialevent-custom','guestevents-custom','specialguest-custom') ,
          'meta_value' => date('Y.m.d'),
          'meta_type' => 'DATE',
          'meta_key' => 'date_end',
          'meta_compare' => '>=',
          'orderby' => 'meta_value',
          'order' => 'ASC',
          'showposts' => -1,
          );
        $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合 ?>


    <div class="slider">
      <div class="slide-in">
        <a href=""><img class="slide-image" src="<?php the_field('pouch_image') ;?>"></a>
        <a href=""><h2 class="event-title"><?php the_field('event_title') ;?></h2></a>
        <a href=""><p class="event-date"><?php the_field('date_start') ;?> - <?php the_field('date_end') ;?></p></a>
        <!-- <a href=""><p class="event-lead"><?php the_field('event_guide') ;?></p></a> -->
      </div>
    </div>


         <?php endforeach; ?>
      <?php else : //記事が無い場合 ?>
      <?php endif; wp_reset_postdata(); //クエリのリセット ?>

    <div class="button">
      <a class="button-item more" href="">MORE</a>
    </div>

</section><!-- / event -->

<section class="l-wrapper section-info js-fade">

  <h2 class="section-topics-header">INFORMATION<span class="section-topics-number">02</span></h2>

    <div class="l-container">
      <div class="l-row">
        <div class="l-grid-3 slide-image">
          <a href=""><img src="<?php bloginfo('template_url'); ?>/lib/image/event1.jpg"></a>
        </div>

        <div class="l-grid-3 slide-image">
          <a href=""><img src="<?php bloginfo('template_url'); ?>/lib/image/event2.jpg"></a>
        </div>

        <div class="l-grid-3 slide-image">
          <a href=""><img src="<?php bloginfo('template_url'); ?>/lib/image/event3.jpg"></a>
        </div>

        <div class="l-grid-3 slide-image">
          <a href=""><img src="<?php bloginfo('template_url'); ?>/lib/image/event4.jpg"></a>
        </div>
      </div><!-- / l-row -->
    </div><!-- / l-container -->

    <div class="button">
      <a class="button-item more" href="">MORE</a>
    </div>

</section><!-- / info -->


<section class="l-wrapper section-service js-fade">

  <h2 class="section-topics-header">SERVICE<span class="section-topics-number">03</span></h2>

  <div class="l-container">
    <div class="l-row">
      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_apparel.png">
      </div>

      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_earlytime.png">
      </div>

      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_men.png">
      </div>

      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_non-japanese-nationals.png">
      </div>

      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_rainyday.png">
      </div>

      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_sns.png">
      </div>

      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_student.png">
      </div>

      <div class="l-grid-3 service-icon">
        <img src="<?php bloginfo('template_url'); ?>/lib/image/service_woman.png">
      </div>
    </div><!-- / l-row -->
  </div><!-- / l-container -->
</section><!-- / service -->


<section class="l-wrapper access js-fade">

  <h2 class="section-topics-header">ACCESS<span class="section-topics-number">04</span></h2>

  <div class="l-container">
    <div class="l-row">
      <div class="l-grid-12">
        <article>
              <script type='text/javascript' charset='utf-8' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyACb_BRjKgcfitXWFxp-leAzQou9O8WOY8&sensor=false'></script>
              <script type="text/javascript">
              var gmg = new google.maps.Geocoder(),
              map, center, mk ;
              gmg.geocode({
                  'address': '大阪府大阪市中央区宗右衛門町7-9 GIRAFFE osaka'//表示したい場所
              }, function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {//ジオコードが成功したかどうかチェック
                      center = results[0].geometry.location;
                      initialize();
                      mk = new google.maps.Marker({//ここからマーカーの設定
                          map: map, position: results[0].geometry.location,
                          icon: {//マーカー画像のパスを設定
                              url: 'http://giraffe-osaka.net/wp-content/uploads/2013/09/pin.png',
                              anchor: {//マーカーを表示させる場所を設定
                                  x: 50,
                                  y: 50
                              }},
                              title: 'GIRAFFE osaka'//マーカー画像のtitle
                      });
                  }
              });

              function initialize() {

                  var options = {
                      center: center,
                      zoom: 18,
                      scrollwheel: true,
                      styles:[
                        {"featureType": "all","elementType": "all","stylers": [
                                {"invert_lightness": true},
                                {"hue": "#00ff90"}]},
                        {"featureType": "all","elementType": "geometry.fill","stylers": [
                        {"saturation": "-92"},{"visibility": "on"}]},
                        {"featureType": "all","elementType": "labels.text.fill","stylers": [
                        {"visibility": "on"},{"hue": "#00ff90"}]},
                        {"featureType": "all","elementType": "labels.icon","stylers": [
                        {"visibility": "on"},{"hue": "#00ff90"},
                        {"saturation": "-100"}]}
                      ]
                  };

                  map = new google.maps.Map($("#gm").get(0), options);//セレクタ内に地図取得
              }// initialize
              </script>
              </article>

      <div id="gm"></div> <!-- ここにgoogle mapが入ります -->
      </div><!-- / l-grid-12 -->
    </div><!-- / l-row -->
  </div><!-- / l-container -->
</section><!-- /access -->


<section class="l-wrapper section-movie js-fade">

  <h2 class="section-topics-header">MOVIE<span class="section-topics-number">05</span></h2>

    <div class="l-container">
      <div class="l-row">
          <div class="movie">
              <iframe class="iframe" src="https://www.youtube.com/embed/OI74mns8K-Q" frameborder="0" allowfullscreen></iframe>
          </div>
      </div><!-- / l-row -->
    </div><!-- / l-container -->

    <div class="button">
      <a class="button-item more" href="">MORE</a>
    </div>

</section><!-- / movie -->


<?php get_footer(); ?>