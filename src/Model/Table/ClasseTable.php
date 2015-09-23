<?php
namespace App\Model\Table;

use App\Model\Entity\Classe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classe Model
 *
 */
class ClasseTable extends Table
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

        $this->table('classe');
        $this->belongsTo('users', [
            'foreignKey' => 'ID_USER',
            'className' => 'users'
        ]);
        $this->displayField('ID_CLASSE');
        $this->primaryKey('ID_CLASSE');
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
            ->add('ID_CLASSE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_CLASSE', 'create');

        $validator
            ->allowEmpty('TYPEVEILLE');

        $validator
            ->allowEmpty('THEMATIQUE');

        $validator
            ->allowEmpty('CATEGORIE');

        $validator
            ->allowEmpty('RUBRIQUE');

        $validator
            ->add('VALIDE', 'valid', ['rule' => 'numeric'])
            ->requirePresence('VALIDE', 'create')
            ->notEmpty('VALIDE');

        $validator
            ->add('ID_USER', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_USER', 'create')
            ->notEmpty('ID_USER');

        return $validator;
    }
}
