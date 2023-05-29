<div class="alert alert-<?= $block->alerttype() ?> <?= $block->dismissible()->toBool() == true ? "alert-dismissible" : "" ?>">
    <?php if ($block->dismissible()->toBool() == true) : ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php endif; ?>
    <?= $block->text() ?>
</div>