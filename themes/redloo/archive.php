<?php

/**
 * Home template file
 *
 * @link https:/xxxxx/{id}
 *
 * @package RedLoo
 * @since 2025.12.8
 * @version 1.0
 *
 * 
 **/


// 現在表示しているカスタムポストタイプを取得
$post_type = get_post_type();
//カテゴリー一覧用のカテゴリー取得
$categories = get_categories();
//カテゴリーアーカイブページでカテゴリーIDを取得
$cat_id = get_query_var('cat');
//カテゴリーアーカイブページでカテゴリースラッグを取得
$cat_slug = get_query_var('category_name');
//先ほど取得したカテゴリーIDをget_category()に渡す
$cat = get_category($cat_id);

get_header(); ?>


<section class="archive-first-sec pb-0">
	<div class="container">
		<div class="text-side">
			<div class="lower-title-template blue">
				<div class="title">
					<h1>BLOG</h1>
					<span>お知らせ・コラム</span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="post-content-sec">
	<div class="container">		
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post-content row gap-5 align-center">
					<div class="image-side col-12 col-md-3">
						<a class="parmalink" href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('small'); ?>
							<?php endif; ?>
						</a>
					</div>
					<div class="text-side col-12 col-md-9">
						<a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<span class="date"><?php echo get_the_date('Y.n.j'); ?></span>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>





<?php //** PAGINATION ****************************//
?>
<section class="pagination pt-0">
	<div class="container">


		<div class="pagenation-nav">
			<?php //ページリスト表示処理
			global $wp_rewrite;
			$paginate_base = get_pagenum_link(1);

			if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
				$paginate_format = '';
				$paginate_base = add_query_arg('paged', '%#%');
			} else {
				$paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
					user_trailingslashit('page/%#%/', 'paged');
				$paginate_base .= '%_%';
			}

			echo paginate_links(array(
				'base' => $paginate_base,
				'format' => $paginate_format,
				'mid_size' => 2,
				'end_size' => 1,
				'current' => ($paged ? $paged : 1),
				'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
				'next_text' => '<i class="fa-solid fa-angle-right"></i>',
			));
			?>
		</div>
	</div>
</section>

<?php get_footer();
