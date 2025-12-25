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

$light_box = [
    [
        'image' => 'fitting_1',
        'caption' => '測定見本1',
    ],
    [
        'image' => 'fitting_2',
        'caption' => '測定見本2',
    ],
    [
        'image' => 'fitting_3',
        'caption' => '測定見本3',
    ],
    [
        'image' => 'fitting_4',
        'caption' => '測定見本4-A',
    ],
    [
        'image' => 'fitting_5',
        'caption' => '測定見本4-B',
    ],
    [
        'image' => 'fitting_6',
        'caption' => '測定見本5',
    ],
    [
        'image' => 'fitting_7',
        'caption' => '測定見本6',
    ],
];


get_header(); ?>


<main class="typography">
<?php // CONTACT FIRST SECTION // *********************************************************** // ?>
<section class="contact-first-sec pb-0">
	<div class="container">
		<div class="text-side">
			<div class="lower-title-template blue">
				<div class="title">
					<h1 class="split">SELF<br>MEASUREMENT</h1>
					<span>セルフ採寸フォーム</span>
				</div>
			</div>
			<p>図を参考に、各部位を測ってご入力ください。 <br>採寸に迷う場合は、工場での採寸予約もご利用いただけます。<br>体の特徴を正確に把握することで、より良いフィット感を実現できます。 ご自宅で採寸が難しい方や、生地を直接確認したい方は、<br>工場での採寸をおすすめしています。</p>
		</div>
        <div class="btn-area gap-x-5 gap-y-1">
			<a class="btn-black" href="/form-contact">お問い合わせ</a>
			<a class="btn-black" href="/form-order">採寸・再オーダーのご相談</a>
		</div>
	</div>
</section>


<?php // MEASURE GUIDE SECTION // *********************************************************** // ?>
<section class="measure-guide-sec">
	<div class="container">
		<div class="title-template blue mb-5 mb-md-8">
			<div class="title">
				<span>34箇所の採寸ガイド</span>
				<h4>34 POINTS GUIDE</h4>
				<p>こちらを参考に採寸をお願いいたします。</p>
			</div>
		</div>
		<div class="gallery-area">
            <div class="light-box-gallery row gap-md-5">
                <?php foreach($light_box as $ley => $value) : ?>
                    <div class="col-4 col-md-3">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/order-flow/<?php echo esc_html($value['image']); ?>.webp" data-caption="<?php echo esc_html($value['caption']); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
	</div>
</section>

<?php // CONTACTR FORM SECTION // *********************************************************** // ?>
<section class="contact-form-sec">
	<div class="container">
		<?php echo do_shortcode('[contact-form-7 id="0d579fb" title="セルフ採寸フォーム"]'); ?>
	</div>
</section>


<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>


<!-- Lightbox -->
<div class="lightbox">
    <div class="lightbox-bg"></div>
    <div class="lightbox-inner">
        <button class="arrow prev"></button>
        <div class="lightbox-img-wrapper">
            <img class="lightbox-img">
        </div>
        <button class="arrow next"></button>
        <p class="caption"></p>
    </div>
</div>

</main>
<?php get_footer();
