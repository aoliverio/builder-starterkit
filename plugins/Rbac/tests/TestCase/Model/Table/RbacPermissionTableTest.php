<?php
namespace Rbac\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rbac\Model\Table\RbacPermissionTable;

/**
 * Rbac\Model\Table\RbacPermissionTable Test Case
 */
class RbacPermissionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Rbac\Model\Table\RbacPermissionTable
     */
    public $RbacPermission;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.rbac.rbac_permission',
        'plugin.rbac.rbac_object',
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
        $config = TableRegistry::exists('RbacPermission') ? [] : ['className' => 'Rbac\Model\Table\RbacPermissionTable'];
        $this->RbacPermission = TableRegistry::get('RbacPermission', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RbacPermission);

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
