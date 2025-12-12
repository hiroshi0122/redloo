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




get_header(); ?>


<?php // CONTACT FIRST SECTION // *********************************************************** // ?>
<section class="contact-first-sec pb-0">
	<div class="container">
		<div class="text-side">
			<div class="lower-title-template blue">
				<div class="title">
					<h1>ORDER</h1>
					<span>採寸・再オーダーのご相談・ご予約</span>
				</div>
			</div>
			<p>下記フォームより、①お客様情報、②採寸予約日（無料採寸ご希望の方のみ） ③オーダー内容をご記入ください。</p>
		</div>
	</div>
</section>


<?php // CONTACTR FORM SECTION // *********************************************************** // ?>
<section class="contact-form-sec">
	<div class="container">
		<?php echo do_shortcode('[contact-form-7 id="6883bdd" title="オーダーフォーム"]'); ?>
	</div>
</section>


<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>



<?php get_footer();
