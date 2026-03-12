<?php
/**
 * 共通ヘッダー
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php if ( ! is_user_logged_in() ) : ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SM5N3TY399"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SM5N3TY399');
</script>
<?php endif; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<?php
$meta_description = my_get_meta_description();
if ( $meta_description !== '' ) :
?>
<meta name="description" content="<?php echo esc_attr( $meta_description ); ?>">
<?php endif; ?>
<?php
$meta_keywords = my_get_meta_keywords();
if ( $meta_keywords !== '' ) :
?>
<meta name="keywords" content="<?php echo esc_attr( $meta_keywords ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <a class="skip-link" href="#contents">メインコンテンツへスキップ</a>
	<?php if ( is_front_page() ) : ?>
	<div id="loader" aria-hidden="true">
        <div class="loader__center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-w.svg" alt="" width="240" height="42" class="loader__logo">
        </div>
    </div>
	<?php endif; ?>
    <header class="site-header">
        <div id="nav_header">
            <div class="site-header__brand">
                <a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-w.svg" width="320" height="56" alt="大阪シミズ"></a>
            </div>
            <!-- グローバルナビ -->
            <nav id="global-nav" aria-label="グローバルナビゲーション">
                <ul class="global-nav__list">
                    <li class="global-nav__item"><a href="<?php echo home_url('/outline'); ?>">会社概要</a></li>
                    <li class="global-nav__item"><a href="<?php echo home_url('/mind'); ?>">企業理念</a></li>
                    <li class="global-nav__item"><a href="<?php echo home_url('/business'); ?>">事業概要</a></li>
                    <li class="global-nav__item"><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
                    <li class="global-nav__item"><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></li>
                    <li class="global-nav__item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
        <div id="fix-nav">
            <ul class="fix-nav__list">
                <li class="fix-nav__item"><a href="<?php echo home_url('/recruit'); ?>">正社員募集</a></li>
                <li class="fix-nav__item"><a href="https://recruit.osakashimizu.com" target="_blank">アルバイト募集</a></li>
            </ul>
        </div>
        <!-- ハンバーガーボタン -->
        <button type="button" id="hamburger-btn" class="c-hamburger" aria-label="メニューを開閉" aria-controls="drawer" aria-expanded="false"><span class="c-hamburger__line"></span></button>
        <!-- ハンバーガーナビ（ドロワー） -->
        <div id="drawer" class="drawer" aria-label="メインメニュー" aria-hidden="true">
            <?php get_template_part( 'template-parts/header', 'hamburger-images' ); ?>
            <div class="drawer__nav">
                <div class="drawer__logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-w.svg" width="320" height="56" alt="大阪シミズ"></a>
                </div>
                <nav aria-label="グローバルナビゲーション">
                    <ul class="drawer__nav01">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
                        <li><a href="<?php echo home_url('/outline'); ?>">会社概要</a></li>
                        <li><a href="<?php echo home_url('/mind'); ?>">企業理念</a></li>
                        <li><a href="<?php echo home_url('/business'); ?>">事業概要</a></li>
                        <li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
                        <li><a href="<?php echo home_url('/news'); ?>">新着情報</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
                    </ul>
                    <ul class="drawer__nav02">
                        <li><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></li>
                        <li><a href="<?php echo home_url('/recruit/recruit-newsnewgrad'); ?>">新卒採用</a>
                            <ul>
                                <li><a href="<?php echo home_url('/recruit/recruit-newsnewgrad'); ?>">募集要項</a></li>
                                <li><a href="<?php echo home_url('/recruit/entry-newsnewgrad'); ?>">エントリーフォーム</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo home_url('/recruit/recruit-midcareer'); ?>">中途採用</a>
                            <ul>
                                <li><a href="<?php echo home_url('/recruit/recruit-midcareer'); ?>">募集要項</a></li>
                                <li><a href="<?php echo home_url('/recruit/entry-midcareer'); ?>">エントリーフォーム</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo home_url('/employee-benefits'); ?>">福利厚生</a></li>
                    </ul>
                    <ul class="drawer__nav03">
                        <li><a href="<?php echo home_url('/privacy-policy'); ?>">プライバシーポリシー</a></li>
                        <li><a href="<?php echo home_url('/sns-policy'); ?>">ソーシャルメディアポリシー</a></li>
                    </ul>
                    <ul class="drawer__nav04">
                        <li><a href="https://os-members.com/" target="_blank" rel="noopener noreferrer">
                                アルバイト従事者<br>専用サイト
                                <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                                    <circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"></circle>
                                    <path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

	<main id="main" tabindex="-1">