<?php
/**
 * Template Name: 福利厚生
 * Description: 福利厚生ページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">EMPLOYEE BENEFITS</span>
                    <span class="page-heading-ja">福利厚生</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-employee-benefits">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>

            <!-- 大阪シミズの働く環境 -->
            <section id="sec-company" class="employee-benefits-section">
                <div class="contents_inner">
                    <header class="section-header">
                        <p class="section-en en">WORKING ENVIRONMENT</p>
                        <h2 class="section-ja">制度や福利厚生<br>社内イベントについて</h2>
                    </header>
                    <nav class="outline-nav" aria-label="ページ内ナビゲーション">
                        <ul>
                            <li><a href="#benefits01" class="link_btn"><span class="link_btn_text">教育制度</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                            <li><a href="#benefits02" class="link_btn"><span class="link_btn_text">ファミリーサポート制度</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                            <li><a href="#benefits03" class="link_btn"><span class="link_btn_text">福利厚生・社内イベント</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="color-section">
                    <div class="contents_inner">

                        <!-- 教育制度 -->
                        <section class="benefit-detail" id="benefits01">

                            <!-- タイトル -->
                            <header class="benefit-detail__head">
                                <h3 class="benefit-detail__head-title">教育制度</h3>
                            </header>

                            <!-- 本文 -->
                            <div class="benefit-detail__body">
                                
                                <!-- 若手育成サポート制度 -->
                                <section class="benefit-detail__section">
                                    <div class="benefit-detail__text">
                                        <h4 class="benefit-detail__title">若手育成サポート制度</h4>

                                        <p class="benefit-detail__desc">
                                        現場業務で必要な技術や知識を習得できるように、実務や講義などを通じてスキルアップをサポートします。
                                        </p>
                                    </div>

                                    <figure class="benefit-detail__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-benefits/benefits01-01.jpg?v2026" alt="" width="390" height="260" loading="lazy" >
                                    </figure>
                                </section>

                                <!-- 新入社員OJT研修 -->
                                <section class="benefit-detail__section">
                                    <div class="benefit-detail__text">
                                        <h4 class="benefit-detail__title">新入社員OJT研修</h4>

                                        <p class="benefit-detail__desc">
                                        入社後は、さまざまな部署にて研修。業務内容の理解を深めた後、配属先で働いていただきます。
                                        </p>
                                    </div>

                                    <figure class="benefit-detail__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-benefits/benefits01-02.jpg?v2026" alt="" width="390" height="260" loading="lazy" >
                                    </figure>
                                </section>

                                <!-- 自己啓発支援 -->
                                <section class="benefit-detail__section">
                                    <div class="benefit-detail__text">
                                        <h4 class="benefit-detail__title">自己啓発支援</h4>

                                        <p class="benefit-detail__desc">
                                        外部セミナー受講料や資格に応じた特技手当を支給。国際スポーツ大会やミュージカルなど、海外視察・研修も実施しています。<br>
                                        ※部署や資格により支給額は異なります。
                                        </p>
                                    </div>

                                    <figure class="benefit-detail__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-benefits/benefits01-03.jpg?v2026" alt="" width="390" height="260" loading="lazy" >
                                    </figure>
                                </section>
                            </div>
                        </section>

                        <!-- ファミリーサポート制度 -->
                        <section class="benefit-detail" id="benefits02">

                            <!-- タイトル -->
                            <header class="benefit-detail__head">
                                <h3 class="benefit-detail__head-title">ファミリーサポート制度</h3>
                            </header>

                            <!-- 本文 -->
                            <div class="benefit-detail__body">
                                
                                <!-- 資格支援制度 -->
                                <section class="benefit-detail__section">
                                    <div class="benefit-detail__text">
                                        <h4 class="benefit-detail__title">しあわせサポート</h4>

                                        <p class="benefit-detail__desc">
                                        結婚、出産、お子様の入学などのタイミングにおいて、お祝い金を支給します。
                                        </p>
                                    </div>

                                    <figure class="benefit-detail__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-benefits/benefits02-01.jpg?v2026" alt="" width="390" height="260" loading="lazy" >
                                    </figure>
                                </section>

                                <!-- パパママ育児サポート -->
                                <section class="benefit-detail__section">
                                    <div class="benefit-detail__text">
                                        <h4 class="benefit-detail__title">パパママ育児サポート</h4>

                                        <p class="benefit-detail__desc">
                                        お子様の養育費の一部（粉ミルクや紙オムツ購入費など）を、毎月の手当として支給します。
                                        </p>
                                    </div>

                                    <figure class="benefit-detail__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-benefits/benefits02-02.jpg?v2026" alt="" width="390" height="260" loading="lazy" >
                                    </figure>
                                </section>

                                <!-- 育パパ・育ママサポート -->
                                <section class="benefit-detail__section">
                                    <div class="benefit-detail__text">
                                        <h4 class="benefit-detail__title">育パパ・育ママサポート</h4>

                                        <p class="benefit-detail__desc">
                                        産休前や育児休業中、育児中の社員同士のランチミーティングや人事部との面談を行い、不安なく休業・復職できる環境作りをしています。
                                        </p>
                                    </div>

                                    <figure class="benefit-detail__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-benefits/benefits02-03.jpg?v2026" alt="" width="390" height="260" loading="lazy" >
                                    </figure>
                                </section>
                            </div>
                        </section>

                        <!-- その他の福利 -->
                        <section class="benefit-detail" id="benefits03">

                            <!-- タイトル -->
                            <header class="benefit-detail__head">
                                <h3 class="benefit-detail__head-title">福利厚生・社内イベント</h3>
                            </header>

                            <!-- 本文 -->
                            <div class="benefit-detail__body">
                                
                                <!-- イベントチケット配布 -->
                                <div class="benefit-detail__section" id="benefits04-01">
                                    <div class="benefit-detail__text">

                                        <ul class="c-list">
                                            <li>親睦会（社員旅行、ボウリング大会、ゴルフ大会、スキー・スノボなど）</li>
                                            <li>イベントチケット配布</li>
                                            <li>資格手当</li>
                                            <li>スポーツクラブの割引利用</li>
                                            <li>保養施設</li>
                                        </ul>
                                        <p>など</p>
                                    </div>

                                    <figure class="benefit-detail__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-benefits/benefits03-01.jpg?v2026" alt="" width="390" height="260" loading="lazy" >
                                    </figure>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div><!-- /#contents -->
<?php get_footer(); ?>