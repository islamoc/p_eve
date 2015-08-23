<div class="actions columns large-2 medium-3">
    <?php $this->loadHelper('Actif'); ?>
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actif->ID_ACTIF],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actif->ID_ACTIF)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actifs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="actifs form large-10 medium-9 columns">
    <?= $this->Form->create($actif) ?>
    <fieldset>
        <legend><?= __('Edit Actif') ?></legend>
        <?php
            echo $this->Form->input('MOTCLE');
            //echo $this->Form->input('ID_USER');
            $options = $this->Actif->getClasseHelper();
            echo $this->Form->select('ID_CLASSE', $options,['empty' => "Classe"]);
            //echo $this->Form->input('ID_CLASSE');
            if ($valide){
            echo $this->Form->input('VALIDE');
            }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
