<?php

$navigation = [
    [
        'menu' => 'RedLooについて',
        'link' => '/about',
    ],
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
    [
        'menu' => 'カスタム・オプション',
        'link' => '/custom',
    ],
    [
        'menu' => 'お客様の声',
        'link' => '/voice',
    ],
    [
        'menu' => 'お知らせ・コラム',
        'link' => '/all-post',
    ],
];

$sns_nav = [
    [
        'image' => 'youtube',
        'link' => 'https://www.youtube.com/@%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%83%88%E3%83%9F%E3%83%86%E3%83%83%E3%82%AF',
    ],
    [
        'image' => 'x',
        'link' => 'https://x.com/tomitech1959',
    ],
    [
        'image' => 'instagram',
        'link' => 'https://www.instagram.com/tomitech1959/',
    ],
];
?>
