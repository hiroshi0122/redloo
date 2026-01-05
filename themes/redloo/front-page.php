<?php

/**
 * Home template file
 *
 * @link RedLoo
 *
 * @package RedLoo
 * @since 2025.8.11
 * @version 1.0
 *
 * Template Name: HOME
 **/

// お客様の声を取得
$args = array(
  'post_type'      => 'voice',   // カスタム投稿タイプ slug
  'posts_per_page' => 3,         // 表示件数（必要に応じて調整）
  'orderby'        => 'date',
  'order'          => 'DESC',
);

$voice_query = new WP_Query($args);

/* NEWSの投稿取得 */
$args = array(
    'post_type' => 'post',  // すべての記事
    // 'category_name' => 'news', //カテゴリー
    'orderby' => 'date',  // ソート条件を日付
    'posts_per_page' => 3,  // 1ページ内の記事数
    'paged' => $paged,
);
$posts = new WP_Query($args);

// スライダーの配列処理
$slides = [
    [
        'img' => get_template_directory_uri() . '/assets/images/home/slide_1.webp',
        'alt' => 'スライダー1',
    ],
    [
        'img' => get_template_directory_uri() . '/assets/images/home/slide_2.webp',
        'alt' => 'スライダー2',
    ],
    [
        'img' => get_template_directory_uri() . '/assets/images/home/slide_3.webp',
        'alt' => 'スライダー3',
    ], 
];



get_header();
?>
<main class="typography">
<?php // FIRST SECTION // *********************************************************** // ?>
<section class="first-sec pb-0" id="first-view-sec">
    <div class="container-fluid p-0">
        <div class="row gap-1">
            <div class="col-12 col-md-5 text-side">
                <h1 class="split">WETSUITS<br>FACTORY<br>IN TOKYO</h1>
                <h3 class="catch blur">フルオーダー・ウェットスーツを<br>工場直販で</h3>
                <p>RedLooは、一人一人の体型に合わせた<br class="d-none d-md-block">フルオーダー・ウェットスーツを工場直販でお届けします。<br>素材・カラー・ロゴまで自由に選べる、あなただけの一着を。</p>
            </div>
            <div class="col-12 col-md-7 slider-side">
                <div class="slider-container">
                    <?php foreach ($slides as $index => $slide) : ?>
                        <div class="slide <?php echo ($index === 0) ? 'active' : ''; ?>">
                            <img src="<?php echo esc_url($slide['img']); ?>" alt="<?php echo esc_attr($slide['alt']); ?>">
                        </div>
                    <?php endforeach; ?>

                    <div class="progress-bar">
                        <div class="progress" id="progress"></div>
                    </div>
                </div>
                <div class="dots">
                    <?php foreach ($slides as $index => $slide) : ?>
                        <div class="dot <?php echo ($index === 0) ? 'active' : ''; ?>"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        get_template_part('template-parts/components/marquee', null, [
        'text' => 'ORIGINAL FIT! GET YOUR CUSTOM WETSUIT',
        'modifier' => ''
        ]);
    ?>
</section>



<?php // ABOUT SECTION // *********************************************************** // ?>
<section class="about-sec p-0 fade-up" id="about-sec">
    <div class="contaienr-fluid">
        <div class="row gap-0">
            <div class="col-12 col-md-6 image-side">
                <img class="h-100" src="<?php bloginfo('template_url'); ?>/assets/images/home/about_1.webp" alt="aboutのイメージ">
            </div>
            <div class="col-12 col-md-6 text-side bg-blue">
                <div class="title-template white text-md-center">
                    <div class="title">
                        <span>ご予約・注文・お問合せ</span>
                        <h2 class="split">ABOUT</h2>
                    </div>
                    <h4 class="catch">工場直販で届ける<br>フルオーダー・ウェットスーツ</h4>
                    <p>RedLooは、製造業のまち・東京都足立区の工場で生まれました。<br>積み重ねてきた製造の経験と、 受け継いだ仕立ての技術・姿勢をもとに、<br class="d-none d-md-block">直販だからこそ実現できる品質と価格でお届けしています。</p>
                </div>
            </div>
        </div>
    </div>
    <?php
        get_template_part('template-parts/components/marquee', null, [
        'text' => 'FULL ORDER WETSUITS',
        'modifier' => 'reverse'
        ]);
    ?>
</section>


