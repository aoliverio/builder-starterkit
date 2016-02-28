<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacPermission', 'action' => 'index']) ?>"><i class="fa fa-list"></i> <?= __('List') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-search-plus"></i> <?= __('Rbac Permission'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 columns strings">
                <label class="subheader"><?= __('Rbac Object') ?></label>
                <p><?= $rbacPermission->has('rbac_object') ? $this->Html->link($rbacPermission->rbac_object->name, ['controller' => 'RbacObject', 'action' => 'view', $rbacPermission->rbac_object->id]) : '' ?></p>
                <label class="subheader"><?= __('Rbac Operation') ?></label>
                <p><?= $rbacPermission->has('rbac_operation') ? $this->Html->link($rbacPermission->rbac_operation->name, ['controller' => 'RbacOperation', 'action' => 'view', $rbacPermission->rbac_operation->id]) : '' ?></p>
                <label class="subheader"><?= __('Name') ?></label>
                <p><?= h($rbacPermission->name) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns numbers end">
                <label class="subheader"><?= __('Id') ?></label>
                <p><?= $this->Number->format($rbacPermission->id) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns dates end">
                <label class="subheader"><?= __('Created') ?></label>
                <p><?= h($rbacPermission->created) ?></p>
                <hr/>
                <label class="subheader"><?= __('Modified') ?></label>
                <p><?= h($rbacPermission->modified) ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>