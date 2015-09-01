<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Bulettinvul'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bulettinvul form large-10 medium-9 columns">
    <?= $this->Form->create($bulettinvul) ?>
    <fieldset>
        <legend><?= __('Add Bulettinvul') ?></legend>
        <?php
            //echo $this->Form->input('DATECREATION',['empty' => true, 'default' => '']);
            echo $this->Form->input('ETAT',["type"=>"select","label"=>"Etat","options"=>[1=>"Activé",2=>"Désactivé"]]);
            echo $this->Form->input('VULNERABILITE');
            echo $this->Form->input('DESCRIPTION');
            echo $this->Form->input('SYSTAFFECTE');
            echo $this->Form->input('DATEAPPARITION', ['empty' => true, 'default' => '']);
            echo $this->Form->input('SOURCE');
            echo $this->Form->input('NIVEAURISQUE');
            echo $this->Form->input('SOURCEFIABLE');
            echo $this->Form->input('NIVEAUCRITICITE');
            echo $this->Form->input('NIVEAUIMPACT');
            echo $this->Form->input('TESTCORRECTIF',["type"=>"select","label"=>"Test Correctif","options"=>[1=>"Oui",2=>"Non"]]);
            echo $this->Form->input('APPLICATIONCORRECTIF',["type"=>"select","label"=>"Application Correctif","options"=>[1=>"Oui",2=>"Non"]]);
            echo $this->Form->input('JUSTIF');
            echo $this->Form->input('SYSTCONCERNE');
            echo $this->Form->input('VULPRISCHARGE',["type"=>"select","label"=>"Prise en charge","options"=>[1=>"Oui",2=>"Non"]]);
            echo $this->Form->input('APPLICHARGE');
            echo $this->Form->input('OBSERVATION');
            echo $this->Form->input('ID_ARTICLE',["type"=>"select","label"=>"Article","options"=>[$aoptions,0=>"Autre"]]);
            //echo $this->Form->input('State');
            //$options = [1 =>"test" , 2 => "test2"];
            echo $this->Form->select('USERS', $options,["multiple"=>true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
