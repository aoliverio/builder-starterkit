<div class="well">
    <h4>Private Area</h4>
    <hr/>
    <?= $this->Form->create() ?>
    <p><?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'insert email...']) ?></p>
    <p><?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'insert password...']) ?></p>
    <hr/>
    <div class="text-right">
        <?= $this->Form->button('Login', ['class' => 'btn btn-primary']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>