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
 * Template Name: ORDER GUIDE
 **/


$selection = [
    [
        'image' => 'style',
        'title' => 'STYLE',
        'text' => 'スタイル',
    ],
    [
        'image' => 'type',
        'title' => 'TYPE',
        'text' => 'タイプ',
    ],
    [
        'image' => 'material',
        'title' => 'MATERIAL',
        'text' => '素材',
    ],
    [
        'image' => 'thickness',
        'title' => 'THICKNESS',
        'text' => '厚み',
    ],
];


$style = [
    [
        'image' => 'style_1',
        'title' => 'ネックエントリー',
        "text" => "ファスナーなし\n密閉性と動きやすさに優れます。",
    ],
    [
        'image' => 'style_2',
        'title' => 'ロングチェストジップ（夏／冬）',
        "text" => "前胸ファスナー\n保温性と着脱のバランス型。",
    ],
    [
        'image' => 'style_3',
        'title' => 'バックジップ',
        "text" => "背面ファスナー\n最も着脱しやすく、初めての方にも人気。",
    ],
    [
        'image' => 'style_4',
        'title' => 'ノンジップ',
        "text" => "前かぶり構造\n軽量での春〜秋の使用に適しています。",
    ],
];


$type = [
    [
        'image' => 'type_1',
        'title' => 'フルスーツ',
        "text" => "長袖・長ズボンタイプ\nオールシーズンのメインモデル。",
    ],
    [
        'image' => 'type_2',
        'title' => 'シーガル',
        "text" => "半袖・長ズボンタイプ\n春・秋の中間季節に最適。",
    ],
    [
        'image' => 'type_3',
        'title' => 'ロングスプリング・スプリング',
        "text" => "短パン（長袖・半袖選択）タイプ\n初夏・初秋向け。",
    ],
    [
        'image' => 'type_4',
        'title' => 'ロングジョン・ショートジョン',
        "text" => "袖なし（長ズボン／短パン）タイプ\n夏向け。",
    ],
    [
        'image' => 'type_5',
        'title' => 'ドライスーツ',
        "text" => "完全防水で海水に触れないタイプ\n冬場の低水温向けのモデル。",
    ],
    [
        'image' => 'type_6',
        'title' => 'ロングタッパー・ショートタッパー',
        "text" => "上半身だけのライトタイプ\n水温が高い夏の時期におすすめ。",
    ],
    [
        'image' => 'type_other',
        'title' => 'その他モデル・アクセサリー',
        "text" => "ベスト / ハーフパンツ など\n※着脱部は前ファスナー / 後ファスナー / 肩マジックテープなどがあります。",
    ],
];


get_header();
?>

<?php // LOWER FIRST SECTION // *********************************************************** // ?>
<section class="lower-first-sec pb-0 about" id="lowerFirstSec">
    <div class="container-fluid p-0">
        <div class="row gap-x-md-10 align-center">
            <div class="col-12 col-md-6 text-side">
                <div class="lower-title-template">
                    <div class="title">
                        <h1 class="split">ORDER GUIDE</h1>
                        <span>基本仕様の選び方</span>
                    </div>
                    <h3 class="catch">基本の仕様を選ぶ・決める</h3>
                    <p>ウェットスーツの着心地や動きやすさは、<br>素材や厚み、ファスナー位置などの仕様によって変わります。 <br>このページでは、スタイルや素材、厚み、タイプなど、オーダー時に選択する基本仕様についてご紹介します。<br>ご自身の使用環境や好みに合わせて、最適な組み合わせをお選びください。</p>
                </div>
            </div>
            <div class="col-12 col-md-6 image-side">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/fv_order_guide.webp" alt="ORDER GUIDEページファーストビュー">
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


<?php // SELECTION SECTION（仕様・選び方） // *********************************************************** // ?>
<section class="selection-sec blur">
    <div class="container">
        <div class="title-template text-center mb-5 mb-md-10">
            <div class="title">
                <span>仕様・選び方</span>
                <h3>SPECIFICATIONS & SELECTION</h3>
            </div>
        </div>
        <div class="radius-box bg-blue">
            <div class="selection-list row js-stagger">
                <?php foreach($selection as $key => $item) : ?>
                    <div class="selection-item col-6 col-md-3 js-stagger-item">
                        <span class="selection-num">0<?php echo esc_html($key + 1);?>.</span>
                        <div class="selection-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/<?php echo esc_html($item['image']);?>.webp" alt="<?php echo esc_html(['text']);?>のイメージ">
                        </div>
                        <div class="selection-text white">
                            <h3><?php echo esc_html($item['title']);?></h3>
                            <span><?php echo esc_html($item['text']);?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center">RedLooのウェットスーツは、 用途や季節、<br class="d-sm-none">求める着心地に合わせて <br class="d-none d-sm-block">「スタイル」「タイプ」「素材」「厚み」を組み合わせてお選びいただけます。 <br>どのモデルもフルオーダー対応で、体型や使用環境に合わせて仕立てています。</p>
        </div>
    </div>
