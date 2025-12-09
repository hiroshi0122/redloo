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

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = [
  'post_type' => 'post',
  'posts_per_page' => 10,
  'paged'          => $paged,
];

$query = new WP_Query($args);


get_header(); ?>


<?php // ARCHIVE FIRST SECTION // *********************************************************** // ?>
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


<?php // POST CONTENT SECTION // *********************************************************** // ?>
<section class="post-content-sec">
	<div class="container">		
		<?php if ($query->have_posts()) : ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
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
						<div class="d-flex align-center gap-3">
							<div class="post-categories">
								<?php
								$cats = get_the_category();
								if ($cats) :
								foreach ($cats as $cat) :
								?>
									<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="cat">
									<?php echo esc_html($cat->name); ?>
									</a>
								<?php
								endforeach;
								endif;
								?>
							</div>
							<span class="date"><?php echo get_the_date('Y.n.j'); ?></span>
						</div>	
						
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

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
					'total'     => $query->max_num_pages,
					'mid_size' => 2,
					'end_size' => 1,
					'current' => ($paged ? $paged : 1),
					'prev_text' => '前へ',
					'next_text' => '次へ',
				));
			?>
		</div>
		</div>
	</section>
	<?php wp_reset_postdata(); ?>
</section>




<?php //** PAGINATION ****************************//?>


<?php get_footer();
