<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResearchesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResearchesTable Test Case
 */
class ResearchesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResearchesTable
     */
    public $Researches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.researches'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Researches') ? [] : ['className' => 'App\Model\Table\ResearchesTable'];
        $this->Researches = TableRegistry::get('Researches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Researches);

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
