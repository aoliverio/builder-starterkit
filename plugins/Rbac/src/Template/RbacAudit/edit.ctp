<?php $this->layout = null ?>
<h4><?= __('Edit Rbac Audit'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($rbacAudit) ?>
    <?= $this->Form->input('rbac_user_id', ['options' => $rbacUser, 'label' => 'Rbac User Id', 'class' => 'form-control']); ?>
    <?= $this->Form->input('session_key', ['label' => 'Session Key', 'class' => 'form-control']); ?>
    <?= $this->Form->input('ip_address', ['label' => 'Ip Address', 'class' => 'form-control']); ?>
    <?= $this->Form->input('request', ['label' => 'Request', 'class' => 'form-control']); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>