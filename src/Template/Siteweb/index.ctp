<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Siteweb'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="siteweb index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_SITE') ?></th>
            <th><?= $this->Paginator->sort('URLSITE') ?></th>
            <th><?= $this->Paginator->sort('TYPE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($siteweb as $siteweb): ?>
        <tr>
            <td><?= $this->Number->format($siteweb->ID_SITE) ?></td>
            <td><?= h($siteweb->URLSITE) ?></td>
            <td><?= h($siteweb->TYPE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $siteweb->ID_SITE]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $siteweb->ID_SITE]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $siteweb->ID_SITE], ['confirm' => __('Are you sure you want to delete # {0}?', $siteweb->ID_SITE)]) ?>
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
