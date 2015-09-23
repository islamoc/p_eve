<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArchivebulFixture
 *
 */
class ArchivebulFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'archivebul';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'DATEARCHIVAGE' => ['type' => 'string', 'fixed' => true, 'length' => 60, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'REMARQUE' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ID_BUL' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'I_FK_ARCHIVEBUL_BULETTINVUL' => ['type' => 'index', 'columns' => ['ID_BUL'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'archivebul_ibfk_1' => ['type' => 'foreign', 'columns' => ['ID_BUL'], 'references' => ['bulettinvul', 'ID_BUL'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'DATEARCHIVAGE' => 'Lorem ipsum dolor sit amet',
            'REMARQUE' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ID_BUL' => 1
        ],
    ];
}
