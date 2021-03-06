<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiscentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiscentesTable Test Case
 */
class DiscentesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiscentesTable
     */
    public $Discentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.discentes',
        'app.docentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Discentes') ? [] : ['className' => DiscentesTable::class];
        $this->Discentes = TableRegistry::getTableLocator()->get('Discentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Discentes);

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
