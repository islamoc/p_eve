<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?php if ($admin == true) echo $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bulettinvul->ID_BUL],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bulettinvul->ID_BUL)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bulettinvul'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bulettinvul form large-10 medium-9 columns">
    <?= $this->Form->create($bulettinvul) ?>
    <fieldset>
        <legend><?= __('Edit Bulettinvul') ?></legend>
        <?php
            //echo $this->Form->input('DATECREATION',['empty' => true, 'default' => '']);
            if ($admin) echo $this->Form->input('ETAT',["type"=>"select","label"=>"Etat","options"=>[1=>"Activé",2=>"Désactivé"]]);
            if ($admin) echo $this->Form->input('VULNERABILITE');
            if ($admin) echo $this->Form->input('DESCRIPTION');
            if ($admin) echo $this->Form->input('SYSTAFFECTE');
            if ($admin) echo $this->Form->input('DATEAPPARITION', ['empty' => true, 'default' => '']);
            if ($admin) echo $this->Form->input('SOURCE');
            if (($analyst)) echo $this->Form->input('NIVEAURISQUE');
            if (($analyst)) echo $this->Form->input('SOURCEFIABLE');
            if (($analyst)) echo $this->Form->input('NIVEAUCRITICITE');
            if (($analyst)) echo $this->Form->input('NIVEAUIMPACT');
            if (($inter)) echo $this->Form->input('TESTCORRECTIF',["type"=>"select","label"=>"Test Correctif","options"=>[1=>"Oui",2=>"Non"]]);
            if (($inter)) echo $this->Form->input('APPLICATIONCORRECTIF',["type"=>"select","label"=>"Application Correctif","options"=>[1=>"Oui",2=>"Non"]]);
            if (($inter)) echo $this->Form->input('JUSTIF');
            if (($inter)) echo $this->Form->input('SYSTCONCERNE');
            if ($admin) echo $this->Form->input('VULPRISCHARGE',["type"=>"select","label"=>"Prise en charge","options"=>[1=>"Oui",2=>"Non"]]);
            if ($admin) echo $this->Form->input('APPLICHARGE');
            if ($admin) echo $this->Form->input('OBSERVATION');
            if ($admin) echo $this->Form->input('ID_ARTICLE',["type"=>"select","label"=>"Article","options"=>$aoptions]);
            //echo $this->Form->input('State');
            //$options = [1 =>"test" , 2 => "test2"];
            //echo $this->Form->select('USERS', $options,["multiple"=>true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
