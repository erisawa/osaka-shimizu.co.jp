<?php
/**
 * Template Name: 中途採用募集要項詳細ページ
 * Description: 中途採用募集要項詳細ページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <h1 class="recruit-heading">
                <span class="page-heading-ja">採用情報</span>
                <span class="page-heading-en en">RECRUIT</span>
                <span class="heading_decor scroll-r" aria-hidden="true"></span>
            </h1>
        </header>
        <div id="contents" class="contents-recruit--midcareer">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>

            <!-- ▼ 募集要項 詳細エリア -->
            <div class="contents_inner_s">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
        // ▼ カスタムフィールド取得（適宜フィールド名を合わせてください）
        $job_description = get_field( 'job_description' ); // 職務内容
        $salary_main     = get_field( 'salary' );     // 給与（必須）
        $salary_note     = get_field( 'salary_note' );     // 給与の補足
        $probation       = get_field( 'trial_training' );  // 試用・研修
        $benefits        = get_field( 'benefits' );        // 待遇・福利厚生
        $location        = get_field( 'work_location' );   // 勤務地
        $access          = get_field( 'access' );          // アクセス
        $requirements    = get_field( 'requirements' );    // 応募資格
        $working_hours   = get_field( 'working_hours' );   // 勤務時間
        $holidays        = get_field( 'holidays' );        // 休日休暇
        $job_position = get_field( 'job_position' );       // 職種
        $exam_content    = get_field( 'exam_content' );    // 試験内容
        $card_image   = my_recruit_card_image( $job_position );
        ?>

        <section class="recruit-detail">

          <!-- タイトルまわり -->
          <header class="recruit-detail__head">

            <div class="recruit-detail__head-main">
              <div class="recruit-detail__head-text">
                <span class="recruit-detail__label">中途採用</span>
                <h1 class="recruit-detail__title"><?php the_title(); ?></h1>
              </div>

              <?php if ( has_post_thumbnail() ) : ?>
                <figure class="recruit-detail__image">
                  <?php
                  // アイキャッチ画像（必要ならサイズ名を変更）
                  the_post_thumbnail( 'large', array(
                    'loading' => 'lazy',
                  ) );
                  ?>
                </figure>
              <?php endif; ?>
            </div>

            <!-- ▼ カード画像 -->
            <figure class="recruit-detail__card">
              <img
                    src="<?php echo esc_url( $card_image['src'] ); ?>"
                    alt="<?php echo esc_attr( $card_image['alt'] ); ?>"
                    width="320"
                    height="475"
                />
            </figure>

          </header>

          <!-- 募集要項 本文 -->
          <section class="recruit-detail__section">
            <header class="section-header">
              <h2>募集要項</h2>
            </header>

            <!-- テーブル（募集要項） -->
            <table class="recruit-detail__table c-table">
              <tbody>

                <!-- 募集職種：タイトルをそのまま使用 -->
                <tr>
                  <th>募集職種</th>
                  <td><?php the_title(); ?></td>
                </tr>

                <!-- 職務内容：値があれば表示 -->
                <?php if ( ! empty( $job_description ) ) : ?>
                  <tr>
                    <th>職務内容</th>
                    <td><?php echo nl2br( esc_html( $job_description ) ); ?></td>
                  </tr>
                <?php endif; ?>

                <!-- 給与：必須想定 -->
                <?php if ( ! empty( $salary_main ) ) : ?>
                  <tr>
                    <th>給与</th>
                    <td>
                      <div class="recruit-detail__strong">
                        <?php echo nl2br( esc_html( $salary_main ) ); ?>
                      </div>
                      <?php if ( ! empty( $salary_note ) ) : ?>
                        <?php echo nl2br( esc_html( $salary_note ) ); ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                <?php endif; ?>

                <!-- 試用・研修 -->
                <?php if ( ! empty( $probation ) ) : ?>
                  <tr>
                    <th>試用・研修</th>
                    <td><?php echo nl2br( esc_html( $probation ) ); ?></td>
                  </tr>
                <?php endif; ?>

                <!-- 待遇・福利厚生 -->
                <?php if ( ! empty( $benefits ) ) : ?>
                  <tr>
                    <th>待遇・福利厚生</th>
                    <td><?php echo nl2br( esc_html( $benefits ) ); ?></td>
                  </tr>
                <?php endif; ?>

                <!-- 勤務地 -->
                <?php if ( ! empty( $location ) ) : ?>
                  <tr>
                    <th>勤務地</th>
                    <td><?php echo nl2br( esc_html( $location ) ); ?></td>
                  </tr>
                <?php endif; ?>

                <!-- アクセス -->
                <?php if ( ! empty( $access ) ) : ?>
                  <tr>
                    <th>アクセス</th>
                    <td><?php echo nl2br( esc_html( $access ) ); ?></td>
                  </tr>
                <?php endif; ?>

                <!-- 応募資格 -->
                <?php if ( ! empty( $requirements ) ) : ?>
                  <tr>
                    <th>応募資格</th>
                    <td><?php echo nl2br( esc_html( $requirements ) ); ?></td>
                  </tr>
                <?php endif; ?>

                <!-- 勤務時間 -->
                <?php if ( ! empty( $working_hours ) ) : ?>
                  <tr>
                    <th>勤務時間</th>
                    <td><?php echo nl2br( esc_html( $working_hours ) ); ?></td>
                  </tr>
                <?php endif; ?>

                <!-- 休日休暇 -->
                <?php if ( ! empty( $holidays ) ) : ?>
                  <tr>
                    <th>休日休暇</th>
                    <td><?php echo nl2br( esc_html( $holidays ) ); ?></td>
                  </tr>
                <?php endif; ?>
                
                <!-- 試験内容 -->
                <?php if ( ! empty( $exam_content ) ) : ?>
                  <tr>
                    <th>試験内容</th>
                    <td><?php echo nl2br( esc_html( $exam_content ) ); ?></td>
                  </tr>
                <?php endif; ?>

              </tbody>
            </table>

            <!-- エントリーフォームボタン -->
            <div class="recruit-detail__entry">
              <?php
              // 新卒エントリーページ（スラッグは実際のものに合わせてください）
              $entry_page = get_page_by_path( 'recruit/entry-midcareer' );
              if ( $entry_page ) :
                $entry_url = get_permalink( $entry_page );
              else :
                // 念のためのフォールバック
                $entry_url = home_url( '/recruit/entry-midcareer/' );
              endif;
              ?>
              <a href="<?php echo esc_url( $entry_url ); ?>" class="link_btn">
                <span class="link_btn_text">中途採用エントリーフォーム</span>
                <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                  <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                  <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                </svg>
              </a>
            </div>

          </section><!-- /.recruit-detail__section -->

        </section><!-- /.recruit-detail -->

      <?php endwhile; ?>
    <?php endif; ?>

  </div><!-- /.contents_inner_s -->

            <?php
            // 中途採用募集要項一覧
            get_template_part( 'template-parts/recruit-list-midcareer' );
            ?>

        </div><!-- /#contents -->
<?php get_footer(); ?>