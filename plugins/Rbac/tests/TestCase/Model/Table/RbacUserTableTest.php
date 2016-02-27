<?php
namespace Rbac\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rbac\Model\Table\RbacUserTable;

/**
 * Rbac\Model\Table\RbacUserTable Test Case
 */
class RbacUserTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Rbac\Model\Table\RbacUserTable
     */
    public $RbacUser;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.rbac.rbac_user',
        'plugin.rbac.rbac_audit',
        'plugin.rbac.rbac_session',
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
        $config = TableRegistry::exists('RbacUser') ? [] : ['className' => 'Rbac\Model\Table\RbacUserTable'];
        $this->RbacUser = TableRegistry::get('RbacUser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RbacUser);

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
