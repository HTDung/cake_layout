<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserGroupTblFixture
 *
 */
class UserGroupTblFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_group_tbl';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'user_group_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'group_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'is_leader' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0: normal member, 1: manager, 2: sub manager', 'precision' => null, 'autoIncrement' => null],
        'create_time' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'update_time' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'delete_status' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0: chua xoa, 1: da xoa', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['user_group_id'], 'length' => []],
            'user_group_id' => ['type' => 'unique', 'columns' => ['user_group_id'], 'length' => []],
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
            'user_group_id' => 'b24859c9-cef2-4d0b-8f46-9904e5d5d9d2',
            'user_id' => '6353d827-8000-4047-9f14-106acc705edf',
            'group_id' => '46e3b998-8158-4d9a-a3ce-9c667477580d',
            'is_leader' => 1,
            'create_time' => 1511174697,
            'update_time' => 1511174697,
            'delete_status' => 1
        ],
    ];
}
