<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Actif'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="actifs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_ACTIF') ?></th>
            <th><?= $this->Paginator->sort('MOTCLE') ?></th>
            <th><?= $this->Paginator->sort('ID_USER') ?></th>
            <th><?= $this->Paginator->sort('ID_CLASSE') ?></th>
            <th><?= $this->Paginator->sort('VALIDE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($actifs as $actif): ?>
        <tr>
            <td><?= $this->Number->format($actif->ID_ACTIF) ?></td>
            <td><?= h($actif->MOTCLE) ?></td>
            <td><?= /*$this->Number->format($actif->ID_USER)*/h($actif->user->USER) ?></td>
            <td><?= /*$this->Number->format($actif->ID_CLASSE)*/h($actif->classe->TYPEVEILLE) ?></td>
            <td class="<?php if ($this->Number->format($actif->VALIDE)== 1) echo 'cake-success';else echo 'cake-error'?>"><?= $this->Number->format($actif->VALIDE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $actif->ID_ACTIF]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actif->ID_ACTIF]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actif->ID_ACTIF], ['confirm' => __('Are you sure you want to delete # {0}?', $actif->ID_ACTIF)]) ?>
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
