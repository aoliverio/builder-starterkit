<?php
namespace Rbac\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rbac\Model\Entity\RbacUser;

/**
 * RbacUser Model
 *
 * @property \Cake\ORM\Association\HasMany $RbacAudit
 * @property \Cake\ORM\Association\HasMany $RbacSession
 * @property \Cake\ORM\Association\HasMany $RbacUserRole
 */
class RbacUserTable extends Table
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

        $this->table('rbac_user');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('RbacAudit', [
            'foreignKey' => 'rbac_user_id',
            'className' => 'Rbac.RbacAudit'
        ]);
        $this->hasMany('RbacSession', [
            'foreignKey' => 'rbac_user_id',
            'className' => 'Rbac.RbacSession'
        ]);
        $this->hasMany('RbacUserRole', [
            'foreignKey' => 'rbac_user_id',
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
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('username');

        $validator
            ->allowEmpty('password');

        $validator
            ->boolean('is_blocked')
            ->allowEmpty('is_blocked');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }
}
