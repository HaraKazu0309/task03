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
      WEB制作会社のSAMPLE site.です。<br> 企業サイトや採用サイトの制作、<br class="sp_br">Wordpress構築と<br> WEBマーケティングを得意としています。
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
      <li class="serviceItem fade-in">
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
      <li class="serviceItem fade-in">
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
      <li class="serviceItem fade-in">
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
      <ul class="tab-list">
        <li class="tab-item active" tabindex="0">WEB制作</li>
        <li class="tab-item" tabindex="0">マーケティング</li>
        <li class="tab-item" tabindex="0">SNS運用</li>
        <li class="tab-item" tabindex="0">コンサルティング</li>
      </ul>
      <?php
      $categories = array(
        'web' => 'WEB制作',
        'marketing' => 'マーケティング',
        'socialmedia' => 'SNS運用',
        'consulting' => 'コンサルティング'
      );
      ?>
      <div class="tab-content">
        <?php foreach ($categories as $slug => $label) : ?>
          <div class="tab-panel  <?php echo $slug === 'web' ? 'active' : ''; ?>" id="cat-<?php echo esc_attr($slug); ?>">
            <ul class="tab-panel_list">
              <?php
              $args = array(
                'posts_per_page' => 4,
                'category_name' => $slug, // スラッグで絞り込み
              );
              $query = new WP_Query($args);

              if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                  <li class="tab-panel_item">

                    <a href="<?php echo get_permalink(); ?>" class="tab-panel_link">
                      <p class="tab-panel_category"><?php echo esc_html($label); ?></p>
                      <?php if (has_post_thumbnail()) : ?>
                        <img class="tab-panel_img" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                      <?php else : ?>
                        <img class="tab-panel_img" src="<?php echo get_template_directory_uri(); ?>/inc/image/thumbnail_1.png" alt="代替サムネイル">
                      <?php endif; ?>
                      <h3 class="tab-panel_title"><?php the_title(); ?></h3>
                      <p class="tab-panel_text"><?php echo get_the_excerpt(); ?></p>
                    </a>
                  <?php endwhile;
                wp_reset_postdata();
              else : ?>
                  <li class="tab-panel_item">投稿が見つかりませんでした。</li>
                <?php endif; ?>
                </li>

            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <button class="blogButton"><a href="#">Read More</a></button>
  </div>
</section>
<section id="contact" class="contact">
  <div class="inner">
    <div class="sectionTitle">
      <p>CONTACT</p>
      <h2>お問い合わせ</h2>
    </div>
    <p class="contactDesc">
      お問い合わせの説明お問い合わせの説明お問い合わせの説明。
    </p>
    <div class="contactConteiner">
      <div class="telSide">
        <div class="telLead">
          <p class="telTitle">
            お電話でのお問い合わせ
          </p>
          <p class="telTime">
            営業時間10:00~19:00
          </p>
        </div>
        <p class="telNumber">
          <span><i class="fa-solid fa-phone"></i></span>00-0000-0000
        </p>
      </div>
      <div class="mailSide">
        <p class="mailTitle">
          メールでのお問い合わせ
        </p>
        <p class="mailAdress">
          <span><i class="fa-solid fa-envelope"></i></span>
          sample@sample.com
        </p>
      </div>
    </div>

  </div>
</section>
<?php get_template_part('inc/footer'); ?>


<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>
