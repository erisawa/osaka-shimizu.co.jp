<?php
/**
 * パンくずテンプレート
 */
?>

<nav class="breadcrumb" aria-label="現在位置">
  <ol>
    <li><a href="<?php echo home_url( '/' ); ?>">トップページ</a></li>

    <?php
    // ▼ 404
    if ( is_404() ) : ?>
      <li aria-current="page">ページが見つかりません</li>

    <?php
    // ▼ 固定ページ
    elseif ( is_page() ) :

      // 親〜祖先ページをすべて取得（孫ページもOK）
      $ancestors = get_post_ancestors( get_the_ID() );

      if ( ! empty( $ancestors ) ) :
        // 上位（親→祖父…）から順に出す
        $ancestors = array_reverse( $ancestors );

        foreach ( $ancestors as $ancestor_id ) : ?>
          <li>
            <a href="<?php echo esc_url( get_permalink( $ancestor_id ) ); ?>">
              <?php echo esc_html( get_the_title( $ancestor_id ) ); ?>
            </a>
          </li>
        <?php endforeach;
      endif; ?>

      <li aria-current="page"><?php the_title(); ?></li>

    <?php
    // ▼ 投稿一覧（ブログの「新着情報」トップ）
    elseif ( is_home() || ( is_archive() && get_post_type() === 'post' ) ) : ?>

        <li aria-current="page">新着情報</li>

    <?php
    // ▼ 投稿の詳細
    elseif ( is_singular( 'post' ) ) : ?>

        <li><a href="<?php echo home_url( '/news/' ); ?>">新着情報</a></li>
        <li aria-current="page"><?php the_title(); ?></li>

    <?php
    // ▼ 採用：新卒・中途の詳細ページ（カスタム投稿）
    elseif ( is_singular( array( 'recruit_newgrad', 'recruit_midcareer' ) ) ) :

        $ptype = get_post_type(); ?>

        <li><a href="<?php echo home_url( '/recruit' ); ?>">採用情報</a></li>

        <?php if ( $ptype === 'recruit_newgrad' ) : ?>
          <li><a href="<?php echo home_url( '/recruit/recruit-newsnewgrad' ); ?>">新卒採用募集要項</a></li>
        <?php else : ?>
          <li><a href="<?php echo home_url( '/recruit/recruit-midcareer' ); ?>">中途採用募集要項</a></li>
        <?php endif; ?>

        <li aria-current="page"><?php the_title(); ?></li>

    <?php endif; ?>

  </ol>
</nav>