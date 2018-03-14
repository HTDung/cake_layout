<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTblTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTblTable Test Case
 */
class UserTblTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTblTable
     */
    public $UserTbl;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_tbl',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserTbl') ? [] : ['className' => UserTblTable::class];
        $this->UserTbl = TableRegistry::get('UserTbl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserTbl);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
