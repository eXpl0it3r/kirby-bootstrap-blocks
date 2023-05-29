<?php

Kirby::plugin('expl0it3r/kirby-bootstrap-blocks', [
    'blueprints' => [
        'blocks/alert' => __DIR__ . '/blueprints/blocks/alert.yml',
    ],
    'snippets' => [
        'blocks/alert' => __DIR__ . '/snippets/blocks/alert.php',
    ],
]);
