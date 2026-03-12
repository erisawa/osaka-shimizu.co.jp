<?php
/**
 * Template Name: 404 NOT FOUND
 * Description: 404ページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">404 NOT FOUND</span>
                    <span class="page-heading-ja">ページが見つかりませんでした</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-policy contents-default">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>

            <section class="contents_inner_s">
                <p>お探しのページは見つかりませんでした。<br>
                URLが間違っているか、ページが削除された可能性があります。</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link_btn">
                    <span class="link_btn_text">TOPページへ戻る</span>
                    <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                    <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                    <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                    </svg>
                </a>
            </section>
        </div><!-- /#contents -->
<?php get_footer(); ?>