<?php
/**
 * Template Name: 固定ページ（デフォルト）
 * Description: デフォルトページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-ja"><?php the_title(); ?></span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-policy contents-default">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>

            <section class="contents_inner_s">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                    the_content();
                    endwhile;
                endif;
                ?>
            </section>
        </div><!-- /#contents -->
<?php get_footer(); ?>