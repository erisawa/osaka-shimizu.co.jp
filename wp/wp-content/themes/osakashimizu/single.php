<?php
/**
 * 投稿詳細（新着情報 詳細）
 */
get_header();
?>
    <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">NEWS</span>
                    <span class="page-heading-ja">新着情報</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-post">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>

            <!-- 新着情報詳細 -->
            <section class="news-post contents_inner_s contents_inner_ss">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <!-- タイトル＋日付 -->
                <div class="news-post__head">
                    <h1 class="news-post__title"><?php the_title(); ?></h1>

                    <time class="news-post__date en"
                        datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                    <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
                    </time>
                </div>

                <!-- 本文 -->
                <div class="news-post__body">
                    <?php the_content(); ?>
                </div><!-- /.news-post__body -->

                <!-- 一覧に戻るボタン -->
                <div class="news-post__btn">
                    <?php
                    // 「投稿ページ」に設定した固定ページがあればそのURLへ
                    $posts_page_id = get_option( 'page_for_posts' );
                    if ( $posts_page_id ) {
                        $back_url = get_permalink( $posts_page_id );
                    } else {
                        // 念のためのフォールバック
                        $back_url = home_url( '/news' );
                    }
                    ?>
                    <a href="<?php echo esc_url( $back_url ); ?>" class="link_btn">
                    <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                        <path class="icon-arrow__path" d="M8 5l5 5-5 5"
                            fill="none" stroke-width="2" />
                    </svg>
                    <span class="link_btn_text">記事一覧に戻る</span>
                    </a>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>

            </section>
        </div><!-- /#contents -->
<?php get_footer(); ?>