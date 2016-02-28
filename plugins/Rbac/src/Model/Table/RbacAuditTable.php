<?php
namespace Rbac\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rbac\Model\Entity\RbacAudit;

/**
 * RbacAudit Model
 *
 * @property \Cake\ORM\Association\BelongsTo $RbacUser
 */
class RbacAuditTable extends Table
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

        $this->table('rbac_audit');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RbacUser', [
            'foreignKey' => 'rbac_user_id',
            'joinType' => 'INNER',
            'className' => 'Rbac.RbacUser'
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
            ->allowEmpty('session_key');

        $validator
            ->allowEmpty('ip_address');

        $validator
            ->allowEmpty('request');

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
        $rules->add($rules->existsIn(['rbac_user_id'], 'RbacUser'));
        return $rules;
    }
}
