<?php
/**
 * Template Name: 中途採用募集要項
 * Description: 中途採用募集要項用テンプレート
 */
get_header();
?>
        <div class="page-heading">
            <div class="recruit-heading">
                <span class="page-heading-ja">採用情報</span>
                <span class="page-heading-en en">RECRUIT</span>
                <span class="heading_decor scroll-r" aria-hidden="true"></span>
            </div>
        </div>
        <div id="contents" class="contents-recruit--midcareer">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>          
            </div>

            <div class="recruit-intro-outer">
                <div class="contents_inner">
                    <div class="recruit-intro-wrap">
                        <div class="recruit-intro-text">
                            <header class="recruit-page-title">
                                <h1>
                                    <span class="recruit-page-title-ja"><span>中途</span>採用</span>
                                    <span class="recruit-page-title-en en">MID-CAREER RECRUITMENT INFORMATIONS</span>
                                </h1>
                            </header>
                            <p class="intro-text">
                                株式会社大阪シミズでは一年を通してさまざまな業種の中途採用を行っています。<br>
                                「イベントの仕事」と考えると、多くの方々が「経験がないから」と敬遠しがちです。<br>
                                しかし、実は建築やCAD、フォークリフトなど、皆さんがお持ちのスキルを活かすことができるお仕事がたくさんあります。<br>
                                ぜひ募集要項をご一読いただき、自分のスキルが活かせると感じた方はご応募ください。
                            </p>
                        </div>
                    </div>
                </div>
                <figure class="recruit-intro-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/midcareer-main.jpg" alt="" width="650" height="400">
                </figure>
            </div>

            <?php
            // 中途採用募集要項一覧
            get_template_part( 'template-parts/recruit-list-midcareer' );
            ?>

        </div><!-- /#contents -->
<?php get_footer(); ?>