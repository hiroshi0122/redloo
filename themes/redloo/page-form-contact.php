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
					<h1 class="split">CONTACT</h1>
					<span>お問合せ</span>
				</div>
			</div>
			<p>当店へのお問い合わせお電話または以下のフォームにてお問い合わせください。<br>フォームでのお問い合わせは、原則翌営業日以内にご返信させていただいております。<br> 年末年始・夏期休業・日曜・祝日などお休みを頂いている場合は、ご返信までにお時間を頂戴する場合がございます。 <br>ご了承のほどよろしくお願いいたします。</p>
			<div class="contact-attention">
				<span>受付時間：9:00 - 20:00 （12:00-13:00除く） 休業日：日曜・祝日、夏期休暇・冬期休暇</span>
			</div>
			<h5 class="tel-number">03-5686-1300</h5>
		</div>
		<div class="btn-area gap-x-5 gap-y-1">
			<a class="btn-black" href="/form-order">採寸・再オーダーのご相談</a>
			<a class="btn-black" href="/form-measure">セルフ採寸フォーム</a>
		</div>
	</div>
</section>


<?php // CONTACTR FORM SECTION // *********************************************************** // ?>
<section class="contact-form-sec">
	<div class="container">
		<?php echo do_shortcode('[contact-form-7 id="a04842f" title="お問合せ"]'); ?>
	</div>
</section>


<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>



<?php get_footer();
