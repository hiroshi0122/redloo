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
 * Template Name: ABOUT
 **/


$member = [
    [
        'sex' => 'men',
        'name' => 'T.T',
        'position' => '工場長',
        'text' => '製造現場の管理を行いながら、仕上がりの品質を確認しています。 長く使っていただける一着となるよう、工程ごとの精度と仕立ての丁寧さを大切にしています。',
    ],
    [
        'sex' => 'woman',
        'name' => 'SATOMI',
        'position' => '店舗スタッフ',
        'text' => '採寸や仕上げの作業を担当しています。 着用される方のご希望に沿うよう、細かな点まで確認しながら作業を進めています。',
    ],
    [
        'sex' => 'men',
        'name' => '萩原 秀哉',
        'position' => '営業',
        'text' => 'サーフィン歴30年の経験をもとに、お客様のご要望や困りごとを伺い、最適な一着をご提案しています。',
    ],
    [
        'sex' => 'woman',
        'name' => 'MISA',
        'position' => '店舗スタッフ',
        'text' => 'サーフィン大好きです。１年中海に入るので、ウェットスーツはなくてはならない必需品です。より良い一着をお届けします。',
    ],
];


$comapny_info = [
    '設立' => '昭和42年12月21日（創業1959年）',
    '所在地' => '東京都足立区六町4丁目12番15号',
    '代表者' => '尾頭 美恵子',
    '事業内容' => '金属加工'
];

get_header();
?>

<main class="typography">
<?php // LOWER FIRST SECTION // *********************************************************** // ?>
<section class="lower-first-sec pb-0 about" id="lowerFirstSec">
    <div class="container-fluid p-0">
        <div class="row gap-1 align-center">
            <div class="col-12 col-md-5 text-side">
                <div class="lower-title-template">
                    <div class="title">
                        <h1>ABOUT</h1>
                        <span>RedLooについて</span>
                    </div>
                    <h3 class="catch">ものづくりの町から生まれた<br>ウェットスーツブランド</h3>
                    <p>RedLooは、足立区の縫製工場が手がける<br>ウェットスーツブランドです。<br>一着ずつ、フルオーダーで仕立てています。</p>
                </div>
            </div>
            <div class="col-12 col-md-7 image-side">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about/fv_about.webp" alt="abouページファーストビュー">
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


<?php // ABOUT MSG SECTION（メッセージ） // *********************************************************** // ?>
<section class="about-msg-sec" id="aboutMsgSec">
    <div class="container">
        <div class="message text-center">
            <h3 class="mb-4 mb-md-8 blue">ものづくりの町から生まれた、<br>ウェットスーツブランド。</h3>
            <p class="mb-md-5">足立区で60年以上にわたり製造業を続けてきた<br class="d-sm-none">トミテックの経験をもとに、<br>東京の下町の墨田区、OOLDERの<br class="d-sm-none">ウェットスーツ作りの技術と姿勢を受け継ぎ、<br>新たな取り組みとしてスタートしました。</p>
            <p class="mb-md-5">工場直販により、余分なコストを抑えながら、<br>素材やカラー、ロゴオプションまで<br class="d-sm-none">幅広く対応しています。</p>
            <p class="">お客様と仕様を相談しながら仕立てる一着は、<br>既製品では得られない着心地と<br class="d-sm-none">動きやすさを実現します。</p>
        </div>
    </div>
</section>
<?php
    get_template_part('template-parts/components/marquee', null, [
    'text' => 'ORIGINAL FIT! GET YOUR CUSTOM WETSUIT',
    'modifier' => 'reverse'
    ]);
?>


