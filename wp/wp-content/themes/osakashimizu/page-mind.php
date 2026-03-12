<?php
/**
 * Template Name: 企業理念
 * Description: 企業理念ページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">MIND IDENTITY</span>
                    <span class="page-heading-ja">企業理念</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-mind">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>
                
            <!-- 裏方ひとすじ -->
            <div class="contents_inner_s">
                <section id="sec-mind" class="mind-section">
                <header class="section-header">
                    <p class="section-en en">OUR CORPORATE MIND</p>
                    <h2 class="section-ja">裏方ひとすじ</h2>
                </header>

                <!-- 本文 -->
                <div class="section-body">
                    <div class="mind-block">
                        <div class="mind-text">
                            <p>私たちは、大阪ドームの開業を見据え1995年に株式会社シミズオクトの大阪支店として関西地区に誕生しました。</p>
                            <p>当社は、創業者・清水芳一の「裏方ひとすじ」の精神を受け継ぎ、スポーツ、エンタテインメント、展示会、イベントなど多様な業務に取り組んできました。運営や警備から会場設営まで、安全・安心・迅速を徹底し、質の高いサービスを提供しています。<br>
                            事業拡大と地域に根付いた企業を目指し、株式会社シミズオクト大阪支店から、2022年7月に分社化し株式会社大阪シミズとなりました。</p>
                        </div>
                        <figure class="mind-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mind/mind01.jpg" alt="創業者　清水 芳一" width="380" height="380" class="scroll-r">
                        </figure>
                    </div>
                    <div class="mind-block">
                        <div class="mind-text">
                            <p>野球やサッカー、国際陸上大会のようなスポーツイベント。<br>
                            音楽フェスやコンサートといった音楽イベント。<br>
                            博覧会をはじめとする、国際シンポジウム系のイベントなど。<br>
                            世界には本当に多彩なイベントが溢れています。</p>
                            <p><span>私たち大阪シミズは、</span><span>こうしたイベントに</span><span>欠かすことのできない</span><span>ステージの設営や演出のコントロール、</span><span>警備といった仕事を</span><span>日々ご提供しています。</span></p>
                        </div>
                        <figure class="mind-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mind/mind02.jpg" alt="" width="380" height="380" class="scroll-l">
                        </figure>
                    </div>
                    <div class="mind-block">
                        <div class="mind-text">
                            <p>さまざまなアーティストが輝き、<br>
                            多くの来場者とともに感動を生み出すステージ。<br>
                            その華々しい世界を「表」とするならば、<br>
                            <span>私たちの現場はまさに</span><span>「裏方」だと言えるでしょう。</span></p>
                            <p><span>私たちの誇りと心は、</span><span>常にこの「裏方」にあります。</span></p>
                        </div>
                        <figure class="mind-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mind/mind03.jpg" alt="" width="380" height="380" class="scroll-r">
                        </figure>
                    </div>
                    <div class="mind-block">
                        <div class="mind-text">
                            <p><span>主役であるアーティストや</span><span>クライアントのメッセージを</span><br>
                            <span>より強く、より魅力的に、</span><span>より感動的に発信する舞台をつくること。</span><br>
                            <span>彼らが安全に全力を尽くせる場を作ること。</span><br>
                            <span>来場される皆さんにとって、</span><span>より鮮烈な感動体験を生み出すこと。</span><br>
                            <span>そしてその感動のひと時が、</span><span>常に安全で安心なものであること。</span></p>
                            <p><span>大阪シミズの仕事は、</span><span>そうした「裏方」を支える仕事であり、</span><br>
                            私たちはそのプロフェッショナルであることに<br>
                            強い誇りを持っています。</p>
                        </div>
                        <figure class="mind-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mind/mind04.jpg" alt="" width="380" height="380" class="scroll-l">
                        </figure>
                    </div>
                    <div class="mind-block">
                        <div class="mind-text">
                            <p>シミズオクトグループが創業して90余年。<br>
                            私たちはこれまでも、そしてこれからも、<br>
                            「裏方ひとすじ」に研鑽を重ね<br>
                            より多くの感動体験の創出に努めて参ります。</p>
                        </div>
                        <figure class="mind-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mind/mind05.jpg" alt="" width="380" height="380" class="scroll-r">
                        </figure>
                    </div>
                </div>
                </section>
            </div>
        </div><!-- /#contents -->
<?php get_footer(); ?>