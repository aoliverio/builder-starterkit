<?php
namespace Rbac\Model\Entity;

use Cake\ORM\Entity;

/**
 * RbacAudit Entity.
 *
 * @property int $id
 * @property int $rbac_user_id
 * @property \Rbac\Model\Entity\RbacUser $rbac_user
 * @property string $session_key
 * @property string $ip_address
 * @property string $request
 * @property \Cake\I18n\Time $created
 */
class RbacAudit extends Entity
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
