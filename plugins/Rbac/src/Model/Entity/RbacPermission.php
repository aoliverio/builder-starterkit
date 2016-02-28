<?php
namespace Rbac\Model\Entity;

use Cake\ORM\Entity;

/**
 * RbacPermission Entity.
 *
 * @property int $id
 * @property int $rbac_object_id
 * @property \Rbac\Model\Entity\RbacObject $rbac_object
 * @property int $rbac_operation_id
 * @property \Rbac\Model\Entity\RbacOperation $rbac_operation
 * @property string $name
 * @property string $descption
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Rbac\Model\Entity\RbacRolePermission[] $rbac_role_permission
 */
class RbacPermission extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
