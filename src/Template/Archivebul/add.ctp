<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <!--<li><?= $this->Html->link(__('List Archivebul'), ['action' => 'index']) ?></li>-->
    </ul>
</div>
<div class="archivebul form large-10 medium-9 columns">
    <?= $this->Form->create($archivebul) ?>
    <fieldset>
        <legend><?= __('Archiver') ?></legend>
        <?php
            //echo $this->Form->input('DATEARCHIVAGE');
            echo $this->Form->input('REMARQUE');
            //echo $this->Form->input('ID_BUL');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
