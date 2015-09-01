<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->ID_ARTICLE]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->ID_ARTICLE], ['confirm' => __('Are you sure you want to delete # {0}?', $article->ID_ARTICLE)]) ?> </li>
        <li><?= $this->Html->link(__('List Article'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="article view large-10 medium-9 columns">
    <h2><?= h($article->ID_ARTICLE) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('URLARTICLE') ?></h6>
            <p><?= h($article->URLARTICLE) ?></p>
            <h6 class="subheader"><?= __('DATECAP') ?></h6>
            <p><?= h($article->DATECAP) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID ARTICLE') ?></h6>
            <p><?= $this->Number->format($article->ID_ARTICLE) ?></p>
            <h6 class="subheader"><?= __('ID SITE') ?></h6>
            <p><?= $this->Number->format($article->ID_SITE) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('DESCRI') ?></h6>
            <?= $this->Text->autoParagraph(h($article->DESCRI)) ?>
        </div>
    </div>
</div>
