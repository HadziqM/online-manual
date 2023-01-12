/*=========================================================
　　　　　サイト内制限機能
=======================================================*/
const doc = document; // ドキュメントオブジェクト
const root_el = doc.documentElement; // ルートエレメント

/* 右クリック制限
====================================================*/
root_el.oncontextmenu = () => {
  return false;
};

/* ピンチイン/アウト制限
====================================================*/
root_el.addEventListener(
  'touchstart',
  (e) => {
    if (e.touches.length > 1) {
      e.preventDefault();
    }
  },
  { passive: false }
);

/*=========================================================
　　　　　トップページ画像
=======================================================*/
/* let randomImg = [
  '/manual/assets/img/common/bg1.webp',
  '/manual/assets/img/common/bg2.webp',
  '/manual/assets/img/common/bg3.webp',
  '/manual/assets/img/common/bg4.webp',
];
let num = Math.floor(Math.random() * randomImg.length);
let output = '<img class="bg" src=' + randomImg[num] + ' alt=>';
let img = document.getElementById('images');
img.innerHTML = output; */

/*=========================================================
　　　　　言語関連
=======================================================*/
const manual_path = '/manual/'; // マニュアルへのパス
const path_name = location.pathname; // 現在ページパス名（/manual/ + /lang_value/）
let path_value = path_name.split('/'); // 現在ページパスを分割
let lang_value = path_value[2]; // 現在ページ言語コード
let mcpath = path_value[3]; // 現在ページメインカテゴリーパス
let scpath = path_value[4]; // 現在ページサブカテゴリーパス
const ls = doc.querySelector('.header_language_selector'); // 言語選択枠
const la = doc.querySelector('.language_selectArea'); // 言語選択欄
const lj = doc.querySelector('.lang_sel_judge');
const sl = doc.getElementById(lang_value); // 言語欄内より表示言語と一致するもの
// ハッシュ削除
function removeHash() {
  history.pushState('', doc.title, path_name + location.search);
}

/* 選択中言語装飾
====================================================*/
sl.classList.add('selected');

/* 言語選択枠操作
====================================================*/
ls.addEventListener('click', (e) => {
  e.currentTarget.classList.toggle('langArrow_open');
  lj.classList.toggle('open');
  if (lj.classList.contains('open')) {
    slideDown(la);
  } else {
    slideUp(la);
  }
});

/* 言語切り替えリンク
====================================================*/
doc.querySelectorAll('.LANG').forEach((langQuery) => {
  langQuery.addEventListener('click', () => {
    const ids = langQuery.getAttribute('id');

    // クッキー値セット
    if (ids === 'ja') {
      Cookies.set('lang', 'ja', {
        expires: 365,
        path: '/',
        samesite: 'lax',
      });
    } else if (ids === 'en') {
      Cookies.set('lang', 'en', {
        expires: 365,
        path: '/',
        samesite: 'lax',
      });
    }

    // 遷移
    lang_value = ids;
    let href_path = `${manual_path + lang_value}/${mcpath}/${scpath}`;
    if (mcpath === '') {
      // トップページの場合
      href_path = `${manual_path + lang_value}/`;
      location.pathname = href_path;
    } else {
      // 通常記事の場合
      location.pathname = href_path;
    }
  });
});

/*=========================================================
　　　　　サイドメニュー
=======================================================*/
let menuNow = '';
const menuBtns = doc.querySelectorAll('.category');

$('.openbtn').click(function () {
  //ボタンがクリックされたら
  $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
  $('html').toggleClass('fixed');
  $('.side_menu').toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
});

/* スライドオープン
====================================================*/
function slideDown(target) {
  target.style.height = 'auto';
  let h = target.offsetHeight;
  target.style.height = h + 'px';
  target.animate(
    {
      height: [0, h + 'px'],
    },
    {
      duration: 400,
      easing: 'ease',
    }
  );
}

/* スライドクローズ
====================================================*/
function slideUp(target) {
  let h = target.offsetHeight;
  target.style.height = h + 'px';
  target.animate(
    {
      height: [h + 'px', 0],
    },
    {
      duration: 400,
      easing: 'ease',
    }
  );
  target.style.height = 0;
}

/* 通常操作
====================================================*/
// メニュー開閉操作
menuBtns.forEach((menuBtn, index) => {
  menuBtn.addEventListener('click', (e) => {
    menuNow = index;
    e.currentTarget.classList.toggle('open');
    const content = e.currentTarget.children[1];
    if (e.currentTarget.classList.contains('open')) {
      slideDown(content);
    } else {
      slideUp(content);
    }

    // 開いてるメニュー以外をクリックしたときそれを自動的に閉じる
    menuBtns.forEach((menuBtn, index) => {
      if (menuNow !== index) {
        menuBtn.classList.remove('open');
        const openedcontent = menuBtn.children[1];
        slideUp(openedcontent);
      }
    });
  });
});

/* 閲覧ページに応じた自動操作
====================================================*/
let mc_value = ''; // メインカテゴリー該当パス
let sc_value = ''; // サブカテゴリー該当パス

if (mcpath === '') {
  // トップページ用
  mc_value = 'toppage';
  sc_value = 'home';
} else if (scpath === 'news') {
  // 更新履歴用
  mc_value = 'toppage';
  sc_value = 'news';
} else {
  // 汎用ページ用
  mc_value = mcpath;
  sc_value = scpath;
}
const mc = doc.getElementById(mc_value);
mc.classList.add('open');
const content = mc.children[1];
content.style.height = 'auto';
const sc = doc.getElementById(sc_value);
sc.classList.add('selected');

/*=========================================================
　　　　　ページ読み込み
=======================================================*/
function loadArticle(path1 = '', path2 = '') {
  event.stopPropagation();
  const main_category = path1;
  const sub_category = path2;
  let href_path = `${manual_path + lang_value}/${main_category + sub_category}`;
  removeHash(); // ハッシュ削除
  location.pathname = href_path;
}

/*=========================================================
　　　　　スクロール関連
=======================================================*/
/* セクションスクロール
====================================================*/
$(function () {
  $('a[class="scroll"]').on('click', function (event) {
    let hash = $(this).attr('data-target');
    let target = $('#' + hash);
    let speed = 1000;
    let position = target.offset().top - 50;
    event.preventDefault();
    $('html, body').animate(
      {
        scrollTop: position,
      },
      speed,
      'swing'
    );
    return false;
  });
});

/* 記事トップスクロール
====================================================*/
$(function () {
  $('.pagetop').on('click', function () {
    $('body, html').animate(
      {
        scrollTop: 0,
      },
      1000,
      'swing'
    );
    return false;
  });
});
