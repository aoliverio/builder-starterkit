<?php
namespace Rbac\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rbac\Model\Table\RbacObjectTable;

/**
 * Rbac\Model\Table\RbacObjectTable Test Case
 */
class RbacObjectTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Rbac\Model\Table\RbacObjectTable
     */
    public $RbacObject;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.rbac.rbac_object',
        'plugin.rbac.rbac_permission',
        'plugin.rbac.rbac_operation',
        'plugin.rbac.rbac_role_permission'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RbacObject') ? [] : ['className' => 'Rbac\Model\Table\RbacObjectTable'];
        $this->RbacObject = TableRegistry::get('RbacObject', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RbacObject);

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
