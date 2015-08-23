<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Spider'), ['action' => 'edit', $spider->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Spider'), ['action' => 'delete', $spider->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $spider->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Spider'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spider'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="spider view large-10 medium-9 columns">
    <h2><?= h($spider->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('NOMSPIDER') ?></h6>
            <p><?= h($spider->NOMSPIDER) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($spider->ID) ?></p>
            <h6 class="subheader"><?= __('ETAT') ?></h6>
            <p><?= $this->Number->format($spider->ETAT) ?></p>
            <h6 class="subheader"><?= __('ID SITE') ?></h6>
            <p><?= $this->Number->format($spider->ID_SITE) ?></p>
        </div>
    </div>
</div>