<?php // PHILOSOPHY SECTION（製品紹介） // *********************************************************** // ?>
<section class="philosophy-sec" id="philosophySec">
    <div class="container">
        <div class="row">
            <div class="text-side col-2 col-md-4">
                <div class="title-template white tategaki">
                    <div class="title mb-md-10">
                        <span>製品<br class="d-sm-none">紹介</span>
                        <h2>CRAFT <br class="d-none d-sm-block">PHILOSOPHY</h2>
                    </div>
                    <p class="d-none d-md-block">私たちがものづくりに向き合う上で、<br>大切にしている考えをまとめました。</p>
                </div>
            </div>
            <div class="image-side col-10 col-md-8">
                <p class="d-md-none white mb-5">私たちがものづくりに向き合う上で、<br>大切にしている考えをまとめました。</p>
                <div class="philosophy-content vision">
                    <div>
                        <span>目指す未来</span>
                        <h3>VISION</h3>
                        <p>多くの人が着て笑顔になる製品づくり<br>愛される存在</p>
                    </div>
                </div>
                <div class="philosophy-content mission">
                    <div>
                        <span>私たちの使命</span>
                        <h3>MISSION</h3>
                        <p>オンリーワンのモノづくり・工場生産の付加価値</p>
                    </div>
                </div>
                <div class="philosophy-content concept">
                    <div>
                        <span>思想・表現</span>
                        <h3>CONCEPT</h3>
                        <p>工場直販だからこそ実現できる、<br>高品質でオンリーワンのものづくり。<br>製造業としての誠実さとスピードを活かし、<br>お客様のもとへ、確かな品質を届けていきます。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php // LOGO CONCEPT SECTION（ロゴに込める思い） // *********************************************************** // ?>
<section class="logo-concept-sec pt-0">
    <div class="container">
        <div class="row align-center">
            <div class="text-side col-12 col-md-7">
                <div class="title-template">
                    <div class="title mb-md-10">
                        <span>ロゴに込める想い</span>
                        <h3>LOGO CONCEPT</h3>
                    </div>
                </div>
                <img class="d-md-none logo" src="<?php bloginfo('template_url'); ?>/assets/images/common/logo_black.svg" alt="logo">
                <div class="description">
                    <p class="mb-4">RedLooという名には、二つの姿勢を込めました。</p>
                    <ul class="blue mb-4">
                        <li>Red ＝ 情熱：ものづくりに向き合い続ける熱意</li>
                        <li>Loo ＝ 実直さ：誠実に、長く使えるものを届ける姿勢</li>
                    </ul>
                    <p>情熱のある品質の高いモノづくり。<br>その根底にあるのは、ものづくりに誠実でありたいという思いです。</p>
                </div>
            </div>
            <div class="image-side col-12 col-md-5 d-none d-md-block">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/common/logo_black.svg" alt="logo">
            </div>
        </div>
    </div>
</section>


<?php // GREETING SECTION（ご挨拶） // *********************************************************** // ?>
<section class="greeting-sec">
    <div class="container">
        <div class="image-side">
            <div class="ogashira mb-md-4">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about/ogashira.webp" alt="店長 尾頭">
            </div>
            <div class="caption">
                <span>RedLooオーナー</span>
                <h5 class="blue">尾頭 孝幸</h5>
            </div>
        </div>
        <div class="text-side">
            <div class="title-template">
                <div class="title mb-md-10">
                    <span>ごあいさつ</span>
                    <h2>GREETING</h2>
                </div>
            </div>
            <div class="description">
                <p class="mb-md-5">若い頃からサーフィンを続けてきた私にとって、海に向き合う時間は、<br class="d-none d-sm-block">日常を離れて心を解き放つかけがえのないひとときです。<br>その中で出会ったのが、自分の体に合わせて仕立てられたウェットスーツでした。</p>
                <p class="mb-md-5">ご近所でもある東京・墨田区のウェットスーツ店に通ううちに、<br class="d-none d-sm-block">一着がもたらす快適さに驚き、確かなものづくりと、<br class="d-none d-sm-block">一人ひとりに合わせた丁寧な応対に心を惹かれていきました。</p>
                <p class="mb-md-5">通い慣れたその店が長い歴史に幕を下ろすことになり、<br class="d-none d-sm-block">そこで培われた技術と、お客様に誠実に向き合う姿勢を受け継ぐ形で、<br class="d-none d-sm-block">足立区の工場からRedLooを立ち上げました。</p>
                <p class="mb-md-5">私は祖父の代から続く製造業「トミテック」で育ち、長くものづくりに関わってきました。<br>金属加工の現場で身につけた精度と誠実さへの意識は、<br class="d-none d-sm-block">分野が変わっても変わることなく生き続けています。</p>
                <p>工場での採寸や相談を通じて、一人ひとりに合わせた一着を仕立てていく。<br>素材や厚み、カラーやロゴまで、自由に選べるカスタムをご用意しています。<br>長く信頼されるウェットスーツをお届けできるよう、歩みを重ねてまいります。</p>
            </div>
        </div>
    </div>
</section>


