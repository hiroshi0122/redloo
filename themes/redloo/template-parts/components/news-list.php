<?php
$args = array(
    'post_type'      => 'post', // 通常投稿
    'posts_per_page' => 5,      // 表示件数（調整可）
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$blog_query = new WP_Query($args);

if ($blog_query->have_posts()) :
?>
    <div class="news-list">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <article class="news-item">
                <a href="<?php the_permalink(); ?>" class="news-thumb">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.webp" alt="no image">
                    <?php endif; ?>
                </a>

                <div class="news-body">
                    <div class="news-meta">
                        <?php
                        $category = get_the_category();
                        if ($category) :
                            $cat_link = get_category_link($category[0]->term_id);
                        ?>
                            <a href="<?php echo esc_url($cat_link); ?>" class="news-cat">
                                <?php echo esc_html($category[0]->name); ?>
                            </a>
                        <?php endif; ?>
                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="news-date">
                            <?php echo get_the_date('Y.m.d'); ?>
                        </time>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="news-title"><?php the_title(); ?></h3>
                    </a>

                    <p class="news-excerpt d-none d-md-block">
                        <?php echo wp_trim_words(get_the_excerpt(), 60, '...'); ?>
                    </p>
                </div>
                
            </article>
        <?php endwhile; ?>
    </div>

    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>現在、記事はありません。</p>
<?php endif; ?>