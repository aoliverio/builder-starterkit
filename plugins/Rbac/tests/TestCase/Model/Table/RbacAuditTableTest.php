<?php
namespace Rbac\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rbac\Model\Table\RbacAuditTable;

/**
 * Rbac\Model\Table\RbacAuditTable Test Case
 */
class RbacAuditTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Rbac\Model\Table\RbacAuditTable
     */
    public $RbacAudit;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.rbac.rbac_audit',
        'plugin.rbac.rbac_user',
        'plugin.rbac.rbac_session',
        'plugin.rbac.rbac_session_role',
        'plugin.rbac.rbac_user_role'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RbacAudit') ? [] : ['className' => 'Rbac\Model\Table\RbacAuditTable'];
        $this->RbacAudit = TableRegistry::get('RbacAudit', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RbacAudit);

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
