<?php
namespace Rbac\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rbac\Model\Entity\RbacObject;

/**
 * RbacObject Model
 *
 * @property \Cake\ORM\Association\HasMany $RbacPermission
 */
class RbacObjectTable extends Table
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

        $this->table('rbac_object');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('RbacPermission', [
            'foreignKey' => 'rbac_object_id',
            'className' => 'Rbac.RbacPermission'
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
            ->allowEmpty('plugin');

        $validator
            ->allowEmpty('controller');

        $validator
            ->allowEmpty('description');

        return $validator;
    }
}