<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SpiderFixture
 *
 */
class SpiderFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'spider';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'NOMSPIDER' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ETAT' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ID_SITE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'I_FK_SPIDER_SITEWEB' => ['type' => 'index', 'columns' => ['ID_SITE'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'spider_ibfk_1' => ['type' => 'foreign', 'columns' => ['ID_SITE'], 'references' => ['siteweb', 'ID_SITE'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'NOMSPIDER' => 'Lorem ipsum dolor sit amet',
            'ETAT' => 1,
            'ID_SITE' => 1
        ],
    ];
}
