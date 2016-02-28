<?php
namespace Rbac\Model\Entity;

use Cake\ORM\Entity;

/**
 * RbacOperation Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Rbac\Model\Entity\RbacPermission[] $rbac_permission
 */
class RbacOperation extends Entity
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