<?= $this->element('Builder.constructor/default-index-template'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacAudit', 'action' => 'filter']) ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-filter"></i> <?= __('Filter') ?></a>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacAudit', 'action' => 'add']) ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <?= __('Add') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-list"></i> <?= __('List of Rbac Audit'); ?></h3>
    </div>
    <div class="panel-body">
        <table id="rbacAudit-table" class="table table-striped table-hover dataTable">
            <thead>
                <tr>
                    <th class="check no-sorting">
                        <input id="checkall" class="check" type="checkbox" name="" value="" />
                    </th>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Rbac User Id') ?></th>
                    <th><?= __('Session Key') ?></th>
                    <th><?= __('Ip Address') ?></th>
                    <th><?= __('Created') ?></th>
                    <th class="actions no-sorting"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $rbacAudit): ?>
                    <tr>
                        <td><input id="" class="check" type="checkbox" name="" value="" /></td>
                        <td><?= $this->Number->format($rbacAudit->id) ?></td>
                        <td><?= $rbacAudit->has('rbac_user') ? $this->Html->link($rbacAudit->rbac_user->name, ['controller' => 'RbacUser', 'action' => 'view', $rbacAudit->rbac_user->id]) : '' ?></td>
                        <td><?= h($rbacAudit->session_key) ?></td>
                        <td><?= h($rbacAudit->ip_address) ?></td>
                        <td><?= h($rbacAudit->created) ?></td>
                        <td class="actions text-right">
                            <?= $this->Html->link('<span class="glyphicon glyphicon-zoom-in"></span><span class="sr-only">' . __('View') . '</span>', ['controller' => 'rbacAudit', 'action' => 'view', $rbacAudit->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('View')]) ?>
                            <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span><span class="sr-only">' . __('Edit') . '</span>', ['controller' => 'rbacAudit', 'action' => 'edit', $rbacAudit->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('Edit'), 'data-toggle' => 'modal', 'data-target' => '#myModal']) ?>
                            <?= $this->Html->link('<span class="glyphicon glyphicon-trash"></span><span class="sr-only">' . __('Delete') . '</span>', ['controller' => 'rbacAudit', 'action' => 'delete', $rbacAudit->id], ['escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Delete'), 'data-toggle' => 'modal', 'data-target' => '#myModal']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
