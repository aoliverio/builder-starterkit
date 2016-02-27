<?php $this->layout = null ?>
<h4><?= __('Delete Rbac User'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacUser); ?>
    <p><?= __('Are you sure you want to delete # {0}?', $rbacUser->id); ?></p>
    <hr/>
    <div class="text-center">
        <button class="btn btn-danger" type="submit"><?= __('Confirm') ?></button>  
    </div>
    <?= $this->Form->end(); ?>
</div>