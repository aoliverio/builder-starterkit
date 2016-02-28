<?php $this->layout = null ?>
<h4><?= __('Edit Rbac Object'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacObject) ?>
    <?= $this->Form->input('name', ['label' => 'Name', 'class' => 'form-control']); ?>
    <?= $this->Form->input('plugin', ['label' => 'Plugin', 'class' => 'form-control']); ?>
    <?= $this->Form->input('controller', ['label' => 'Controller', 'class' => 'form-control']); ?>
    <?= $this->Form->input('description', ['label' => 'Description', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>