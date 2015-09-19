<!--<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
    </ul>
</div>-->
<div class="article index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID_ARTICLE') ?></th>
            <th><?= $this->Paginator->sort('ID_SITE') ?></th>
            <th><?= $this->Paginator->sort('URLARTICLE') ?></th>
            <th><?= $this->Paginator->sort('DATECAP') ?></th>
            <!--<th class="actions"><?= __('Actions') ?></th>-->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($article as $article): ?>
        <tr>
            <td><?= $this->Number->format($article->ID_ARTICLE) ?></td>
            <td><?= $this->Number->format($article->ID_SITE) ?></td>
            <td><?= h($article->URLARTICLE) ?></td>
            <td><?= h($article->DATECAP) ?></td>
            <!--<td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $article->ID_ARTICLE]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->ID_ARTICLE]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->ID_ARTICLE], ['confirm' => __('Are you sure you want to delete # {0}?', $article->ID_ARTICLE)]) ?>
            </td>-->
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
<div>
  <?php if(!($loggedIn)) echo $this->element('login'); ?>
</div>
