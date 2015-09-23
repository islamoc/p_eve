<?php
namespace App\Model\Table;

use App\Model\Entity\Bulettinvul;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bulettinvul Model
 *
 */
class BulettinvulTable extends Table
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

        $this->table('bulettinvul');
        $this->displayField('ID_BUL');
        $this->primaryKey('ID_BUL');
        $this->hasMany('Concerne', [
            'foreignKey' => 'ID_BUL',
            'dependent' => true,
        ]);
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
            ->add('ID_BUL', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_BUL', 'create');

        $validator
            ->add('DATECREATION', 'valid', ['rule' => 'date'])
            ->allowEmpty('DATECREATION');

        $validator
            ->add('ETAT', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ETAT', 'create')
            ->allowEmpty('ETAT','update');

        $validator
            ->requirePresence('VULNERABILITE', 'create');

        $validator
            ->requirePresence('DESCRIPTION', 'create')
            ->allowEmpty('DESCRIPTION','update');


        $validator
            ->requirePresence('SYSTAFFECTE', 'create')
            ->allowEmpty('SYSTAFFECTE','update');


        $validator
            ->add('DATEAPPARITION', 'valid', ['rule' => 'date'])
            ->requirePresence('DATEAPPARITION', 'create')
            ->allowEmpty('DATEAPPARITION','update');

        $validator
            ->requirePresence('SOURCE', 'create')
            ->allowEmpty('SOURCE','update');

        $validator
            ->allowEmpty('NIVEAURISQUE');

        $validator
            ->allowEmpty('SOURCEFIABLE');

        $validator
            ->allowEmpty('NIVEAUCRITICITE');

        $validator
            ->allowEmpty('NIVEAUIMPACT');

        $validator
            ->add('TESTCORRECTIF', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TESTCORRECTIF');

        $validator
            ->add('APPLICATIONCORRECTIF', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('APPLICATIONCORRECTIF');

        $validator
            ->allowEmpty('JUSTIF');

        $validator
            ->allowEmpty('SYSTCONCERNE');


        $validator
            ->add('VULPRISCHARGE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('VULPRISCHARGE');

        $validator
            ->allowEmpty('APPLICHARGE');

        $validator
            ->allowEmpty('OBSERVATION');

        $validator
            ->add('ID_ARTICLE', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_ARTICLE', 'create')
            ->notEmpty('ID_ARTICLE');

        $validator
            ->add('State', 'valid', ['rule' => 'numeric'])
            ->requirePresence('State', 'create')
            ->notEmpty('State');

        return $validator;
    }
}
