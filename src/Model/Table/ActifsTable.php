<?php
namespace App\Model\Table;

use App\Model\Entity\Actif;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actifs Model
 *
 */
class ActifsTable extends Table
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

        $this->table('actifs');
        $this->displayField('ID_ACTIF');
        $this->primaryKey('ID_ACTIF');
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
            ->add('ID_ACTIF', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_ACTIF', 'create');

        $validator
            ->allowEmpty('MOTCLE');

        $validator
            ->add('ID_USER', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_USER', 'create')
            ->notEmpty('ID_USER');

        $validator
            ->add('ID_CLASSE', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_CLASSE', 'create')
            ->notEmpty('ID_CLASSE');

        $validator
            ->add('VALIDE', 'valid', ['rule' => 'numeric'])
            ->requirePresence('VALIDE', 'create')
            ->notEmpty('VALIDE');

        return $validator;
    }
}
