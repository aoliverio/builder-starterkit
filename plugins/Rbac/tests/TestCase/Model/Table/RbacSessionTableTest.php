<?php
namespace Rbac\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rbac\Model\Table\RbacSessionTable;

/**
 * Rbac\Model\Table\RbacSessionTable Test Case
 */
class RbacSessionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Rbac\Model\Table\RbacSessionTable
     */
    public $RbacSession;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.rbac.rbac_session',
        'plugin.rbac.rbac_user',
        'plugin.rbac.rbac_audit',
        'plugin.rbac.rbac_user_role',
        'plugin.rbac.rbac_session_role'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RbacSession') ? [] : ['className' => 'Rbac\Model\Table\RbacSessionTable'];
        $this->RbacSession = TableRegistry::get('RbacSession', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RbacSession);

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
