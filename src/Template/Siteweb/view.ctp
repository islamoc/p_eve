<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Siteweb'), ['action' => 'edit', $siteweb->ID_SITE]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Siteweb'), ['action' => 'delete', $siteweb->ID_SITE], ['confirm' => __('Are you sure you want to delete # {0}?', $siteweb->ID_SITE)]) ?> </li>
        <li><?= $this->Html->link(__('List Siteweb'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Siteweb'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="siteweb view large-10 medium-9 columns">
    <h2><?= h($siteweb->ID_SITE) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('URLSITE') ?></h6>
            <p><?= h($siteweb->URLSITE) ?></p>
            <h6 class="subheader"><?= __('TYPE') ?></h6>
            <p><?= h($siteweb->TYPE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID SITE') ?></h6>
            <p><?= $this->Number->format($siteweb->ID_SITE) ?></p>
        </div>
    </div>
</div>
