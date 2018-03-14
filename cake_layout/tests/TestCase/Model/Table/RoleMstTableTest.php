<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleMstTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleMstTable Test Case
 */
class RoleMstTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleMstTable
     */
    public $RoleMst;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.role_mst',
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
        $config = TableRegistry::exists('RoleMst') ? [] : ['className' => RoleMstTable::class];
        $this->RoleMst = TableRegistry::get('RoleMst', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoleMst);

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
