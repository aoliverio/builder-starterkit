<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacAudit', 'action' => 'index']) ?>"><i class="fa fa-list"></i> <?= __('List') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-search-plus"></i> <?= __('Rbac Audit'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 columns strings">
                <label class="subheader"><?= __('Rbac User') ?></label>
                <p><?= $rbacAudit->has('rbac_user') ? $this->Html->link($rbacAudit->rbac_user->name, ['controller' => 'RbacUser', 'action' => 'view', $rbacAudit->rbac_user->id]) : '' ?></p>
                <label class="subheader"><?= __('Session Key') ?></label>
                <p><?= h($rbacAudit->session_key) ?></p>
                <hr/>
                <label class="subheader"><?= __('Ip Address') ?></label>
                <p><?= h($rbacAudit->ip_address) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns numbers end">
                <label class="subheader"><?= __('Id') ?></label>
                <p><?= $this->Number->format($rbacAudit->id) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns dates end">
                <label class="subheader"><?= __('Created') ?></label>
                <p><?= h($rbacAudit->created) ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>