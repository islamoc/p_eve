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
            ->allowEmpty('DESCRIPTION')
            ->requirePresence('DESCRIPTION', 'create');

        $validator
            ->allowEmpty('SYSTAFFECTE')
            ->requirePresence('SYSTAFFECTE', 'create');

        $validator
            ->add('DATEAPPARITION', 'valid', ['rule' => 'date'])
            ->requirePresence('DATEAPPARITION', 'create')
            ->allowEmpty('DATEAPPARITION');

        $validator
            ->allowEmpty('SOURCE')
            ->requirePresence('SOURCE', 'create');

        $validator
            ->allowEmpty('NIVEAURISQUE')
            ->requirePresence('NIVEAURISQUE', 'update');

        $validator
            ->allowEmpty('SOURCEFIABLE')
            ->requirePresence('SOURCEFIABlE', 'update');

        $validator
            ->allowEmpty('NIVEAUCRITICITE')
            ->requirePresence('NIVEAUCRITICITE', 'update');

        $validator
            ->allowEmpty('NIVEAUIMPACT')
            ->requirePresence('NIVEAUIMPACT', 'update');

        $validator
            ->add('TESTCORRECTIF', 'valid', ['rule' => 'numeric'])
            ->requirePresence('NIVEAUIMPACT', 'update')
            ->allowEmpty('TESTCORRECTIF');

        $validator
            ->add('APPLICATIONCORRECTIF', 'valid', ['rule' => 'numeric'])
            ->requirePresence('APPLICATIONCORRECTIF', 'update')
            ->allowEmpty('APPLICATIONCORRECTIF');

        $validator
            ->allowEmpty('JUSTIF')
            ->requirePresence('JUSTIF', 'update');

        $validator
            ->requirePresence('SYSTCONCERNE', 'update')
            ->allowEmpty('SYSTCONCERNE','create');


        $validator
            ->add('VULPRISCHARGE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('VULPRISCHARGE')
            ->requirePresence('VULPRISCHARGE', 'update');

        $validator
            ->allowEmpty('APPLICHARGE')
            ->requirePresence('APPLICHARG', 'update');

        $validator
            ->allowEmpty('OBSERVATION')
            ->requirePresence('OBSERVATION', 'update');

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
