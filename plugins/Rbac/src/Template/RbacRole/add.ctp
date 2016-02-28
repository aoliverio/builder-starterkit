<?php $this->layout = null ?>
<h4><?= __('Add Rbac Role'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacRole) ?>
    <?= $this->Form->input('name', ['label' => 'Name', 'class' => 'form-control']); ?>
    <?= $this->Form->input('description', ['label' => 'Description', 'class' => 'form-control']); ?>
    <?= $this->Form->input('lft', ['label' => 'Lft', 'class' => 'form-control']); ?>
    <?= $this->Form->input('rgt', ['label' => 'Rgt', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>