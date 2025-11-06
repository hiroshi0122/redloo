<?php

/**
 * Displays header navigation
 *
 * @package RedLoo
 * @since 2025.11.4
 * @version 1.0
 */

include 'navigation.php';  // 配列を読み込み
?>

<div class="container-fluid">
    <div class="d-flex flex-row justify-between align-center">
        <a class="logo-side" href="/">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo/logo_w.svg" alt="RedLooロゴ">
        </a>
        <nav class="col d-none d-lg-block">
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
        </nav>
        <ul class="sns-nav d-flex flex-row justify-between align-center">
            <?php foreach( $sns_nav as $key => $link ):?>
                <li>
                    <a href="<?php echo esc_url($link['link']); ?>" target="_blank" rel="noopener">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/common/<?php echo esc_html($link['image']); ?>.svg" alt="<?php echo esc_html($link['image']); ?>">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php // # MOBILE NAVIGATION =======================/?>
        <div class="hamburger d-lg-none">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="menu-contents d-lg-none">
            <ul class="menu-list">
                <a class="logo" href="/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo/tanzo_logo_2.svg" alt="TANZOロゴ">
                </a>
                <?php foreach ($navigation as $key => $menu): ?>
                    <?php
                        $has_children = !empty($menu['children']);
                        $raw = $menu['link'] ?? '';
                        // #始まりはそのまま、それ以外はサイトURLに連結
                        $href = (strpos($raw, '#') === 0)
                            ? $raw
                            : home_url('/' . ltrim($raw, '/'));
                    ?>
                    <li class="menu modal-close hum-close">
                        <a href="<?php echo esc_html($menu['link']); ?>">
                            <?php echo esc_html($menu['menu']); ?>
                        </a>

                         <?php if ($has_children): ?>
                            <ul class="submenu" role="menu">
                                <?php foreach ($menu['children'] as $child):
                                    $childHref = (strpos($child['link'], '#') === 0)
                                        ? $child['link']
                                        : home_url('/' . ltrim($child['link'], '/'));
                                ?>
                                    <li role="none">
                                        <a role="menuitem modal-close hum-close" href="<?php echo esc_url($childHref); ?>">
                                            <?php echo esc_html($child['menu']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <nav class="header-second-nav">
                <ul class="navigation row">
                    <?php foreach ($second_navigation as $key => $menu): ?>
                        <?php
                            // リンク生成（#はそのまま／それ以外はサイトURL基準）
                            $raw  = $menu['link'] ?? '';
                            $href = (strpos($raw, '#') === 0) ? $raw : ltrim($raw, '');
                            $is_external = preg_match('/^https?:\/\//', $raw);
                        ?>
                        <li class="col-auto modal-close">
                            <a class="menu-link"
                            href="<?php echo esc_url($href); ?>"
                            <?php if ($is_external): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
                            <?php echo esc_html($menu['menu']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>