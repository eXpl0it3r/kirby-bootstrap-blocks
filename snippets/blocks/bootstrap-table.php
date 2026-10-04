<?php

use Expl0it3r\BootstrapBlocks\TableRows;

$rows = TableRows::decode($block->rows()->value());
$header = $block->header()->isEmpty() || $block->header()->toBool() ? array_shift($rows) : null;

$classes = ['table'];
$styles = ['striped' => 'table-striped', 'hover' => 'table-hover', 'bordered' => 'table-bordered', 'small' => 'table-sm'];

foreach ($block->styles()->split() as $style) {
    if (isset($styles[$style])) {
        $classes[] = $styles[$style];
    }
}
?>
<div class="table-responsive">
    <table class="<?= implode(' ', $classes) ?>">
        <?php if ($block->caption()->isNotEmpty()) : ?>
            <caption><?= $block->caption()->kti() ?></caption>
        <?php endif; ?>
        <?php if ($header !== null) : ?>
            <thead>
                <tr>
                    <?php foreach ($header as $cell) : ?>
                        <th scope="col"><?= kti($cell) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
        <?php endif; ?>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <?php foreach ($row as $cell) : ?>
                        <td><?= kti($cell) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
