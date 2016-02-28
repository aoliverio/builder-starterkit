<?php $this->layout = null ?>
<h4><?= __('Edit Rbac Session'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacSession) ?>
    <?= $this->Form->input('rbac_user_id', ['options' => $rbacUser, 'label' => 'Rbac User Id', 'class' => 'form-control']); ?>
    <?= $this->Form->input('name', ['label' => 'Name', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>