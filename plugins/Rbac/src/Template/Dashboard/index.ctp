<h1 class="page-header"><?= __('RBAC Dashboard') ?></h1>

<div class="well well-sm">
    <a href="<?= $this->Url->build(['controller' => 'rbac-user']) ?>"><?= __('RBAC User') ?></a>
</div>
<div class="well well-sm">
    <a href="<?= $this->Url->build(['controller' => 'rbac-role']) ?>"><?= __('RBAC Role') ?></a>
</div>
<div class="well well-sm">
    <a href="<?= $this->Url->build(['controller' => 'rbac-permission']) ?>"><?= __('RBAC Permission') ?></a>
</div>
<div class="well well-sm">
    <a href="<?= $this->Url->build(['controller' => 'rbac-object']) ?>"><?= __('RBAC Object') ?></a>
</div>
<div class="well well-sm">
    <a href="<?= $this->Url->build(['controller' => 'rbac-operation']) ?>"><?= __('RBAC Operation') ?></a>
</div>
<div class="alert alert-warning">
    <a href="<?= $this->Url->build(['controller' => 'rbac-session']) ?>"><?= __('RBAC Session') ?></a>
</div>

<h4>AUDIT</h4>
<div class="well">
    <a href="<?= $this->Url->build(['controller' => 'rbac-audit']) ?>"><?= __('RBAC Audit') ?></a>
</div>
<div class="well">
    <a href="<?= $this->Url->build(['controller' => 'rbac-audit-logon-error']) ?>"><?= __('RBAC Logon Error') ?></a>
</div>