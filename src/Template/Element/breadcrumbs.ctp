<?php
/**
 * Use Cake Libraries
 */
use Cake\Utility\Inflector;
?>
<ol class="breadcrumb">
    <li><a href="<?= $this->Url->build('/'); ?>">Home</a></li>
    <!-- Plugin -->
    <?php if (isset($this->request->params['plugin'])) : ?>
        <?php $PLUGIN_LABEL = Inflector::humanize(Inflector::underscore($this->request->params['plugin'])); ?>
        <li><a href="<?= $this->Url->build('/' . $this->request->params['plugin']); ?>"><?= $PLUGIN_LABEL; ?></a></li>
    <?php endif; ?>
    <!-- Controller -->
    <?php if (isset($this->request->params['controller'])) : ?>
        <?php $CONTROLLER_LABEL = Inflector::humanize(Inflector::underscore($this->request->params['controller'])); ?>
        <li><a href="<?= $this->Url->build(['controller' => $this->request->params['controller'], 'action' => 'index']); ?>"><?= $CONTROLLER_LABEL; ?></a></li>
<?php endif; ?>
</ol>