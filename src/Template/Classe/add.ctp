<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Classe'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="classe form large-10 medium-9 columns">
    <?= $this->Form->create($classe) ?>
    <fieldset>
        <legend><?= __('Add Classe') ?></legend>
        <?php
            echo $this->Form->input('TYPEVEILLE');
            echo $this->Form->input('THEMATIQUE');
            echo $this->Form->input('CATEGORIE');
            echo $this->Form->input('RUBRIQUE');
            if ($valide) echo $this->Form->input('VALIDE',["type"=>"select","label"=>"Valide","options"=>[1=>"Oui",0=>"Non"]]);
            //echo $this->Form->input('ID_USER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
