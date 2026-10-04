<div class="alert alert-<?= $block->alerttype()->esc('attr') ?><?php e($block->dismissible()->toBool(), ' alert-dismissible') ?>">
    <?php if ($block->dismissible()->toBool()) : ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php endif; ?>
    <?= $block->text() ?>
</div>