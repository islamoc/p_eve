<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Classe'), ['action' => 'edit', $classe->ID_CLASSE]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Classe'), ['action' => 'delete', $classe->ID_CLASSE], ['confirm' => __('Are you sure you want to delete # {0}?', $classe->ID_CLASSE)]) ?> </li>
        <li><?= $this->Html->link(__('List Classe'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classe'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="classe view large-10 medium-9 columns">
    <h2><?= h($classe->ID_CLASSE) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('TYPEVEILLE') ?></h6>
            <p><?= h($classe->TYPEVEILLE) ?></p>
            <h6 class="subheader"><?= __('THEMATIQUE') ?></h6>
            <p><?= h($classe->THEMATIQUE) ?></p>
            <h6 class="subheader"><?= __('CATEGORIE') ?></h6>
            <p><?= h($classe->CATEGORIE) ?></p>
            <h6 class="subheader"><?= __('RUBRIQUE') ?></h6>
            <p><?= h($classe->RUBRIQUE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID CLASSE') ?></h6>
            <p><?= $this->Number->format($classe->ID_CLASSE) ?></p>
            <h6 class="subheader"><?= __('VALIDE') ?></h6>
            <p><?= $this->Number->format($classe->VALIDE) ?></p>
            <h6 class="subheader"><?= __('ID USER') ?></h6>
            <p><?= $this->Number->format($classe->ID_USER) ?></p>
        </div>
    </div>
</div>
