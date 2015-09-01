<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function isAuthorized($user = null)
    {
    // All registered users can add articles
    if ($this->Auth->user("TYPEUSER") == 1) {
        return true;
    }

    return parent::isAuthorized();
  }


    /*public $paginate = [
        'fields' => ['ID_USER', 'USER','NOM','PRENOM','EMAIL','POSTE']
    ];*/
    public function getAnalysts()
    {
      $query = $this->Users->find('all', [
                                      'conditions' => ['users.TYPEUSER' => 3],
                                      ]);
      $query->hydrate(false);
      $results = $query->all();
      $results = $results->toArray();
      $o = array();
      for ($i = 0;$i<count($results);$i++){
        $o[$results[$i]["ID_USER"]] = $results[$i]["USER"];
      }
      return $o;
    }

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      // Allow users to register and logout.
      // You should not add the "login" action to allow list. Doing so would
      // cause problems with normal functioning of AuthComponent.
      $this->Auth->allow('logout');
    }
    /*public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      // Allow users to register and logout.
      // You should not add the "login" action to allow list. Doing so would
      // cause problems with normal functioning of AuthComponent.
      $this->Auth->allow('blbl');
    }*/


    public function login()
    {
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        //print_r($user);
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
    }
    public function logout()
    {
      return $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
