<?php
// ----------------------------------------
// テーマ設定
// ----------------------------------------

// <title>タグを自動出力
add_theme_support( 'title-tag' );

// ----------------------------------------
// SEO（meta）
// ----------------------------------------
/**
 * ACFのSEOフィールドから meta description を取得
 * meta description：ACF入力があるときだけ返す
 * ACFフィールド名：meta_description
 */
function my_get_meta_description() {
    if ( ! function_exists('get_field') ) return '';
    $desc = get_field('meta_description');
    $desc = is_string($desc) ? trim($desc) : '';

    // 改行/連続スペースを整理
    $desc = preg_replace('/\s+/u', ' ', $desc);

    // 文字数目安（必要なら）
    if ( $desc !== '' ) {
        $desc = mb_substr($desc, 0, 160);
    }

    return $desc;
}

/**
 * ACFのSEOフィールドから meta keywords を取得
 * meta keywords：ACF入力があるときだけ返す
 * ACFフィールド名：meta_keywords
 */
function my_get_meta_keywords() {
    if ( ! function_exists('get_field') ) return '';
    $keywords = get_field('meta_keywords');
    $keywords = is_string($keywords) ? trim($keywords) : '';
    $keywords = preg_replace('/\s+/u', ' ', $keywords);
    return $keywords;
}

// ----------------------------------------
// body_class にbodyへスラッグ自動付与 ＋ 採用エリア判定
// ----------------------------------------
function add_slug_body_class( $classes ) {
  if ( is_page() ) {
    global $post;

    // ページスラッグ
    $classes[] = 'page-' . $post->post_name;

    // ▼ 採用エリアかどうか（/recruit とその配下すべて）
    $recruit_page = get_page_by_path( 'recruit' ); // スラッグが recruit の固定ページ
    if ( $recruit_page ) {
      $ancestors = get_post_ancestors( $post->ID );

      if (
        $post->ID === $recruit_page->ID ||             // recruit 自身
        in_array( $recruit_page->ID, $ancestors, true) // 子・孫ページ など
      ) {
        $classes[] = 'is-recruit-child';
      }
    }
  }

  return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// ----------------------------------------
// CSS / JS 読み込み
// ----------------------------------------
function mytheme_enqueue_assets() {

  $theme_uri = get_template_directory_uri();

  // ================================
  // CSS
  // ================================

  // リセットCSS
  wp_enqueue_style(
    'reset',
    $theme_uri . '/assets/css/reset.css',
    array(),
    '1.0'
  );

  // 共通CSS
  wp_enqueue_style(
    'theme-common',
    $theme_uri . '/assets/css/common.css',
    array( 'reset' ),
    '202602'
  );

  // トップページ → index.css / それ以外 → page.css
  if ( is_front_page() ) {
    wp_enqueue_style(
      'index',
      $theme_uri . '/assets/css/index.css',
      array( 'theme-common' ),
      '20260116'
    );
  } else {
    wp_enqueue_style(
      'page',
      $theme_uri . '/assets/css/page.css',
      array( 'theme-common' ),
      '202601'
    );
  }

  // 採用ページ（/recruit とその配下 & 詳細ページ）用CSS
  if (
    // recruitエリアの固定ページ（トップ / 子 / 孫 …）
    in_array( 'is-recruit-child', get_body_class(), true )
    // ＋ 新卒・中途カスタム投稿の詳細
    || is_singular( array( 'recruit_newgrad', 'recruit_midcareer' )
    )
  ) {
    wp_enqueue_style(
      'recruit',
      $theme_uri . '/assets/css/recruit.css',
      array( 'page' ),
      '20251216'
    );
  }

  // フォームページ（contact / entry）用CSS
  if ( is_page( array( 'contact', 'contact-confirm', 'contact-thanks', 'entry-newsnewgrad', 'entry-newsnewgrad-confirm', 'entry-newsnewgrad-thanks', 'entry-midcareer', 'entry-midcareer-confirm', 'entry-midcareer-thanks' ) ) ) {
    wp_enqueue_style(
      'form',
      $theme_uri . '/assets/css/form.css',
      array( 'page' ),
      '20251216'
    );
  }

  // Swiper 用CSS
  wp_enqueue_style(
    'swiper',
    'https://unpkg.com/swiper@7/swiper-bundle.min.css',
    array(),
    '7.0.0'
  );

  // Swiper カスタムCSS
  wp_enqueue_style(
    'swiper-custom',
    $theme_uri . '/assets/css/swiper.css',
    array( 'swiper' ),
    '202601'
  );

  // Googleフォント
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',
    array(),
    null
  );


  // ================================
  // JS（すべてフッター読み込み）
  // ================================

  // WordPress同梱の jQuery
  wp_enqueue_script( 'jquery' );

  // ScrollReveal
  wp_enqueue_script(
    'scrollreveal',
    'https://unpkg.com/scrollreveal',
    array(),
    null,
    true
  );

  // Swiper 本体
  wp_enqueue_script(
    'swiper',
    'https://unpkg.com/swiper@7/swiper-bundle.min.js',
    array(),
    '7.0.0',
    true
  );

  // テーマ共通JS（グロナビ・ハンバーガー・ScrollReveal設定など）
  wp_enqueue_script(
    'theme-common',
    $theme_uri . '/assets/js/common.js',
    array( 'jquery', 'scrollreveal', 'swiper' ),
    '20251218',
    true
  );

  // トップページ専用JS
  if ( is_front_page() ) {

    // トップページ専用
    wp_enqueue_script(
      'index',
      $theme_uri . '/assets/js/index.js',
      array( 'jquery', 'swiper', 'scrollreveal' ),
      '20251219',
      true
    );
  }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );

  // ================================
  /**
   * 職種（job_position）の値からカード画像のパスと alt を返すヘルパー
   * @param string $job_position  ACF の「職種」フィールドの value（例: jp_space_designer）
   * @return array ['src' => 画像URL, 'alt' => 代替テキスト]
   */
  // ================================
