<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClasseFixture
 *
 */
class ClasseFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'classe';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_CLASSE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'TYPEVEILLE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'THEMATIQUE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CATEGORIE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'RUBRIQUE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'VALIDE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_USER' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'contrain_user_id_fk' => ['type' => 'index', 'columns' => ['ID_USER'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_CLASSE'], 'length' => []],
            'contrain_user_id_fk' => ['type' => 'foreign', 'columns' => ['ID_USER'], 'references' => ['users', 'ID_USER'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'ID_CLASSE' => 1,
            'TYPEVEILLE' => 'Lorem ipsum dolor sit amet',
            'THEMATIQUE' => 'Lorem ipsum dolor sit amet',
            'CATEGORIE' => 'Lorem ipsum dolor sit amet',
            'RUBRIQUE' => 'Lorem ipsum dolor sit amet',
            'VALIDE' => 1,
            'ID_USER' => 1
        ],
    ];
}
