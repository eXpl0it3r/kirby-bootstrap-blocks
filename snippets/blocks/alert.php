<div class="alert alert-<?= $block->alerttype()->esc('attr') ?><?php e($block->dismissible()->toBool(), ' alert-dismissible fade show') ?>" role="alert">
    <?= $block->text() ?>
    <?php if ($block->dismissible()->toBool()) : ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php endif; ?>
</div>