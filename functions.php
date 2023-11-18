<?php

add_action('wp_enqueue_scripts', 'my_script_init');

/*===== WordPress標準機能 =====*/
function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support(
    'html5',
    array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/*===== CSSとJavaScriptの読み込み =====*/
function my_script_init()
{
  //グーグルフォント
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

  // css
  wp_enqueue_style( 'swiper-css', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.0.0');
  wp_enqueue_style( 'my-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

  // js
  // wp_deregister_script('jquery');
  wp_enqueue_script( 'jquery-js', '//code.jquery.com/jquery-3.6.0.js', array(), '1.1.1', true );
	wp_enqueue_script( 'swiper-js', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '1.1.1', true );
  wp_enqueue_script( 'inview-js', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array( 'jquery' ), '1.1.1', true );
  wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.1.1', true);

  // gsap
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), '3.11.5', true);
  wp_enqueue_script( 'scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array('gsap'), '3.11.5', true);
}
add_action('wp_enqueue_script', 'my_script_init');


/*===== 管理メニューの「投稿」に関する表示を「ブログ」に変更 =====*/
function change_post_menu_label()
{
  global $menu;
  global $submenu;
  $menu[5][0] = 'ブログ';
  $submenu['edit.php'][5][0] = 'ブログ一覧';
  $submenu['edit.php'][10][0] = '新しいブログ';
  $submenu['edit.php'][16][0] = 'タグ';
}

/*===== 管理画面上の「投稿」に関する表示を「blog」に変更 =====*/
function change_post_object_label()
{
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'ブログ';
  $labels->singular_name = 'blog';
  $labels->add_new = _x('追加', 'blog');
  $labels->add_new_item = 'blogの新規追加';
  $labels->edit_item = 'blogの編集';
  $labels->new_item = '新規blog';
  $labels->view_item = 'blogを表示';
  $labels->search_items = 'blogを検索';
  $labels->not_found = '記事が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');

/*===== エディタ非表示 (特定の投稿ページ) =====*/
function remove_wysiwyg()
{
  remove_post_type_support('campaign', 'editor');
  remove_post_type_support('voice', 'editor');
  //複数ある場合は追記する
}
add_action('init', 'remove_wysiwyg');

/*===== エディタ非表示 (特定の固定ページ) =====*/
add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
  if ($post->post_type === 'page') {
    if (in_array($post->post_name, ['faq', 'about', 'price', 'campaign', 'information', 'contact', 'thanks', 'sitemap', 'blog'])) {
      remove_post_type_support('page', 'editor');
      return false;
    }
  }
  return $use_block_editor;
}, 10, 2);


/*===== 表示数変更 =====*/
function change_posts_per_page($query)
{
  // キャンペーン
  if (is_admin() || !$query->is_main_query())
    return;
  if ($query->is_post_type_archive('campaign')) { //カスタム投稿タイプを指定
    $query->set('posts_per_page', '2'); //表示件数を指定
  }
  if ($query->is_tax('campaign_category')) { //カスタムタクソノミーを指定
    $query->set('posts_per_page', '2'); //表示件数を指定
  }
  //ヴォイス
  if ($query->is_post_type_archive('voice')) { //カスタム投稿タイプを指定
    $query->set('posts_per_page', '6'); //表示件数を指定
  }
  if ($query->is_tax('voice_category')) { //カスタムタクソノミーを指定
    $query->set('posts_per_page', '6'); //表示件数を指定
  }
}
add_action('pre_get_posts', 'change_posts_per_page');

/*===== カスタムタクソノミー =====*/
function custom_taxonomy_init() {
  register_taxonomy('campaign-category', 'post', array(
      'label' => 'Campaign Categories',
      'hierarchical' => true,
      'rewrite' => true,
  ));
}
add_action('init', 'custom_taxonomy_init');
/*===== カスタムタクソノミー並び替え =====*/
function taxonomy_orderby_description($orderby, $args)
{
  if ($args['orderby'] == 'description') {
    $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter('get_terms_orderby', 'taxonomy_orderby_description', 10, 2);


/*===== Contact Form 7の自動pタグ無効 =====*/
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}
/**
 * エディタで自動生成されるpタグとbrタグを解除
 */
function disable_output()
{
    remove_filter('the_content', 'wpautop');  // 本文欄
    // remove_filter('the_title', 'wpautop');  // タイトル蘭
    // remove_filter('comment_text', 'wpautop');  // コメント欄
    // remove_filter('the_excerpt', 'wpautop');  // 抜粋欄
}
add_action('init', 'disable_output');

/*===== サンクスページへ遷移 =====*/
add_action('wp_footer', 'add_origin_thanks_page');
function add_origin_thanks_page()
{
  echo <<< EOC
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'http://diving.local/contact/thanks/';
      }, false );
    </script>
   EOC;
}


