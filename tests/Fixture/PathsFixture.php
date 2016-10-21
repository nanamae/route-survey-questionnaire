<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PathsFixture
 *
 */
class PathsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'lat' => ['type' => 'decimal', 'length' => 15, 'precision' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'lng' => ['type' => 'decimal', 'length' => 15, 'precision' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'heading' => ['type' => 'decimal', 'length' => 15, 'precision' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'pitch' => ['type' => 'decimal', 'length' => 15, 'precision' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
            'id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-08-31 08:33:24',
            'modified' => '2016-08-31 08:33:24',
            'lat' => 1.5,
            'lng' => 1.5,
            'heading' => 1.5,
            'pitch' => 1.5
        ],
    ];
}
