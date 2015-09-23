<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Actif'), ['action' => 'edit', $actif->ID_ACTIF]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actif'), ['action' => 'delete', $actif->ID_ACTIF], ['confirm' => __('Are you sure you want to delete # {0}?', $actif->ID_ACTIF)]) ?> </li>
        <li><?= $this->Html->link(__('List Actifs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actif'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="actifs view large-10 medium-9 columns">
    <h2><?= h($actif->ID_ACTIF) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('MOTCLE') ?></h6>
            <p><?= h($actif->MOTCLE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID ACTIF') ?></h6>
            <p><?= $this->Number->format($actif->ID_ACTIF) ?></p>
            <h6 class="subheader"><?= __('ID USER') ?></h6>
            <p><?= h($actif->user->USER) ?></p>
            <h6 class="subheader"><?= __('ID CLASSE') ?></h6>
            <p><?= h($actif->classe->TYPEVEILLE) ?></p>
            <h6 class="subheader"><?= __('VALIDE') ?></h6>
            <p><?= $this->Number->format($actif->VALIDE) ?></p>
        </div>
    </div>
</div>
