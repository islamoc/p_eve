<?php
namespace App\Model\Table;

use App\Model\Entity\Concerne;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Concerne Model
 *
 */
class ConcerneTable extends Table
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

        $this->table('concerne');
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
            ->add('ID_USER', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_USER', 'create')
            ->notEmpty('ID_USER');

        $validator
            ->add('ID_BUL', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_BUL', 'create')
            ->notEmpty('ID_BUL');

        return $validator;
    }
}
