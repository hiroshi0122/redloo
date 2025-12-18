<?php
//**************************************************************
// BODY CLASS
//**************************************************************
add_filter('body_class', function ($classes) {
    global $template;

    if (basename($template) === 'page.php') {
        $classes[] = 'is-page-php';
    } else {
        $classes[] = 'is-custom-template';
    }

    return $classes;
});

//**************************************************************
// Gutenbergのフロントエンド用スタイルを無効化
//**************************************************************
function remove_gutenberg_css_conditionally() {
  if ( !is_single() ) { // single以外は削除
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
  }
}
add_action('wp_enqueue_scripts', 'remove_gutenberg_css_conditionally', 100);


//**************************************************************
// Gutenberg編集画面のUI設定（余白・外観ツールなど）　渋井追加
//**************************************************************
add_action('after_setup_theme', function () {
	add_theme_support('wp-block-styles');
	add_theme_support('appearance-tools');
	add_theme_support('spacing'); 
	add_theme_support('layout');
});



//**************************************************************
// admin screen setup
//**************************************************************
// 投稿の管理画面から、アイキャッチ画像を登録する場所を作る
add_theme_support('post-thumbnails'); // icatch表示

add_action('after_setup_theme', function () {
  add_theme_support('post-thumbnails');
});


add_action('admin_init', function () {
  $types = ['products']; // ここに対象のスラッグ並べる
  foreach ($types as $pt) {
    add_filter("manage_{$pt}_posts_columns", function ($columns) {
      $new = [];
	foreach ($columns as $key => $value) {
		$new[$key] = $value;
		if ($key === 'title') { // title列の後に挿入
		$new['thumbnail'] = 'アイキャッチ';
		}
	}
  return $new;
    });
    add_action("manage_{$pt}_posts_custom_column", function ($column, $post_id) {
      if ($column === 'thumbnail') {
        echo has_post_thumbnail($post_id)
          ? get_the_post_thumbnail($post_id, 'thumbnail')
          : '—';
      }
    }, 10, 2);
  }
});

// 見た目の幅を調整（任意）
add_action('admin_head', function () {
  echo '<style>
    .column-thumbnail{width:70px}
    .column-thumbnail img{width:60px;height:auto;border-radius:4px}
  </style>';
});




//**************************************************************
// slug ID 取得
//**************************************************************
function get_slug_id() {
	$post_obj =  $GLOBALS['wp_the_query']->get_queried_object();
	$slug = '';
	if (is_front_page()) {
		$slug = 'top';
		if(is_page() && get_post( get_the_ID() )->post_name) {
			$slug = $post_obj->post_name;
		}
	} elseif (is_page()) {
		$slug = $post_obj->post_name;
	} elseif (is_category()) {
		$slug = $post_obj->category_nicename;
	}  elseif (is_tag()) {
		$slug = $post_obj->slug;
	} elseif (is_singular()) {
		$slug = $post_obj->post_name;
	} elseif (is_post_type_archive()) {
		$slug = get_post_type_object(get_post_type())->name;
	} elseif (is_search()) {
		$slug  = $GLOBALS['wp_the_query']->posts ? 'search-results' : 'search-no-results';
	} elseif (is_404()) {
		$slug = 'error404';
	}
	return $slug;
}


//**************************************************************
// create Token
//**************************************************************
function getCSRFToken()
{
	return sha1(uniqid(rand(), true));
}


//**************************************************************
// 西暦 or 和暦 変換
//**************************************************************
function convGtJDate($year) {

	if ($year >= 2019) {
		$gengo = '令和';
		$wayear = $year - 2018;
	} elseif ($year >= 1989) {
		$gengo = '平成';
		$wayear = $year - 1988;
	} elseif ($year >= 1926) {
		$gengo = '昭和';
		$wayear = $year - 1925;
	} elseif ($year >= 1912) {
		$gengo = '大正';
		$wayear = $year - 1911;
	} else {
		$gengo = '明治';
		$wayear = $year - 1868;
	}
	switch ($wayear) {
		case 1:
		$wadate = $gengo.'元年';
		break;
		default:
		$wadate = $gengo.sprintf("%02d", $wayear).'年';
	}
	return $wadate;
}
function convJtGDate($src) {
	$a = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
	$g = mb_substr($src, 0, 2, 'UTF-8');
	array_unshift($a, $g);
	if (($g !== '明治' && $g !== '大正' && $g !== '昭和' && $g !== '平成'&& $g !== '令和')
	|| (str_replace($a, '', $src) !== '年月日' && str_replace($a, '', $src) !== '元年月日')) return false;
	$y = strtok(str_replace($g, '', $src), '年月日');
	$m = strtok('年月日');
	$d = strtok('年月日');
	if (mb_strpos($src, '元年') !== false) $y = 1;
	if ($g === '令和') $y += 2018;
	elseif ($g === '平成') $y += 1988;
	elseif ($g === '昭和') $y += 1925;
	elseif ($g === '大正') $y += 1911;
	elseif ($g === '明治') $y += 1868;
	if (strlen($y) !== 4 || strlen($m) !== 2 || strlen($d) !== 2 || !@checkdate($m, $d, $y)) return false;
	return $y.'/'.$m.'/'.$d;
}

