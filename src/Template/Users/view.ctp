<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->ID_USER]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->ID_USER], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID_USER)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->ID_USER) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('USER') ?></h6>
            <p><?= h($user->USER) ?></p>
            <h6 class="subheader"><?= __('MOTDP') ?></h6>
            <p><?= h($user->MOTDP) ?></p>
            <h6 class="subheader"><?= __('NOM') ?></h6>
            <p><?= h($user->NOM) ?></p>
            <h6 class="subheader"><?= __('PRENOM') ?></h6>
            <p><?= h($user->PRENOM) ?></p>
            <h6 class="subheader"><?= __('EMAIL') ?></h6>
            <p><?= h($user->EMAIL) ?></p>
            <h6 class="subheader"><?= __('POSTE') ?></h6>
            <p><?= h($user->POSTE) ?></p>
            <h6 class="subheader"><?= __('SERVICE') ?></h6>
            <p><?= h($user->SERVICE) ?></p>
            <h6 class="subheader"><?= __('DIRECTION') ?></h6>
            <p><?= h($user->DIRECTION) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID USER') ?></h6>
            <p><?= $this->Number->format($user->ID_USER) ?></p>
            <h6 class="subheader"><?= __('TYPEUSER') ?></h6>
            <p><?= $this->Number->format($user->TYPEUSER) ?></p>
        </div>
    </div>
</div>
