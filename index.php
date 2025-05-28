<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <header>
    <div class="headerContainer">
      <div class="headerLogo">
        <h1>SAMPLE site.</h1>
      </div>
      <nav class="headerNav">
        <ul class="navList">
          <li class="navItem">
            <a href="#">ABOUT</a>
          </li>
          <li class="navItem">
            <a href="#">SERVICE</a>
          </li>
          <li class="navItem">
            <a href="#">BLOG</a>
          </li>
          <li class="navItem">
            <a href="#">CONTACT</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
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
</body>

</html>
