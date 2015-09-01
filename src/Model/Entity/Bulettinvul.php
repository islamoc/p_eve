<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bulettinvul Entity.
 */
class Bulettinvul extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID_BUL' => false,
    ];
}
