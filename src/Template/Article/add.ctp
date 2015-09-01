<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Article'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="article form large-10 medium-9 columns">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->input('ID_SITE');
            echo $this->Form->input('URLARTICLE');
            echo $this->Form->input('DESCRI');
            echo $this->Form->input('DATECAP');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
