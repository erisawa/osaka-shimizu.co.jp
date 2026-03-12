<?php
/**
 * 投稿一覧（新着情報）
 * /news に適用されるテンプレート
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
        <div id="contents" class="contents-news">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>

            <!-- 新着情報一覧 -->
            <section class="news-archive contents_inner_s contents_inner_ss">

            <?php if ( have_posts() ) : ?>
                <ul class="news-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <li class="news-item">
                    <a href="<?php the_permalink(); ?>">
                        <time class="news-item__date en"
                            datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>">
                        <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
                        </time>
                        <span class="news-item__title">
                        <?php the_title(); ?>
                        </span>
                    </a>
                    </li>
                <?php endwhile; ?>
                </ul>

                <?php
                // ▼ ページャー（HTML構造をデザインとほぼ同じに）
                global $wp_query;
                $max_pages = (int) $wp_query->max_num_pages;

                if ( $max_pages > 1 ) :
                    $current = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;
                ?>
                <nav class="pagination en" aria-label="新着情報のページ送り">
                    <ul>
                    <?php
                    // 前のページ
                    if ( $current > 1 ) :
                        $prev_link = get_pagenum_link( $current - 1 );
                    ?>
                        <li class="pagination__prev">
                        <a href="<?php echo esc_url( $prev_link ); ?>" aria-label="前のページへ">
                            <svg class="pagination-arrow" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 18.385 18.385" aria-hidden="true">
                            <path d="M0,0H12V12"
                                    transform="translate(9.899 17.678) rotate(-135)"
                                    fill="none" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </a>
                        </li>
                    <?php endif; ?>

                    <?php
                    // 数字ページ
                    for ( $i = 1; $i <= $max_pages; $i++ ) :
                        if ( $i === $current ) : ?>
                        <li class="pagination__page is-current">
                            <span><?php echo $i; ?></span>
                        </li>
                        <?php else :
                        $link = get_pagenum_link( $i );
                        ?>
                        <li class="pagination__page">
                            <a href="<?php echo esc_url( $link ); ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endif;
                    endfor;
                    ?>

                    <?php
                    // 次のページ
                    if ( $current < $max_pages ) :
                        $next_link = get_pagenum_link( $current + 1 );
                    ?>
                        <li class="pagination__next">
                        <a href="<?php echo esc_url( $next_link ); ?>" aria-label="次のページへ">
                            <svg class="pagination-arrow" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 18.385 18.385" aria-hidden="true">
                            <path d="M0,0H12V12"
                                    transform="translate(8.485 0.707) rotate(45)"
                                    fill="none" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </a>
                        </li>
                    <?php endif; ?>
                    </ul>
                </nav>
                <?php endif; // $max_pages > 1 ?>

            <?php else : ?>
                <p>現在、新着情報はありません。</p>
            <?php endif; ?>

            </section>
        </div><!-- /#contents -->
<?php get_footer(); ?>