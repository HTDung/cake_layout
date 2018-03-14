<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserRoleTblFixture
 *
 */
class UserRoleTblFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_role_tbl';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'user_role_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'role_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'create_time' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'update_time' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'delete_status' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0: chua xoa, 1: da xoa', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['user_role_id'], 'length' => []],
            'user_role_id' => ['type' => 'unique', 'columns' => ['user_role_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
            'user_role_id' => 'a748f34e-6ae3-4a11-9138-24a9a9737034',
            'user_id' => '78cdf898-8f0f-41fd-9056-24a448e6088f',
            'role_id' => 'e25d7e72-2dcb-498d-a3e1-f13226a38c16',
            'create_time' => 1513312663,
            'update_time' => 1513312663,
            'delete_status' => 1
        ],
    ];
}
