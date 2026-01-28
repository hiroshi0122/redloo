<?php

/**
 * Displays footer navigation
 *
 * @package RedLoo
 * @since 2025.8.11
 * @version 1.0
 */
include 'template-parts/components/navigation.php';  // 配列を読み込み

?>
<footer class="typography">
	<div class="container p-0 mb-md-10">
		<div class="row gap-md-10">
			<div class="col-12 col-md-3">
				<a class="footer-logo" href="/">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/common/logo_w.svg" alt="RedLooロゴ">
				</a>
			</div>
			<div class="col-12 col-md-9">
				<?php
				// ==============================
				// 1. フッター用「縦カラム設計図」
				// ==============================
				$footer_columns = [
					// 左カラム
					[
						'RedLooについて',
						'お客様の声',
						'お知らせ・コラム',
						'お問い合わせ',
						'採寸・再オーダー',
						'セルフ採寸フォーム',
					],
					// 製品紹介カラム
					[
						'製品紹介',
						'ネックエントリー',
						'ロングチェストジップ',
						'バックジップ',
						'ノンジップ',
						'その他',
					],
					// ご利用ガイドカラム
					[
						'ご利用ガイド',
						'基本仕様の選び方',
						'ご利用の流れ',
						'リペア・修理',
						'よくあるご質問',
					],
					// カスタム・オプションカラム
					[
						'カスタム・オプション',
						'カラー',
						'ロゴ',
						'仕上げ・補強',
						'デザイン',
					],
				];

				// ==============================
				// 2. トップレベル判定マップ
				// ==============================
				$top_level = [];
				foreach ($navigation as $item) {
					$top_level[$item['menu']] = true;
				}

				// ==============================
				// 3. ナビをフラット辞書化
				// ==============================
				$nav_map = [];

				foreach ($navigation as $item) {
					// 親
					$nav_map[$item['menu']] = [
						'menu' => $item['menu'],
						'link' => $item['link'],
						'is_parent' => true,
					];

					// 子
					if (!empty($item['children'])) {
						foreach ($item['children'] as $child) {
							$nav_map[$child['menu']] = [
								'menu' => $child['menu'],
								'link' => $child['link'],
								'is_parent' => false,
							];
						}
					}
				}
				?>

				<div class="footer-nav">
					<div class="row">

						<?php foreach ($footer_columns as $column): ?>
							<div class="footer-menu col-6 col-lg-3">

								<?php foreach ($column as $label): ?>
									<?php if (isset($nav_map[$label])):
										$item = $nav_map[$label];
										$is_title = !empty($top_level[$label]);
									?>

										<?php if ($is_title): ?>
											<a href="<?php echo esc_url($item['link']); ?>" class="footer-menu-title">
												<?php echo esc_html($item['menu']); ?>
											</a>
										<?php else: ?>
											<ul class="footer-submenu">
												<li>
													<a href="<?php echo esc_url($item['link']); ?>">
														<?php echo esc_html($item['menu']); ?>
													</a>
												</li>
											</ul>
										<?php endif; ?>

									<?php endif; ?>
								<?php endforeach; ?>

							</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-catch-area">
		<div class="copyright-sns">
			<div class="sns-icons">
				<span>FOLLOW ME!</span>
				<ul class="sns-nav">
					<?php foreach ($sns_nav as $key => $link): ?>
						<li>
							<a href="<?php echo esc_url($link['link']); ?>" target="_blank" rel="noopener">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/common/<?php echo esc_html($link['image']); ?>_w.svg" alt="<?php echo esc_html($link['image']); ?>">
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<small class="copyright">&copy; <?php echo date("Y"); ?> RedLoo Rights Reserved.</small>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/assets/images/footer/catch.svg" alt="WETSUITS FACTORY IN TOKYO">
	</div>
</footer>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/animation.js"></script>

</body>

</html>