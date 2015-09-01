<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConcerneFixture
 *
 */
class ConcerneFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'concerne';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_USER' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_BUL' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'con_user_id_fk' => ['type' => 'index', 'columns' => ['ID_USER'], 'length' => []],
            'con_bul_id_fk' => ['type' => 'index', 'columns' => ['ID_BUL'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'con_bul_id_fk' => ['type' => 'foreign', 'columns' => ['ID_BUL'], 'references' => ['bulettinvul', 'ID_BUL'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'con_user_id_fk' => ['type' => 'foreign', 'columns' => ['ID_USER'], 'references' => ['users', 'ID_USER'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID' => 1,
            'ID_USER' => 1,
            'ID_BUL' => 1
        ],
    ];
}
