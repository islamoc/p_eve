<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public function isAuthorized($user = null)
    {
    // Admin can access every action
    if ($this->Auth->user("TYPEUSER") == 1) {
        return true;
    }

    // Default deny
    $this->redirect(['controller' => '', 'action' => '']);
    return false;
  }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('ksas');
    }
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => '',
                'action' => ''
            ],
            'authenticate' => [
                 'Form' => [
                   'userModel' => 'users', // Added This
                   'fields' => [
                     'username' => 'USER',
                     'password' => 'MOTDP',
                    ]
                  ]
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login'
            ]

        ]);
        if ($this->Auth->user("TYPEUSER") == 1) $this->set("admin",true);
        else $this->set("admin",false);
        if ($this->Auth->user("TYPEUSER") == 2) $this->set("commite",true);
        else $this->set("commite",false);
        if ($this->Auth->user("TYPEUSER") == 3) $this->set("analyst",true);
        else $this->set("analyst",false);
        if ($this->Auth->user("TYPEUSER") == 4) $this->set("inter",true);
        else $this->set("inter",false);

    }
}
