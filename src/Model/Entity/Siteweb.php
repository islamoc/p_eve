<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Siteweb Entity.
 */
class Siteweb extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID_SITE' => false,
    ];
}
