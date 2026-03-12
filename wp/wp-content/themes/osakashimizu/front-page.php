<?php
/**
 * トップページ
 */
get_header();
?>
        <div class="wrap_top_main">
            <div id="top_main">
                <div class="top_main_contents">
                    <div class="top_main_text">
                        <p><span class="top_main_text_block">舞台の裏側に</span><br>
                            <span class="top_main_text_block">私たちの</span><br>
                            <span class="top_main_text_block"><span class="top_main_text_strong"><span class="js-switch-text">情熱</span></span>がある</span></p>
                    </div>
                </div>
                <div class="top_info">
                    <h3 class="en">NEWS</h3>

                    <?php
                    // 最新1件を取得
                    $news_query = new WP_Query(array(
                        'post_type'      => 'post', // カスタム投稿なら変更
                        'posts_per_page' => 1,
                    ));
                    ?>

                    <?php if ( $news_query->have_posts() ) : ?>
                        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="top_info_link">
                                <div class="top_info_title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="top_info_date en">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </div>
                            </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <a href="<?php echo home_url('/news'); ?>" class="top_info_btn">
                        一覧を見る
                        <span class="top_info_btn_arrow01">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" aria-hidden="true">
                                <g fill="none" stroke="currentColor" stroke-width="1">
                                    <circle cx="13" cy="13" r="13" stroke="none"/>
                                    <circle cx="13" cy="13" r="12.5" fill="none"/>
                                </g>
                                <path d="M0,0H7.993V7.993" transform="translate(10.314 7.5) rotate(45)" fill="none" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="top_movie">
                <div class="top_movie">
                    <video
                        poster="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_movie_poster.jpg"
                        preload="metadata"
                        autoplay
                        loop
                        muted
                        playsinline
                    >
                        <!-- スマホ用（縦動画） -->
                        <source
                        src="<?php echo get_template_directory_uri(); ?>/assets/video/top_movie_sp.mp4?20260204"
                        type="video/mp4"
                        media="(orientation: portrait)"
                        >

                        <!-- PC用（横動画） -->
                        <source
                        src="<?php echo get_template_directory_uri(); ?>/assets/video/top_movie.mp4?20260204"
                        type="video/mp4"
                        media="(orientation: landscape)"
                        >
                    </video>
                </div>
            </div>
        </div>

        <div id="contents">
            <div id="top_company">
                <div class="fiximg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/bg.jpg" alt="" /></div>
                <div id="top_hitosuji">
                    <div class="scroll-l top_company_pic top_company_pic01">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic01.jpg" alt="" class="pic01-1" width="330" height="248" decoding="async">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic02.jpg" alt="" class="pic01-2" width="240" height="180" decoding="async">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic03.jpg" alt="" class="pic01-3" width="380" height="285" decoding="async">
                    </div>
                    <section class="top_company_text">
                        <div class="top_company_title">
                            <span class="h2_en en">OUR COMPANY</span>
                            <h2>裏方ひとすじ</h2>
                            <span class="h2_sub">BEHIND THE SCENES IS OUR LIFE.</span>
                        </div>
                        <p>イベントの主役はアーティストやクライアントの皆さまです。<br>
                            私たち大阪シミズはその輝きをより鮮烈に描き出すプロフェッショナル。意匠デザイン、照明、音響、運営、安全管理など。<br>
                            新しい発想と徹底した管理技術で、来場する皆さまにとって「今までにない感動体験」の実現を追求いたします。</p>
                        <div class="top_company_btn">
                            <ul>
                                <li class="scroll"><a href="<?php echo home_url('/mind'); ?>"><span class="top_company_btn_ttl">企業理念</span>MIND IDENTITY<span class="top_company_btn_arrow01"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="1"><circle cx="13" cy="13" r="13" stroke="none"/><circle cx="13" cy="13" r="12.5" fill="none"/></g><path d="M0,0H7.993V7.993" transform="translate(10.314 7.5) rotate(45)" fill="none" stroke="currentColor" stroke-width="2"/></svg></span></a></li>
                                <li class="scroll-2"><a href="<?php echo home_url('/outline'); ?>"><span class="top_company_btn_ttl">会社概要</span>OUTLINE<span class="top_company_btn_arrow01"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="1"><circle cx="13" cy="13" r="13" stroke="none"/><circle cx="13" cy="13" r="12.5" fill="none"/></g><path d="M0,0H7.993V7.993" transform="translate(10.314 7.5) rotate(45)" fill="none" stroke="currentColor" stroke-width="2"/></svg></span></a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="scroll-r top_company_pic top_company_pic02">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic04.jpg" alt="" class="pic02-1" width="380" height="285" decoding="async">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic05.jpg?260115" alt="" class="pic02-2" width="290" height="218" decoding="async">
                    </div>
                </div>
                <div class="mamo_gallery">
                    <div class="pic-mamo pic03-1" data-speed="-0.4">
                        <div class="balloon">
                            <p><span>イベントの企画や演出計画をご提案。</span><span>営業も兼ねる皆さまのパートナーです。</span></p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic06.jpg" alt="" decoding="async">
                    </div>
                    <div class="pic-mamo pic03-2" data-speed="-1.2">
                        <div class="balloon">
                            <p><span>設計と構造計算、そして申請まで。</span><span>お打ち合わせからワンストップでご提供します。</span></p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic07.jpg" alt="" decoding="async">
                    </div>
                    <div class="pic-mamo pic03-3" data-speed="-1.4">
                        <div class="balloon">
                            <p><span>蓄積したノウハウで</span><span>確実性の高い警備計画を</span><span>ご提案いたします。</span></p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic08.jpg" alt="" decoding="async">
                    </div>
                    <div class="pic-mamo pic03-4" data-speed="-0.8">
                        <div class="balloon">
                            <p><span>警備スタッフ、</span><span>アルバイトスタッフの人員計画と</span><span>確保もお任せいただけます。</span></p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_company_pic09.jpg" alt="" decoding="async">
                    </div>
                </div>
            </div>
            <section id="top_business">
                <div class="contents_inner_s">
                    <div class="top_business_lead">
                        <h2>
                            <span class="h2_ja">事業概要</span>
                            <span class="h2_en en">BUSINESS</span>
                            <span class="heading_decor scroll-r" aria-hidden="true"></span>
                        </h2>
                        <p>大阪シミズはライブや展示会、スポーツイベント、その他あらゆるイベントのプランニング、設計、制作、運営、警備など開催・運営に必要となるすべてのモノ・コトをご提供しています。</p>
                    </div>
                </div>
                <!-- Slider main container -->
                <div class="top_business_slide">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper ">
                        <!-- Slides -->
                        
                        <div class="swiper-slide">
                            <div class="swiper-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_business_pic01.jpg" alt="" width="960" height="540">
                            </div>
                            <div class="swiper-catch">
                                <div class="swiper-catch-inner">
                                    <div class="top_business_slide_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon01.png" width="64" height="65"/>
                                    </div>
                                    <div class="top_business_slide_txt">
                                        <h3>設計</h3>
                                        <p>会場の設計・デザインを通して主催者の想いを形にする専門事業。構造美はもちろん、構造計算等で見えない安心もともに実現します。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_business_pic02.jpg" width="960" height="540" />
                            </div>
                            <div class="swiper-catch">
                                <div class="swiper-catch-inner">
                                    <div class="top_business_slide_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon02.png" width="64" height="65"/>
                                    </div>
                                    <div class="top_business_slide_txt">
                                        <h3>資材管理</h3>
                                        <p>会場設営で使用するすべての資機材調達、管理、安全性能維持のためのメンテナンス、そして現場での資材搬入出を担当。安全イベントの根幹を担います。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_business_pic03.jpg" alt="">
                            </div>
                            <div class="swiper-catch">
                                <div class="swiper-catch-inner">
                                    <div class="top_business_slide_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon03.png" width="64" height="65"/>
                                    </div>
                                    <div class="top_business_slide_txt">
                                        <h3>製作</h3>
                                        <p>会場を彩る造形物製作のスペシャリスト。機構装置、木材造形、そして印刷まで。幅広い製作技術とテクニックで多彩な製作を担当します。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_business_pic04.jpg" />
                            </div>
                            <div class="swiper-catch">
                                <div class="swiper-catch-inner">
                                    <div class="top_business_slide_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon04.png" width="64" height="65"/>
                                    </div>
                                    <div class="top_business_slide_txt">
                                        <h3>施工</h3>
                                        <p>施工から撤去まで、会場設営の実務中核を担当。作業ノウハウはもちろん、安全とスピードを常に意識したプロフェッショナルです。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_business_pic05.jpg" />
                            </div>
                            <div class="swiper-catch">
                                <div class="swiper-catch-inner">
                                    <div class="top_business_slide_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon05.png" width="64" height="65"/>
                                    </div>
                                    <div class="top_business_slide_txt">
                                        <h3>営業</h3>
                                        <p>主催側との窓口役。コンセプトやマインドを共有し、イベント全体のディレクションと予算管理を担当。クライアントの声をしっかりと現場にお伝えします。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_business_pic06.jpg" />
                            </div>
                            <div class="swiper-catch">
                                <div class="swiper-catch-inner">
                                    <div class="top_business_slide_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon06.png" width="64" height="65"/>
                                    </div>
                                    <div class="top_business_slide_txt">
                                        <h3>運営</h3>
                                        <p>アルバイトや警備等の手配を担当。事前教育や当日の運営、スタッフ指揮も行い、イベントのスムーズかつ安全な運営を牽引します。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_business_pic07.jpg" />
                            </div>
                            <div class="swiper-catch">
                                <div class="swiper-catch-inner">
                                    <div class="top_business_slide_icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon07.png" width="64" height="65"/>
                                    </div>
                                    <div class="top_business_slide_txt">
                                        <h3>警備</h3>
                                        <p>イベントの安全を守るプロフェッショナル。出演者と来場者双方の安全を守ります。スタッフの教育、配置計画立案、そして実務までワンストップでご提供いたします。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination
                    <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="top_business_btn">
                    <a href="<?php echo home_url('/business'); ?>" class="link_btn"><span class="link_btn_text">事業概要</span>
                       <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/>
                        <path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/>
                        </svg>
                    </a>
                </div>
            </section>
            <div class="loop-slider-wrapper">
                <ul class="loop-slider">
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop01.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop02.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop03.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop04.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>

                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop05.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop06.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop07.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop08.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop09.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop10.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                </ul>
                <ul class="loop-slider">
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop01.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop02.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop03.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop04.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>

                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop05.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop06.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop07.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop08.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop09.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                    <li class="loop-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/loop10.jpg" alt="" width="300" height="200" loading="lazy" decoding="async">
                    </li>
                </ul>
            </div>
            <section id="top_recruit">
                <div class="top_recruit_title">
                    <div class="contents_inner_s top_recruit_title_balloon">
                        <div class="balloon scroll">
                            <p><span>失敗しても、間違えても、全然OK！</span><span>感動のステージを</span><span>一緒に作ってください！</span></p>
                        </div>
                    </div>
                    <h2>
                        <span class="h2_ja">採用情報</span>
                        <span class="h2_en en">RECRUIT</span>
                        <span class="heading_decor scroll-r" aria-hidden="true"></span>
                    </h2>
                </div>
                <section class="top_recruit01">
                    <div class="wrap_top_recruit_box">
                        <div class="top_recruit_header">
                            <div class="balloon top_recruit_header_comment scroll">
                                <p><span>「サラリーマン」ではなく</span><span>「プロ」と名乗れる職場です</span></p>
                            </div>
                            <span class="top_recruit_header_en en">NEW GRADUATE<br>RECRUITMENT INFORMATIONS</span>
                        </div>
                        <div class="top_recruit_box">
                            <h3><span>新卒</span>採用</h3>
                            <?php
                            // 新卒採用 募集要項スライダー
                            $recruit_args = array(
                            'post_type'      => 'recruit_newgrad', // 新卒用カスタム投稿タイプ
                            'posts_per_page' => 8,                 // 最大件数（必要に応じて調整）
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                            );
                            $recruit_query = new WP_Query( $recruit_args );
                            ?>

                            <?php if ( $recruit_query->have_posts() ) : ?>
                            <div class="top_recruit_box_slide">
                            <div class="top_recruit_slide top_recruit_slide01">
                                <div class="swiper-wrapper">

                                <?php while ( $recruit_query->have_posts() ) : $recruit_query->the_post(); ?>
                                    <?php
                                    // 職種コード（例：jp_space_designer など）
                                    $job_position = get_field( 'job_position' );
                                    $card_image   = my_recruit_card_image( $job_position );

                                    // 短い紹介文（カスタムフィールド excerpt_short）
                                    $excerpt_short = get_field( 'excerpt_short' );
                                    ?>

                                    <div class="swiper-slide">
                                    <div class="card">

                                        <!-- 表面：職種カード画像 -->
                                        <div class="card-front">
                                            <a href="<?php the_permalink(); ?>" class="card-front-link swiper-no-swiping">
                                                <img
                                                        src="<?php echo esc_url( $card_image['src'] ); ?>"
                                                        alt="<?php echo esc_attr( $card_image['alt'] ); ?>"
                                                        width="320"
                                                        height="475"
                                                    />
                                            </a>
                                        </div>

                                        <!-- 裏面：詳細テキスト -->
                                        <div class="card-back">
                                        <a href="<?php the_permalink(); ?>" class="card-back-link swiper-no-swiping">
                                        <figure>
                                            <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'large' ); ?>
                                            <?php else : ?>
                                            <img
                                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/index/top_business_pic01.jpg' ); ?>"
                                                alt=""
                                            />
                                            <?php endif; ?>
                                        </figure>

                                        <div class="card-back-text">
                                            <span class="recruit_slide_label">新卒採用</span>

                                            <h4><?php the_title(); ?></h4>

                                            <?php if ( $excerpt_short ) : ?>
                                            <p><?php echo esc_html( $excerpt_short ); ?></p>
                                            <?php endif; ?>

                                            <time
                                            class="time en"
                                            datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"
                                            >
                                            <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
                                            </time>
                                        </div>
                                        </a>
                                        </div>

                                    </div>
                                    </div>
                                <?php endwhile; wp_reset_postdata(); ?>

                                </div><!-- /.swiper-wrapper -->

                                <div class="swiper-pagination"></div>
                            </div><!-- /.top_recruit_slide -->
                            </div><!-- /.top_recruit_box_slide -->
                            <?php else : ?>
                            <p class="top_recruit_none">現在、募集はありません。</p>
                            <?php endif; ?>
                        </div>
                        <div class="top_recruit_btn"><a href="<?php echo home_url('/recruit/recruit-newsnewgrad'); ?>" class="link_btn"><span class="link_btn_text">新卒採用情報はこちら</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/>
                        <path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/>
                        </svg></a></div>
                    </div>
                </section>
                <section class="top_recruit02">
                    <div class="wrap_top_recruit_box">
                        <div class="top_recruit_header">
                            <div class="balloon top_recruit_header_comment scroll">
                                <p><span>舞台も人生も、</span><span>しっかり設計できる職場です</span></p>
                            </div>
                            <span class="top_recruit_header_en en">MID-CAREER<br>RECRUITMENT INFORMATIONS</span>
                        </div>
                        <div class="top_recruit_box">
                            <h3><span>中途</span>採用</h3>
                            <?php
                            // 中途採用 募集要項スライダー
                            $recruit_args = array(
                            'post_type'      => 'recruit_midcareer', // 中途用カスタム投稿タイプ
                            'posts_per_page' => 8,                 // 最大件数（必要に応じて調整）
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                            );
                            $recruit_query = new WP_Query( $recruit_args );
                            ?>

                            <?php if ( $recruit_query->have_posts() ) : ?>
                            <div class="top_recruit_box_slide">
                            <div class="top_recruit_slide top_recruit_slide01">
                                <div class="swiper-wrapper">

                                <?php while ( $recruit_query->have_posts() ) : $recruit_query->the_post(); ?>
                                    <?php
                                    // 職種コード（例：jp_space_designer など）
                                    $job_position = get_field( 'job_position' );
                                    $card_image   = my_recruit_card_image( $job_position );

                                    // 短い紹介文（カスタムフィールド excerpt_short）
                                    $excerpt_short = get_field( 'excerpt_short' );
                                    ?>

                                    <div class="swiper-slide">

                                        <?php
                                        $job_position  = get_field('job_position');   // ACF（値）
                                        $excerpt_short = get_field('excerpt_short');  // 紹介文
                                        $front_meta    = my_recruit_midcareer_front_meta( $job_position );
                                        $front_title   = $front_meta['title'];
                                        ?>

                                        <article>
                                            <div class="card" data-card role="button" tabindex="0" aria-expanded="false">

                                                <!-- 表面 -->
                                                <div class="card-front" aria-hidden="false">
                                                    <a href="<?php the_permalink(); ?>" class="card-front-link swiper-no-swiping">
                                                        <div class="card-front-ttl">
                                                            <span class="recruit_slide_label">中途採用</span>
                                                            <h4><?php echo esc_html( $front_title ); ?></h4>
                                                        </div>

                                                        <ul class="card-front-list">
                                                            <?php foreach ( (array) $front_meta['list'] as $item ) : ?>
                                                            <li><?php echo esc_html( $item ); ?></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <!-- 裏面 -->
                                                <div class="card-back" aria-hidden="true">
                                                <a href="<?php the_permalink(); ?>" class="swiper-no-swiping">
                                                    <figure>
                                                    <?php if ( has_post_thumbnail() ) : ?>
                                                        <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.png" alt="">
                                                    <?php endif; ?>
                                                    </figure>

                                                    <div class="card-back-text">
                                                    <span class="recruit_slide_label">中途採用</span>
                                                    <h4><?php echo esc_html( $front_title ); ?></h4>

                                                    <?php if ( $excerpt_short ) : ?>
                                                        <p><?php echo esc_html( $excerpt_short ); ?></p>
                                                    <?php endif; ?>

                                                    <time class="time" datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>">
                                                        <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                                                    </time>
                                                    </div>
                                                </a>
                                                </div>

                                            </div>
                                        </article>
                                    </div>
                                <?php endwhile; wp_reset_postdata(); ?>

                                </div><!-- /.swiper-wrapper -->

                                <div class="swiper-pagination"></div>
                            </div><!-- /.top_recruit_slide -->
                            </div><!-- /.top_recruit_box_slide -->
                            <?php else : ?>
                            <p class="top_recruit_none">現在、募集はありません。</p>
                            <?php endif; ?>
                        </div>
                        <div class="top_recruit_btn"><a href="<?php echo home_url('/recruit/recruit-midcareer'); ?>" class="link_btn"><span class="link_btn_text">中途採用情報はこちら</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/>
                        <path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/>
                        </svg></a></div>
                    </div>
                </section>
                <section class="top_recruit03">
                    <div class="wrap_top_recruit_box">
                        <div class="top_recruit_benefits_title">
                            <div class="balloon top_recruit_header_comment scroll">
                                <p><span>自分も大事にしながら</span><span>働きたいよね！</span></p>
                            </div>
                            <h3>福利厚生</h3>
                            <span class="top_recruit_header_en en">EMPLOYEE BENEFITS</span>
                        </div>
                        <div class="top_recruit_benefits_text">
                            <h4>安心して働く。<br>未来を描く。</h4>
                            <p>安心して働くことができるか。 そして、未来を描くことができるか。 福利厚生は、皆さんの毎日や未来にとっての「安心の種」にほかなりません。 大阪シミズは「裏方」として、その魅力的な人生を支える福利厚生をご用意しています。</p>
                            <div class="pc"><a href="<?php echo home_url('/employee-benefits'); ?>" class="link_btn"><span class="link_btn_text">福利厚生</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/>
                        <path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/>
                        </svg></a></div>
                        </div>
                        <div class="top_recruit_benefits_pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_recruit_benefits_pic01.jpg" alt="" class="top_recruit_benefits_pic01 scroll-r" width="360" height="275" loading="lazy">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/top_recruit_benefits_pic02.jpg" alt="" class="top_recruit_benefits_pic02 scroll-r" width="280" height="216" loading="lazy" decoding="async">
                        </div>
                        <div class="top_recruit_btn sp"><a href="<?php echo home_url('/employee-benefits'); ?>" class="link_btn"><span class="link_btn_text">福利厚生</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/>
                        <path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/>
                        </svg></a></div>
                    </div>
                </section>
            </section>
        </div>
<?php get_footer(); ?>