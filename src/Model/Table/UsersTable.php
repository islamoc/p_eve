<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('ID_USER');
        $this->primaryKey('ID_USER');
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
            ->add('ID_USER', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_USER', 'create');

        $validator
            ->requirePresence('USER', 'create')
            ->add('USER', [ 'unique' => ['rule' => 'validateUnique', 'provider' => 'table'] ])
            ->notEmpty('USER');

        $validator
            ->requirePresence('MOTDP', 'create')
            ->notEmpty('MOTDP');

        $validator
            ->allowEmpty('NOM');

        $validator
            ->allowEmpty('PRENOM');

        $validator
            ->requirePresence('EMAIL', 'create')
            ->add('EMAIL', 'validFormat', [
              'rule' => 'email',
              'message' => 'E-mail must be valid'
              ])
            ->notEmpty('EMAIL');

        $validator
            ->allowEmpty('POSTE');

        $validator
            ->allowEmpty('SERVICE');

        $validator
            ->allowEmpty('DIRECTION');

        $validator
            ->add('TYPEUSER', 'valid', ['rule' => 'numeric'])
            ->requirePresence('TYPEUSER', 'create')
            ->notEmpty('TYPEUSER');

        return $validator;
    }
}