function my_recruit_card_image( $job_position ) {
  $base_uri = get_template_directory_uri() . '/assets/img/common/';

  // 職種ごとのマッピング
  $map = array(
    'jp_space_designer'        => array( 'file' => 'recruit_card01.jpg', 'alt' => '空間デザイナー' ),
    'jp_structural_designer'   => array( 'file' => 'recruit_card02.jpg', 'alt' => '建設構造設計者' ),
    'jp_material_manager'      => array( 'file' => 'recruit_card03.jpg', 'alt' => '資材管理者' ),
    'jp_mechanism'             => array( 'file' => 'recruit_card04.jpg', 'alt' => '機構' ),
    'jp_printing_operator'     => array( 'file' => 'recruit_card05.jpg', 'alt' => '印刷オペレーター' ),
    'jp_art_production'        => array( 'file' => 'recruit_card06.jpg', 'alt' => '美術制作' ),
    'jp_stage_art'             => array( 'file' => 'recruit_card07.jpg', 'alt' => '舞台美術' ),
    'jp_event_director_sales'  => array( 'file' => 'recruit_card08.jpg', 'alt' => 'イベントディレクター（企画営業）' ),
    'jp_operation_director'    => array( 'file' => 'recruit_card09.jpg', 'alt' => '運営ディレクター' ),
    'jp_security_director'     => array( 'file' => 'recruit_card10.jpg', 'alt' => '警備ディレクター' ),
    'jp_accounting'            => array( 'file' => 'recruit_card11.jpg', 'alt' => '経理' ),
    'jp_general_affairs_hr'    => array( 'file' => 'recruit_card12.jpg', 'alt' => '総務・人事' ),
    'jp_pr_recruit'            => array( 'file' => 'recruit_card13.jpg', 'alt' => '広報・採用' ),
    'jp_general_support'       => array( 'file' => 'recruit_card14.jpg', 'alt' => '庶務' ),
  );

  // 該当があればその画像、なければデフォルト
  if ( isset( $map[ $job_position ] ) ) {
    $file = $map[ $job_position ]['file'];
    $alt  = $map[ $job_position ]['alt'];
  } else {
    $file = 'recruit_card01.jpg';
    $alt  = '採用情報イメージ';
  }

  return array(
    'src' => $base_uri . $file,
    'alt' => $alt,
  );
}

/**
 * 中途トップカード（表面）の表示文言セット
 * $job_position は ACF の「値」（例：jp_space_designer）を想定
 */
