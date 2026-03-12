<?php
/**
 * Template Name: お問い合わせ
 * Description: お問い合わせページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">CONTACT</span>
                    <span class="page-heading-ja">お問い合わせ</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-contact">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
            </div>
            <div class="contents_inner_s">
                <?php
                // ページ判定
                $is_confirm = is_page( 'contact-confirm' );
                $is_thanks  = is_page( 'contact-thanks' );
                ?>

                <?php if ( $is_confirm ) : ?>

                    <p class="intro-text">
                        お問い合わせとして送信する内容を<span>ご確認ください。</span>
                    </p>

                <?php elseif ( $is_thanks ) : ?>

                    <h2><span>お問い合わせを</span><span>受け付けました</span></h2>
                    <p>このたびは株式会社大阪シミズにお問い合わせいただき、誠にありがとうございました。<br>
                    お問い合わせ内容を確認の上、改めてご連絡させていただきますので今しばらくお待ちください。<br>
                    回答までには3〜5営業日程度頂戴する場合もございます。</p>
                    <p>今後とも株式会社大阪シミズをよろしくお願い申し上げます。</p>
                    <a class="link_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="link_btn_text">TOPに戻る</span>
                        <svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                        <circle class="icon-arrow__circle" cx="10" cy="10" r="10" />
                        <path class="icon-arrow__path" d="M8 5l5 5-5 5" fill="none" stroke-width="2" />
                        </svg>
                    </a>

                <?php else : ?>

                    <p class="intro-text">
                        大阪シミズへの相談や依頼などございましたら、<br>
                        どうぞお気軽にお問い合わせください。
                    </p>

                <?php endif; ?>


                <?php if ( ! $is_thanks ) : ?>
                    <!-- ★ 入力ページ＆確認ページだけ c-form を表示 -->
                    <div class="c-form">
                        <h2>お問い合わせフォーム</h2>

                        <?php if ( $is_confirm ) : ?>
                            <?php echo do_shortcode('[contact-form-7 id="0f28161" title="お問い合わせ"]'); ?>

                        <?php else : ?>
                            <?php echo do_shortcode('[contact-form-7 id="3dcf12f" title="お問い合わせ（入力）"]'); ?>

                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div><!-- /#contents -->
<?php get_footer(); ?>