<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="users index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_USER') ?></th>
            <th><?= $this->Paginator->sort('USER') ?></th>
            <!--<th><?= $this->Paginator->sort('MOTDP') ?></th>-->
            <th><?= $this->Paginator->sort('NOM') ?></th>
            <th><?= $this->Paginator->sort('PRENOM') ?></th>
            <th><?= $this->Paginator->sort('EMAIL') ?></th>
            <th><?= $this->Paginator->sort('POSTE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->ID_USER) ?></td>
            <td><?= h($user->USER) ?></td>
            <!--<td><?= h($user->MOTDP) ?></td>-->
            <td><?= h($user->NOM) ?></td>
            <td><?= h($user->PRENOM) ?></td>
            <td><?= h($user->EMAIL) ?></td>
            <td><?= h($user->POSTE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->ID_USER]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->ID_USER]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->ID_USER], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID_USER)]) ?>
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
