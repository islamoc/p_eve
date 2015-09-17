<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Classe'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="classe index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_CLASSE') ?></th>
            <th><?= $this->Paginator->sort('TYPEVEILLE') ?></th>
            <th><?= $this->Paginator->sort('THEMATIQUE') ?></th>
            <th><?= $this->Paginator->sort('CATEGORIE') ?></th>
            <th><?= $this->Paginator->sort('RUBRIQUE') ?></th>
            <th><?= $this->Paginator->sort('VALIDE') ?></th>
            <th><?= $this->Paginator->sort('ID_USER') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($classe as $classe): ?>
        <tr>
            <td><?= $this->Number->format($classe->ID_CLASSE) ?></td>
            <td><?= h($classe->TYPEVEILLE) ?></td>
            <td><?= h($classe->THEMATIQUE) ?></td>
            <td><?= h($classe->CATEGORIE) ?></td>
            <td><?= h($classe->RUBRIQUE) ?></td>
            <td class="<?php if ($this->Number->format($classe->VALIDE)== 1) echo 'cake-success';else echo 'cake-error'?>"><?= $this->Number->format($classe->VALIDE) ?></td>
            <td><?= $this->Number->format($classe->ID_USER) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $classe->ID_CLASSE]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classe->ID_CLASSE]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classe->ID_CLASSE], ['confirm' => __('Are you sure you want to delete # {0}?', $classe->ID_CLASSE)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
