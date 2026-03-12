<?php
/**
 * Template Name: 採用情報扉ページ
 * Description: 採用情報扉ページ用テンプレート
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
        <div id="contents" class="contents-recruit">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>
                
            <div class="contents_inner_s">
                <p class="intro-text"><span>大阪シミズでは</span><span>常にさまざまな人材を</span><span>求めています。</span><br>
                <span>学生生活を通して</span><span>未来への夢と挑戦する力を</span><span>大きく育んだ皆さん。</span><br>
                <span>そして、社会経験を積み、</span><span>さまざまな分野の</span><span>即戦力として成長した皆さん。</span><br>
                <span>ぜひ私たちと一緒に新しいステージを</span><span>作り上げてください。</span></p>
            </div>
            <div class="recruit-front-main">
                <div class="contents_inner_s">
                    <section id="sec-new-graduate" class="recruit-section recruit-section--newgrad scroll">
                        <a href="<?php echo home_url('/recruit/recruit-newsnewgrad'); ?>">
                            <figure class="recruit-section__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/front_newgraduate.jpg" alt="" width="640" height="360">
                            </figure>

                            <div class="recruit-section__body">
                                <header class="section-header">
                                <h2 class="section-ja"><span>新卒</span>採用</h2>
                                <p class="section-en en">NEW GRADUATE<br>RECRUITMENT INFORMATIONS</p>
                                </header>

                                <div class="link_btn">
                                    <span class="link_btn_text">募集要項を見る</span>
                                    <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                    <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                    <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </section>

                    <!-- 中途採用 -->
                    <section id="sec-mid-career" class="recruit-section recruit-section--midcareer scroll">
                        <a href="<?php echo home_url('/recruit/recruit-midcareer'); ?>">
                            <figure class="recruit-section__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/front_midcareer.jpg" alt="" width="640" height="360">
                            </figure>

                            <div class="recruit-section__body">
                                <header class="section-header">
                                <h2 class="section-ja"><span>中途</span>採用</h2>
                                <p class="section-en en">MID-CAREER<br>RECRUITMENT INFORMATIONS</p>
                                </header>

                                <div class="link_btn">
                                    <span class="link_btn_text">募集要項を見る</span>
                                    <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                    <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                    <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="loop-slider-bg">
                    <div class="loop-slider-wrapper">
                        <ul class="loop-slider">
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card01.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card03.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card05.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card07.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card09.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card11.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                        </ul>
                        <ul class="loop-slider">
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card01.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card03.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card05.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card07.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card09.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card11.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                        </ul>
                    </div>
                    <div class="loop-slider-wrapper loop-slider-wrapper--reverse">
                        <ul class="loop-slider">
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card02.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card04.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card06.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card08.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card10.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                        </ul>
                        <ul class="loop-slider">
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card02.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card04.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card06.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card08.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                            <li class="loop-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_card10.jpg" alt="" width="240" height="356" loading="lazy" decoding="async">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /#contents -->
<?php get_footer(); ?>