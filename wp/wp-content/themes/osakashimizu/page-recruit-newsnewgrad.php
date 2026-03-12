<?php
/**
 * Template Name: 新卒採用募集要項
 * Description: 新卒採用募集要項用テンプレート
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
        <div id="contents" class="contents-recruit--newgrad">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>          
            </div>

            <div class="recruit-intro-outer">
                <div class="contents_inner">
                    <div class="recruit-intro-wrap">
                        <div class="recruit-intro-text">
                            <header class="recruit-page-title">
                                <h1>
                                    <span class="recruit-page-title-ja"><span>新卒</span>採用</span>
                                    <span class="recruit-page-title-en en">NEW GRADUATE RECRUITMENT INFORMATIONS</span>
                                </h1>
                            </header>
                            <p class="intro-text">
                                2026年3月に大学・専門学校を卒業予定の方に向けた募集要項を掲載します。<br>
                                株式会社大阪シミズは、さまざまなイベントの設営から運営までを支える「裏方のプロ」。<br>
                                営業職種から舞台美術系、設計系、そして施工や警備など、イベントに必要な各業種のプロとして一緒に働いてくれる仲間を求めています。<br>
                                興味がある職種がありましたら、ぜひお問い合わせ・エントリーをお願いいたします。
                            </p>
                        </div>
                    </div>
                </div>
                <figure class="recruit-intro-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/newgrad-main.jpg" alt="" width="650" height="400">
                </figure>
            </div>
            <div class="contents_inner">
                <section class="recruit-section-message c-box">
                    <h2><span>大学・専門学校等の</span><span>就職支援ご担当者さまへ</span></h2>
                    <p>
                        株式会社大阪シミズでは各大学・専門学校のご担当者さまからの、就職についてのご相談や企業説明などのご依頼を随時お受けしています。<br>
                        グループ創業90余年。私たちはこれまで数え切れないほどのイベントの設営・運営を手掛けてきました。イベントには若い力と、柔軟な発想力が不可欠です。私たちの仕事の魅力を学生にご理解いただくため、ぜひお力添えをお願いいたします。 
                    </p>
                    <p><a href="<?php echo home_url('/contact'); ?>" class="link-with-icon">学校のご担当者さまからのご依頼やご相談についてはこちら</a></p>
                </section>
            </div>

            <?php
            // 新卒者向け募集要項一覧
            get_template_part( 'template-parts/recruit-list-newgrad' );
            ?>

        </div><!-- /#contents -->
<?php get_footer(); ?>