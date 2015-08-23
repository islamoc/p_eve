<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Spider'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="spider form large-10 medium-9 columns">
    <?= $this->Form->create($spider) ?>
    <fieldset>
        <legend><?= __('Add Spider') ?></legend>
        <?php
            echo $this->Form->input('NOMSPIDER');
            //echo $this->Form->input('ETAT');
            echo $this->Form->select('ETAT', [1 => "Activé" , 0 => "Désactivé"],['empty' => "Etat"]);
            //echo $this->Form->input('ID_SITE');
            echo $this->Form->select('ID_SITE', $options,['empty' => "Site Web"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
