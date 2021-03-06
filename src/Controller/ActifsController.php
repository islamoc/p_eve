<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\ClasseController;

/**
 * Actifs Controller
 *
 * @property \App\Model\Table\ActifsTable $Actifs
 */
class ActifsController extends AppController
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
    public function index()
    {
        //echo $this->Auth->user('TYPEUSER');
        if ($this->Auth->user('TYPEUSER') == 1)
        {
          $this->set('actifs', $this->paginate($this->Actifs->find("all",["contain"=>["users","classe"]])));
          $this->set('_serialize', ['actifs']);
        }
        else
        {
          $this->set('actifs', $this->paginate($this->Actifs->find('all', [
                                              'conditions' => ['actifs.VALIDE' => 1,'actifs.ID_USER' => $this->Auth->user('ID_USER')],
                                              ["contain"=>["classe","users"]]
                                              ])));
          $this->set('_serialize', ['actifs']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Actif id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
      if ($this->Auth->user('TYPEUSER') == 1)
      {
        $actif = $this->Actifs->get($id, [
            'contain' => ["users","classe"]
        ]);
        $this->set('actif', $actif);
        $this->set('_serialize', ['actif']);
      }
      else
      {
        $actif = $this->Actifs->get($id, [
            'conditions' => ['actifs.VALIDE' => 1,'actifs.ID_USER' => $this->Auth->user('ID_USER')],
            "contain"=>["users","classe"]
        ]);
        $this->set('actif', $actif);
        $this->set('_serialize', ['actif']);
      }

    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $o = new ClasseController();
        $this->set("options",$o->getClasse());
        if ($this->Auth->user('TYPEUSER') == 1){
            $this->set("valide",true);
        }
        else $this->set("valide",false);
        $actif = $this->Actifs->newEntity();
        if ($this->request->is('post')) {
            $actif = $this->Actifs->patchEntity($actif, $this->request->data);
            $actif->ID_USER = $this->Auth->user('ID_USER');
            $actif->VALIDE = 0;
            if ($this->Actifs->save($actif)) {
                $this->Flash->success(__('The actif has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actif could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actif'));
        $this->set('_serialize', ['actif']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Actif id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
      $o = new ClasseController();
      $this->set("options",$o->getClasse());
      if ($this->Auth->user('TYPEUSER') == 1){
        $this->set("valide",true);
        $actif = $this->Actifs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actif = $this->Actifs->patchEntity($actif, $this->request->data);
            //$actif->ID_USER = $this->Auth->user('ID_USER');
            if ($this->Actifs->save($actif)) {
                $this->Flash->success(__('The actif has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actif could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actif'));
        $this->set('_serialize', ['actif']);
      }
      else{
        $this->set("valide",false);
        $actif = $this->Actifs->get($id, [
            'conditions' => ['actifs.VALIDE' => 1,'actifs.ID_USER' => $this->Auth->user('ID_USER')],
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actif = $this->Actifs->patchEntity($actif, $this->request->data);
            if ($this->Actifs->save($actif)) {
                $this->Flash->success(__('The actif has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actif could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actif'));
        $this->set('_serialize', ['actif']);
      }
    }

    /**
     * Delete method
     *
     * @param string|null $id Actif id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
      if ($this->Auth->user('TYPEUSER') == 1){
        $this->request->allowMethod(['post', 'delete']);
        $actif = $this->Actifs->get($id);
        if ($this->Actifs->delete($actif)) {
            $this->Flash->success(__('The actif has been deleted.'));
        } else {
            $this->Flash->error(__('The actif could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
      }
      else{
        $this->request->allowMethod(['post', 'delete']);
        $actif = $this->Actifs->get($id,['conditions' => ['actifs.VALIDE' => 1,'actifs.ID_USER' => $this->Auth->user('ID_USER')]]);
        if ($this->Actifs->delete($actif)) {
            $this->Flash->success(__('The actif has been deleted.'));
        } else {
            $this->Flash->error(__('The actif could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
      }

    }
}
