<div class="actions columns large-2 edium-3">
    <?php $this->loadHelper('Actif'); ?>
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Actifs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="actifs form large-10 medium-9 columns">
    <?= $this->Form->create($actif) ?>
    <fieldset>
        <legend><?= __('Add Actif') ?></legend>
        <?php
            echo $this->Form->input('MOTCLE');
            //echo $this->Form->input('ID_USER');
            //echo $this->Form->input('ID_CLASSE');
            //$o = array();
            $options = $this->Actif->getClasseHelper();
            echo $this->Form->select('ID_CLASSE', $options,['empty' => "Classe"]);
            echo $this->Form->input('VALIDE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
