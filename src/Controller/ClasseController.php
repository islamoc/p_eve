<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Classe Controller
 *
 * @property \App\Model\Table\ClasseTable $Classe
 */
class ClasseController extends AppController
{

    public function isAuthorized($user = null)
    {
    if ($this->Auth->user("TYPEUSER") == 4) {
        return true;
    }
    return parent::isAuthorized();
    //return true;
    }
    /**
     * Index method
     *
     * @return void
     */

    public function getClasse()
    {
      $query = $this->Classe->find('all', [
                                      'conditions' => ['classe.VALIDE' => 1],
                                      ]);
      $query->hydrate(false);
      $results = $query->all();
      $results = $results->toArray();
      $o = array();
      for ($i = 0;$i<count($results);$i++){
        $o[$results[$i]["ID_CLASSE"]] = $results[$i]["TYPEVEILLE"];
      }
      return $o;
    }

    public function index()
    {
      if ($this->Auth->user('TYPEUSER') == 1)
      {
        $this->set('classe', $this->paginate($this->Classe));
        $this->set('_serialize', ['classe']);
      }
      else {
        $this->set('classe', $this->paginate($this->Classe->find('all', [
                                            'conditions' => ['classe.VALIDE' => 1,'classe.ID_USER' => $this->Auth->user('ID_USER')],
                                            ])));
        $this->set('_serialize', ['classe']);
      }
    }

    /**
     * View method
     *
     * @param string|null $id Classe id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
      if ($this->Auth->user('TYPEUSER') == 1)
      {
        $classe = $this->Classe->get($id, [
            'contain' => []
        ]);
        $this->set('classe', $classe);
        $this->set('_serialize', ['classe']);
      }
      else
      {
        $classe = $this->Classe->get($id, [
            'conditions' => ['classe.VALIDE' => 1,'classe.ID_USER' => $this->Auth->user('ID_USER')],
            'contain' => []
        ]);
        $this->set('classe', $classe);
        $this->set('_serialize', ['classe']);
      }
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->Auth->user('TYPEUSER') == 1){
            $this->set("valide",true);
        }
        else $this->set("valide",false);
        $classe = $this->Classe->newEntity();
        if ($this->request->is('post')) {
            $classe = $this->Classe->patchEntity($classe, $this->request->data);
            $classe->ID_USER = $this->Auth->user('ID_USER');
            $classe->VALIDE = 0;
            if ($this->Classe->save($classe)) {
                $this->Flash->success(__('The classe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The classe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('classe'));
        $this->set('_serialize', ['classe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Classe id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
      if ($this->Auth->user('TYPEUSER') == 1)
      {
        $this->set("valide",true);
        $classe = $this->Classe->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classe = $this->Classe->patchEntity($classe, $this->request->data);
            //$classe->ID_USER = $this->Auth->user('ID_USER');
            if ($this->Classe->save($classe)) {
                $this->Flash->success(__('The classe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The classe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('classe'));
        $this->set('_serialize', ['classe']);
      }
      else
      {
        $this->set("valide",true);
        $classe = $this->Classe->get($id, [
            'conditions' => ['classe.VALIDE' => 1,'classe.ID_USER' => $this->Auth->user('ID_USER')],
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classe = $this->Classe->patchEntity($classe, $this->request->data);
            if ($this->Classe->save($classe)) {
                $this->Flash->success(__('The classe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The classe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('classe'));
        $this->set('_serialize', ['classe']);
      }

    }

    /**
     * Delete method
     *
     * @param string|null $id Classe id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
      if ($this->Auth->user('TYPEUSER') == 1)
      {
        $this->request->allowMethod(['post', 'delete']);
        $classe = $this->Classe->get($id);
        if ($this->Classe->delete($classe)) {
            $this->Flash->success(__('The classe has been deleted.'));
        } else {
            $this->Flash->error(__('The classe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
      }
      else
      {
        $this->request->allowMethod(['post', 'delete']);
        $classe = $this->Classe->get($id,['conditions' => ['classe.VALIDE' => 1,'classe.ID_USER' => $this->Auth->user('ID_USER')]]);
        if ($this->Classe->delete($classe)) {
            $this->Flash->success(__('The classe has been deleted.'));
        } else {
            $this->Flash->error(__('The classe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
      }
    }
}
