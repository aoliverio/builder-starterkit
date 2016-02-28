<?php
namespace Rbac\Model\Entity;

use Cake\ORM\Entity;

/**
 * RbacRole Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $lft
 * @property int $rgt
 * @property \Rbac\Model\Entity\RbacRolePermission[] $rbac_role_permission
 * @property \Rbac\Model\Entity\RbacSessionRole[] $rbac_session_role
 * @property \Rbac\Model\Entity\RbacUserRole[] $rbac_user_role
 */
class RbacRole extends Entity
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
