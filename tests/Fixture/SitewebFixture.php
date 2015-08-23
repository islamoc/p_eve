<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SitewebFixture
 *
 */
class SitewebFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'siteweb';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_SITE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'URLSITE' => ['type' => 'string', 'fixed' => true, 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'TYPE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_SITE'], 'length' => []],
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
            'ID_SITE' => 1,
            'URLSITE' => 'Lorem ipsum dolor sit amet',
            'TYPE' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
