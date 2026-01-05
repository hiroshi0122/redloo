<section class="factory-fitting-sec typography">
    <?php
    get_template_part('template-parts/components/marquee', null, [
        'text' => 'WETSUITS FACTORY IN TOKYO',
        'modifier' => 'reverse'
    ]);
    ?>
    <div class="container-fluid p-0">
        <div class="factory-fitting-contents">
            <div class="row justify-center gap-0">
                <div class="col-12 col-lg-6 text-side bg-blue">
                    <div class="title-template white">
                        <div class="title mb-md-10">
                            <span>無料採寸のご予約</span>
                            <h2>FACTORY<br>FITTING</h2>
                        </div>
                    </div>
                    <p class="mb-4 mb-md-6">本社と工場にてスタッフが34か所を丁寧に計測。（無料）<br>素材やサンプルを手に取りながら、仕上がりをイメージできます。</p>
                    <a class="btn-black mb-5 mb-md-8" href="/form-order">無料採寸のご予約</a>
                    <div class="self-fitting">
                        <h5>SELF FITTING</h5>
                        <p>セルフ採寸でのオーダーも可能です。</p>
                        <a class="btn-black" href="/form-measure">セルフ採寸フォーム</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 image-side d-none d-md-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/factory_fitting.webp" alt="無料採寸イメージ画像">
                </div>
            </div>
        </div>

        <div class="access-contents">
            <div class="row gap-0">
                <div class="col-12 col-md-4 image-side">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/company_exterior.webp" alt="外観写真">
                </div>
                <div class="col-12 col-md-8 text-side">
                    <div class="d-flex flex-wrap align-end gap-x-5 gap-x-md-5 mb-5">
                        <div class="title-template">
                            <div class="title">
                                <span>工場アクセス</span>
                                <h3 class="mb-0">ACCESS</h3>
                            </div>
                        </div>
                        <p>都心からもアクセスしやすく、バスや車でもお越しいただけます。<br class="d-none d-sm-block">敷地内に駐車スペースもございますので、安心してお立ち寄りください。</p>
                    </div>
                    <div class="tel-info">
                        <div class="border-title">
                            <h3>お電話でのお問合わせ</h3>
                        </div>
                        <div class="d-flex flex-wrap align-center gap-x-5 gap-md-10">
                            <h5 class="tel">03-5686-1300</h5>
                            <!-- <h5 class="tel">090-1234-5678</h5>-->
                        </div>
                    </div>
                    <div class="access-info">
                        <div class="row gap-y-10 gap-md-10">
                            <div class="col-12 col-md-6">
                                <ul class="labels mb-3 mb-md-5">
                                    <li><span class="label">採寸</span></li>
                                    <li><span class="label">サンプル見学</span></li>
                                    <li><span class="label">ご相談</span></li>
                                </ul>
                                <div class="logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/tomitech_logo.webp" alt="株式会社トミテックロゴ">
                                </div>
                                <ul class="access-info-detail">
                                    <li class="address">東京都足立区六町4丁目12番15号</li>
                                    <li class="train">つくばエクスプレス「六町駅」から徒歩約5分</li>
                                    <li class="car">首都高速6号三郷線「加平出口」より約10分</li>
                                </ul>
                                <a class="btn-map" href="https://maps.app.goo.gl/uNWm6BLGQNec7UR46" target="_blank">Goole Maps</a>
                            </div>
                            <div class="col-12 col-md-6">
                                
                                <div class="store-name">
                                    <ul class="labels">
                                        <li><span class="label">採寸</span></li>
                                        <li><span class="label">サンプル見学</span></li>
                                        <li><span class="label">ご相談</span></li>
                                    </ul>
                                    <div class="border-title">
                                        <h5>RedLoo (縫製工場)</h5>
                                    </div>
                                </div>
                                
                                <ul class="access-info-detail">
                                    <li class="address">東京都足立区東保木間1丁目3番2号</li>
                                    <li class="train">つくばエクスプレス「六町駅」から徒歩約15分</li>
                                    <li class="car">首都高速6号三郷線「加平出口」より約15分</li>
                                    <li><span class="pink">※対応スタッフが不在の場合があります。</span></li>
                                </ul>
                                <a class="btn-map" href="https://maps.app.goo.gl/uWy4JEw7QbHRYKxP6" target="_blank">Goole Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_template_part('template-parts/components/marquee', null, [
        'text' => 'WETSUITS FACTORY IN TOKYO',
        'modifier' => ''
    ]);
    ?>
</section>