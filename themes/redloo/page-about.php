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


get_header();
?>

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
            <h3 class="mb-md-8 blue">ものづくりの町から生まれた、<br>ウェットスーツブランド。</h3>
            <p class="mb-md-5">足立区で60年以上にわたり製造業を続けてきたトミテックの経験をもとに、<br>東京の下町の墨田区、OOLDERのウェットスーツ作りの技術と姿勢を受け継ぎ、<br>新たな取り組みとしてスタートしました。</p>
            <p class="mb-md-5">工場直販により、余分なコストを抑えながら、<br>素材やカラー、ロゴオプションまで幅広く対応しています。</p>
            <p class="">お客様と仕様を相談しながら仕立てる一着は、<br>既製品では得られない着心地と動きやすさを実現します。</p>
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
            <div class="text-side col-12 col-md-4">
                <div class="title-template white tategaki">
                    <div class="title mb-md-10">
                        <span>製品紹介</span>
                        <h2>PHILOSOPHY<br>CRAFT</h2>
                    </div>
                    <p>私たちがものづくりに向き合う上で、<br>大切にしている考えをまとめました。</p>
                </div>
            </div>
            <div class="image-side col-12 col-md-8">
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
                <div class="description">
                    <p class="mb-4">RedLooという名には、二つの姿勢を込めました。</p>
                    <ul class="blue mb-4">
                        <li>Red ＝ 情熱：ものづくりに向き合い続ける熱意</li>
                        <li>Loo ＝ 実直さ：誠実に、長く使えるものを届ける姿勢</li>
                    </ul>
                    <p>情熱のある品質の高いモノづくり。<br>その根底にあるのは、ものづくりに誠実でありたいという思いです。</p>
                </div>
            </div>
            <div class="image-side col-12 col-md-5">
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
                <p class="mb-md-5">若い頃からサーフィンを続けてきた私にとって、海に向き合う時間は、<br>日常を離れて心を解き放つかけがえのないひとときです。<br>その中で出会ったのが、自分の体に合わせて仕立てられたウェットスーツでした。</p>
                <p class="mb-md-5">ご近所でもある東京・墨田区のウェットスーツ店に通ううちに、<br>一着がもたらす快適さに驚き、確かなものづくりと、<br>一人ひとりに合わせた丁寧な応対に心を惹かれていきました。</p>
                <p class="mb-md-5">通い慣れたその店が長い歴史に幕を下ろすことになり、<br>そこで培われた技術と、お客様に誠実に向き合う姿勢を受け継ぐ形で、<br>足立区の工場からRedLooを立ち上げました。</p>
                <p class="mb-md-5">私は祖父の代から続く製造業「トミテック」で育ち、長くものづくりに関わってきました。<br>金属加工の現場で身につけた精度と誠実さへの意識は、<br>分野が変わっても変わることなく生き続けています。</p>
                <p>工場での採寸や相談を通じて、一人ひとりに合わせた一着を仕立てていく。<br>素材や厚み、カラーやロゴまで、自由に選べるカスタムをご用意しています。<br>長く信頼されるウェットスーツをお届けできるよう、歩みを重ねてまいります。</p>
            </div>
        </div>
    </div>
</section>


<?php // STAFF SECTION（スタッフ紹介） // *********************************************************** // ?>
<section class="staff-sec">
    <div class="container">
        <div class="title-template">
            <div class="title mb-md-10">
                <span>スタッフ紹介</span>
                <h2>STAFF</h2>
                <p>チームとして日々ものづくりに取り組んでいます。</p>
            </div>
        </div>
        <div class="staff-contents">
            <ul class="row">
                <li class="col-12 col-md-6">
                    <div class="staff-card men">
                        <div class="name">
                            <h5 class="blue">T.T</h5>
                            <span>工場長</span>
                        </div>
                        <p class="description">製造現場の管理を行いながら、仕上がりの品質を確認しています。 長く使っていただける一着となるよう、工程ごとの精度と仕立ての丁寧さを大切にしています。</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


<?php get_footer(); ?>