<?php
namespace App\Model\Table;

use App\Model\Entity\Archivebul;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Archivebul Model
 *
 */
class ArchivebulTable extends Table
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

        $this->table('archivebul');
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
            ->allowEmpty('DATEARCHIVAGE');

        $validator
            ->allowEmpty('REMARQUE');

        $validator
            ->add('ID_BUL', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_BUL', 'create')
            ->notEmpty('ID_BUL');

        return $validator;
    }
}
