<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TargetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TargetsTable Test Case
 */
class TargetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TargetsTable
     */
    public $Targets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.targets',
        'app.paths',
        'app.images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Targets') ? [] : ['className' => 'App\Model\Table\TargetsTable'];
        $this->Targets = TableRegistry::get('Targets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Targets);

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
