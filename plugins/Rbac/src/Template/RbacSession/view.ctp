<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacSession', 'action' => 'index']) ?>"><i class="fa fa-list"></i> <?= __('List') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-search-plus"></i> <?= __('Rbac Session'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 columns strings">
                <label class="subheader"><?= __('Rbac User') ?></label>
                <p><?= $rbacSession->has('rbac_user') ? $this->Html->link($rbacSession->rbac_user->name, ['controller' => 'RbacUser', 'action' => 'view', $rbacSession->rbac_user->id]) : '' ?></p>
                <label class="subheader"><?= __('Name') ?></label>
                <p><?= h($rbacSession->name) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns numbers end">
                <label class="subheader"><?= __('Id') ?></label>
                <p><?= $this->Number->format($rbacSession->id) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns dates end">
                <label class="subheader"><?= __('Created') ?></label>
                <p><?= h($rbacSession->created) ?></p>
                <hr/>
                <label class="subheader"><?= __('Modified') ?></label>
                <p><?= h($rbacSession->modified) ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>