function my_recruit_midcareer_front_meta( $job_position ) {

  $map = array(

    // 1) 空間デザイナー
    'jp_space_designer' => array(
      'title' => '空間デザイナー',
      'list'  => array(
        'イベント会場デザイン',
        '設計図面製作',
        'イメージパース製作',
      ),
    ),

    // 2) 建設構造設計者
    'jp_structural_designer' => array(
      'title' => '建設構造設計者',
      'list'  => array(
        '構造計算書作成',
        '各種構造計算',
        '各種申請作業',
      ),
    ),

    // 3) 資材管理者
    'jp_material_manager' => array(
      'title' => '資材管理者',
      'list'  => array(
        '資機材管理',
        '現場搬入出',
        '資機材メンテナンス',
      ),
    ),

    // 4) 機構
    'jp_mechanism' => array(
      'title' => '機構',
      'list'  => array(
        '機構設計・製作',
        '機構物施工',
        '機構物操作',
      ),
    ),

    // 5) 印刷オペレーター
    'jp_printing_operator' => array(
      'title' => '印刷オペレーター',
      'list'  => array(
        'グラフィックデザイン',
        '会場サイン資材印刷',
        'サイン関連物製作',
      ),
    ),

    // 6) 美術制作
    'jp_art_production' => array(
      'title' => '美術制作',
      'list'  => array(
        '演出小物製作',
        '小道具製作',
        'その他演出資材製作',
      ),
    ),

    // 7) 舞台美術
    'jp_stage_art' => array(
      'title' => '舞台美術',
      'list'  => array(
        '会場施工',
        '施工物撤去',
        '施工管理',
      ),
    ),

    // 8) 業イベントディレクター（企画営）
    'jp_event_director_sales' => array(
      'title' => '企画営業',
      'list'  => array(
        '施工・演出企画提案',
        '受発注管理',
        '催事立会',
      ),
    ),

    // 9) 運営ディレクター
    'jp_operation_director' => array(
      'title' => '運営ディレクター',
      'list'  => array(
        '運営計画・導線',
        'スタッフ手配',
        '当日運営統括',
      ),
    ),

    // 10) 警備ディレクター
    'jp_security_director' => array(
      'title' => '警備ディレクター',
      'list'  => array(
        '警備人員手配',
        '警備配置計画立案',
        '警備人員教育',
      ),
    ),

    // 11) 経理
    'jp_accounting' => array(
      'title' => '経理',
      'list'  => array(
        '企業経理',
        '入出金管理',
      ),
    ),

    // 12) 総務・人事
    'jp_general_affairs_hr' => array(
      'title' => '総務・人事',
      'list'  => array(
        '賃金管理',
        '社内人事考課',
        '従業員情報管理',
      ),
    ),

    // 13) 広報・採用
    'jp_pr_recruit' => array(
      'title' => '広報・採用',
      'list'  => array(
        '各種広告・広報対応',
        '各種求人対応',
      ),
    ),

    // 14) 庶務
    'jp_general_support' => array(
      'title' => '庶務',
      'list'  => array(
        '勤怠管理',
        '販売管理',
        '備品・書類管理',
      ),
    ),

  );

  // 未定義のときの保険
  return $map[ $job_position ] ?? array(
    'title' => '募集要項',
    'list'  => array('業務内容の確認', '条件の確認', 'エントリー'),
  );
}

// ----------------------------------------
// Contact Form 7
// ----------------------------------------

// 自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

/**
 * POST値を取り出してトリム（配列も文字列化）
 */
function my_cf7_get_post_value( $name ) {
    $raw = isset( $_POST[ $name ] ) ? $_POST[ $name ] : '';
    if ( is_array( $raw ) ) {
        $raw = implode( ' ', $raw );
    }
    return trim( (string) $raw );
}

/**
 * 必須項目のチェック & ふりがなのひらがなチェック
 * ＋ 職歴(2〜5)は「どれか入力されたら、その職歴内は全項目必須」
 */
