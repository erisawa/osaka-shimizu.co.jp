<?php
/**
 * Template Name: アクセスマップ
 * Description: アクセスマップページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">ACCESS</span>
                    <span class="page-heading-ja">アクセスマップ</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-access">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
                
                <!-- ================================
                    本社
                ================================= -->
                <section class="access-item anchor-target" id="access01">
                    
                    <div class="access-item__info">
                        <header class="section-header">
                            <h3 class="section-ja">本社</h3>
                        </header>
                        <p class="access-item__address">
                            〒541-0059　大阪市中央区博労町4丁目4番11号　船場西KIDビル<br>
                            TEL.06-6244-6888
                        </p>
                        <ul class="access-item__floors">
                            <li>3階：管理部</li>
                            <li>4階：イベント・プロモーション部</li>
                            <li>5階：ライブ・エンタテインメント部、設計部</li>
                        </ul>
                    </div>

                    <div class="access-item__map">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.147090909582!2d135.49668211141983!3d34.67866168428194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e1caac73d869%3A0xe4f05436226b5472!2z44K344Of44K644Kq44Kv44OI5aSn6Ziq5pSv5bqX!5e0!3m2!1sja!2sjp!4v1763783748491!5m2!1sja!2sjp" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="map-link"><a href="https://maps.app.goo.gl/LqNGvZfUWCD4VuSo8" target="_blank" rel="noopener">拡大地図を表示</a></p>
                    </div>
                </section>

                <!-- ================================
                    玉造スタジオ
                ================================= -->
                <section class="access-item anchor-target" id="access02">
                    
                    <div class="access-item__info">
                        <header class="section-header">
                            <h3 class="section-ja">玉造スタジオ</h3>
                        </header>
                        <p class="access-item__address">
                            〒537-0025　大阪市東成区中道4丁目13番16号　平井ビル<br>
                            TEL.06-6978-6988
                        </p>
                        <ul class="access-item__floors">
                            <li>スタジオ事業部</li>
                        </ul>
                    </div>

                    <div class="access-item__map">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6562.423734360632!2d135.5365089!3d34.6746019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e0badc963255%3A0x31177f0f938adb0f!2z5aSn6Ziq44K344Of44K6IOeOiemAoOOCueOCv-OCuOOCqg!5e0!3m2!1sja!2sjp!4v1765986008196!5m2!1sja!2sjp" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="map-link"><a href="https://maps.app.goo.gl/dT1EUuvKAZGCGJmAA" target="_blank" rel="noopener">拡大地図を表示</a></p>
                    </div>
                </section>

                <!-- ================================
                    大阪スタジオ
                ================================= -->
                <section class="access-item anchor-target" id="access03">
                    
                    <div class="access-item__info">
                        <header class="section-header">
                            <h3 class="section-ja">大阪スタジオ</h3>
                        </header>
                        <p class="access-item__address">
                            〒552-0006　大阪市港区石田1丁目4番11号<br>
                            TEL.06-6577-5988
                        </p>
                        <ul class="access-item__floors">
                            <li>スタジオ事業部</li>
                        </ul>
                    </div>

                    <div class="access-item__map">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13131.64651055582!2d135.44241214643893!3d34.66872312039926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6291ef76103%3A0xdf0f0169ce4b3b63!2z5qCq5byP5Lya56S-5aSn6Ziq44K344Of44K65aSn6Ziq44K544K_44K444Kq!5e0!3m2!1sja!2sjp!4v1767851486534!5m2!1sja!2sjp" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="map-link"><a href="https://maps.app.goo.gl/LfTuifhfprv92MiH9" target="_blank" rel="noopener">拡大地図を表示</a></p>
                    </div>
                </section>
                
            </div>
        </div><!-- /#contents -->
<?php get_footer(); ?>