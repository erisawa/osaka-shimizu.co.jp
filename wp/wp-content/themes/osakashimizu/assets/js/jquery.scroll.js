$(function () {
  var $header = $('#nav_header'); // ← 今のヘッダーIDに変更
  var speed = 500;

  $('a[href^="#"]').on('click', function (e) {
    var href = $(this).attr('href');

    // href="#" や href="" は「ページトップ」扱い
    if (href === '#' || href === '') {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, speed, 'swing');
      return;
    }

    var $target = $(href);
    if (!$target.length) {
      // 対象IDがなければ何もしない
      return;
    }

    // クリック時点のヘッダー高さを都度取得（固定時と通常時で高さが違ってもOK）
    var headerHeight = $header.outerHeight() || 0;
    var position = $target.offset().top - headerHeight;

    e.preventDefault();
    $('html, body').animate({ scrollTop: position }, speed, 'swing');
  });
});