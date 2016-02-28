<?php $this->layout = null ?>
<h4><?= __('Edit Rbac Permission'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacPermission) ?>
    <?= $this->Form->input('rbac_object_id', ['options' => $rbacObject, 'label' => 'Rbac Object Id', 'class' => 'form-control']); ?>
    <?= $this->Form->input('rbac_operation_id', ['options' => $rbacOperation, 'label' => 'Rbac Operation Id', 'class' => 'form-control']); ?>
    <?= $this->Form->input('name', ['label' => 'Name', 'class' => 'form-control']); ?>
    <?= $this->Form->input('descption', ['label' => 'Descption', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>