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
<footer>
	<div class="container p-0 mb-md-10">
		<div class="row gap-md-10">
			<div class="col-12 col-md-3">
				<a class="footer-logo" href="/">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/common/logo_w.svg" alt="RedLooロゴ">
				</a>
			</div>
			<div class="col-12 col-md-9">
				<?php

				// 左右に分割
				$left_nav  = array_slice($navigation, 0, 3);
				$right_nav = array_slice($navigation, 3);
				?>

				<div class="footer-nav">
					<div class="row gap-md-10">
						<!-- 左カラム -->
						<div class="col-12 footer-col left-side">
							<div class="row">
								<?php foreach ($left_nav as $item) : ?>
									<div class="footer-menu col-6 col-lg-3">
										<a href="<?php echo esc_url($item['link']); ?>" class="footer-menu-title">
											<?php echo esc_html($item['menu']); ?>
										</a>
										<?php if (!empty($item['children'])) : ?>
											<ul class="footer-submenu">
												<?php foreach ($item['children'] as $child) : ?>
													<li><a href="<?php echo esc_url($item['link'] . '/' . $child['link']); ?>">
															<?php echo esc_html($child['menu']); ?>
														</a></li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</div>
								<?php endforeach; ?>
								<div class="footer-menu col-6 col-lg-3 right-side">
									<?php foreach ($right_nav as $item) : ?>
										<a href="<?php echo esc_url($item['link']); ?>" class="footer-menu-title">
											<?php echo esc_html($item['menu']); ?>
										</a>
										<?php if (!empty($item['children'])) : ?>
											<ul class="footer-submenu">
												<?php foreach ($item['children'] as $child) : ?>
													<li><a href="<?php echo esc_url($item['link'] . '/' . $child['link']); ?>">
															<?php echo esc_html($child['menu']); ?>
														</a></li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
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
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/animation.js"></script>
</body>
</html>