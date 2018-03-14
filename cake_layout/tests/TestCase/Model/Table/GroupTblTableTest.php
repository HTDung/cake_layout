<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupTblTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupTblTable Test Case
 */
class GroupTblTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupTblTable
     */
    public $GroupTbl;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.group_tbl',
        'app.groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GroupTbl') ? [] : ['className' => GroupTblTable::class];
        $this->GroupTbl = TableRegistry::get('GroupTbl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GroupTbl);

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
