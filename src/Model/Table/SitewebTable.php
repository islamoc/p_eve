<?php
namespace App\Model\Table;

use App\Model\Entity\Siteweb;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Siteweb Model
 *
 */
class SitewebTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('siteweb');
        $this->displayField('ID_SITE');
        $this->primaryKey('ID_SITE');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('ID_SITE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_SITE', 'create');

        $validator
            ->allowEmpty('URLSITE');

        $validator
            ->allowEmpty('TYPE');

        return $validator;
    }
}