<?php // PRODUCTS SECTION // *********************************************************** // ?>
<section class="products-sec fade-up" id="productsSec">
    <div class="container">
        <div class="row gap-y-3 gap-md-10 align-center">
            <div class="col-12 col-md-6 text-side">
                <div class="title-template mb-md-10">
                    <div class="title">
                        <span>製品紹介</span>
                        <h2 class="split">PRODUCTS</h2>
                    </div>
                    <h4 class="catch">4つのエントリースタイルから広がる<br>自分だけのオーダー</h4>
                    <p>ネックエントリー、ロングチェストジップ、バックジップ、ノンジップの4種類。開口部の構造で着用感が変わり、好みに合わせて選べます。</p>
                </div>

                <div class="other-item d-none d-md-block">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/other_product.webp" alt="その他の商品イメージ">
                    <div class="title-template">
                        <h4 class="catch">そのほかのタイプ・アイテム</h4>
                        <p>季節や用途に合わせたモデルを用意しています。 ドライスーツ、シーガル、ロングジョン、タッパー、ベストなども選べます。</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 image-side">
                <div class="product-images row gap-y-md-6">
                    <div class="col-6 col-md-6 p-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/ne_01.webp" alt="ネックエントリー">
                        <span>ネックエントリー</span>
                    </div>
                    <div class="col-6 col-md-6 p-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/lc_01.webp" alt="ロングチェストジップ">
                        <span>ロングチェストジップ</span>
                    </div>
                    <div class="col-6 col-md-6 p-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/bz_01.webp" alt="バックジップ">
                        <span>バックジップ</span>
                    </div>
                    <div class="col-6 col-md-6 p-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/nz_01.webp" alt="ノンジップ">
                        <span>ノンジップ</span>
                    </div>
                </div>
            </div>
            <div class="other-item d-md-none col-12">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/home/other_product.webp" alt="その他の商品イメージ">
                <div class="title-template">
                    <h4 class="catch">そのほかのタイプ・アイテム</h4>
                    <p>季節や用途に合わせたモデルを用意しています。 ドライスーツ、シーガル、ロングジョン、タッパー、ベストなども選べます。</p>
                </div>
            </div>
        </div>
        <div class="products-link">
            <p class="text-center">スタイルや用途に合わせて、最適な仕様を仕立てられます。</p>
            <div class="btn-area center">
                <a class="btn btn-blue" href="/products">製品紹介</a>
            </div>
        </div>
    </div>
</section>
<?php
    get_template_part('template-parts/components/marquee', null, [
    'text' => 'PROUDLY MADE IN OUR FACTORY.',
    'modifier' => ''
    ]);
?>


<?php // CUSTOM SECTION // *********************************************************** // ?>
<section class="custom-sec fade-up" id="customSec">
    <div class="container">
        <div class="title-template text-center mb-5 mb-md-10">
            <div class="title">
                <span>カスタム・オプション</span>
                <h2 class="split">CUSTOM & OPTIONS</h2>
            </div>
            <p>基本仕様をもとに、<br class="d-md-none">色・素材・仕上げを自由に選べます。<br>自分のスタイルに合わせた一着を<br class="d-md-none">つくる楽しさを、ここから。</p>
        </div>
        <div class="custom-images js-stagger">
            <div class="row gap-y-5 gap-y-md-10 gap-md-6">
                <div class="col-6 col-md-4 js-stagger-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/custom_1.webp" alt="color & logo">
                    <dl>
                        <dt>COLOR & LOGO</dt>
                        <dd>生地、ステッチも、ロゴも。 仕上げの印象に合わせてカラーを選べます。</dd>
                    </dl>
                </div>
                <div class="col-6 col-md-4 js-stagger-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/06_finish.webp" alt="FIT & FORM">
                    <dl>
                        <dt>FIT & FORM</dt>
                        <dd>動きに寄り添う、細部の調整。 手首や足首の仕上げで、着心地が変わります。</dd>
                    </dl>
                </div>
                <div class="col-6 col-md-4 js-stagger-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/05_reinforce.webp" alt="DETAIL & CRAFT">
                    <dl>
                        <dt>DETAIL & CRAFT</dt>
                        <dd>補強、裏テープ、縫いの仕上げ。 見えない部分まで、自分仕様に。</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="custom-link pt-md-10">
            <div class="btn-area center">
                <a class="btn btn-black" href="/custom-color">カスタム・オプション</a>
            </div>
        </div>
    </div>
</section>
<?php
    get_template_part('template-parts/components/marquee', null, [
    'text' => 'CUSTOM & GET YOUR ONLY 1 !',
    'modifier' => 'reverse'
    ]);
?>