function my_custom_required_and_furigana_validation( $result, $tag ) {
    $name  = $tag->name;
    $value = my_cf7_get_post_value( $name );

    // 対象フィールドとメッセージの対応表（ここはあなたのものをそのまま使ってOK）
    $required_messages = array(
      // --- お問い合わせフォーム ---
      'your-name'     => 'お名前を全角日本語でご入力ください。',
      'your-furigana' => 'お名前のふりがなを全角ひらがなでご入力ください。',
      'your-email'    => 'ご使用可能なメールアドレスを半角英数のみでご入力ください。',
      'your-tel'      => '電話番号を半角数字のみでご入力ください。',
      'contact-type'  => 'お問い合わせ項目をお選びください。',
      'your-message'  => 'お問い合わせ内容をご入力ください。',

      // --- エントリーフォーム共通 ---
      'entry-position'     => 'エントリーを希望する職種をご選択ください。',
      'birth-year'         => '「年」をお選びください。',
      'birth-month'        => '「月」をお選びください。',
      'birth-day'          => ' 「日」をお選びください。',
      'zip'                => '郵便番号をご入力ください。',
      'prefecture'         => '都道府県をお選びください。',
      'address1'           => '住所（市区町村・番地・建物名など）をご入力ください。',
      'your-email-confirm' => '確認用のメールアドレスをご入力ください。',
      'school-name'        => '卒業予定学校名をご入力ください。',
      'school-department'  => '学部（コース）をご入力ください。',
      'school-major'       => '学科（専攻）をご入力ください。',
      'graduation-date'    => '卒業予定年月をご入力ください。',

      // --- 中途：職歴1（常に必須） ---
      'history1-period'     => '在籍期間をご入力ください。',
      'history1-company'    => '会社名をご入力ください。',
      'history1-employment' => '雇用形態をお選びください。',
      'history1-detail'     => '職務内容をご入力ください。',

      // --- 中途：職歴2〜5（入力が始まったら必須） ---
      'history2-period'     => '在籍期間をご入力ください。',
      'history2-company'    => '会社名をご入力ください。',
      'history2-employment' => '雇用形態をお選びください。',
      'history2-detail'     => '職務内容をご入力ください。',

      'history3-period'     => '在籍期間をご入力ください。',
      'history3-company'    => '会社名をご入力ください。',
      'history3-employment' => '雇用形態をお選びください。',
      'history3-detail'     => '職務内容をご入力ください。',

      'history4-period'     => '在籍期間をご入力ください。',
      'history4-company'    => '会社名をご入力ください。',
      'history4-employment' => '雇用形態をお選びください。',
      'history4-detail'     => '職務内容をご入力ください。',

      'history5-period'     => '在籍期間をご入力ください。',
      'history5-company'    => '会社名をご入力ください。',
      'history5-employment' => '雇用形態をお選びください。',
      'history5-detail'     => '職務内容をご入力ください。',
    );

    /**
     * ▼ 職歴グループ必須の判定
     * - history1 は常に必須（下の通常必須チェックで拾う）
     * - history2〜5 は「どれか入力されてたら、その職歴内は全必須」
     */
    if ( preg_match( '/^history([1-5])-(period|company|employment|detail)$/', $name, $m ) ) {
      $idx = (int) $m[1];

      $group_fields = array(
          "history{$idx}-period",
          "history{$idx}-company",
          "history{$idx}-employment",
          "history{$idx}-detail",
      );

      // 職歴1は常に必須：この後の通常必須チェックでOK（ここでは判定不要）
      if ( $idx >= 2 ) {
          // グループ内のどれかが埋まっているか？
          $any_filled = false;
          $invalid_values = array( '', '選択してください', '-以下から選択してください-' );
          foreach ( $group_fields as $f ) {
              $v = my_cf7_get_post_value( $f );

              if ( ! in_array( $v, $invalid_values, true ) ) {
                  $any_filled = true;
                  break;
              }
          }

          // 入力が始まっていなければ、この職歴グループは任意 → 何もせず終了
          if ( ! $any_filled ) {
              return $result;
          }

          // 入力が始まっているのに、このフィールドが未入力ならエラー
          // select の「選択してください」も未入力扱いにする
          $is_empty = ( $value === '' || $value === '選択してください' );

          if ( $is_empty ) {
              $msg = $required_messages[ $name ] ?? '必須項目です。ご入力ください。';
              $result->invalidate( $tag, $msg );
              return $result;
          }
      }
    }

    // ▼ 通常の必須チェック（対象外フィールドは何もしない）
    if ( ! isset( $required_messages[ $name ] ) ) {
        return $result;
    }

    if ( $value === '' ) {
        $result->invalidate( $tag, $required_messages[ $name ] );
        return $result;
    }

    // ▼ ふりがなだけ「ひらがなチェック」
    if ( $name === 'your-furigana' ) {
        if ( ! preg_match( '/\A[ぁ-ゖー\s　]+\z/u', $value ) ) {
            $result->invalidate( $tag, 'ふりがなは「ひらがな」でご入力ください。' );
            return $result;
        }
    }

    return $result;
}