/*===== スパムメール対策 =====*/
// Contact Form7のお問い合せフォーム項目にひらがなが無ければ送信不可
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);
function wpcf7_validation_textarea_hiragana($result, $tag)
{
  $name = $tag['name'];
  $value = (isset($_POST[$name])) ? (string) $_POST[$name] : '';
  if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
    $result['valid'] = false;
    $result['reason'] = array($name => 'エラー：こちらの内容は送信できません。');
  }
  return $result;
}

/*===== Contact Form 7 ドロップダウンリストに投稿タイトルをいれる =====*/
function custom_selectlist($tag, $unused)
{
  // Check if the tag name is 'tag-name'
  if ($tag['name'] !== 'tag-name') {
    return $tag;
  }

  // Define the query parameters
  $query_args = array(
    'numberposts' => -1,
    'post_type' => 'campaign',
    'orderby' => 'ID',
    'order' => 'ASC',
  );

  // Get the posts using get_posts()
  $test_posts = get_posts($query_args);

  // If no posts are found, return the original tag
  if (empty($test_posts)) {
    return $tag;
  }

  // Initialize arrays
  $tag['raw_values'] = $tag['values'] = $tag['labels'] = array();

  // Populate the arrays with post titles
  foreach ($test_posts as $test_post) {
    $post_title = $test_post->post_title;
    $tag['raw_values'][] = $post_title;
    $tag['values'][] = $post_title;
    $tag['labels'][] = $post_title;
  }

  return $tag;
}

// Add a filter to override the form tag
add_filter('wpcf7_form_tag', 'custom_selectlist', 10, 2);


/*===== ぱんくずタイトル書き換え =====*/
function my_bcn_breadcrumb_title($title, $this_type, $this_id)
{
  if (is_singular('post')) {
    $title = 'ブログ詳細';
  }
  return $title;
};
add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3);

/*===== 人気記事 =====*/
// 閲覧数セット
function setPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);

  if ($count == "") {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// クローラーカウントしない場合は追加
function is_bot()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];

  $bot = array(
    'Googlebot',
    'Yahoo! Slurp',
    'Mediapartners-Google',
    'msnbot',
    'bingbot',
    'MJ12bot',
    'Ezooms',
    'pirst; MSIE 8.0;',
    'Google Web Preview',
    'ia_archiver',
    'Sogou web spider',
    'Googlebot-Mobile',
    'AhrefsBot',
    'YandexBot',
    'Purebot',
    'Baiduspider',
    'UnwindFetchor',
    'TweetmemeBot',
    'MetaURI',
    'PaperLiBot',
    'Showyoubot',
    'JS-Kit',
    'PostRank',
    'Crowsnest',
    'PycURL',
    'bitlybot',
    'Hatena',
    'facebookexternalhit',
    'NINJA bot',
    'YahooCacheSystem',
    'NHN Corp.',
    'Steeler',
    'DoCoMo',
  );

  foreach ($bot as $bot) {
    if (stripos($ua, $bot) !== false) {
      return true;
    }
  }

  return false;
}

// 閲覧数取得
function getPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);

  if ($count == "") { //カウントがなければ0をセット
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }

  return $count . ' Views';
}

// 管理画面に閲覧数項目を追加する
function count_add_column($columns)
{
  $columns['views'] = '閲覧数';
  return $columns;
}
add_filter('manage_posts_columns', 'count_add_column'); // 投稿ページに追加


// 管理画面にページビュー数を表示する
function count_add_column_data($column, $post_id)
{
  switch ($column) {
    case 'views':
      echo getPostViews($post_id); // 閲覧数を取得する
      break;
  }
}
add_action('manage_posts_custom_column', 'count_add_column_data', 10, 2); // 投稿ページに追加

// 閲覧数項目を並び替えれる要素にする
function my_add_sort($columns)
{
  $columns['views'] = 'views_sort';
  return $columns;
}
add_action('pre_get_posts', 'my_add_sort_by_meta', 1);

// 閲覧数クリックで並び替えを実行
function my_add_sort_by_meta($query)
{
  if ($query->is_main_query() && ($orderby = $query->get('orderby'))) {
    switch ($orderby) {
      case 'views_sort':
        $query->set('meta_key', 'post_views_count');
        $query->set('orderby', 'meta_value_num');
        break;
    }
  }

}

// テキストエリアの最後の[...]を消す。
function new_excerpt_more($more) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

//コンタクトフォーム キャンペーン ドロップダウンリスト
function custom_get_select_values($values, $options, $args)
{
	if (in_array('GetOccupation', $options)) {
		// データを取得する
		$args = array(
			'post_type' => 'campaign',
			'posts_per_page' => -1,
		);
		$custom_posts = get_posts($args);
		if ($custom_posts) {
			$values = array();
			foreach ($custom_posts as $post) {
				$values[] = $post->post_title;
			}
		}
	}
	return $values;
}
add_filter('wpcf7_form_tag_data_option', 'custom_get_select_values', 10, 3);