</section>


<?php // STYLE SECTION（スタイル） // *********************************************************** // ?>
<section class="style-sec fade-up">
    <div class="container">
        <div class="title-template mb-5 mb-md-10">
            <div class="title">
                <span>スタイル</span>
                <h3>01. STYLE</h3>
            </div>
            <p>ファスナーの位置や構造の違いによって、着脱のしやすさや保温性が変わります。 <br>RedLooでは下記の「基本4スタイル＋その他」でご用意しています。</p>
        </div>
        <div class="style-list row gap-y-4 gap-md-5">
            <?php foreach($style as $key => $item) : ?>
                <div class="style-item col-6 col-md-3">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/<?php echo esc_html($item['image']);?>.webp" alt="<?php echo esc_html(['text']);?>のイメージ">
                    <div class="style-text">
                        <p class="blue"><?php echo esc_html($item['title']);?></p>
                        <span><?= nl2br( esc_html( $item['text'] ) ); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>       
    </div>
</section>


<?php // TYPE SECTION（タイプ） // *********************************************************** // ?>
<section class="type-sec fade-up">
    <div class="container">
        <div class="title-template mb-5 mb-md-10">
            <div class="title">
                <span>タイプ</span>
                <h3>02. TYPE</h3>
            </div>
            <p>シーズンや動き方に合わせて、<br class="d-sm-none">袖や丈の長さを選べます。 </p>
        </div>
        <div class="type-list row gap-y-4 gap-md-5">
            <?php foreach($type as $key => $item) : ?>

                <?php
                    // ---- 改行処理（スマホ／PC） ----
                    $text = $item['text'];

                    if ( wp_is_mobile() ) {
                        // スマホ → 改行（\n）を半角スペースに
                        $text = str_replace("\n", ' ', $text);
                    } else {
                        // PC → 改行を <br> に変換
                        $text = nl2br( esc_html($text) );
                    }
                ?>

                <?php if ($item['image'] === 'type_other') : ?>

                    <div class="type-item col-12 col-md-6">
                        <img class="other"
                            src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/<?php echo esc_html($item['image']); ?>.webp"
                            alt="<?php echo esc_html($item['title']); ?>のイメージ">

                        <div class="type-text other">
                            <p class="blue"><?php echo esc_html($item['title']); ?></p>
                            <span><?= $text ?></span>
                        </div>
                    </div>

                <?php else : ?>

                    <div class="type-item col-6 col-md-3">
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/<?php echo esc_html($item['image']); ?>.webp"
                            alt="<?php echo esc_html($item['title']); ?>のイメージ">

                        <div class="type-text">
                            <p class="blue"><?php echo esc_html($item['title']); ?></p>
                            <span><?= $text ?></span>
                        </div>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>
        </div>   
    </div>
</section>


<?php // MATERIAL SECTION（生地の種類） // *********************************************************** // ?>
<section class="material-sec fade-up">
    <div class="container">
        <div class="title-template mb-5 mb-md-10 text-center">
            <div class="title mb-8">
                <span>生地の種類</span>
                <h3>03. MATERIAL</h3>
            </div>
            <p>ウェットスーツ表面の生地は主に「スキン」と「ジャージ」2種類あります。<br>「スキン」はゴム素材の表面で、水はけが良く保温性に優れますが、傷や耐久性に弱く脱着しにくいです。<br>一方、「ジャージ」はゴム素材の両面を布生地で挟んだもので、丈夫で伸縮性があるので耐久性が高く、着脱が楽です。<br>他にもそれぞれの長所を活かした「表スキン・裏ジャージ」といった複合素材や、<br class="d-none d-sm-block">保温性を高める「裏起毛」素材も使われています。<br></p>
        </div>
        
        <div class="material-contents row gap-md-5 gap-xxl-10">
            <div class="material-content col-12 col-md-6 winter">
                <div class="title-template mb-5 mb-md-5 text-center">
                    <div class="title mb-4">
                        <span>冬のウェットスーツの素材</span>
                        <h4>WINTER MATERIAL</h4>
                    </div>
                    <p>寒い冬に暖かくサーフィンを楽しんでもらいたいから、<br class="d-none d-sm-block">素材も熱をためて発熱する温かいものを選んでいます。</p>
                </div>
                <div class="material-detail">
                    <div class="title">
                        <h5>エアーフレイムブースト（裏起毛）</h5>
                        <p>蓄熱・発熱の国産最高素材で<br>冬の海を忘れるくらい暖かい</p>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/material_winter.webp" alt="エアーフレイムブースト">
                    <div class="text">
                        <p>エアーフレイムブーストは、国内で流通するすべての素材の中から最高のものだけを集めてつくった「吸湿発熱」「伸長発熱」「蓄熱」を備えた国内最高の冬のウェットスーツ素材です。</p>
                        <ul>
                            <li>・ノーマルジャージ(伸びない素材)</li>
                            <li>・ネッスルジャージ(通常)</li>
                            <li>・ネッスルスキン(ラバー素材・耐久性は弱)</li>
                            <li>・メッシュスキン(ネッスルスキンよりは耐久性は高)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="material-content col-12 col-md-6 summer">
                <div class="title-template mb-5 mb-md-5 text-center">
                    <div class="title mb-4">
                        <span>夏のウェットスーツの素材</span>
                        <h4>SUMMER MATERIAL</h4>
                    </div>
                    <p>汗ばむ季節でも使いやすいよう、<br>扱いやすさと機能性のバランスが取れた素材を選んでいます。</p>
                </div>
                <div class="material-detail">
                    <div class="title">
                        <h5>裏地（抗菌防臭素材）</h5>
                        <p>汗をかいても扱いやすい抗菌防臭素材で<br>夏場の不快感を抑える裏地</p>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/material_summer.webp" alt="裏地（抗菌防臭素材）">
                    <div class="text">
                        <p>ネッスルジャージは、究極の伸びと肌触りの良さを追求した生地です。特殊な構造と極細繊維により、軽さ・やわらかさと伸縮性があります。</p>
                        <ul>
                            <li>・ノーマルジャージ(伸びない素材)</li>
                            <li>・ネッスルジャージ(通常)</li>
                            <li>・ネッスルスキン(ラバー素材・耐久性は弱)</li>
                            <li>・メッシュスキン(ネッスルスキンよりは耐久性は高)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php // THICKNESS SECTION（生地の厚み） // *********************************************************** // ?>
