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

$product_id = get_the_ID(); 
$genres = get_the_terms($product_id, 'genre');

$term = get_queried_object();

// ▼ ACF（タームの追加フィールド）
$product_num = get_field('product_num', $term->term_id);
$price = get_field('price', $term->term_id);
$photo = get_field('style_variation', $term->term_id);
$photo_ids = array();
if(!empty($photo)){
    preg_match_all( '/wp-image-([0-9]+)/', $photo, $matches );
    if($matches) {
        $photo_ids = $matches[1];
    }
}


// 商品画像スライダー
$product_detail = get_field('product_detail'); // WYSIWYG
$images = [];

// 1枚目：アイキャッチ（full）
if (has_post_thumbnail()) {
    $images[] = get_the_post_thumbnail_url(get_the_ID(), 'full');
}

// 2枚目以降：WYSIWYG内の画像（full化）
if ($product_detail) {
    libxml_use_internal_errors(true);

    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $product_detail);

    $img_tags = $dom->getElementsByTagName('img');

    foreach ($img_tags as $img) {

        // wp-image-◯◯ を取得
        if (preg_match('/wp-image-(\d+)/', $img->getAttribute('class'), $matches)) {
            $img_id = $matches[1];

            // フルサイズ取得
            $full = wp_get_attachment_image_src($img_id, 'full');

            if ($full && isset($full[0])) {
                $images[] = $full[0];
            }
        } else {
            // 念のため src フォールバック
            $src = $img->getAttribute('src');
            if ($src) {
                $images[] = $src;
            }
        }
    }

    libxml_clear_errors();
}


get_header();
?>

<main class="typography">
    <section class="single-product-sec first-sec">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();?>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 image-side">
                        <div class="title-template tategaki">
                            <div class="title">
                                <h2 class="split">PRODUCT DETAIL</h2>
                                <span>製品詳細</span>
                            </div>
                        </div>    
                        <div class="product-slider">
                            <div class="slides">
                                <?php foreach ($images as $i => $img) : ?>
                                    <div class="slide <?php echo $i === 0 ? 'is-active' : ''; ?>">
                                        <img src="<?php echo esc_url($img); ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="thumbnails">
                            <div class="row">
                                <?php foreach ($images as $i => $img) : ?>
                                    <button class="thumb <?php echo $i === 0 ? 'is-active' : ''; ?> col-2 col-md-3" data-index="<?php echo $i; ?>">
                                        <img src="<?php echo esc_url($img); ?>">
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-side pl-md-6">
                        <div class="d-flex align-center gap-2 mb-3">
                            <ul class="genre-tags">
                                <?php foreach ($genres as $term) : ?>
                                <li>
                                    <a class="genre-tag" href="<?php echo esc_url(get_term_link($term)); ?>">
                                    <?php echo esc_html($term->name); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <span class="product-num"><?php echo esc_html($product_num); ?></span>
                        </div>

                        <h1 class="main-title"><?php the_title(); ?></h1>
                        <?php if (!empty($price)) : ?>
                            <div class="price-area">
                                <span>参考価格</span>
                                <span class="price"><?php echo ($price); ?></span>
                                <span>+税</span>
                            </div>
                        <?php endif;?>
                        <dl class="postage-area">
                            <dt>送料について</dt>
                            <dd>・全国一律 1,500円</dd>
                            <dd class="mb-2">・11,000円以上のお買い上げで送料無料</dd>
                            <small>※北海道・沖縄・離党は別途送料を頂きます</small>
                        </dl>
                        <div class="excerpt">
                            <?php the_excerpt() ?>
                        </div>
                        <div class="order-attention">
                            <div class="first-order mb-md-5">
                                <div class="border-title">
                                    <h5>初めてご注文の方</h5>
                                </div>
                                <p>初めての方は採寸が必要です。<br>工場での無料採寸またはセルフ採寸フォームからお選びください。</p>
                                <div class="btn-area gap-x-2">
                                    <a class="btn-black" href="/form-order/?product_title=<?php echo urlencode(get_the_title()); ?>&product_url=<?php echo urlencode(get_permalink()); ?>">無料採寸のご予約</a>
                                    <a class="btn-black" href="/form-measure">セルフ採寸フォーム</a>
                                </div>
                            </div>
                            <div class="second-order">
                                <div class="border-title">
                                    <h5>２着目以降の方</h5>
                                </div>
                                <p>2着目以降の方は、前回の型紙をもとに再オーダーいただけます。 体型に変化がある場合は、再採寸が必要になります。 サイズが合わないことで、着心地や動きやすさに違いが出ることがあります。 再採寸が必要な箇所をご案内いたしますので、その際はお知らせください。</p>
                                <div class="btn-area">
                                    <a class="btn-black" href="/form-order/?product_title=<?php echo urlencode(get_the_title()); ?>&product_url=<?php echo urlencode(get_permalink()); ?>">再オーダーフォーム</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-product-content fade-up">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>


    <?php // OTHER ATTENNTION SECTION（その他 忠告） // *********************************************************** // ?>
    <section class="other-attention-sec">
        <div class="container">
            <dl class="refound-policy">
                <dt>返品・返金ポリシー</dt>
                <dd>お客さま都合による返品は、お受けいたしておりません。<br>商品の発送には十分注意しておりますが、当方のミスによる不良品（破損など）又は、商品違いは商品到日より7日以内に事前連絡の上、着払いにてご返送ください。迅速に良品と交換させていただきます。</dd>
            </dl>
            <div class="page-attention">
                <h4>※ このページはオーダー検討時の参考用です</h4>
                <p>仕様の詳細は、採寸時またはお問い合わせフォームでもご相談いただけます。<br>仕立てに関わる仕様や、カスタムの詳細については下記よりご覧ください。</p>
                <div class="btn-area justify-center gap-x-2">
                    <a class="btn-black" href="">基本仕様について</a>
                    <a class="btn-black" href="">カスタム・オプション</a>
                </div>
            </div>
        </div>
    </section>


    <?php if (!empty($photo_ids)) : ?>
    <?php // STYLE VARIATION SECTION（スタイルバリエーション） // *********************************************************** // ?>
    <section class="style-variation-sec fade-up">
        <div class="container">
            <div class="variation-photos">
                <div class="title-template tategaki">
                    <div class="title">
                        <h3>STYLE VARIATION</h3>
                        <span>スタイルバリエーション</span>
                    </div>
                </div>
                <div class="light-box-gallery">
                    <div class="row gap-4">
                        <?php foreach ($photo_ids as $i => $id) :
                            $thum = wp_get_attachment_thumb_url($id);
                            $full = wp_get_attachment_url($id);
                            ?>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="<?php echo $full ?>" alt="ギャラリーの画像">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
    <?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'normal']); ?>


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
<?php get_footer(); ?>