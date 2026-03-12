<?php
/**
 * 共通フッター
 */
?>
    </main>

    <!-- フッター -->
	<footer>
        <div id="footer">
            <div class="fiximg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/bg.jpg" alt="" /></div>
            <div class="contents_inner_s">
                <nav id="sitemap_area">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
                        <li><a href="<?php echo home_url('/outline'); ?>">会社概要</a></li>
                        <li><a href="<?php echo home_url('/mind'); ?>">企業理念</a></li>
                        <li><a href="<?php echo home_url('/business'); ?>">事業概要</a></li>
                        <li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
                        <li><a href="<?php echo home_url('/news'); ?>">新着情報</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
                    </ul>
                    <ul>
                        <li class="sitemap_area_recruit"><a href="<?php echo home_url('/recruit'); ?>">採用情報</a>
                            <ul>
                                <li><span class="sitemap_area_recruit_title">新卒採用</span><a href="<?php echo home_url('/recruit/recruit-newsnewgrad'); ?>">募集要項</a><span class="pc">／</span><a href="<?php echo home_url('/recruit/entry-newsnewgrad'); ?>">エントリーフォーム</a></li>
                                <li><span class="sitemap_area_recruit_title">中途採用</span><a href="<?php echo home_url('/recruit/recruit-midcareer'); ?>">募集要項</a><span class="pc">／</span><a href="<?php echo home_url('/recruit/entry-midcareer'); ?>">エントリーフォーム</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo home_url('/employee-benefits'); ?>">福利厚生</a></li>
                    </ul>
                </nav>
                <div id="footer_bottom">
                    <div id="footer_address">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-w.svg" width="320" height="55" alt="大阪シミズ"></a>
                        <p>〒541-0059　大阪市中央区博労町4丁目4番11号　船場西KIDビル<br>
                        3階：管理部　4階：イベント・プロモーション部<br>
                        5階：ライブ・エンタテインメント部、設計部<br>
                        TEL : 06-6244-6888</p>
                    </div>
                    <div id="footer_sns">
                        <p>公式SNSアカウント</p>
                        <ul>
                            <li><a href="https://www.instagram.com/osaka_shimizu/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ico_instagram.png" width="34" height="34" alt="Instagram" loading="lazy" decoding="async"></a></li>
                            <li><a href="https://www.tiktok.com/@osaka_shimizu/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ico_tiktok.png" width="29" height="32" alt="TikTok" loading="lazy" decoding="async"></a></li>
                        </ul>
                    </div>
                    <div id="footer_meta">
                        <div id="footer_policy">
                            <ul>
                                <li><a href="<?php echo home_url('/privacy-policy'); ?>">プライバシーポリシー</a></li>
                                <li><a href="<?php echo home_url('/sns-policy'); ?>">ソーシャルメディアポリシー</a></li>
                            </ul>
                        </div>
                        <small>copyright &copy; 株式会社大阪シミズ. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>