<?php // ORDER SECTION // *********************************************************** // ?>
<section class="order-sec fade-up" id="orderSec">
    <div class="container">
        <img class="check" src="<?php bloginfo('template_url'); ?>/assets/images/home/check.svg" alt="CHECK!">
        <div class="radius-box bg-blue">
            <div class="title-template text-center mb-5 mb-md-10 white">
                <div class="title">
                    <span>ご利用ガイド</span>
                    <h2 class="split">ORDER GUIDE</h2>
                </div>
                <h4 class="catch">波に集中できる一着は、<br class="d-sm-none">体に合う一着から。</h4>
                <p>RedLooでは、<br class="d-sm-none">スタイル・タイプ・素材・厚みを選び、<br>34箇所の採寸をもとに<br class="d-sm-none">仕立てるフルオーダーを行なっています。<br>体に合わせた仕立てだからこそ、<br class="d-sm-none">動きやすさや着心地が変わります。</p>
            </div>
            <div class="measuring-method">
                <div class="radius-title text-center">
                    <h3>2つの採寸方法</h3>
                </div>
                <div class="row gap-5 gap-md-10 js-stagger">
                    <div class="col-12 col-md-6 measuring-card yellow js-stagger-item">
                        <div class="title text-center">
                            <h4>FACTORY FITTING</h4>
                            <p>工場での採寸（無料）</p>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/measure_1.webp" alt="工場での採寸">
                        <p>スタッフが34か所を丁寧に計測。費用はかかりません。 工場に来ていただければ、実際の素材を手に取り、サンプルを試着しながら、仕上がりをイメージできます。 その場で相談できる安心感と、完成度の高さにつながります。</p>
                    </div>
                    <div class="col-12 col-md-6 measuring-card js-stagger-item">
                        <div class="title text-center">
                            <h4>SELF FITTING</h4>
                            <p>ご自身での採寸</p>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/measure_2.webp" alt="工場での採寸">
                        <p>遠方の方や都合が合わない方には、採寸ガイドをご用意しています。ご自身で計測してオーダーを進めることも可能です。</p>
                    </div>
                </div>
            </div>
            <div class="three-types">
                <div class="radius-title text-center">
                    <h3>フルオーダーの基本を作る <br class="d-md-none">３つの仕様</h3>
                </div>
                <div class="row gap-md-8">
                    <div class="col-4 col-md-4 three-types-card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/07_opening.webp" alt="開口部の着脱構造">
                        <div class="title text-center">
                            <h5>スタイル</h5>
                            <p>開口部の着脱構造</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 three-types-card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/08_length.webp" alt="形・丈感">
                        <div class="title text-center">
                            <h5>タイプ</h5>
                            <p>形・丈感</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 three-types-card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/home/measure_1.webp" alt="材・厚み">
                        <div class="title text-center">
                            <h5>マテリアル</h5>
                            <p>素材・厚み</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="order-links-area text-center">
                <p>基本的な選び方や採寸、オーダーの流れについては、下記よりご覧いただけます。</p>
                <div class="btn-area center gap-y-2 gap-md-20">
                    <a class="btn btn-black" href="/order-guide">基本仕様の選び方</a>
                    <a class="btn btn-black" href="/order-flow">ご注文の流れ</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php // VOICE SECTION // *********************************************************** // ?>
<section class="voice-sec fade-up" id="voiceSec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="title-template mb-md-10">
                    <div class="title">
                        <span>お客様の声</span>
                        <h2 class="split">VOICE</h2>
                    </div>
                    <div class="btn-area d-none d-md-block">
                        <a class="btn-black" href="/voice">お客様の声一覧</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <?php if ($voice_query->have_posts()) :?>
                    <div class="voice-list">
                        <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
                        <article class="voice-item">
                            <div class="voice-thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.webp" alt="no image">
                            <?php endif; ?>
                            </div>

                            <div class="voice-content">
                                <div class="voice-meta">
                                    <span class="voice-label">お客様の声</span>
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                </div>
                                <h4 class="voice-title"><?php the_title(); ?></h4>
                                <p class="voice-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 100, '...'); ?>
                                </p>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    </div>

                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p>まだ投稿がありません。</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="btn-area d-md-none justify-center">
            <a class="btn-black" href="/voice">お客様の声一覧</a>
        </div>
    </div>
</section>
<?php
    get_template_part('template-parts/components/marquee', null, [
    'text' => 'MEASURED AT 34 POINTS.',
    'modifier' => ''
    ]);
?>


<?php // BLOG SECTION // *********************************************************** // ?>
<section class="blog-sec fade-up">
    <div class="container">
        <div class="bg-gray">
            <div class="title-template mb-md-10 text-center">
                <div class="title">
                    <span>お知らせ & お役立ち情報</span>
                    <h2 class="split">BLOG</h2>
                </div>
            </div>
            
            <?php get_template_part('template-parts/components/news-list'); ?>

            <div class="btn-area justify-center pt-8">
                <a class="btn-black" href="/all-post">ブログ一覧</a>
            </div>
        </div>
    </div>
</section>
<?php
    get_template_part('template-parts/components/marquee', null, [
    'text' => 'OUR INFORATION & NEWS!',
    'modifier' => 'reverse'
    ]);
?>



<?php // ACCESS SECTION // *********************************************************** // ?>
<section class="access-sec fade-up" id="accessSec">
    <div class="container">
        <div class="title-template mb-5 mb-md-10 text-center">
            <div class="title">
                <span>アクセス</span>
                <h2 class="split">ACCESS</h2>
                <h5 class="catch blue">スタッフの準備等ございますため、<br>ご来訪の際は、<br class="d-dm-none">事前にご予約をお願いいたします。</h5>
                <span class="pink">※対応スタッフが不在の場合があります。</span>
            </div>
        </div>

        <div class="about-visit text-center">
            <div class="border-title center">
                <h3>訪問・採寸について</h3>
            </div>
            <p>無料採寸やオーダーのご相談は、<br class="d-sm-none">下記の2拠点にて対応しています。<br class="d-none d-sm-block">最寄駅は、つくばエクスプレス「六町駅」（北千住から2駅）です。<br>採寸のみをご希望の方は、株式会社トミテック本社でも承ります。</p>
        </div>

        <?php get_template_part('template-parts/components/access-info'); ?>
        
    </div>
</section>
</main>

<?php get_footer(); ?>