/**
 * 上の関数を、各フィールドタイプに紐づける
 * （必須は自前、形式チェックは CF7 本体におまかせ）
 */
add_filter( 'wpcf7_validate_text',      'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_text*',     'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_email',     'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_email*',    'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_tel',       'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_tel*',      'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_radio',     'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_radio*',    'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_textarea',  'my_custom_required_and_furigana_validation', 10, 2 );
add_filter( 'wpcf7_validate_textarea*', 'my_custom_required_and_furigana_validation', 10, 2 );

/**
 * メールアドレス確認用の一致チェック
 * your-email と your-email-confirm が一致しなければエラー
 */
function my_email_confirm_validation( $result, $tag ) {
    $name = $tag->name;

    // チェックするフィールドだけ対象
    if ( $name !== 'your-email-confirm' ) {
        return $result;
    }

    // 入力値を取得
    $email          = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
    $email_confirm  = isset($_POST['your-email-confirm']) ? trim($_POST['your-email-confirm']) : '';

    // 不一致ならバリデーションエラー
    if ( $email !== $email_confirm ) {
        $result->invalidate( $tag, 'メールアドレスが一致しません。' );
    }

    return $result;
}
add_filter( 'wpcf7_validate_email',  'my_email_confirm_validation', 20, 2 );
add_filter( 'wpcf7_validate_email*', 'my_email_confirm_validation', 20, 2 );

/**
 * select系のバリデーション：
 * - 生年月日（年/月/日）：未選択は各フィールドに個別エラー
 * - 生年月日（整合性）：年にメッセージ1つ、月日も赤枠だけ付与
 * - その他の必須select：未選択（"" or "選択してください"）はそのフィールドにエラー
 */
function my_validate_select_fields( $result, $tag ) {
    $name = $tag->name;

    // 未選択扱いの値（フォーム側で "選択してください|" にしてる想定）
    $invalid_values = array( '', '選択してください' );

    // 生年月日フィールド
    $birth_fields = array( 'birth-year', 'birth-month', 'birth-day' );

    // 生年月日以外で「必須にしたい select」
    // ※必要に応じて追加
    $required_select_fields = array(
        'prefecture',
        'history1-employment',
        // 例：他にも必須selectがあればここへ
    );

    // -----------------------------
    // ■ 生年月日以外：必須selectチェック
    // -----------------------------
    // （生年月日3つは下の専用処理でやる）
    if ( in_array( $name, $required_select_fields, true ) ) {
        $value = isset( $_POST[ $name ] ) ? trim( (string) $_POST[ $name ] ) : '';

        if ( in_array( $value, $invalid_values, true ) ) {
            $result->invalidate( $tag, '選択してください。' );
        }

        return $result;
    }

    // -----------------------------
    // ■ 生年月日の処理
    // -----------------------------

    // 年・月・日をまとめて取得
    $year  = isset( $_POST['birth-year'] )  ? trim( (string) $_POST['birth-year'] )  : '';
    $month = isset( $_POST['birth-month'] ) ? trim( (string) $_POST['birth-month'] ) : '';
    $day   = isset( $_POST['birth-day'] )   ? trim( (string) $_POST['birth-day'] )   : '';

    // ① 個別「未選択」エラー（年/月/日の各select直下に出す）
    if ( in_array( $name, $birth_fields, true ) ) {
        $value = isset( $_POST[ $name ] ) ? trim( (string) $_POST[ $name ] ) : '';

        if ( in_array( $value, $invalid_values, true ) ) {
            $field_label = array(
                'birth-year'  => '年',
                'birth-month' => '月',
                'birth-day'   => '日',
            );
            $msg = '「' . $field_label[ $name ] . '」を選択してください。';

            $result->invalidate( $tag, $msg );
            return $result;
        }
    }

    // ② 日付整合性チェック（年のタイミングでまとめて判定）
    if ( $name === 'birth-year' ) {

        // 年月日いずれか未選択なら整合性チェックはしない（①で出るため）
        if (
            in_array( $year,  $invalid_values, true ) ||
            in_array( $month, $invalid_values, true ) ||
            in_array( $day,   $invalid_values, true )
        ) {
            return $result;
        }

        // 数字以外を弾く
        if ( ! ctype_digit( $year ) || ! ctype_digit( $month ) || ! ctype_digit( $day ) ) {
            $msg = '生年月日を正しく選択してください。';

            // 年にメッセージ付きでエラー
            $result->invalidate( $tag, $msg );

            // 月・日も赤枠にする（メッセージなし）
            $contact_form = WPCF7_ContactForm::get_current();
            if ( $contact_form ) {
                foreach ( $contact_form->scan_form_tags() as $t ) {
                    if ( in_array( $t->name, array( 'birth-month', 'birth-day' ), true ) ) {
                        $result->invalidate( $t, '' );
                    }
                }
            }

            return $result;
        }

        // 存在しない日付（2/30 等）
        if ( ! checkdate( (int) $month, (int) $day, (int) $year ) ) {
            $msg = '生年月日を正しく選択してください。';

            // 年にメッセージ付きでエラー
            $result->invalidate( $tag, $msg );

            // 月・日も赤枠にする（メッセージなし）
            $contact_form = WPCF7_ContactForm::get_current();
            if ( $contact_form ) {
                foreach ( $contact_form->scan_form_tags() as $t ) {
                    if ( in_array( $t->name, array( 'birth-month', 'birth-day' ), true ) ) {
                        $result->invalidate( $t, '' );
                    }
                }
            }

            return $result;
        }
    }

    return $result;
}
add_filter( 'wpcf7_validate_select',  'my_validate_select_fields', 10, 2 );
add_filter( 'wpcf7_validate_select*', 'my_validate_select_fields', 10, 2 );

