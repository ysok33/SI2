<?php
require '/wordpress/wp-load.php';

$pages = [
  'top' => [
    'title'   => 'トップ',
    'content' => ''
  ],
  'company' => [
    'title'   => '会社概要',
    'content' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">会社概要</h1><!-- /wp:heading --><!-- wp:table {"className":"is-style-stripes"} --><figure class="wp-block-table is-style-stripes"><table><tbody><tr><th>会社名</th><td>SIgroup株式会社</td></tr><tr><th>設立</th><td>2014年10月（平成26年10月）</td></tr><tr><th>資本金</th><td>2,000万円</td></tr><tr><th>代表取締役社長</th><td>角南 慶英</td></tr><tr><th>代表取締役副社長</th><td>稲谷 健太</td></tr><tr><th>所在地</th><td>〒700-0826 岡山県岡山市北区厚生町2-11-14 3F 2号</td></tr><tr><th>電話</th><td>086-238-5396</td></tr><tr><th>FAX</th><td>086-238-5397</td></tr><tr><th>営業時間</th><td>9:00〜17:00（平日）</td></tr><tr><th>事業内容</th><td>労働者派遣事業／有料職業紹介事業／通信事業／イベント事業</td></tr><tr><th>労働者派遣事業許可番号</th><td>第33-300657号</td></tr><tr><th>有料職業紹介事業許可番号</th><td>第33-ユ-300342号</td></tr><tr><th>適格請求書発行事業者登録番号</th><td>T3260003001669</td></tr><tr><th>主要取引先</th><td>NHK／SBモバイルサービス株式会社／ソフトバンク株式会社</td></tr><tr><th>取引銀行</th><td>中国銀行／香川銀行／日本政策金融公庫</td></tr><tr><th>監査役</th><td>二垣 幸広（税理士・経営革新等支援機関認定 / 株式会社二垣経営研究所 代表）</td></tr></tbody></table></figure><!-- /wp:table -->'
  ],
  'services' => [
    'title'   => '事業内容',
    'content' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">事業内容</h1><!-- /wp:heading --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">労働者派遣事業</h2><!-- /wp:heading --><!-- wp:paragraph --><p>許可番号：第33-300657号<br>NHK・ソフトバンクなどの大手企業を中心に、即戦力となる人材を派遣。お客様のニーズに合わせた人材マッチングを実現します。</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">有料職業紹介事業</h2><!-- /wp:heading --><!-- wp:paragraph --><p>許可番号：第33-ユ-300342号<br>求職者と求人企業の双方にとって最適なマッチングを提供。個人の強みと企業の求める能力を丁寧にすり合わせます。</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">通信事業</h2><!-- /wp:heading --><!-- wp:paragraph --><p>SBモバイルサービス株式会社・ソフトバンク株式会社と連携し、法人・個人向けの通信サービスを提供しています。</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">イベント事業</h2><!-- /wp:heading --><!-- wp:paragraph --><p>企業イベント・販促イベントの企画・運営・スタッフ手配まで一括対応。NHKをはじめとする実績を活かし、高品質なイベント運営をサポートします。</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns -->'
  ],
  'recruit' => [
    'title'   => '採用情報',
    'content' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">採用情報</h1><!-- /wp:heading --><!-- wp:paragraph --><p>SIgroup株式会社では、一緒に成長してくれる仲間を募集しています。あなたの働き方に合わせた雇用形態をご用意しています。</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">SIgroupで働く魅力</h2><!-- /wp:heading --><!-- wp:list --><ul class="wp-block-list"><li><strong>フレックスタイム制度</strong>：始業・終業時刻はご自身で決定可能</li><li><strong>有給休暇</strong>：入社半年後から10日付与</li><li><strong>柔軟な雇用形態</strong>：出勤時間・出勤日数・給与体系を個人に合わせて設計</li><li><strong>年収増加希望・所得制限希望</strong>など、多様な働き方のニーズに対応</li><li>NHK・ソフトバンクなど大手取引先との安定した就業環境</li></ul><!-- /wp:list --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">応募・お問い合わせ</h2><!-- /wp:heading --><!-- wp:paragraph --><p>採用に関するお問い合わせは、下記よりお気軽にご連絡ください。</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">採用について問い合わせる</a></div><!-- /wp:button --></div><!-- /wp:buttons -->'
  ],
  'contact' => [
    'title'   => 'お問い合わせ',
    'content' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">お問い合わせ</h1><!-- /wp:heading --><!-- wp:paragraph --><p>SIgroup株式会社へのご相談・ご質問は、以下の方法でお気軽にご連絡ください。</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">お電話でのお問い合わせ</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong>TEL：086-238-5396</strong><br>受付時間：9:00〜17:00（平日）</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">FAX</h2><!-- /wp:heading --><!-- wp:paragraph --><p>FAX：086-238-5397</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">所在地</h2><!-- /wp:heading --><!-- wp:paragraph --><p>〒700-0826<br>岡山県岡山市北区厚生町2-11-14 3F 2号</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">取引・業務に関するご相談</h2><!-- /wp:heading --><!-- wp:paragraph --><p>人材派遣・職業紹介・通信・イベント事業に関するご相談は、お電話にてお気軽にお問い合わせください。担当者より折り返しご連絡いたします。</p><!-- /wp:paragraph -->'
  ],
  'privacy-policy' => [
    'title'   => 'プライバシーポリシー',
    'content' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">プライバシーポリシー</h1><!-- /wp:heading --><!-- wp:paragraph --><p>SIgroup株式会社（以下「当社」）は、お客様の個人情報の保護を重要な責務と考え、以下の方針に基づき適切に取り扱います。</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">1. 個人情報の収集・利用目的</h2><!-- /wp:heading --><!-- wp:paragraph --><p>当社は、お問い合わせ対応・採用選考・サービス提供・契約履行等の目的でのみ個人情報を収集・利用します。</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">2. 個人情報の第三者提供</h2><!-- /wp:heading --><!-- wp:paragraph --><p>法令に基づく場合を除き、ご本人の同意なく第三者に個人情報を提供いたしません。</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">3. 個人情報の管理</h2><!-- /wp:heading --><!-- wp:paragraph --><p>個人情報への不正アクセス・紛失・漏洩等を防ぐため、適切な安全管理措置を講じます。</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">4. お問い合わせ</h2><!-- /wp:heading --><!-- wp:paragraph --><p>個人情報の取り扱いに関するお問い合わせは、以下までご連絡ください。<br>SIgroup株式会社<br>TEL：086-238-5396（受付：9:00〜17:00 平日）</p><!-- /wp:paragraph -->'
  ]
];

$front_id = null;
foreach ($pages as $slug => $data) {
  $existing = get_page_by_path($slug);
  if ($existing) {
    wp_update_post([
      'ID'           => $existing->ID,
      'post_content' => $data['content'],
      'post_status'  => 'publish',
    ]);
    $id = $existing->ID;
  } else {
    $id = wp_insert_post([
      'post_title'   => $data['title'],
      'post_name'    => $slug,
      'post_content' => $data['content'],
      'post_status'  => 'publish',
      'post_type'    => 'page',
    ]);
  }
  if ($slug === 'top') $front_id = $id;
}

if ($front_id) {
  update_option('show_on_front', 'page');
  update_option('page_on_front', $front_id);
}

echo 'Pages created/updated successfully.';
?>
