<?php

/**
 * Home template file
 *
 * @link TANZO
 *
 * @package RedLoo
 * @since 2025.8.11
 * @version 1.0
 *
 **/



get_header();
?>

<main class="typography">
<?php // TEXT PAGE FIRST SECTION // *********************************************************** // ?>
<section class="archive-first-sec">
    <div class="container">
        <div class="title-template text-center mb-md-6">
                <div class="title">
                    <h3 class="mb-0">404 Not FOUND</h3>
                </div>
                <span>お探しのページは見つかりません。</span>
            </div>
        <div class="description mb-5 text-center">
            <p>ご覧になっていたページのリンクが無効になっているか、<br class="d-none d-md-block">ページが削除された可能性があります。</p>
        </div>
        <div class="btn-area justify-center">
            <a class="btn-black" href="/">TOPに戻る >>></a>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>