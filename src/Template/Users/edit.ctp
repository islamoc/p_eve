<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->ID_USER],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID_USER)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('USER');
            echo $this->Form->input('MOTDP');
            echo $this->Form->input('NOM');
            echo $this->Form->input('PRENOM');
            echo $this->Form->input('EMAIL');
            echo $this->Form->input('POSTE');
            echo $this->Form->input('SERVICE');
            echo $this->Form->input('DIRECTION');
            echo $this->Form->input('TYPEUSER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
