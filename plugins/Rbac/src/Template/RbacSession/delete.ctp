<?php $this->layout = null ?>
<h4><?= __('Delete Rbac Session'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacSession); ?>
    <p><?= __('Are you sure you want to delete # {0}?', $rbacSession->id); ?></p>
    <hr/>
    <div class="text-center">
        <button class="btn btn-danger" type="submit"><?= __('Confirm') ?></button>  
    </div>
    <?= $this->Form->end(); ?>
</div>