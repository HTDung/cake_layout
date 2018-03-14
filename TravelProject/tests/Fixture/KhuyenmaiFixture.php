<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KhuyenmaiFixture
 *
 */
class KhuyenmaiFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'khuyenmai';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'MaKMai' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'MaTour' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TenKMai' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf32_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NgayBD' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'NgayKT' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Ghichu' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'utf32_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'MaTour' => ['type' => 'index', 'columns' => ['MaTour'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['MaKMai'], 'length' => []],
            'khuyenmai_ibfk_1' => ['type' => 'foreign', 'columns' => ['MaTour'], 'references' => ['tour', 'MaTour'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'MaKMai' => 1,
            'MaTour' => 1,
            'TenKMai' => 'Lorem ipsum dolor sit amet',
            'NgayBD' => '2018-03-05',
            'NgayKT' => '2018-03-05',
            'Ghichu' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
