<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Siteweb'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="siteweb form large-10 medium-9 columns">
    <?= $this->Form->create($siteweb) ?>
    <fieldset>
        <legend><?= __('Add Siteweb') ?></legend>
        <?php
            echo $this->Form->input('URLSITE');
            echo $this->Form->input('TYPE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
