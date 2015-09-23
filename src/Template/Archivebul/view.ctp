<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Archivebul'), ['action' => 'edit', $archivebul->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Archivebul'), ['action' => 'delete', $archivebul->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $archivebul->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Archivebul'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Archivebul'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="archivebul view large-10 medium-9 columns">
    <h2><?= h($archivebul->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('DATEARCHIVAGE') ?></h6>
            <p><?= h($archivebul->DATEARCHIVAGE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($archivebul->ID) ?></p>
            <h6 class="subheader"><?= __('ID BUL') ?></h6>
            <p><?= $this->Number->format($archivebul->ID_BUL) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('REMARQUE') ?></h6>
            <?= $this->Text->autoParagraph(h($archivebul->REMARQUE)) ?>
        </div>
    </div>
</div>
