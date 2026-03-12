<?php
/**
 * メインテンプレート
 * 
 * すべてのページの最後のフォールバックとして使われるテンプレートです。
 * front-page.php / page-*.php / single.php などが無い場合にこのファイルが呼ばれます。
 */

get_header(); ?>
  
<main id="main" class="site-main">
  <div class="contents_inner">

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

          <?php if ( is_singular() ) : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php else : ?>
            <h2 class="entry-title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

        </article>

      <?php endwhile; ?>

    <?php else : ?>

      <p>現在、表示できるコンテンツはありません。</p>

    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>