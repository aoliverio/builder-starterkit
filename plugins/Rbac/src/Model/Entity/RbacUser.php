<?php
namespace Rbac\Model\Entity;

use Cake\ORM\Entity;

/**
 * RbacUser Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $username
 * @property string $password
 * @property bool $is_blocked
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Rbac\Model\Entity\RbacAudit[] $rbac_audit
 * @property \Rbac\Model\Entity\RbacSession[] $rbac_session
 * @property \Rbac\Model\Entity\RbacUserRole[] $rbac_user_role
 */
class RbacUser extends Entity
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

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