<?php // STAFF SECTION（スタッフ紹介） // *********************************************************** // ?>
<section class="staff-sec">
    <div class="container">
        <div class="title-template">
            <div class="title mb-7 mb-md-10">
                <span>スタッフ紹介</span>
                <h2>STAFF</h2>
                <p>チームとして日々ものづくりに取り組んでいます。</p>
            </div>
        </div>
        <div class="staff-contents">
            <ul class="row gap-x-md-10 gap-y-md-5">
                <?php foreach($member as $key => $member) :?>
                    <li class="col-12 col-md-6">
                        <div class="staff-card <?php echo esc_html($member['sex']); ?>">
                            <div class="name">
                                <h5><?php echo esc_html($member['name']); ?></h5>
                                <span><?php echo esc_html($member['position']); ?></span>
                            </div>
                            <p class="description"><?php echo esc_html($member['text']); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>


<?php // FACTORY & ACCESS SECTION（工場紹介・アクセス） // *********************************************************** // ?>
<section class="factory-access-sec">
    <div class="container">
        <div class="title-template tategaki">
            <div class="title mb-md-10">
                <span>工場紹介・アクセス</span>
                <h2>FACTORY & ACCESS</h2>
            </div>
        </div>
        <div class="accsess-contents">
            <div class="row align-center justify-between mb-5 mb-md-5">
                <div class="col-12 col-md-8">
                    <p>RedLooのウェットスーツは、足立区東保木間の工場で仕立てています。<br>無料採寸や、生地・色見本を実際に手に取りながら、一緒に仕様を決めていただけます。</p>
                </div>
                <div class="col-12 col-md-4">
                    <a class="btn-black" href="/form-order">無料採寸のお申し込み</a>
                </div>
            </div>

            <div class="border-title">
                <h3>訪問・採寸について</h3>
                <p>無料採寸やオーダーのご相談は、下記の2拠点にて対応しています。 </p>
                <p class="pink">ご来訪の際は、必ず事前のご予約をお願いいたします。</p>
            </div>
            <?php get_template_part('template-parts/components/access-info'); ?>
            <div class="comment">
                <div class="d-flex gap-4  align-start align-md-center">
                    <div class="image-side">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about/ogashira.webp" alt="尾頭店長">
                    </div>
                    <div class="text-side">
                        <p>工場のある足立区・六町は、北千住から2駅です。 美術館などの文化施設もあり、車でもアクセスしやすい場所です。 近くの北千住には、気軽に入れる飲食店やグルメスポットも多くあります。 ランチやカフェ、居酒屋など、立ち寄れるお店のことなどもお気軽に聞いてください！</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php // COMPANY SECTION（運営会社） // *********************************************************** // ?>
<section class="company-sec">
    <div class="container">
        <div class="row gap-md-10 mb-md-10">
            <div class="col-12 col-md-5 text-side">
                <div class="title-template">
                    <div class="title mb-md-10">
                        <span>運営会社</span>
                        <h2>COMPANY</h2>
                    </div>
                </div>
                <img class="company-logo" src="<?php bloginfo('template_url'); ?>/assets/images/common/tomitech_logo.webp" alt="トミテックロゴ">
                <table class="company-info-table">
                    <tbody>
                        <?php foreach($comapny_info as $key => $info) :?>
                        <tr>
                            <th><?php echo esc_html($key); ?></th>
                            <td><?php echo esc_html($info); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-md-7 image-side">
                <img class="company-logo" src="<?php bloginfo('template_url'); ?>/assets/images/about/tomitech_company.webp" alt="トミテック外観">
            </div>
        </div>
        
        <p class="mb-4 mb-md-5">株式会社トミテックは、1959年創業の金属加工会社です。 <br>足立区で60年以上にわたり、精密プレス部品や精密金型の製作を手がけてきました。 <br>金属加工の現場で培われた「精度」と「誠実さ」を大切にする姿勢は、RedLooのウェットスーツづくりにも息づいています。ものづくりの原点を背景に、一着ごとの仕立てを行っています。</p>
        <div class="btn-area">
            <a class="btn-black" href="https://www.tomitech.co.jp/" target="_blank" rel="noopener noreferrer">株式会社トミテック</a>
        </div>
    </div>
</section>


<?php // ATTENTION SECTION（ご注文の前に） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-attention', null, ['type' => 'small']); ?>


<?php // FACTORY FITTING SECTION（無料採寸のご予約） // *********************************************************** // ?>
<?php get_template_part('template-parts/components/sec-factory-fitting'); ?>

</main>


<?php get_footer(); ?>