<?php $this->layout = null ?>
<h4><?= __('Add Rbac Operation'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacOperation) ?>
    <?= $this->Form->input('name', ['label' => 'Name', 'class' => 'form-control']); ?>
    <?= $this->Form->input('description', ['label' => 'Description', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>