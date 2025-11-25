<?php
$type = $args['type'] ?? 'normal';
?>

<section class="attention-sec attention--<?= esc_attr($type) ?> pt-0">
  <div class="container">

    <?php if ($type !== 'small'): ?>
      <div class="title-template text-center mb-md-6">
        <div class="title">
          <h3 class="mb-0">ATTENTION</h3>
        </div>
        <span>ご注文の前に</span>
      </div>
      <div class="description text-center mb-5 mb-md-10">
        <p>オーダーの流れや採寸方法などを「ご利用ガイド」でご紹介しています。<br>初めての方は、ご注文の前にご覧ください。</p>
      </div>
    <?php endif; ?>

    <?php if ($type === 'large'): ?>
      <!-- ★ 大きいレイアウト専用HTML -->
      <div class="large-banner">
        <a href="/order-guide">
          <span>ご利用ガイド</span>
          <h2>ORDER GUIDE</h2>
        </a>
      </div>

    <?php else: ?>
      <!-- ★ 小/通常共通の小バナーHTML -->
      <div class="row btn-banner-area">
        <div class="col-12 col-md-6">
          <div class="btn-banner products">
            <a href="/products">
              <span>製品紹介</span>
              <h3>PRODUCTS</h3>
              <p>スーツモデルの参考ラインナップはこちらから</p>
            </a>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="btn-banner order-guide">
            <a href="/order-guide">
              <span>ご利用ガイド</span>
              <h3>ORDER GUIDE</h3>
              <p>採寸から仕様確定・お支払い、仕上がり、配送までの流れ</p>
            </a>
          </div>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>