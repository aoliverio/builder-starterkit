<?php
namespace Rbac\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rbac\Model\Entity\RbacSession;

/**
 * RbacSession Model
 *
 * @property \Cake\ORM\Association\BelongsTo $RbacUser
 * @property \Cake\ORM\Association\HasMany $RbacSessionRole
 */
class RbacSessionTable extends Table
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

        $this->table('rbac_session');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RbacUser', [
            'foreignKey' => 'rbac_user_id',
            'joinType' => 'INNER',
            'className' => 'Rbac.RbacUser'
        ]);
        $this->hasMany('RbacSessionRole', [
            'foreignKey' => 'rbac_session_id',
            'className' => 'Rbac.RbacSessionRole'
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
            ->allowEmpty('name');

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
