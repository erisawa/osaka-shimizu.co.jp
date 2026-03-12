<?php
/**
 * 中途採用募集要項
 */
?>
            <section class="recruit-section-details color-section">
                <div class="contents_inner">
                    <header class="section-header">
                    <p class="section-en en">RECRUITMENT DETAILS</p>
                    <h2 class="section-ja">中途採用募集要項</h2>
                    </header>

                    <?php
                    // ▼ 新卒採用（recruit_newgrad）の募集要項一覧を取得
                    $args = array(
                        'post_type'      => 'recruit_midcareer',
                        'posts_per_page' => -1,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                    );

                    $recruit_query = new WP_Query( $args );

                    if ( $recruit_query->have_posts() ) : ?>
                    <div class="recruit-card-list">
                    <?php while ( $recruit_query->have_posts() ) :
                        $recruit_query->the_post();

                        // カスタムフィールド
                        $salary         = get_field( 'salary' );       // 給与
                        $excerpt_short  = get_field( 'excerpt_short' );     // 紹介文
                        $job_position = get_field( 'job_position' ); // 職種
                        $card_image   = my_recruit_card_image( $job_position );
                        ?>
                        <article class="recruit-card">

                            <!-- 表面 -->
                            <div class="card-front">
                                <figure>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail(
                                    'large',
                                    array(
                                        'alt' => get_the_title(),
                                    )
                                    ); ?>
                                <?php else : ?>
                                    <!-- アイキャッチ未設定時のフォールバック（任意） -->
                                    <img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.png"
                                    alt=""
                                    >
                                <?php endif; ?>
                                </figure>

                                <span class="recruit-card__label">中途採用</span>

                                <h3 class="recruit-card__title">
                                <?php the_title(); ?>
                                </h3>

                                <?php if ( $salary ) : ?>
                                <p class="recruit-card__salary">
                                    <span class="salary-label">給与</span>
                                    <span class="salary-value en">
                                    <?php echo esc_html( $salary ); ?>
                                    </span>
                                </p>
                                <?php endif; ?>

                                <?php if ( $excerpt_short ) : ?>
                                <p class="recruit-card__desc">
                                    <?php echo esc_html( $excerpt_short ); ?>
                                </p>
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>" class="link_btn">
                                <span class="link_btn_text">詳しく見る</span>
                                <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                    <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                    <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                </svg>
                                </a>
                            </div>

                            <!-- 裏面 -->
                            <div class="card-back">
                                <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/card-back.png"
                                    alt=""
                                    width="320"
                                    height="475"
                                    />
                                </figure>

                                <div class="link_btn">
                                    <span class="link_btn_text">詳しく見る</span>
                                    <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                    <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                    <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                    </svg>
                                </div>
                                </a>
                            </div>

                        </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();?>
                    </div>
                   <?php else :
                        // 募集要項がまだない場合の表示（必要なら）
                        ?>
                        <p class="recruit-card__empty">現在、募集はありません。</p>
                    <?php endif; ?>
                    </div>
                </div>
            </section>