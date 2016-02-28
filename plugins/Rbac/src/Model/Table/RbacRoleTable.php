<?php
namespace Rbac\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rbac\Model\Entity\RbacRole;

/**
 * RbacRole Model
 *
 * @property \Cake\ORM\Association\HasMany $RbacRolePermission
 * @property \Cake\ORM\Association\HasMany $RbacSessionRole
 * @property \Cake\ORM\Association\HasMany $RbacUserRole
 */
class RbacRoleTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('rbac_role');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('RbacRolePermission', [
            'foreignKey' => 'rbac_role_id',
            'className' => 'Rbac.RbacRolePermission'
        ]);
        $this->hasMany('RbacSessionRole', [
            'foreignKey' => 'rbac_role_id',
            'className' => 'Rbac.RbacSessionRole'
        ]);
        $this->hasMany('RbacUserRole', [
            'foreignKey' => 'rbac_role_id',
            'className' => 'Rbac.RbacUserRole'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->integer('lft')
            ->allowEmpty('lft');

        $validator
            ->integer('rgt')
            ->allowEmpty('rgt');

        return $validator;
    }
}
