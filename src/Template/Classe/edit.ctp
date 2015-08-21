<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classe->ID_CLASSE],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classe->ID_CLASSE)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Classe'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="classe form large-10 medium-9 columns">
    <?= $this->Form->create($classe) ?>
    <fieldset>
        <legend><?= __('Edit Classe') ?></legend>
        <?php
            echo $this->Form->input('TYPEVEILLE');
            echo $this->Form->input('THEMATIQUE');
            echo $this->Form->input('CATEGORIE');
            echo $this->Form->input('RUBRIQUE');
            echo $this->Form->input('VALIDE');
            //echo $this->Form->input('ID_USER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
