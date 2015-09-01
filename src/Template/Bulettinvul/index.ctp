<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Bulettinvul'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="bulettinvul index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_BUL') ?></th>
            <th><?= $this->Paginator->sort('DATECREATION') ?></th>
            <th><?= $this->Paginator->sort('ETAT') ?></th>
            <th><?= $this->Paginator->sort('VULNERABILITE') ?></th>
            <th><?= $this->Paginator->sort('DESCRIPTION') ?></th>
            <th><?= $this->Paginator->sort('SYSTAFFECTE') ?></th>
            <th><?= $this->Paginator->sort('State') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bulettinvul as $bulettinvul): ?>
        <tr>
            <td><?= $this->Number->format($bulettinvul->ID_BUL) ?></td>
            <td><?= h($bulettinvul->DATECREATION) ?></td>
            <td><?= $this->Number->format($bulettinvul->ETAT) ?></td>
            <td><?= h($bulettinvul->VULNERABILITE) ?></td>
            <td><?= h($bulettinvul->DESCRIPTION) ?></td>
            <td><?= h($bulettinvul->SYSTAFFECTE) ?></td>
            <td><?php if ($bulettinvul->State == 1) echo "Analyst" ;
                    if ($bulettinvul->State == 2) echo "Inter";
                    if ($bulettinvul->State == 3) echo "a Confirmer et archiver";
                  ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $bulettinvul->ID_BUL]) ?>
                <?php if ($commite == false) echo $this->Html->link(__('Edit'), ['action' => 'edit', $bulettinvul->ID_BUL]) ?>
                <?php if ($admin == true) echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $bulettinvul->ID_BUL], ['confirm' => __('Are you sure you want to delete # {0}?', $bulettinvul->ID_BUL)]) ?>
                <?php if (($admin == true) && ($bulettinvul->State == 3)) echo $this->Form->postLink(__('Archive'), ['action' => 'archive', $bulettinvul->ID_BUL], ['confirm' => __('Are you sure you want to archive # {0}?', $bulettinvul->ID_BUL)]) ?>
            </td>
        </tr>

    <?php endforeach;?>
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
