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
 * Template Name: ORDER FLOW
 **/


$steps = [
    [   
        'image' => 'step_1',
        'num' => 1,
        'title' => 'イメージをつくる（方向性を決める）',
        'contents' => [
            [ 'type' => 'text', 'value' => "季節やサーフスタイルに合わせて、スタイル（開口部）、タイプ（形）、生地の厚みなどを選びます。" ],
            [ 'type' => 'buttons', 'value' => [
                ['text' => '製品紹介ページ', 'link' => '/products'],
                ['text' => '基本仕様の選び方', 'link' => '/order-guide'],
            ]]
        ]
    ],
    [   
        'image' => 'step_1',
        'num' => 2,
        'title' => '採寸方法を選ぶ',
        'contents' => [
            [ 'type' => 'text', 'value' => "「工場でのスタッフによる採寸」と、「自身で採寸を行う」２つの採寸方法をご検討ください。工場での採寸は、スタッフと一緒に生地や仕様を相談しながら採寸できます。 ご自身で測られる場合は、セルフ採寸フォームからデータをお送りください。採寸のご予約またはフォーム送信をもって、オーダーのご希望として承ります。 その後、仕様の確認とお見積りのご連絡を差し上げます。" ],
            [ 'type' => 'notice-box', 'value' => "※女性のお客様には、女性スタッフが対応いたします。安心してご予約ください。" ],
            [ 'type' => 'buttons', 'value' => [
                ['text' => '無料採寸ご予約', 'link' => '/form-factory-fitting'],
                ['text' => 'セルフ採寸フォーム', 'link' => '/self-measurement'],
            ]]
        ]
    ],
    [   
        'image' => 'step_1',
        'num' => 3,
        'title' => '仕様を確定する（細部を詰める）',
        'contents' => [
            [ 'type' => 'text', 'value' => "素材やカラー、ロゴ位置、仕上げなど、最終的な仕様を決める段階です。 基本仕様やオプションをもとに、ご希望のスタイルをまとめていきます。 選び方に迷う場合は、スタッフまでご相談ください。" ],
            [ 'type' => 'buttons', 'value' => [
                ['text' => '基本使用の選び方', 'link' => '/order-guide'],
                ['text' => 'カスタム・オプション', 'link' => '/custom'],
            ]]
        ]
    ],
    [   
        'image' => 'step_1',
        'num' => 4,
        'title' => 'ご注文・お支払い',
        'contents' => [
            [ 'type' => 'text', 'value' => "仕様がまとまりましたら、お見積りをお送りします。 内容をご確認のうえ、オンライン決済（XXXXXXX）または工場でのお支払いをお選びください。 ご入金の確認後、製作に入ります。" ],
            [ 'type' => 'list', 'value' => [
                "・オンライン決済（XXXXXXX）",
                "・工場での決済（現金・カード一括）",
                "・送料：送料：全国一律1,200円",
            ]],
            [ 'type' => 'notice', 'value' => "※50,000円以上のお買い上げで日本全国送料無料\n※ 北海道・沖縄・離党は別途送料を頂きます" ],
        ]
    ],
    [   
        'image' => 'step_1',
        'num' => 5,
        'title' => '製作・お渡し',
        'contents' => [
            [ 'type' => 'text', 'value' => "確定した仕様に沿って、職人が一着ずつ丁寧に裁断・縫製します。通常は3週間～4週間ほどで完成し、発送または工場でのお渡しをお選びいただけます。" ],
            [ 'type' => 'notice', 'value' => "※ハイシーズン（9月～1月）の場合はもう少し納期を頂く場合がございます。直接ご相談ください。" ],
        ]
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
                        <h1>ORDER FLOW</h1>
                        <span>オーダーガイド／ご注文の流れ</span>
                    </div>
                    <h3 class="catch">ご注文からお渡しまでの流れ</h3>
                    <p>フルオーダーのウェットスーツは、<br>採寸から仕上げまでの工程を一つひとつ丁寧に進めていきます。 <br>このページでは、ご注文からお渡しまでの流れをご案内しています。<br>初めての方も、工場での採寸やセルフ採寸フォームを通じて、安心してご注文いただけます。</p>
                </div>
            </div>
            <div class="col-12 col-md-6 image-side">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/order-flow/fv_order_flow.webp" alt="ORDER FLOWページファーストビュー">
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


<?php // ORDER STEP SECTION（注文までのフロー） // *********************************************************** // ?>
<section class="order-step-sec fade-up">
    <div class="container">
        
        <div class="order-steps">
            <?php foreach($steps as $step): ?>
                <div class="order-step step-<?php echo $step['num']; ?>">
                    <div class="row align-center gap-md-5 gap-lg-10">
                        <div class="col-12 col-md-4 image-side">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/order-flow/<?php echo $step['image']; ?>.webp" alt="">
                        </div>
                        <div class="col-12 col-md-8 text-side">
                            <h3 class="blue d-flex align-center"><span><?php echo $step['num']; ?>.</span> <?php echo esc_html($step['title']); ?></h3>
                            <?php foreach($step['contents'] as $content): ?>
                                <?php if($content['type'] === 'text'): ?>
                                    <p><?php echo nl2br(esc_html($content['value'])); ?></p>
                                <?php elseif($content['type'] === 'list'): ?>
                                    <ul>
                                        <?php foreach($content['value'] as $li): ?>
                                            <li><?php echo esc_html($li); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php elseif($content['type'] === 'notice'): ?>
                                    <p class="notice"><?php echo esc_html($content['value']); ?></p>
                                <?php elseif($content['type'] === 'notice-box'): ?>
                                    <div class="notice-box">
                                        <?php echo esc_html($content['value']); ?>
                                    </div>
                                <?php elseif($content['type'] === 'buttons'): ?>
                                    <div class="btn-area gap-md-5">
                                        <?php foreach($content['value'] as $btn): ?>
                                            <a href="<?php echo esc_url($btn['link']); ?>" class="btn-black">
                                                <?php echo esc_html($btn['text']); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>






<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>



<?php get_footer(); ?>