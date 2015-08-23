<?php
namespace App\Model\Table;

use App\Model\Entity\Spider;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Spider Model
 *
 */
class SpiderTable extends Table
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

        $this->table('spider');
        $this->displayField('ID');
        $this->primaryKey('ID');
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
            ->add('ID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID', 'create');

        $validator
            ->allowEmpty('NOMSPIDER');

        $validator
            ->add('ETAT', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ETAT');

        $validator
            ->add('ID_SITE', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_SITE', 'create')
            ->notEmpty('ID_SITE');

        return $validator;
    }
}
