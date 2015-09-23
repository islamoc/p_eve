<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Archivebul'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="archivebul index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DATEARCHIVAGE') ?></th>
            <th><?= $this->Paginator->sort('ID_BUL') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($archivebul as $archivebul): ?>
        <tr>
            <td><?= $this->Number->format($archivebul->ID) ?></td>
            <td><?= h($archivebul->DATEARCHIVAGE) ?></td>
            <td><?= $this->Number->format($archivebul->ID_BUL) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $archivebul->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $archivebul->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $archivebul->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $archivebul->ID)]) ?>
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
