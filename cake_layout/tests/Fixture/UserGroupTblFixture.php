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
            'user_group_id' => '20387feb-028b-42b6-8b7b-c8ca08739e78',
            'user_id' => '55c8036e-67f1-4d8a-b9ba-cc933d82eaf0',
            'group_id' => '7c40e9a2-6656-4c23-95fb-142b51776244',
            'is_leader' => 1,
            'create_time' => 1512701284,
            'update_time' => 1512701284,
            'delete_status' => 1
        ],
    ];
}
