<?php

/**
 * Displays header navigation
 *
 * @package RedLoo
 * @since 2025.11.4
 * @version 1.0
 */

include 'navigation.php';  // 配列を読み込み

$mobile_nav = [
    'columns' => [
        [
            'menu' => '製品紹介',
            'link' => '/products',
            'children' => [
                ['menu' => 'ネックエントリー', 'link' => '/genre/neck-entry'],
                ['menu' => 'ロングチェストジップ', 'link' => '/genre/long-chest-zip'],
                ['menu' => 'バックジップ', 'link' => '/genre/back-zip'],
                ['menu' => 'ノンジップ', 'link' => '/genre/non-zip'],
                ['menu' => 'その他', 'link' => '/genre/others'],
            ],
        ],
        [
            'menu' => 'ご利用ガイド',
            'link' => '/order-flow',
            'children' => [
                ['menu' => '基本仕様の選び方', 'link' => '/order-guide'],
                ['menu' => 'ご利用の流れ', 'link' => '/order-flow'],
                ['menu' => 'リペア・修理', 'link' => '/repair'],
                ['menu' => 'よくあるご質問', 'link' => '/faq'],
            ],
        ],
    ],
];

$mobile_nav = [
    'primary' => [
        $navigation[0], // RedLooについて
        $navigation[3], // カスタム・オプション
        $navigation[4], // お客様の声
        $navigation[5], // お知らせ・コラム
    ],
    'columns' => [
        $navigation[1], // 製品紹介
        $navigation[2], // ご利用ガイド
    ],
];

?>

<div class="container-fluid p-0">
    <div class="row justify-between align-center">
        <a class="col-md-2 logo-side" href="/">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/common/logo_w.svg" alt="RedLooロゴ">
        </a>
        <nav class="col-md-10 d-none d-xl-flex justify-end gap-5">
            <ul class="navigation d-flex flex-row align-center gap-3">
                <?php foreach ($navigation as $key => $menu): ?>
                    <?php
                    $has_children = !empty($menu['children']);
                    $raw = $menu['link'] ?? '';
                    // #始まりはそのまま、それ以外はサイトURLに連結
                    $href = (strpos($raw, '#') === 0)
                        ? $raw
                        : home_url('/' . ltrim($raw, '/'));
                    ?>
                    <li class="col-auto nav-item <?php echo $has_children ? 'has-children' : ''; ?>">
                        <a class="menu-link"
                            href="<?php echo esc_url($href); ?>"
                            <?php if ($has_children): ?> aria-haspopup="true" aria-expanded="false" <?php endif; ?>>
                            <p><?php echo esc_html($menu['menu']); ?></p>
                        </a>

                        <?php if ($has_children): ?>
                            <ul class="submenu" role="menu">
                                <?php foreach ($menu['children'] as $child):
                                    $childHref = (strpos($child['link'], '#') === 0)
                                        ? $child['link']
                                        : home_url('/' . ltrim($child['link'], '/'));
                                ?>
                                    <li role="none">
                                        <a role="menuitem" href="<?php echo esc_url($childHref); ?>">
                                            - <?php echo esc_html($child['menu']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="sns-nav d-flex justify-between align-center col">
                <?php foreach ($sns_nav as $key => $link): ?>
                    <li class="col-4">
                        <a href="<?php echo esc_url($link['link']); ?>" target="_blank" rel="noopener">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/common/<?php echo esc_html($link['image']); ?>.svg" alt="<?php echo esc_html($link['image']); ?>">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a class="btn-contact" href="/form-contact">ご予約・注文・お問合わせ</a>
        </nav>


        <?php // # MOBILE NAVIGATION =======================/
        ?>
        <div class="hamburger d-xl-none">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="menu-contents d-lg-none">
            <ul class="menu-list">
                <a class="logo" href="/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/common/logo_w.svg" alt="RedLooロゴ">
                </a>
                <ul class="mobile-nav-primary">
                    <?php foreach ($mobile_nav['primary'] as $item): ?>
                        <li class="modal-close">
                            <a href="<?= esc_url($item['link']); ?>">
                                <?= esc_html($item['menu']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="mobile-nav-columns">
                    <div class="row">
                        <?php foreach ($mobile_nav['columns'] as $group): ?>
                            <div class="nav-column col-6">

                                <h3 class="nav-heading modal-close">
                                    <?php if (!empty($group['link'])): ?>
                                        <a href="<?= esc_url($group['link']); ?>">
                                            <?= esc_html($group['menu']); ?>
                                        </a>
                                    <?php else: ?>
                                        <?= esc_html($group['menu']); ?>
                                    <?php endif; ?>
                                </h3>

                                <ul class="sub-menu">
                                    <?php foreach ($group['children'] as $child): ?>
                                        <li class="modal-close">
                                            <a href="<?= esc_url($child['link']); ?>">
                                                <?= esc_html($child['menu']); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </ul>
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
        </div>
    </div>
</div>