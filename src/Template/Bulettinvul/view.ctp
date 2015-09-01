<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Bulettinvul'), ['action' => 'edit', $bulettinvul->ID_BUL]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bulettinvul'), ['action' => 'delete', $bulettinvul->ID_BUL], ['confirm' => __('Are you sure you want to delete # {0}?', $bulettinvul->ID_BUL)]) ?> </li>
        <li><?= $this->Html->link(__('List Bulettinvul'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bulettinvul'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bulettinvul view large-10 medium-9 columns">
    <h2><?= h($bulettinvul->ID_BUL) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('VULNERABILITE') ?></h6>
            <p><?= h($bulettinvul->VULNERABILITE) ?></p>
            <h6 class="subheader"><?= __('DESCRIPTION') ?></h6>
            <p><?= h($bulettinvul->DESCRIPTION) ?></p>
            <h6 class="subheader"><?= __('SYSTAFFECTE') ?></h6>
            <p><?= h($bulettinvul->SYSTAFFECTE) ?></p>
            <h6 class="subheader"><?= __('SOURCE') ?></h6>
            <p><?= h($bulettinvul->SOURCE) ?></p>
            <h6 class="subheader"><?= __('NIVEAURISQUE') ?></h6>
            <p><?= h($bulettinvul->NIVEAURISQUE) ?></p>
            <h6 class="subheader"><?= __('SOURCEFIABLE') ?></h6>
            <p><?= h($bulettinvul->SOURCEFIABLE) ?></p>
            <h6 class="subheader"><?= __('NIVEAUCRITICITE') ?></h6>
            <p><?= h($bulettinvul->NIVEAUCRITICITE) ?></p>
            <h6 class="subheader"><?= __('NIVEAUIMPACT') ?></h6>
            <p><?= h($bulettinvul->NIVEAUIMPACT) ?></p>
            <h6 class="subheader"><?= __('JUSTIF') ?></h6>
            <p><?= h($bulettinvul->JUSTIF) ?></p>
            <h6 class="subheader"><?= __('SYSTCONCERNE') ?></h6>
            <p><?= h($bulettinvul->SYSTCONCERNE) ?></p>
            <h6 class="subheader"><?= __('APPLICHARGE') ?></h6>
            <p><?= h($bulettinvul->APPLICHARGE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID BUL') ?></h6>
            <p><?= $this->Number->format($bulettinvul->ID_BUL) ?></p>
            <h6 class="subheader"><?= __('ETAT') ?></h6>
            <p><?= $this->Number->format($bulettinvul->ETAT) ?></p>
            <h6 class="subheader"><?= __('TESTCORRECTIF') ?></h6>
            <p><?= $this->Number->format($bulettinvul->TESTCORRECTIF) ?></p>
            <h6 class="subheader"><?= __('APPLICATIONCORRECTIF') ?></h6>
            <p><?= $this->Number->format($bulettinvul->APPLICATIONCORRECTIF) ?></p>
            <h6 class="subheader"><?= __('VULPRISCHARGE') ?></h6>
            <p><?= $this->Number->format($bulettinvul->VULPRISCHARGE) ?></p>
            <h6 class="subheader"><?= __('ID ARTICLE') ?></h6>
            <p><?= $this->Number->format($bulettinvul->ID_ARTICLE) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $this->Number->format($bulettinvul->State) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DATECREATION') ?></h6>
            <p><?= h($bulettinvul->DATECREATION) ?></p>
            <h6 class="subheader"><?= __('DATEAPPARITION') ?></h6>
            <p><?= h($bulettinvul->DATEAPPARITION) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('OBSERVATION') ?></h6>
            <?= $this->Text->autoParagraph(h($bulettinvul->OBSERVATION)) ?>
        </div>
    </div>
</div>
