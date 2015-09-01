<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Article Model
 *
 */
class ArticleTable extends Table
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

        $this->table('article');
        $this->displayField('ID_ARTICLE');
        $this->primaryKey('ID_ARTICLE');
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
            ->add('ID_ARTICLE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_ARTICLE', 'create');

        $validator
            ->add('ID_SITE', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_SITE', 'create')
            ->notEmpty('ID_SITE');

        $validator
            ->allowEmpty('URLARTICLE');

        $validator
            ->allowEmpty('DESCRI');

        $validator
            ->allowEmpty('DATECAP');

        return $validator;
    }
}
