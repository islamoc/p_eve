<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classe Entity.
 */
class Classe extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID_CLASSE' => false,
    ];
}
