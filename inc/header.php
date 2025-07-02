<header>
  <div class="headerContainer">
    <div class="headerLogo">
      <h1>SAMPLE site.</h1>
    </div>
    <?php
    // メニューIDを取得する
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);

    ?>
    <nav class="headerNav">
      <ul class="navList">
        <?php foreach ($menu_items as $item): ?>
          <li class="navItem">
            <a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>


    <div class="hamburgerMnue">
      <button class="hamburger-overlay" aria-label="メニュー" aria-controls="overlay-menu" aria-expanded="false">
        <span class="hamburger-overlay__line"></span>
        <span class="hamburger-overlay__line"></span>
        <span class="hamburger-overlay__line"></span>
      </button>

      <nav id="overlay-menu" class="nav-overlay" aria-hidden="true">
        <div class="nav-overlay__content">
          <ul class="nav-overlay__list">
            <li class="nav-overlay__item"><a href="#about" class="nav-overlay__link">ABOUT</a></li>
            <li class="nav-overlay__item"><a href="#service" class="nav-overlay__link">SERVICE</a></li>
            <li class="nav-overlay__item"><a href="#blog" class="nav-overlay__link">BLOG</a></li>
            <li class="nav-overlay__item"><a href="#contact" class="nav-overlay__link">CONTACT</a></li>
          </ul>
        </div>
        <div class="contactInfo">
          <h2 class="contanctLogo">SAMPLE site.</h2>
          <p class="contactNumber">
            TEL: 00-0000-0000
          </p>
          <p class="contactMail">
            MAIL: sample@sample.com
          </p>

        </div>
      </nav>

    </div>
  </div>
</header>
