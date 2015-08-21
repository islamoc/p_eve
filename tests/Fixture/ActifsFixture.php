<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActifsFixture
 *
 */
class ActifsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_ACTIF' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'MOTCLE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ID_USER' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_CLASSE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VALIDE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'I_FK_ACTIFS_USERS' => ['type' => 'index', 'columns' => ['ID_USER'], 'length' => []],
            'I_FK_ACTIFS_CLASSE' => ['type' => 'index', 'columns' => ['ID_CLASSE'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_ACTIF'], 'length' => []],
            'actifs_ibfk_1' => ['type' => 'foreign', 'columns' => ['ID_USER'], 'references' => ['users', 'ID_USER'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'actifs_ibfk_2' => ['type' => 'foreign', 'columns' => ['ID_CLASSE'], 'references' => ['classe', 'ID_CLASSE'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_ACTIF' => 1,
            'MOTCLE' => 'Lorem ipsum dolor sit amet',
            'ID_USER' => 1,
            'ID_CLASSE' => 1,
            'VALIDE' => 1
        ],
    ];
}
