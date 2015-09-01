<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BulettinvulFixture
 *
 */
class BulettinvulFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bulettinvul';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_BUL' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'DATECREATION' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ETAT' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VULNERABILITE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DESCRIPTION' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'SYSTAFFECTE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DATEAPPARITION' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'SOURCE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'NIVEAURISQUE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'SOURCEFIABLE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'NIVEAUCRITICITE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'NIVEAUIMPACT' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'TESTCORRECTIF' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'APPLICATIONCORRECTIF' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'JUSTIF' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'SYSTCONCERNE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'VULPRISCHARGE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'APPLICHARGE' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'OBSERVATION' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ID_ARTICLE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'State' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'article_id_fk' => ['type' => 'index', 'columns' => ['ID_ARTICLE'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID_BUL'], 'length' => []],
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
            'ID_BUL' => 1,
            'DATECREATION' => '2015-08-29',
            'ETAT' => 1,
            'VULNERABILITE' => 'Lorem ipsum dolor sit amet',
            'DESCRIPTION' => 'Lorem ipsum dolor sit amet',
            'SYSTAFFECTE' => 'Lorem ipsum dolor sit amet',
            'DATEAPPARITION' => '2015-08-29',
            'SOURCE' => 'Lorem ipsum dolor sit amet',
            'NIVEAURISQUE' => 'Lorem ipsum dolor sit amet',
            'SOURCEFIABLE' => 'Lorem ipsum dolor sit amet',
            'NIVEAUCRITICITE' => 'Lorem ipsum dolor sit amet',
            'NIVEAUIMPACT' => 'Lorem ipsum dolor sit amet',
            'TESTCORRECTIF' => 1,
            'APPLICATIONCORRECTIF' => 1,
            'JUSTIF' => 'Lorem ipsum dolor sit amet',
            'SYSTCONCERNE' => 'Lorem ipsum dolor sit amet',
            'VULPRISCHARGE' => 1,
            'APPLICHARGE' => 'Lorem ipsum dolor sit amet',
            'OBSERVATION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ID_ARTICLE' => 1,
            'State' => 1
        ],
    ];
}
