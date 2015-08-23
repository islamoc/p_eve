<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $spider->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $spider->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Spider'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="spider form large-10 medium-9 columns">
    <?= $this->Form->create($spider) ?>
    <fieldset>
        <legend><?= __('Edit Spider') ?></legend>
        <?php
            echo $this->Form->input('NOMSPIDER');
            echo $this->Form->input('ETAT');
            echo $this->Form->input('ID_SITE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
