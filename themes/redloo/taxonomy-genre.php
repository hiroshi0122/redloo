<?php

/**
 * Home template file
 *
 * @link https:/xxxxx/{id}
 *
 * @package RedLoo
 * @since 2025.12.2
 * @version 1.0
 *
 * 
 **/

$term = get_queried_object();

// ▼ デフォルト値
$name        = $term->name;
$slug        = $term->slug;
$description = term_description($term->term_id, 'genre');

// ▼ ACF（タームの追加フィールド）
$genre_en = get_field('genre_en', 'genre_' . $term->term_id);
$genre_img = get_field('genre_img', 'genre_' . $term->term_id);
$features = get_field('features', 'genre_' . $term->term_id); 



// カテゴリー一覧用
$tax_slug = 'genre'; 
$terms = get_terms([
    'taxonomy'   => $tax_slug,
    'hide_empty' => true,
	'meta_key'   => 'order',
    'orderby'    => 'meta_value_num',
    'order'      => 'ASC',
]);

// // 現在のタクソノミーの取得
// $now_term = get_queried_object();

// var_dump($now_term);
// var_dump($categories);

get_header(); ?>


<main class="typography">
<?php // LOWER FIRST SECTION // *********************************************************** // ?>
<section class="pb-0 archive-products-sec" style="--genre-img: url('<?php echo wp_kses_post($genre_img); ?>');">
    <div class="container-fluid p-0">
        <div class="row align-center">
            <div class="col-12 col-md-7 text-side">
                <div class="lower-title-template mb-2">
                    <div class="title">
                        <h1 class="split"><?php echo esc_html($genre_en); ?></h1>
                        <span class="blur">商品一覧｜<?php echo esc_html($name); ?></span>
                    </div>
                    <p class="mb-3"><?php echo wp_kses_post($description); ?></p>
                </div>
				<?php if (array_filter($features)) : ?>
					<ul class="genre-features mb-3">
						<?php foreach ($features as $feature) : ?>
							<?php if (!empty($feature)) : ?>
								<li><?= esc_html($feature); ?></li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<p class="mb-3">ウェットスーツは、「スタイル」「タイプ」「生地」「厚み」の4つを基本に、<br class="d-none d-sm-block">カラーやロゴなどのカスタマイズも選べます。</p>
				<div class="btn-area gap-y-2 gap-x-4">
					<a class="btn-black" href="/order-guide">基本仕様の選び方</a>
					<a class="btn-black" href="/order-flow">ご注文の流れ</a>
				</div>
            </div>
            <div class="col-12 col-md-5 image-side">
                <img src="<?php echo wp_kses_post($genre_img); ?>" alt="製品一覧イメージ">
            </div>
        </div>
    </div>
</section>
<?php
    get_template_part('template-parts/components/marquee', null, [
    'text' => 'ORIGINAL FIT! GET YOUR CUSTOM WETSUIT',
    'modifier' => ''
    ]);
?>



<?php // INDEX PRODUCTS SECTION // *********************************************************** // ?>
<section class="index-products-sec">
	<div class="container">
		<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
			<div class="products-tax-nav">
				<p class="text-center mb-1">製品ジャンル</p>
				<ul class="d-flex flex-wrap gap-1 gap-md-3 justify-center">
					<li>
						<a href="<?php echo esc_url( get_post_type_archive_link('products') ); ?>"
						class="<?php echo is_tax( $tax_slug ) ? '' : 'is-current'; ?>">
							ALL
						</a>
					</li>

					<?php foreach ( $terms as $term ) : ?>
						<li>
							<a href="<?php echo esc_url( get_term_link( $term ) ); ?>"
							class="<?php echo ( is_tax( $tax_slug ) && get_queried_object_id() === $term->term_id ) ? 'is-current' : ''; ?>">
								<?php echo esc_html( $term->name ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<div class="row mb-5">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					
						<div class="col-6 col-md-4">
							<div class="product-content fade-up">
								<div class="image-area">
									<a class="parmalink" href="<?php the_permalink(); ?>">
										<?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('medium'); ?>
										<?php endif; ?>
									</a>
								</div>
								<div class="text-area">
									<div class="genre-tags">
										<?php display_post_terms(get_the_ID(), 'genre'); ?>
									</div>
									<a href="<?php the_permalink(); ?>"><h4 class="title"><?php the_title(); ?></h4></a>
								</div>
							</div>
						</div>	
					
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
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
					'prev_text' => '前へ',
					'next_text' => '次へ',
				));
			?>
		</div>
	</div>
</section>




<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'normal']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>


</main>

<?php get_footer();
