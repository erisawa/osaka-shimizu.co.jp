<?php
/**
 * Template Name: 新卒採用エントリーフォームページ
 * Description: 新卒採用エントリーフォームページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="recruit-heading">
                <span class="page-heading-ja">採用情報</span>
                <span class="page-heading-en en">RECRUIT</span>
                <span class="heading_decor scroll-r" aria-hidden="true"></span>
            </div>
        </header>
        <div id="contents" class="contents-entry">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>
                
            <div class="contents_inner_s">
                <?php
                // ページ判定
                $is_confirm = is_page( 'entry-newsnewgrad-confirm' );
                $is_thanks  = is_page( 'entry-newsnewgrad-thanks' );
                ?>

                <div class="recruit-intro-text">

                <?php if ( $is_thanks ) : ?>
                    <h1 class="entry-thanks__title">ご応募ありがとうございました</h1>
                <?php else : ?>
                <header>
                    <h1>
                    <span class="recruit-page-title-ja">
                        <span>新卒</span>採用<br>エントリーフォーム
                    </span>
                    <span class="recruit-page-title-en en">
                        NEW GRADUATE RECRUITMENT INFORMATIONS
                    </span>
                    </h1>
                </header>
                <?php endif; ?>

                <?php if ( ! $is_confirm && ! $is_thanks ) : //入力ページだけで表示するテキスト ?>
                    <p class="intro-text">
                    このたびは株式会社大阪シミズの新卒者向け採用情報に興味をお持ちいただき、誠にありがとうございます。<br>
                    新卒採用募集要項をご一読いただき、下記「エントリーに関する条件」に従いエントリーを行ってください。<br>
                    エントリー内容を精査し、採用担当者からご連絡を差し上げます。<br>
                    皆さまからのエントリーを心よりお待ちしております。
                    </p>
                <?php endif; ?>

                </div><!-- /.recruit-intro-text -->


                <?php if ( ! $is_confirm && ! $is_thanks ) : //入力ページだけで表示する「エントリーに関する条件」 ?>
                <section class="recruit-section-message c-box">
                    <h2>エントリーに関する条件</h2>
                    <ul>
                    <li>エントリー回数はお1人1回とさせていただきます。</li>
                    <li>フォーム内でお選びいただける「希望職種」はお1人1職種とさせていただきます。</li>
                    <li>審査の都合上、必ず「希望職種」のご意向に添えるとは限りません。あらかじめご了承ください。</li>
                    <li>ご記載いただくメールアドレス宛に担当者からご連絡を差し上げます。かならず受信できるよう、適切なセキュリティ設定を行ってください。</li>
                    <li>エントリー実施後、ご記載いただいたメールアドレス宛に受付完了メールが送信されます。受付完了メールを必ずご確認ください。</li>
                    <li>受付完了メールが確認できない場合は、受信完了メールが迷惑メールフォルダ等に格納されていないかを必ずご確認ください。その上で受付完了メールが届いていない場合は、改めてエントリーフォームからご応募ください。</li>
                    </ul>
                </section>
                <?php endif; ?>


                <?php if ( $is_thanks ) : //サンクスページ専用：フォームは出さない ?>

                <section class="entry-thanks">
                    <p class="entry-thanks__text">
                    株式会社大阪シミズ新卒採用にエントリーいただき、誠にありがとうございます。<br>
                    ご登録いただいたメールアドレス宛に受付完了メールを送信しました。メールが届いているか必ずご確認ください。<br>
                    受付完了した方には、担当者から別途ご連絡のメールをお送りいたします。<br>
                    ご連絡のメールの発信は、弊社営業日で数日かかる場合がございます。<br>
                    今後の選考についてのご案内となりますので、必ずご確認くださいますようお願いいたします。
                    </p>
                    <p class="entry-thanks__link">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link_btn">
                        <span class="link_btn_text">TOPページへ戻る</span>
                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                        </svg>
                    </a>
                    </p>
                </section>

                <?php else : //入力ページ & 確認ページ 共通のフォーム枠 ?>

                <div class="c-form">

                    <?php if ( $is_confirm ) : //確認ページ ?>

                    <h2>入力内容の確認</h2>
                    <?php
                    // ★ここを「確認用フォーム」のショートコードに変更してください
                    echo do_shortcode( '[contact-form-7 id="9e13125" title="新卒採用エントリーフォーム"]' );
                    ?>

                    <?php else : //入力ページ ?>

                    <h2>新卒採用エントリーフォーム</h2>
                    <?php
                    // ★ここを「入力用フォーム」のショートコードに変更してください
                    echo do_shortcode( '[contact-form-7 id="74850fa" title="新卒採用エントリーフォーム（入力）"]' );
                    ?>

                    <?php endif; ?>

                </div><!-- /.c-form -->

                <?php endif; ?>
            </div>
        </div><!-- /#contents -->
<?php get_footer(); ?>