//**************************************************************
// 投稿抜粋の文字数をPCとSPで分岐する
//**************************************************************
function custom_excerpt_length($length) {
    if (wp_is_mobile()) {
        return 100; // モバイルの場合の抜粋の文字数
    } else {
        return 100; // PCの場合の抜粋の文字数
    }
}

function custom_excerpt_more($more) {
    return '...';
}

function custom_trim_excerpt($text, $length) {
    if (mb_strlen($text) > $length) {
        $text = mb_substr($text, 0, $length) . '...';
    }
    return $text;
}

// デフォルトの抜粋長を変更
add_filter('excerpt_length', 'custom_excerpt_length', 999);
add_filter('excerpt_more', 'custom_excerpt_more');


//**************************************************************
// 投稿　次／前の投稿URL取得
//**************************************************************
function get_adjacent_post_url( $previous = true ) {
	$post = get_adjacent_post( false, '', $previous );  // 2get_adjacent_post()は隣接する投稿を取得する関数で、第3引数で前後を指定
	$url  = '';
	if( !empty( $post ) ) {
		$url = [
			'title' => $post->post_title, // 件名取得
			'url' => get_permalink( $post->ID ) // URL取得
		];
	}
	return $url;
}


//**************************************************************
// スラッグの日本語名禁止
//**************************************************************
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
	if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
		$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
	}
	return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );



//**************************************************************
// 管理画面 投稿一覧　カラムのカスタマイズ
//**************************************************************
// サムネイル、ID、文字数の表示
function add_posts_columns($columns) {

	$columns['thumbnail'] = 'アイキャッチ';
	$columns['postid'] = 'ID';
	$columns['count'] = '字数';
	$columns['pickUp'] = "ピックアップ";

	return $columns;
}

function add_posts_columns_row($column_name, $post_id) {
	if ( 'thumbnail' == $column_name ) {
		$thumb = get_the_post_thumbnail($post_id, array(60,60), 'thumbnail');
		echo ( $thumb ) ? $thumb : '－';
	} elseif ( 'postid' == $column_name ) {
		echo $post_id;
	} elseif ( 'count' == $column_name ) {
		$count = mb_strlen(strip_tags(get_post_field('post_content', $post_id)));
		echo $count;
	}
}
add_filter( 'manage_posts_columns', 'add_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_posts_columns_row', 10, 2 );


// 投稿画面の表示のカスタマイズ
function colwidth_css(){
	?><style>
	th#title{
		width:240px;
	}

	th#author,th#tags,th#categories{
		width:100px;
	}

	th#date{
		width:110px;
	}

	th#post_thumb{
		width:30px;
	}
	td.column-post_thumb img{
		max-height:32px!important;
	}
</style><?php
}
add_action('admin_head','colwidth_css');




//**************************************************************
// 投稿に紐づくタグ一覧を取得する
//**************************************************************
function display_post_terms($post_id, $taxonomy) {
    $terms = get_the_terms($post_id, $taxonomy);

    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            $term_link = get_term_link($term->term_id, $taxonomy);
            echo '<a href="' . esc_url($term_link) . '" class="genre-tag">' . esc_html($term->name) . '</a>';
        }
    }
}


//**************************************************************
// CONTACT FORM 7 設定
//**************************************************************
// 改行やスペースなどで勝手にbrなどを入れない
add_filter( 'wpcf7_autop_or_not', '__return_false' );
add_filter( 'wpcf7_use_dirhtml', '__return_true' );



add_filter('wpcf7_validate_text', 'validate_split_tel', 10, 2);
add_filter('wpcf7_validate_text*', 'validate_split_tel', 10, 2);

function validate_split_tel($result, $tag) {

    // tel-1 の時だけチェックを実行
    if ($tag->name !== 'tel-1') return $result;

    $tel1 = sanitize_text_field($_POST['tel-1'] ?? '');
    $tel2 = sanitize_text_field($_POST['tel-2'] ?? '');
    $tel3 = sanitize_text_field($_POST['tel-3'] ?? '');

    $phone = $tel1 . $tel2 . $tel3;

    if (!preg_match('/^\d{10,11}$/', $phone)) {
        $result->invalidate($tag, '正しい電話番号を入力してください。');
    }

    return $result;
}


//**************************************************************
// オリジナルブロックの登録
//**************************************************************
add_action('init', function () {
    register_block_pattern(
        'redloo/notice-box',
        [
            'title'       => '注意書きボックス',
            'description' => 'ボックス形式の注意文',
            'content'     => '
<!-- wp:group {"className":"notice-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group notice-box">
    <!-- wp:heading {"level":4} -->
    <h4>タイトルを入力</h4>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>ここに注意書きを入力してください。</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
            ',
        ]
    );
});


