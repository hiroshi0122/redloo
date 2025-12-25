<?php

/**
 * Information single template file
 *
 * @link TANZO
 *
 * @package RedLoo
 * @since 2025.8.11
 * @version 1.0
 *
 *
 **/

get_header();

$title_en = get_field('title_en');
$lead_text = get_field('lead_text');

?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();?>
        <main class="typography">
            <section class="lower-first-sec pb-0 page-first-sec" style="--page-img: url('<?php echo esc_url(get_the_post_thumbnail_url('', 'full')); ?>');>
                <div class="container-fluid p-0">
                    <div class="row align-center">
                        <div class="col-12 col-md-7 text-side">
                            <div class="lower-title-template mb-5">
                                <div class="title">
                                    <h1 class="split"><?php echo esc_html($title_en); ?></h1>
                                    <span class="blur"><?php the_title(); ?></span>
                                </div>
                                <p class="mb-3"><?php echo nl2br($lead_text); ?></p>
                            </div>
                        </div>
                        <?php if ( get_the_post_thumbnail() ) : ?>
                            <div class="col-12 col-md-5 image-side">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url('', 'full')); ?>" alt="<?php the_title(); ?>のイメージ">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php
                get_template_part('template-parts/components/marquee', null, [
                'text' => 'ORIGINAL FIT! GET YOUR CUSTOM WETSUIT',
                'modifier' => ''
                ]);
            ?> 

        </main>
        <section class="page-content-sec">
            <div class="container">
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- <span class="day"><?php // the_time('Y.n.j'); ?></span> -->
        </section>
       

    <?php endwhile; ?>
<?php endif; ?>



<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>


<?php get_footer(); ?>