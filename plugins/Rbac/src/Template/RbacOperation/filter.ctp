<?php $this->layout = null ?>
<h4><?= __('Filter Rbac Operation'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacOperation); ?>
    <?= __('No filter template are builded. Make your filter here!'); ?>
    <hr/>
    <div class="text-center">
        <button class="btn btn-success" type="submit"><?= __('Filter'); ?></button>  
    </div>
    <?= $this->Form->end(); ?>
</div>