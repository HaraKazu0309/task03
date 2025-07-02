// タブの見出し（tab-item）を取得
const tabItems = document.querySelectorAll('.tab-item');
tabItems.forEach((tabItem) => {
  tabItem.addEventListener('click', () => {
    // すべてのタブを非アクティブにする
    tabItems.forEach((t) => {
      t.classList.remove('active');
    });
    // すべてのコンテンツを非表示にする
    const tabPanels = document.querySelectorAll('.tab-panel');
    tabPanels.forEach((tabPanel) => {
      tabPanel.classList.remove('active');
    });
    // クリックされたタブをアクティブにする
    tabItem.classList.add('active');
    // 対応するコンテンツを表示
    const tabIndex = Array.from(tabItems).indexOf(tabItem);
    tabPanels[tabIndex].classList.add('active');
  });
});

/* フェードインアニメーション */
document.addEventListener('DOMContentLoaded', function () {
  const targets = document.querySelectorAll('.fade-in');

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  targets.forEach((target) => {
    observer.observe(target);
  });
});

// ヘッダーの透明化
document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.headerContainer');
  const intro = document.querySelector('.intro');

  window.addEventListener('scroll', function () {
    if (intro) {
      const introBottom = intro.getBoundingClientRect().bottom;

      if (introBottom <= 0) {
        header.classList.add('transparent');
      } else {
        header.classList.remove('transparent');
      }
    }
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.querySelector('.hamburger-overlay');
  const nav = document.querySelector('.nav-overlay');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');

    const isOpen = hamburger.classList.contains('active');
    hamburger.setAttribute('aria-expanded', isOpen);
    nav.setAttribute('aria-hidden', !isOpen);

    // メニューオープン時に背景スクロールを防止
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // ESCキーでメニューを閉じる
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('active')) {
      hamburger.classList.remove('active');
      nav.classList.remove('active');
      hamburger.setAttribute('aria-expanded', false);
      nav.setAttribute('aria-hidden', true);
      document.body.style.overflow = '';
    }
  });
});
