<?php

/**
 * Information single template file
 *
 * @link RedLoo
 *
 * @package RedLoo
 * @since 2025.8.11
 * @version 1.0
 *
 *
 **/

get_header();
?>


<article class="typography">
    <section class="single-sec first-sec">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();?>
            <div class="container">
                <div class="title-area">
                    <h1><?php the_title(); ?></h1>
                    <div class="d-flex justify-between align-center">
                        <span class="day"><?php the_time('Y.n.j'); ?></span>
                        <div class="post-categories">
                            <?php
                            $cats = get_the_category();
                            if ($cats) :
                            foreach ($cats as $cat) :?>
                                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="cat">
                                <?php echo esc_html($cat->name); ?>
                                </a>
                            <?php endforeach; endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container small">
                <?php if ( get_the_post_thumbnail() ) : ?>
                    <div class="thumbnail">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url('', 'full')); ?>">
                    </div>
                <?php endif; ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</article>

<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>

<?php get_footer(); ?>