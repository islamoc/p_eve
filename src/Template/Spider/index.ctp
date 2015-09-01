<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Spider'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="spider index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('NOMSPIDER') ?></th>
            <th><?= $this->Paginator->sort('ETAT') ?></th>
            <th><?= $this->Paginator->sort('ID_SITE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($spider as $spider): ?>
        <tr>
            <td><?= $this->Number->format($spider->ID) ?></td>
            <td><?= h($spider->NOMSPIDER) ?></td>
            <td><?= $this->Number->format($spider->ETAT) ?></td>
            <td><?= //$this->Number->format($spider->URLSITE)
            h($spider->siteweb->URLSITE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $spider->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $spider->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $spider->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $spider->ID)]) ?>
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
