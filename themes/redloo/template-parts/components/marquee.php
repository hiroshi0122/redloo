<?php
/**
 * Marquee Component
 * @param string $text  表示する文字列
 * @param string $modifier  オプションクラス（例：reverse, slow）
 */

$text = $args['text'] ?? 'DEFAULT TEXT';
$modifier = !empty($args['modifier']) ? ' marquee--' . esc_attr($args['modifier']) : '';
?>

<div class="marquee<?= $modifier ?>">
  <div class="marquee__inner">
    <span class="marquee__text"><?= esc_html($text) ?></span>
    <span class="marquee__text"><?= esc_html($text) ?></span>
    <span class="marquee__text"><?= esc_html($text) ?></span>
  </div>
</div>