<section class="thickness-sec fade-up">
    <div class="container">
        <div class="title-template mb-5 mb-md-10 text-center">
            <div class="title">
                <span>生地の厚み</span>
                <h3>04. THICKNESS</h3>
            </div>
        </div>
        <div class="row align-center gap-md-10 mb-md-8">
            <div class="col-12 col-md-6 image-side">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/thickness_1.webp" alt="厚みのイメージ画像">
            </div>
            <div class="col-12 col-md-6 text-side">
                <dl class="thickness-list">
                    <div>
                        <dt>5mm / 5mm</dt>
                        <dd>冬用（特に12月〜2月、北関東以北や日本海側など寒いエリア） 防寒性重視。</dd>
                        <dd>動きはやや重くなる。</dd>
                    </div>
                    <div>
                        <dt>5mm / 3mm</dt>
                        <dd>冬用（特に12月〜2月、北関東以北や日本海側など寒いエリア） 防寒性重視。</dd>
                        <dd>腕は3mmなので、腕の動きは軽やか。</dd>
                    </div>
                    <div>
                        <dt>3mm / 3mm</dt>
                        <dd>春・秋の中間シーズン。暖かさと軽さのバランス。初夏や初秋に使われやすい。</dd>
                    </div>
                    <div>
                        <dt>3mm / 2mm</dt>
                        <dd>夏用（5月〜10月の太平洋沿岸）動きやすく軽快。保温性はほどほど。</dd>
                    </div>
                    <div>
                        <dt>2mm / 2mm</dt>
                        <dd>真夏向け。最も軽く、日焼けや擦れ防止に近い。</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="text-center mb-5">
            <p>カラーは基本自由にお選びいただけます。<br>※スタイルや使用箇所によっては、色や生地を指定できない部分があります。</p>
        </div>
        <div class="btn-area justify-center">
            <a class="btn-black" href="/custom/color">カラーバリエーション</a>
        </div>
    </div>
</section>


<?php // CUSTOM OPTION SECTION（カスタム・オプション） // *********************************************************** // ?>
<section class="custom-option-sec">
    
    <div class="bg-slider">
        <div class="bg-track">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_1.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_2.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_3.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_4.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_5.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_6.webp">

            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_1.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_2.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_3.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_4.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_5.webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/custom_6.webp">
        </div>
    </div>

    <div class="container">
        <div class="title-template mb-5 mb-md-10 text-center">
            <div class="title mb-md-6">
                <span>カスタム・オプション</span>
                <h3>CUSTOM / OPTIONS</h3>
            </div>
            <p class="mb-md-5">基本仕様をベースに、細部をカスタムしていく楽しさも、RedLooのオーダーの魅力です。 <br>素材や色、仕上げなど、好みに合わせて調整できます。</p>
            <p>詳細はカスタム・オプションページにてご参考ください。</p>
        </div>
        <div class="btn-area justify-center mb-5 mb-md-10">
            <a class="btn-black" href="/custom">カスタム・オプション</a>
        </div>
        <img class="blur" src="<?php bloginfo('template_url'); ?>/assets/images/order-guide/build_your_own.svg" alt="BUILD YOUR OWN!">
    </div>
</section>

<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>



<?php get_footer(); ?>