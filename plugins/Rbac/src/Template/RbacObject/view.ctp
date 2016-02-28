<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacObject', 'action' => 'index']) ?>"><i class="fa fa-list"></i> <?= __('List') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-search-plus"></i> <?= __('Rbac Object'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 columns strings">
                <label class="subheader"><?= __('Name') ?></label>
                <p><?= h($rbacObject->name) ?></p>
                <hr/>
                <label class="subheader"><?= __('Plugin') ?></label>
                <p><?= h($rbacObject->plugin) ?></p>
                <hr/>
                <label class="subheader"><?= __('Controller') ?></label>
                <p><?= h($rbacObject->controller) ?></p>
                <hr/>
            </div>
            <div class="col-md-2 columns numbers end">
                <label class="subheader"><?= __('Id') ?></label>
                <p><?= $this->Number->format($rbacObject->id) ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>