<?php
/**
 * Template Name: 会社概要
 * Description: 会社概要ページ用テンプレート
 */
get_header();
?>
        <header class="page-heading">
            <div class="contents_inner">
                <h1 class="scroll-l">
                    <span class="page-heading-en en">OUTLINE</span>
                    <span class="page-heading-ja">会社概要</span>
                </h1>
            </div>
        </header>
        <div id="contents" class="contents-outline">
            <div class="contents_inner">
                <?php get_template_part( 'template-parts/breadcrumb' ); //パンくずリスト ?>
                <!-- アンカーリンク（ページ内リンク） -->
                <nav class="outline-nav" aria-label="ページ内ナビゲーション">
                    <ul>
                        <li><a href="#sec-outline" class="link_btn"><span class="link_btn_text">会社概要</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                        <li><a href="#sec-licenses" class="link_btn"><span class="link_btn_text">許可・認可</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                        <li><a href="#sec-history" class="link_btn"><span class="link_btn_text">沿革</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                        <li><a href="#sec-links" class="link_btn"><span class="link_btn_text">リンク</span><svg class="link_btn_arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle class="icon-arrow__circle" cx="10" cy="10" r="10" fill="#fff"/><path class="icon-arrow__path" d="M0,0H6V6" transform="translate(7.743 5.5) rotate(45)" fill="none" stroke="#0069b7" stroke-width="2"/></svg></a></li>
                    </ul>
                </nav>

                <!-- 会社概要 -->
                <section id="sec-outline" class="outline-section">
                <header class="section-header">
                    <p class="section-en en">OUTLINE</p>
                    <h2 class="section-ja">会社概要</h2>
                </header>

                <!-- 本文（例）-->
                <div class="section-body">
                    <table class="c-table">
                        <tr>
                            <th>会社名</th>
                            <td>株式会社大阪シミズ</td>
                        </tr>
                        <tr>
                            <th>役員</th>
                            <td>代表取締役：　清水　太郎<br>
                            取締役社長執行役員：　三橋　輝彦<br>
                            取締役常務執行役員：　斎藤　正樹<br>
                            取締役：　宇田川　直人<br>
                            取締役：　弥富　英昭<br>
                            執行役員：　北迫　謙二<br>
                            監査役：　小柴　季彦</td>
                        </tr>
                        <tr>
                            <th>設立年月日</th>
                            <td>令和4年（2022）7月1日</td>
                        </tr>
                        <tr>
                            <th>資本金</th>
                            <td>20,000千円</td>
                        </tr>
                        <tr>
                            <th>取引先</th>
                            <td>株式会社大阪シティドーム<br>
                            オリックス野球クラブ株式会社<br>
                            株式会社キョードーエンタテインメント<br>
                            株式会社電通ライブ<br>
                            徳島ヴォルティス株式会社<br>
                            株式会社博報堂プロダクツ<br>
                            阪神電気鉄道株式会社<br>
                            株式会社夢番地<br>
                            読売新聞大阪本社　　他多数</td>
                        </tr>
                        <tr>
                            <th>取引銀行</th>
                            <td>三井住友銀行　船場支店<br>
                            池田泉州銀行　本町支店</td>
                        </tr>
                        <tr>
                            <th>営業拠点</th>
                            <td>
                                <ul>
                                    <li>本社<br>
                                    〒541-0059<br>
                                    大阪市中央区博労町4丁目4番11号　船場西KIDビル［<a href="<?php echo home_url('/access'); ?>#access01">アクセスマップ</a>］<br>
                                    3階：管理部　4階：イベント・プロモーション部<br>
                                    5階：ライブ・エンタテインメント部、設計部</li>
                                    <li>玉造スタジオ<br>
                                    〒537-0025<br>
                                    大阪市東成区中道4丁目13番地16号　平井ビル［<a href="<?php echo home_url('/access'); ?>#access02">アクセスマップ</a>］</li>
                                    <li>大阪スタジオ<br>
                                    〒552-0006<br>
                                    大阪市港区石田1丁目4番11号［<a href="<?php echo home_url('/access'); ?>#access03">アクセスマップ</a>］</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>加盟団体</th>
                            <td>
                                <ul>
                                    <li>大阪ディスプレイ協同組合</li>
                                    <li>関西舞台テレビテクノアンドアート協同組合</li>
                                    <li>日本舞台技術安全協会</li>
                                    <li>一般社団法人大阪府警備業協会</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                </section>

                <!-- 許可・認可 -->
                <section id="sec-licenses" class="licenses-section">
                <header class="section-header">
                    <p class="section-en en">LICENSES</p>
                    <h2 class="section-ja">許可・認可</h2>
                </header>

                <div class="section-body">
                    <p>株式会社大阪シミズは安全かつ適正なサービスのご提供を実現するため、以下の許認可を取得しています。</p>
                    
                    <table class="c-table">
                        <tr>
                            <th>警備業認定証</th>
                            <td><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/keibigyo_ninteisho.pdf" target="_blank">大阪府公安委員会認定（警備業）第62003198号[PDF]</a></td>
                        </tr>
                        <tr>
                            <th>一級建築士事務所</th>
                            <td>大阪府知事登録（イ）第26364号</td>
                        </tr>
                        <tr>
                            <th>特定建設業</th>
                            <td>大阪府知事許可（特-6）第160849号</td>
                        </tr>
                        <tr>
                            <th>一般労働者派遣事業許可</th>
                            <td>般27-305082</td>
                        </tr>
                        <tr>
                            <th>マネジメントシステム登録</th>
                            <td>ISO9001:2015/JISQ9001:2015　<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/iso9001_tourokusho.pdf" target="_blank">登録証[PDF]</a></td>
                        </tr>
                    </table>
                </div>
                </section>

                <!-- 沿革 -->
                <section id="sec-history" class="history-section">
                <header class="section-header">
                    <p class="section-en en">HISTORY</p>
                    <h2 class="section-ja">沿革</h2>
                </header>

                <div class="section-body">
                    <table class="c-table">
                        <tr>
                            <th>1995年</th>
                            <td>大阪市西区北堀江に株式会社シミズスポーツ（現・シミズオクト）大阪支店として設立</td>
                        </tr>
                        <tr>
                            <th>1998年</th>
                            <td>業務効率化のため大阪ドーム近くの大阪市西区千代崎に移転</td>
                        </tr>
                        <tr>
                            <th>2004年2月</th>
                            <td>平井ビル（大阪市東成区中道4丁目13番16号）に移転<br>
                                制作部サイン制作事業　開始</td>
                        </tr>
                        <tr>
                            <th>2013年9月</th>
                            <td>大阪スタジオ（大阪市港区石田1丁目4番11号）を開設<br>
                                制作資材管理業務の中核拠点とする</td>
                        </tr>
                        <tr>
                            <th>2015年6月</th>
                            <td>営業拠点として南船場事務所(大阪市中央区博労町4丁目4番11号　船場西KIDビル)に、業務部（運営・警備）　制作部（営業・デザイン・技術）が 移動<br>
                                平井ビルを玉造スタジオとして整備　美術制作・出力・製作の拠点とする</td>
                        </tr>
                        <tr>
                            <th>2022年7月</th>
                            <td>株式会社シミズオクトより分社化し、株式会社大阪シミズ設立</td>
                        </tr>
                    </table>
                </div>
                </section>

                <!-- リンク -->
                <section id="sec-links" class="links-section">
                <header class="section-header">
                    <p class="section-en en">LINKS</p>
                    <h2 class="section-ja">リンク</h2>
                </header>

                <div class="section-body">
                    <ul class="links-list">
                        <li>
                            <a href="https://www.shimizu-group.co.jp/" class="link-with-icon" target="_blank" rel="noopener noreferrer">株式会社シミズオクト</a>
                        </li>
                        <li>
                            <a href="https://os-members.com/" class="link-with-icon" target="_blank" rel="noopener noreferrer">アルバイト従業者専用サイト</a>
                        </li>
                    </ul>
                </div>
                </section>
            </div>
        </div><!-- /#contents -->
<?php get_footer(); ?>