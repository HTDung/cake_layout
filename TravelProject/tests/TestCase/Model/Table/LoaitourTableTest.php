<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoaitourTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoaitourTable Test Case
 */
class LoaitourTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LoaitourTable
     */
    public $Loaitour;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.loaitour'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Loaitour') ? [] : ['className' => LoaitourTable::class];
        $this->Loaitour = TableRegistry::get('Loaitour', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Loaitour);

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
}