/**
 * Flamingo：親メニュー名を「受信内容」に変更 ＋ 親クリックで「受信メッセージ」を開く
 */
add_action('admin_menu', function () {
    global $menu, $submenu;

    // -----------------------------
    // 1) 親メニュー名を変更（Flamingo → 受信内容）
    // -----------------------------
    foreach ($menu as $i => $m) {
        // $m[2] が slug（Flamingo は 'flamingo'）
        if (!empty($m[2]) && $m[2] === 'flamingo') {
            $menu[$i][0] = '受信内容';
            break;
        }
    }

    // -----------------------------
    // 2) 親クリックで「受信メッセージ」表示になるようサブメニュー先頭を入れ替え
    //    （サブメニューの先頭が親クリック時の遷移先になるため）
    // -----------------------------
    if ( empty($submenu['flamingo']) || !is_array($submenu['flamingo']) ) return;

    $inbound = null;

    foreach ($submenu['flamingo'] as $idx => $item) {
        // $item[2] がサブメニューの slug（受信メッセージは 'flamingo_inbound'）
        if (isset($item[2]) && $item[2] === 'flamingo_inbound') {
            $inbound = $item;
            unset($submenu['flamingo'][$idx]);
            break;
        }
    }

    if ($inbound) {
        array_unshift($submenu['flamingo'], $inbound);
        $submenu['flamingo'] = array_values($submenu['flamingo']);
    }
}, 999);

// 編集者に Flamingo の受信メッセージ権限を付与
add_filter('flamingo_map_meta_cap', function($meta_caps){
  foreach($meta_caps as $key=>$value){
    if($value=='edit_users'){
      $meta_caps[$key] = 'edit_pages';
    }
  }
  return $meta_caps;
}, 10, 1);

// Flamingo のCSV出力の日付フォーマット調整
add_filter( 'flamingo_csv_quotation', 'customize_flamingo_csv_date_format', 9, 1 );
function customize_flamingo_csv_date_format( $value ) {
  if ( is_string( $value ) && preg_match( '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}/', $value ) ) {
    $datetime = DateTime::createFromFormat( DateTime::ATOM, $value );
    if ( $datetime ) {
      return $datetime->format( 'Y-m-d' );
    }
  }
  return $value;
}

// ----------------------------------------
// XML除外
// ----------------------------------------

//wp-sitemap-users-1.xml（ユーザー）
add_filter( 'wp_sitemaps_add_provider', function( $provider, $name ) {
    if ( 'users' === $name ) {
        return false;
    }
    return $provider;
}, 10, 2 );

//wp-sitemap-taxonomies-category-1.xml（カテゴリー）
add_filter( 'wp_sitemaps_taxonomies', function( $taxonomies ) {
    unset( $taxonomies['category'] );
    return $taxonomies;
} );