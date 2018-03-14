<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserRoleTblTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserRoleTblTable Test Case
 */
class UserRoleTblTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserRoleTblTable
     */
    public $UserRoleTbl;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_role_tbl',
        'app.user_roles',
        'app.users',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserRoleTbl') ? [] : ['className' => UserRoleTblTable::class];
        $this->UserRoleTbl = TableRegistry::get('UserRoleTbl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserRoleTbl);

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
