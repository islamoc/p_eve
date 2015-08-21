<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Actif Entity.
 */
class Actif extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID_ACTIF' => false,
    ];
}
