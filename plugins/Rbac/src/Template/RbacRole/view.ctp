<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacRole', 'action' => 'index']) ?>"><i class="fa fa-list"></i> <?= __('List') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-search-plus"></i> <?= __('Rbac Role'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 columns strings">
                <label class="subheader"><?= __('Name') ?></label>
                <p><?= h($rbacRole->name) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns numbers end">
                <label class="subheader"><?= __('Id') ?></label>
                <p><?= $this->Number->format($rbacRole->id) ?></p>
                <hr/>
                <label class="subheader"><?= __('Lft') ?></label>
                <p><?= $this->Number->format($rbacRole->lft) ?></p>
                <hr/>
                <label class="subheader"><?= __('Rgt') ?></label>
                <p><?= $this->Number->format($rbacRole->rgt) ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>