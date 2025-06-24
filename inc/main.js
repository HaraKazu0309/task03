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
