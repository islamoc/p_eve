<?php
namespace App\View\Helper;

use Cake\View\Helper;
use App\Controller\ClasseController;
use Cake\ORM\Table;

class ActifHelper extends Helper
{

    public $helpers = ['Html'];

    public function getClasseHelper()
    {
        $classes = new ClasseController();
        return $classes->getClasse();
    }
}
