<?php $this->layout = null ?>
<h4><?= __('Add Rbac Audit Logon Error'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacAuditLogonError) ?>
    <?= $this->Form->input('ip_address', ['label' => 'Ip Address', 'class' => 'form-control']); ?>
    <?= $this->Form->input('request', ['label' => 'Request', 'class' => 'form-control']); ?>
    <?= $this->Form->input('username', ['label' => 'Username', 'class' => 'form-control']); ?>
    <?= $this->Form->input('password', ['label' => 'Password', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>