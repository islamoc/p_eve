<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Concerne Entity.
 */
class Concerne extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID' => false,
    ];
}
