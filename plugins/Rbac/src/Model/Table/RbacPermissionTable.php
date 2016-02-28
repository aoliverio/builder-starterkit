<?php
namespace Rbac\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rbac\Model\Entity\RbacPermission;

/**
 * RbacPermission Model
 *
 * @property \Cake\ORM\Association\BelongsTo $RbacObject
 * @property \Cake\ORM\Association\BelongsTo $RbacOperation
 * @property \Cake\ORM\Association\HasMany $RbacRolePermission
 */
class RbacPermissionTable extends Table
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

        $this->table('rbac_permission');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RbacObject', [
            'foreignKey' => 'rbac_object_id',
            'joinType' => 'INNER',
            'className' => 'Rbac.RbacObject'
        ]);
        $this->belongsTo('RbacOperation', [
            'foreignKey' => 'rbac_operation_id',
            'joinType' => 'INNER',
            'className' => 'Rbac.RbacOperation'
        ]);
        $this->hasMany('RbacRolePermission', [
            'foreignKey' => 'rbac_permission_id',
            'className' => 'Rbac.RbacRolePermission'
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
            ->allowEmpty('descption');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['rbac_object_id'], 'RbacObject'));
        $rules->add($rules->existsIn(['rbac_operation_id'], 'RbacOperation'));
        return $rules;
    }
}
