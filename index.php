<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('inc/header'); ?>
</body <?php body_class(); ?>>
<section class="intro">
  <div class="introContainer inner">
    <h2 class="introLead">
      ヒアリング重視の<br>目的に合った最適な提案
    </h2>
    <p class="introDisc">
      WEB制作会社のSAMPLE site.です。<br> 企業サイトや採用サイトの制作、Wordpress構築と<br> WEBマーケティングを得意としています。
    </p>
  </div>
</section>
<section id="about" class="about">
  <div class="inner">
    <div class="sectionTitle">
      <p>ABOUT</p>
      <h2>私たちについて</h2>
    </div>
    <ul class="aboutList">
      <li class="aboutItem">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/image/about_1.png" alt="">
        <div class="heading">
          <p class="heading_name">
            Assist
          </p>
          <p class="heading_num">
            01
          </p>
        </div>
        <h3 class="aboutItem_title">
          タイトルタイトルタイトルタイトルタイトルタイトル
        </h3>
        <p class="aboutItem_desc">
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
      </li>
      <li class="aboutItem">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/image/about_2.png" alt="">
        <div class="heading">
          <p class="heading_name">
            Assist
          </p>
          <p class="heading_num">
            02
          </p>
        </div>
        <h3 class="aboutItem_title">
          タイトルタイトルタイトルタイトルタイトルタイトル
        </h3>
        <p class="aboutItem_desc">
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
      </li>
      <li class="aboutItem">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/image/about_3.png" alt="">
        <div class="heading">
          <p class="heading_name">
            Assist
          </p>
          <p class="heading_num">
            03
          </p>
        </div>
        <h3 class="aboutItem_title">
          タイトルタイトルタイトルタイトルタイトルタイトル
        </h3>
        <p class="aboutItem_desc">
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
      </li>
    </ul>
  </div>
</section>
<section id="service" class="service">
  <div class="inner">
    <div class="sectionTitle">
      <p>SERVICE</p>
      <h2>サービス内容</h2>
    </div>
    <ul class="serviceList">
      <li class="serviceItem">
        <img class="serviceItem_img" src="<?php echo get_template_directory_uri(); ?>/inc/image/service_1.png" alt="会議の様子">
        <div class="serviceItem_desc">
          <p class="serviceItem_subTitle">
            SERVICE CONTENTS
          </p>
          <h3 class="serviceItem_title">
            サービス内容タイトル
          </h3>
          <p class="serviceItem_text">
            サービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキスト
          </p>
        </div>

      </li>
      <li class="serviceItem">
        <img class="serviceItem_img" src="<?php echo get_template_directory_uri(); ?>/inc/image/service_2.png" alt="会議の様子">
        <div class="serviceItem_desc">
          <p class="serviceItem_subTitle">
            SERVICE CONTENTS
          </p>
          <h3 class="serviceItem_title">
            サービス内容タイトル
          </h3>
          <p class="serviceItem_text">
            サービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキスト
          </p>
        </div>

      </li>
      <li class="serviceItem">
        <img class="serviceItem_img" src="<?php echo get_template_directory_uri(); ?>/inc/image/service_3.png" alt="会議の様子">
        <div class="serviceItem_desc">
          <p class="serviceItem_subTitle">
            SERVICE CONTENTS
          </p>
          <h3 class="serviceItem_title">
            サービス内容タイトル
          </h3>
          <p class="serviceItem_text">
            サービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキストサービス内容テキスト
          </p>
        </div>

      </li>
    </ul>
</section>
<section id="blog" class="blog">
  <div class="inner">
    <div class="sectionTitle">
      <p>Blog</p>
      <h2>ブログ</h2>
    </div>
    <div class="tabs">
      
    </div>
  </div>
</section>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>
