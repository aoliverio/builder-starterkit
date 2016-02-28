<?php
namespace Rbac\Model\Entity;

use Cake\ORM\Entity;

/**
 * RbacSession Entity.
 *
 * @property int $id
 * @property int $rbac_user_id
 * @property \Rbac\Model\Entity\RbacUser $rbac_user
 * @property string $name
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Rbac\Model\Entity\RbacSessionRole[] $rbac_session_role
 */
class RbacSession extends Entity
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
