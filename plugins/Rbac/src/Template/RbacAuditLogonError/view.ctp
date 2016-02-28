<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacAuditLogonError', 'action' => 'index']) ?>"><i class="fa fa-list"></i> <?= __('List') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-search-plus"></i> <?= __('Rbac Audit Logon Error'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 columns strings">
                <label class="subheader"><?= __('Ip Address') ?></label>
                <p><?= h($rbacAuditLogonError->ip_address) ?></p>
                <hr/>
                <label class="subheader"><?= __('Username') ?></label>
                <p><?= h($rbacAuditLogonError->username) ?></p>
                <hr/>
                <label class="subheader"><?= __('Password') ?></label>
                <p><?= h($rbacAuditLogonError->password) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns numbers end">
                <label class="subheader"><?= __('Id') ?></label>
                <p><?= $this->Number->format($rbacAuditLogonError->id) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns dates end">
                <label class="subheader"><?= __('Created') ?></label>
                <p><?= h($rbacAuditLogonError->created) ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>