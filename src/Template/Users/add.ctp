<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('USER');
            //echo $this->Form->label('MOTDP');
            echo $this->Form->input('MOTDP',['type' => 'password']);
            echo $this->Form->input('NOM');
            echo $this->Form->input('PRENOM');
            echo $this->Form->input('EMAIL');
            echo $this->Form->input('POSTE');
            echo $this->Form->input('SERVICE');
            echo $this->Form->input('DIRECTION');
            $options = [1 => 'Administrateur', 2 => 'Commité', 3 => 'Analyst', 4 => 'Agent de veille'];
            echo $this->Form->select('TYPEUSER', $options,['empty' => "Type d'utilisateur"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
