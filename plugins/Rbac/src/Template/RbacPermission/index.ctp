<?= $this->element('Builder.constructor/default-index-template'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right">
            <small><?= __('Actions:'); ?></small>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacPermission', 'action' => 'filter']) ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-filter"></i> <?= __('Filter') ?></a>
            <a class="btn btn-xs" href="<?= $this->Url->build(['controller' => 'rbacPermission', 'action' => 'add']) ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <?= __('Add') ?></a>
        </span>
        <h3 class="panel-title"><i class="fa fa-list"></i> <?= __('List of Rbac Permission'); ?></h3>
    </div>
    <div class="panel-body">
        <table id="rbacPermission-table" class="table table-striped table-hover dataTable">
            <thead>
                <tr>
                    <th class="check no-sorting">
                        <input id="checkall" class="check" type="checkbox" name="" value="" />
                    </th>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Rbac Object Id') ?></th>
                    <th><?= __('Rbac Operation Id') ?></th>
                    <th><?= __('Name') ?></th>
                    <th><?= __('Created') ?></th>
                    <th><?= __('Modified') ?></th>
                    <th class="actions no-sorting"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $rbacPermission): ?>
                    <tr>
                        <td><input id="" class="check" type="checkbox" name="" value="" /></td>
                        <td><?= $this->Number->format($rbacPermission->id) ?></td>
                        <td><?= $rbacPermission->has('rbac_object') ? $this->Html->link($rbacPermission->rbac_object->name, ['controller' => 'RbacObject', 'action' => 'view', $rbacPermission->rbac_object->id]) : '' ?></td>
                        <td><?= $rbacPermission->has('rbac_operation') ? $this->Html->link($rbacPermission->rbac_operation->name, ['controller' => 'RbacOperation', 'action' => 'view', $rbacPermission->rbac_operation->id]) : '' ?></td>
                        <td><?= h($rbacPermission->name) ?></td>
                        <td><?= h($rbacPermission->created) ?></td>
                        <td><?= h($rbacPermission->modified) ?></td>
                        <td class="actions text-right">
                            <?= $this->Html->link('<span class="glyphicon glyphicon-zoom-in"></span><span class="sr-only">' . __('View') . '</span>', ['controller' => 'rbacPermission', 'action' => 'view', $rbacPermission->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('View')]) ?>
                            <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span><span class="sr-only">' . __('Edit') . '</span>', ['controller' => 'rbacPermission', 'action' => 'edit', $rbacPermission->id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('Edit'), 'data-toggle' => 'modal', 'data-target' => '#myModal']) ?>
                            <?= $this->Html->link('<span class="glyphicon glyphicon-trash"></span><span class="sr-only">' . __('Delete') . '</span>', ['controller' => 'rbacPermission', 'action' => 'delete', $rbacPermission->id], ['escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Delete'), 'data-toggle' => 'modal', 'data-target' => '#myModal']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
