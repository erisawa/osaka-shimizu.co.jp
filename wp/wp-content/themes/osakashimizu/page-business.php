<?php
/**
 * Template Name: 事業概要
 * Description: 事業概要ページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">BUSINESS</span>
                    <span class="page-heading-ja">事業概要</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-business">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
                <!-- アンカーリンク（ページ内リンク） -->
                <p class="intro-text">大阪シミズの事業についてご紹介いたします。</p>
                <nav class="outline-nav" aria-label="ページ内ナビゲーション">
                    <ul>
                        <li><a href="#sec-company" class="link_btn"><span class="link_btn_text">裏方ひとすじ</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                        <li><a href="#sec-event-venue" class="link_btn"><span class="link_btn_text">主なイベント会場</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                        <li><a href="#sec-business" class="link_btn"><span class="link_btn_text">事業紹介</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                    </ul>
                </nav>
            </div>

            <!-- イベントの裏方ひとすじ -->
            <section id="sec-company" class="company-section color-section">
                <div class="contents_inner">
                    <header class="section-header">
                        <p class="section-en en">OUR COMPANY</p>
                        <h2 class="section-ja"><span>イベントの</span><span>裏方ひとすじ</span></h2>
                    </header>

                    <!-- 本文 -->
                    <div class="section-body">
                        <p>
                        私たちが関わる「イベント」には、<br>
                        <span>非常に多くのプロの専門業者が</span><span>関わっています。</span></p>
                        <p>
                        たとえば、ステージに立つアーティストや、<br>
                        その興行企画やプロモートを行う方々がいます。<br>
                        <span>演出のプロがいて、</span><span>音響やライティングのプロがいます。</span><br>
                        <span>その他にも本当にたくさんの</span><span>プロフェッショナルが関わっています。</span></p>
                        <p>
                        <span>そして、私たち大阪シミズも</span><span>イベントを支えるプロの一社。</span></p>
                        <p>
                        ステージの設計・施工。<br>
                        サイン関連の製作。<br>
                        安全第一を考えた警備。<br>
                        そして、これらの業務を支えるための各種業務。</p>
                        <p>
                        <span>私たち大阪シミズは、</span><span>グループ創業から90余年もの間、</span><br>
                        <span>「裏方ひとすじ」を歩み続ける</span><span>「裏方業務のプロ」なのです。</span></p>
                        </p>
                    </div>
                </div>
            </section>

            <!-- 主なイベント会場 -->
            <section id="sec-event-venue" class="event-venue-section">
                <div class="contents_inner">
                    <div class="event-venue-section">
                        <div class="section-header-wrap">
                            <header class="section-header">
                                <p class="section-en en">EVENT VENUE</p>
                                <h2 class="section-ja">主なイベント会場</h2>
                                <p class="section-lead">大阪シミズはこれまでさまざまなイベントの会場設営・運営を行ってきました。<br>
                                その数はまさに数え切れないくらいです。<br>
                                ここでは主に会場設営・運営を行っている施設をご紹介いたします。</p>
                            </header>
                            <div class="section-header-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/event-venue.jpg" alt="イベント会場のイメージ" width="640" height="240" />
                            </div>
                        </div>
                        

                        <!-- 本文 -->
                        <div class="section-body">
                            <div class="event-venue-section">
                                <div class="venue-block">
                                    <h3>大阪府</h3>
                                    <ul>
                                        <li>Asueアリーナ大阪</li>
                                        <li>インテックス大阪</li>
                                        <li>靭公園</li>
                                        <li>エディオンアリーナ大阪（大阪府立体育会館）</li>
                                        <li>おおきにアリーナ舞洲</li>
                                        <li>大阪城ホール</li>
                                        <li>大阪中之島美術館</li>
                                        <li>オリックス劇場</li>
                                        <li>京セラドーム大阪</li>
                                        <li>Zepp Osaka Bayside</li>
                                        <li>Zepp Namba（OSAKA）</li>
                                        <li>Panasonic Stadium Suita</li>
                                        <li>万博記念公園</li>
                                        <li>東大阪市花園ラグビー場</li>
                                        <li>フェスティバルホール</li>
                                        <li>BOAT RACE 住之江</li>
                                        <li>ヤンマースタジアム長居（大阪市長居陸上競技場）</li>
                                    </ul>
                                </div>
                                <div class="venue-block">
                                    <h3>兵庫県</h3>
                                    <ul>
                                        <li>GLION ARENA KOBE</li>
                                        <li>ノエビアスタジアム神戸</li>
                                        <li>阪神競馬場</li>
                                        <li>阪神甲子園球場</li>
                                        <li>ブルボンビーンズドーム（兵庫県立三木総合防災公園屋内テニス場）</li>
                                        <li>ほっともっとフィールド神戸（神戸総合運動公園野球場）</li>
                                        <li>ワールド記念ホール（神戸ポートアイランドホール）</li>
                                    </ul>
                                </div>
                                <div class="venue-block">
                                    <h3>京都府</h3>
                                    <ul>
                                        <li>梅小路公園</li>
                                        <li>京都競馬場</li>
                                        <li>京都劇場</li>
                                        <li>サンガスタジアム by KYOCERA（京都府立京都スタジアム）</li>
                                    </ul>
                                </div>
                                <div class="venue-block">
                                    <h3>奈良県</h3>
                                    <ul>
                                        <li>キトラ古墳壁画体験館 四神の館</li>
                                        <li>国営飛鳥歴史公園</li>
                                        <li>なら100年会館</li>
                                    </ul>
                                </div>
                                <div class="venue-block">
                                    <h3>その他</h3>
                                    <ul>
                                        <li>サンドーム福井（福井県産業振興施設）</li>
                                        <li>鳴門・大塚スポーツパーク ポカリスエットスタジアム（徳島県鳴門総合運動公園陸上競技場）</li>
                                        <li>和歌山ビッグホエール</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 事業紹介 -->
            <section id="sec-business" class="business-section color-section">
                <div class="contents_inner">
                    <header class="section-header">
                        <p class="section-en en">BUSINESS</p>
                        <h2 class="section-ja">事業紹介</h2>
                    </header>

                    <!-- 本文 -->
                    <div class="section-body">

                        <div class="business-list">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-front">
                                            <figure>
                                                <a href="#biz01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card01.jpg" alt="設計" width="320" height="475" /></a>
                                            </figure>
                                        </div>
                                        <div class="card-back">
                                            <a href="#biz01">
                                                <figure>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/card-back.png" alt="" width="320" height="475" />
                                                </figure>
                                                <div class="card-btn">
                                                    <p>設計</p>
                                                    <div class="link_btn">
                                                        <span class="link_btn_text">詳しく見る</span>
                                                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-front">
                                            <figure>
                                                <a href="#biz02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card02.jpg?2603" alt="資材管理" width="320" height="475" /></a>
                                            </figure>
                                        </div>
                                        <div class="card-back">
                                            <a href="#biz02">
                                                <figure>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/card-back.png" alt="" width="320" height="475" />
                                                </figure>
                                                <div class="card-btn">
                                                    <p>資材管理</p>
                                                    <div class="link_btn">
                                                        <span class="link_btn_text">詳しく見る</span>
                                                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-front">
                                            <figure>
                                                <a href="#biz03"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card03.jpg" alt="製作" width="320" height="475" /></a>
                                            </figure>
                                        </div>
                                        <div class="card-back">
                                            <a href="#biz03">
                                                <figure>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/card-back.png" alt="" width="320" height="475" />
                                                </figure>
                                                <div class="card-btn">
                                                    <p>製作</p>
                                                    <div class="link_btn">
                                                        <span class="link_btn_text">詳しく見る</span>
                                                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-front">
                                            <figure>
                                                <a href="#biz04"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card04.jpg" alt="施工" width="320" height="475" /></a>
                                            </figure>
                                        </div>
                                        <div class="card-back">
                                            <a href="#biz04">
                                                <figure>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/card-back.png" alt="" width="320" height="475" />
                                                </figure>
                                                <div class="card-btn">
                                                    <p>施工</p>
                                                    <div class="link_btn">
                                                        <span class="link_btn_text">詳しく見る</span>
                                                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-front">
                                            <figure>
                                                <a href="#biz05"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card05.jpg?2603" alt="" width="320" height="475" /></a>
                                            </figure>
                                        </div>
                                        <div class="card-back">
                                            <a href="#biz05">
                                                <figure>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/card-back.png" alt="営業" width="320" height="475" />
                                                </figure>
                                                <div class="card-btn">
                                                    <p>営業</p>
                                                    <div class="link_btn">
                                                        <span class="link_btn_text">詳しく見る</span>
                                                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-front">
                                            <figure>
                                                <a href="#biz06"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card06.jpg?2603" alt="" width="320" height="475" /></a>
                                            </figure>
                                        </div>
                                        <div class="card-back">
                                            <a href="#biz06">
                                                <figure>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/card-back.png" alt="運営" width="320" height="475" />
                                                </figure>
                                                <div class="card-btn">
                                                    <p>運営</p>
                                                    <div class="link_btn">
                                                        <span class="link_btn_text">詳しく見る</span>
                                                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-front">
                                            <figure>
                                                <a href="#biz07"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card07.jpg" alt="" width="320" height="475" /></a>
                                            </figure>
                                        </div>
                                        <div class="card-back">
                                            <a href="#biz07">
                                                <figure>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/card-back.png" alt="警備" width="320" height="475" />
                                                </figure>
                                                <div class="card-btn">
                                                    <p>警備</p>
                                                    <div class="link_btn">
                                                        <span class="link_btn_text">詳しく見る</span>
                                                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                                                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                                                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <!-- 設計事業 -->
                        <section class="business-detail" id="biz01">
                            <!-- タイトル -->
                            <header class="business-detail__head">
                                <h3 class="business-detail__head-title">
                                    <span class="business-detail__icon" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon01.png">
                                    </span>
                                    <span class="business-detail__head-text">設計事業</span>
                                </h3>
                            </header>

                            <!-- 本文 -->
                            <div class="business-detail__body">
                                <div class="business-detail__intro">
                                    <div class="business-detail__intro-text">
                                        <h4 class="business-detail__title">想いをカタチに<br>
                                            人と人をつなぐ空間デザイン</h4>
                                        <p class="business-detail__desc">
                                        ライブやイベントには、アーティストや主催者の“伝えたい想い”があります。<br>
                                        私たちは、その想いが来場者にしっかり届くように、空間設計というカタチでサポートしています。<br>
                                        デザインの美しさはもちろん、構造計算で“見えない安心”も大切に。<br>
                                        多くの人が笑顔で過ごせる会場づくり・街づくりに貢献します。
                                        </p>
                                    </div>
                                    <figure class="business-detail__intro-photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business01.jpg" alt="" width="500" height="330" loading="lazy">
                                    </figure>
                                </div>
                                <!-- 主な職種 -->
                                <div class="business-detail__jobs">
                                    <div class="business-detail__jobs-list">
                                        <!-- 空間デザイナー -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business01-01.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span><br>
                                                空間デザイナー
                                                </h5>
                                                <p class="business-job__desc">
                                                アーティストや主催者の想いに形を与え、感動の空間を生み出すプロフェッショナルです。生み出す“世界”が、忘れられない感動の空間となるように。そして、夢のひとときが安全で、心から感動できるものとなるように。デザイン的な視覚的配慮だけではなく、安全面に対する配慮を備えたプロの空間デザインを行います。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>空間デザイン</li>
                                                        <li>グラフィックデザイン</li>
                                                        <li>建設業</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                        <!-- 建築士・構造設計者 -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business01-02.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span><br>
                                                建築士・構造設計者
                                                </h5>
                                                <p class="business-job__desc">
                                                「建築士・構造設計者」は、大阪シミズが行う構造物の「設計」と「各種安全計算」、所轄行政に対する各種「申請」作業を行うプロフェッショナルです。あらゆるイベントが安全・安心のもとに運営できるよう、厳密さと正確さを旨として日々業務に向き合います。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>建築士</li>
                                                        <li>工事監理経験者</li>
                                                        <li>建築基準適合判定資格者</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- スタッフコメント -->
                                <section class="business-detail__comment">
                                    <figure class="business-detail__comment-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card01.jpg" alt="" width="240" height="356" loading="lazy" class="">
                                    </figure>
                                    <div class="business-detail__comment-body">
                                        <h4 class="business-detail__comment-title">スタッフコメント</h4>
                                        <p class="business-detail__comment-text">
                                        私たちの仕事は、見た目のデザインだけじゃありません。<br>
                                        図面を描いたり、構造を考えたり、イベント会場を“ちゃんと安全に”カタチにしていくのも大事な仕事。<br>
                                        デザインや建築を学んできたスタッフが多く、みんなアプリケーションを使いこなしています。<br>
                                        専門的な技術も、先輩がしっかり教えてくれるので、入ってからどんどん成長できる環境です。
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>

                        <!-- 資材管理事業 -->
                        <section class="business-detail" id="biz02">
                            <!-- タイトル -->
                            <header class="business-detail__head">
                                <h3 class="business-detail__head-title">
                                    <span class="business-detail__icon" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon02.png">
                                    </span>
                                    <span class="business-detail__head-text">資材管理事業</span>
                                </h3>
                            </header>

                            <!-- 本文 -->
                            <div class="business-detail__body">
                                <div class="business-detail__intro">
                                    <div class="business-detail__intro-text">
                                        <h4 class="business-detail__title">あらゆる資機材を運用・管理し<br>
                                        イベントの安全を担保する裏方の要</h4>
                                        <p class="business-detail__desc">
                                        イベント会場で使用される資機材の調達・管理・メンテナンスを行います。ステージ設営では足場材やトラス構造の梁材、チェーンモーターなどさまざまな資機材を使用するため、安全性能維持のメンテナンスは欠かすことのできない重要な業務です。また構造材だけでなく舞台の暗幕やロープなどの設営資材の細かな管理も行います。資材ヤードやイベント会場ではフォークリフトを使用し、資機材の積込みや荷下ろしを行います。搬入車両の誘導なども資材管理業務の仕事となっています。
                                        </p>
                                    </div>
                                    <figure class="business-detail__intro-photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business02.jpg" alt="" width="500" height="330" loading="lazy">
                                    </figure>
                                </div>
                                <!-- 主な職種 -->
                                <div class="business-detail__jobs">
                                    <div class="business-detail__jobs-list business-detail__jobs-list_shingle">
                                        <!-- 資材管理者 -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business02-01.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span>
                                                資材管理者
                                                </h5>
                                                <p class="business-job__desc">
                                                会場設営に必要なあらゆる資材・機材の管理を担います。単なる倉庫管理や資材リストの管理を行うだけではなく、必要資材の調達、搬入出、運搬作業も資材管理の仕事です。また、常に安全に使用できる状態を維持するためのメンテナンスも重要な仕事のひとつです。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>電気工事士</li>
                                                        <li>トラックドライバー</li>
                                                        <li>倉庫管理</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- スタッフコメント -->
                                <section class="business-detail__comment">
                                    <figure class="business-detail__comment-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card02.jpg?2603" alt="" width="240" height="356" loading="lazy" class="">
                                    </figure>
                                    <div class="business-detail__comment-body">
                                        <h4 class="business-detail__comment-title">スタッフコメント</h4>
                                        <p class="business-detail__comment-text">
                                        「資材管理」というと、ついデスクワークを想像します。でも、実際は意外とアクティブ。資材を会場に運ぶため、トラックを運転することもあるのです。<br>
                                        こうした仕事に必要になる免許は仕事をしながら取得可能。費用制度も充実しています。
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>

                        <!-- 製作事業 -->
                        <section class="business-detail" id="biz03">
                            <!-- タイトル -->
                            <header class="business-detail__head">
                                <h3 class="business-detail__head-title">
                                    <span class="business-detail__icon" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon03.png">
                                    </span>
                                    <span class="business-detail__head-text">製作事業</span>
                                </h3>
                            </header>

                            <!-- 本文 -->
                            <div class="business-detail__body">
                                <div class="business-detail__intro">
                                    <div class="business-detail__intro-text">
                                        <h4 class="business-detail__title">会場・ステージを構成する<br>
                                        造形物を作るスペシャリスト</h4>
                                        <p class="business-detail__desc">
                                        大阪シミズでは、イベントで求められる演出や空間を作り上げるための「ものづくり」を「製作」と呼んでいます。いずれもイベント会場を構成し、安全な空間を創出するために欠かすことができない業務です。
                                        </p>
                                    </div>
                                </div>
                                <!-- 主な職種 -->
                                <div class="business-detail__jobs">
                                    <div class="business-detail__jobs-list">
                                        <!-- 機構 -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business03-01.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span><br>
                                                機構
                                                </h5>
                                                <p class="business-job__desc">
                                                イベントで使用する「機構物（昇降装置、吊物装置など）」の設計・製作と、各種機構物の設置・操作を行います。機構物はイベントの演出プランや会場設備に合わせて製作・設置する必要があります。製作事業部ではこうした機構物の企画・設計・製作から設置、操作まで行っています。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>機構オペレーター</li>
                                                        <li>CADオペレーター</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                        <!-- 美術製作 -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business03-02.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span><br>
                                                美術製作
                                                </h5>
                                                <p class="business-job__desc">
                                                デザインとイメージパースに従い、ステージやブースを形成する造作物を製作します。木材やプラスチック樹脂などを組み上げ、塗装し、作る。まるで毎日が学園祭のような仕事です。その仕事を支えているのは、安全で魅力的な空間を作ろうとする強いプロ意識です。製作した造形物は施工セクションに託され、会場を彩ります。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>舞台美術（演出装飾）スタッフ</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                        <!-- 印刷オペレーター -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business03-03.jpg?v2026" alt="" width="350" height="260" loading="lazy" class="business-job__media01">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span><br>
                                                印刷オペレーター
                                                </h5>
                                                <p class="business-job__desc">
                                                たとえばライブ会場でトイレや物販ブースの位置を示すサインがなければ、大混乱が生じ、そこにさまざまな危険が生じます。そこで大阪シミズでは会場内サインのデザインや印刷を専門でご提供しています。会場内サインには、さまざまな視認担保のノウハウがあります。ここにも私たちが培ってきたプロの技術が生きています。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>印刷オペレーター</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- スタッフコメント -->
                                <section class="business-detail__comment">
                                    <figure class="business-detail__comment-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card03.jpg" alt="" width="240" height="356" loading="lazy" class="">
                                    </figure>
                                    <div class="business-detail__comment-body">
                                        <h4 class="business-detail__comment-title">スタッフコメント</h4>
                                        <p class="business-detail__comment-text">
                                        製造事業はイベント会場に設置するステージやブース、その他演出用構造物などを作り出す仕事です。業務によって必要となる場合がある木材加工用機械作業主任者などの資格は、入社後に取得することも可能です。大阪シミズでは、スムーズな業務提供を実現するため、さまざまな教育支援制度を設けているので安心です。
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>

                        <!-- 施工事業 -->
                        <section class="business-detail" id="biz04">
                            <!-- タイトル -->
                            <header class="business-detail__head">
                                <h3 class="business-detail__head-title">
                                    <span class="business-detail__icon" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon04.png">
                                    </span>
                                    <span class="business-detail__head-text">施工事業</span>
                                </h3>
                            </header>

                            <!-- 本文 -->
                            <div class="business-detail__body">
                                <div class="business-detail__intro">
                                    <div class="business-detail__intro-text">
                                        <h4 class="business-detail__title">ステージをゼロから「設営」し<br>
                                            イベント空間を実現させる専門業</h4>
                                        <p class="business-detail__desc">
                                        美術制作が演出物制作のプロなら、施工事業が担うのはその土台となるステージの「設営」と「撤去」。設計され、造形された会場の構造物を実際の現場に実現させていきます。大阪シミズでは単純に「設営」「撤去」を行っていくだけではなく、それぞれで事故が起こらないよう、安全管理担当のスタッフを選任配置し、安全かつ迅速な作業をご提供しています。
                                        </p>
                                    </div>
                                    <figure class="business-detail__intro-photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business04.jpg" alt="" width="500" height="330" loading="lazy">
                                    </figure>
                                </div>
                                <!-- 主な職種 -->
                                <div class="business-detail__jobs">
                                    <div class="business-detail__jobs-list business-detail__jobs-list_shingle">
                                        <!-- 舞台美術 -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business04-01.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span>
                                                舞台美術
                                                </h5>
                                                <p class="business-job__desc">
                                                舞台美術はイベントの現場で会場設営と撤去を一手に引き受ける専門職。設計やデザインの各担当者から受け取った想いを現場でカタチにしていきます。施工には時間制限があります。迅速に、そして安全に。万が一のリスクを常に回避しながら適切な作業を行います。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>電気工事士</li>
                                                        <li>会場施工実務者</li>
                                                        <li>会場施工安全管理者</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- スタッフコメント -->
                                <section class="business-detail__comment">
                                    <figure class="business-detail__comment-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card04.jpg" alt="" width="240" height="356" loading="lazy" class="">
                                    </figure>
                                    <div class="business-detail__comment-body">
                                        <h4 class="business-detail__comment-title">スタッフコメント</h4>
                                        <p class="business-detail__comment-text">
                                        施工事業は製作したステージや演出物を会場に設営する仕事です。このため、建築士や電気工事士などの資格が活かせることも。ときには高所作業もありますし、クレーンを使う場合もあります。大阪シミズの業務のなかでは最もアクティブであり、最も多くの資格が必要とされるでしょう。
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>
                        
                        <!-- 営業事業 -->
                        <section class="business-detail" id="biz05">
                            <!-- タイトル -->
                            <header class="business-detail__head">
                                <h3 class="business-detail__head-title">
                                    <span class="business-detail__icon" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon05.png">
                                    </span>
                                    <span class="business-detail__head-text">営業事業</span>
                                </h3>
                            </header>

                            <!-- 本文 -->
                            <div class="business-detail__body">
                                <div class="business-detail__intro">
                                    <div class="business-detail__intro-text">
                                        <h4 class="business-detail__title">主催側と会社を結び<br>
                                        イベント全体のディレクションを担当</h4>
                                        <p class="business-detail__desc">
                                        営業事業はイベントの起点となる部門。クライアントと大阪シミズを結ぶ仕事です。クライアントから企画内容をヒアリングし、イベント全体のイメージと具体的な機材、造作物、人員といった「実現に必要なプラン」を組み立てていきます。<br>
                                        イベントをプランニングする各段階で生じる見積もりや発注、請求といった予算管理業務も営業担当が担います。また、イベントの設営時だけでなく、本番中や撤去まで立ち合い、常にクライアントの声を現場に伝えます。
                                        </p>
                                    </div>
                                    <figure class="business-detail__intro-photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business05.jpg?260115" alt="" width="500" height="330" loading="lazy">
                                    </figure>
                                </div>
                                <!-- 主な職種 -->
                                <div class="business-detail__jobs">
                                    <div class="business-detail__jobs-list business-detail__jobs-list_shingle">
                                        <!-- イベントディレクター -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business05-01.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span>
                                                イベントディレクター
                                                </h5>
                                                <p class="business-job__desc">
                                                クライアントと大阪シミズをつなぐ窓口役。イベントのコンセプトやマインドをクライアントと共有し、大阪シミズ全部門へと共有します。また、予算管理やイベントの立会いなども行い、イベント全体のスムーズな開催・運営を管理していきます。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>企画営業</li>
                                                        <li>イベント企画</li>
                                                        <li>CAD</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- スタッフコメント -->
                                <section class="business-detail__comment">
                                    <figure class="business-detail__comment-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card05.jpg?2603" alt="" width="240" height="356" loading="lazy" class="">
                                    </figure>
                                    <div class="business-detail__comment-body">
                                        <h4 class="business-detail__comment-title">スタッフコメント</h4>
                                        <p class="business-detail__comment-text">
                                        イベント事業の最初の一歩を切り開くのが営業の仕事。たくさんのコミュニケーションとご提案を通し、クライアントとの「信頼」を築き「イベントイメージ」を具現化していきます。<br>
                                        いわゆる営業担当ですが、営業業務だけの仕事ではありません。大阪シミズの営業担当には、自らCADを操り図面を引くツワモノまでいるのです。<br>
                                        求められる資格は特にありませんが、逆にあらゆる経験を活かすことができる仕事です。
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>

                        <!-- 運営事業 -->
                        <section class="business-detail" id="biz06">
                            <!-- タイトル -->
                            <header class="business-detail__head">
                                <h3 class="business-detail__head-title">
                                    <span class="business-detail__icon" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon06.png">
                                    </span>
                                    <span class="business-detail__head-text">運営事業</span>
                                </h3>
                            </header>

                            <!-- 本文 -->
                            <div class="business-detail__body">
                                <div class="business-detail__intro">
                                    <div class="business-detail__intro-text">
                                        <h4 class="business-detail__title">アルバイトや警備などの手配を担当<br>
                                        事前教育や当日の運営、スタッフ指揮もおまかせ</h4>
                                        <p class="business-detail__desc">
                                        展示会やライブ、野球等の試合では多くのスタッフが必要になります。こうした人材確保が大阪シミズの重要な事業のため、アルバイトスタッフや警備スタッフを常時募集し、ご要望に応じて最適なスタッフを確保・供給しています。また、当日のスタッフ状況をまとめ現場指揮を行いながらスムーズな運営をご提供しています。
                                        </p>
                                    </div>
                                    <figure class="business-detail__intro-photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business06.jpg" alt="" width="500" height="330" loading="lazy">
                                    </figure>
                                </div>
                                <!-- 主な職種 -->
                                <div class="business-detail__jobs">
                                    <div class="business-detail__jobs-list business-detail__jobs-list_shingle">
                                        <!-- 運営ディレクター -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business06-01.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span>
                                                運営ディレクター
                                                </h5>
                                                <p class="business-job__desc">
                                                イベントで必要となるさまざまな人員の手配と配置計画の立案、現場指揮を行います。イベントでは、たくさんのスタッフが活躍します。アルバイトをはじめ、その雇用形態はさまざまです。こうしたスタッフを一手に管理し、まとめ、イベントのスムーズな運営を支援します。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>運営ディレクター</li>
                                                        <li>アルバイト管理者</li>
                                                        <li>総務・人事</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- スタッフコメント -->
                                <section class="business-detail__comment">
                                    <figure class="business-detail__comment-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card06.jpg?2603" alt="" width="240" height="356" loading="lazy" class="">
                                    </figure>
                                    <div class="business-detail__comment-body">
                                        <h4 class="business-detail__comment-title">スタッフコメント</h4>
                                        <p class="business-detail__comment-text">
                                        現在、大阪シミズで活躍する社員にも、アルバイト経験者が数多く在籍しています。もしかしたら運営事業に関わるスタッフは最強のリクルーターと言えるのかもしれません。
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>

                        <!-- 警備事業 -->
                        <section class="business-detail" id="biz07">
                            <!-- タイトル -->
                            <header class="business-detail__head">
                                <h3 class="business-detail__head-title">
                                    <span class="business-detail__icon" aria-hidden="true">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/business_icon07.png">
                                    </span>
                                    <span class="business-detail__head-text">警備事業</span>
                                </h3>
                            </header>

                            <!-- 本文 -->
                            <div class="business-detail__body">
                                <div class="business-detail__intro">
                                    <div class="business-detail__intro-text">
                                        <h4 class="business-detail__title">イベントの安心・安全を支える柱<br>
                                        人員確保から実務まですべて対応</h4>
                                        <p class="business-detail__desc">
                                        イベント運営で常に気を抜くことができない点があります。それは「安全」、そしてあらゆる面での「スムーズな流れ」です。この2つを管理していくために欠かせないのが、警備事業です。<br>
                                        運営・警備講習の実施や、運営スタッフ・警備スタッフの安全な配置計画の立案、そしてイベント期間中は来場者案内や誘導、手荷物検査等を実施します。
                                        </p>
                                    </div>
                                    <figure class="business-detail__intro-photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business07.jpg" alt="" width="500" height="330" loading="lazy">
                                    </figure>
                                </div>
                                <!-- 主な職種 -->
                                <div class="business-detail__jobs">
                                    <div class="business-detail__jobs-list business-detail__jobs-list_shingle">
                                        <!-- 警備ディレクター -->
                                        <article class="business-job">
                                            <!-- イメージ -->
                                            <figure class="business-job__media">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business07-01.jpg" alt="" width="350" height="260" loading="lazy">
                                            </figure>

                                            <!-- 本文 -->
                                            <div class="business-job__body">
                                                <h5 class="business-job__title">
                                                <span class="business-job__label">主な職種</span>
                                                警備ディレクター
                                                </h5>
                                                <p class="business-job__desc">
                                                手荷物検査に交通誘導、人員整理、駐車場誘導など。「警備」といってもさまざまな業務があります。警備ディレクターはこうした業務の中身や要点を警備スタッフに教育・研修し、確実な警備業務を提供できるよう準備を整えます。また、当日の人員配置や指揮、対応などを行う重要な仕事です。
                                                </p>
                                                <section class="business-job__box">
                                                <h6 class="business-job__box-title">役に立つ経験・資格</h6>
                                                    <ul class="business-job__list">
                                                        <li>警備ディレクター</li>
                                                        <li>警備員</li>
                                                        <li>駐車場誘導</li>
                                                        <li>など</li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- スタッフコメント -->
                                <section class="business-detail__comment">
                                    <figure class="business-detail__comment-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/business_card07.jpg" alt="" width="240" height="356" loading="lazy" class="">
                                    </figure>
                                    <div class="business-detail__comment-body">
                                        <h4 class="business-detail__comment-title">スタッフコメント</h4>
                                        <p class="business-detail__comment-text">
                                        イベントの実際的な安全を守るために欠かせないのが警備事業。警備員への教育や研修、そして実務もすべて行います。<br>
                                        このため、成長とともに警備員指導教育責任者や警備業務検定といった資格が求められるようになります。クライアントはもちろん、来場者の皆さまにも安心してイベントを楽しんでいただけるよう全力を尽くしています。
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div><!-- /#contents -->
<?php get_footer(); ?>