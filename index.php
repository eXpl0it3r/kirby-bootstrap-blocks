<?php

use Expl0it3r\BootstrapBlocks\TableRows;

load([
    'Expl0it3r\\BootstrapBlocks\\TableRows' => 'classes/TableRows.php',
], __DIR__);

Kirby::plugin('expl0it3r/kirby-bootstrap-blocks', [
    'blueprints' => [
        'blocks/alert' => __DIR__ . '/blueprints/blocks/alert.yml',
        'blocks/bootstrap-table' => __DIR__ . '/blueprints/blocks/bootstrap-table.yml',
    ],
    'snippets' => [
        'blocks/alert' => __DIR__ . '/snippets/blocks/alert.php',
        'blocks/bootstrap-table' => __DIR__ . '/snippets/blocks/bootstrap-table.php',
    ],
    'fields' => [
        'bootstrap-table' => [
            'props' => [
                'value' => fn ($value = null) => TableRows::decode($value),
            ],
            'save' => fn ($value) => TableRows::encode($value),
        ],
    ],
]);
