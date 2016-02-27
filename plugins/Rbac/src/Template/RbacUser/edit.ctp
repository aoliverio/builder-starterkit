<?php $this->layout = null ?>
<h4><?= __('Edit Rbac User'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacUser) ?>
    <?= $this->Form->input('name', ['label' => 'Name', 'class' => 'form-control']); ?>
    <?= $this->Form->input('email', ['label' => 'Email', 'class' => 'form-control']); ?>
    <?= $this->Form->input('username', ['label' => 'Username', 'class' => 'form-control']); ?>
    <?= $this->Form->input('password', ['label' => 'Password', 'class' => 'form-control']); ?>
    <?= $this->Form->input('is_blocked', ['label' => 'Is Blocked', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>