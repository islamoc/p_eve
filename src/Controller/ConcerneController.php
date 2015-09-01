<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Concerne Controller
 *
 * @property \App\Model\Table\ConcerneTable $Concerne
 */
class ConcerneController extends AppController
{
    public function getConcerne($id)
    {
      $query = $this->Concerne->find('all', [
                                      'conditions' => ['concerne.ID_USER' => $id],
                                      ]);
      $query->hydrate(false);
      $results = $query->all();
      $results = $results->toArray();
      $o = array();
      for ($i = 0;$i<count($results);$i++){
        $o[$i] = $results[$i]["ID_BUL"];
      }
      return $o;
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('concerne', $this->paginate($this->Concerne));
        $this->set('_serialize', ['concerne']);
    }

    /**
     * View method
     *
     * @param string|null $id Concerne id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $concerne = $this->Concerne->get($id, [
            'contain' => []
        ]);
        $this->set('concerne', $concerne);
        $this->set('_serialize', ['concerne']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $concerne = $this->Concerne->newEntity();
        if ($this->request->is('post')) {
            $concerne = $this->Concerne->patchEntity($concerne, $this->request->data);
            if ($this->Concerne->save($concerne)) {
                $this->Flash->success(__('The concerne has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The concerne could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('concerne'));
        $this->set('_serialize', ['concerne']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Concerne id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $concerne = $this->Concerne->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $concerne = $this->Concerne->patchEntity($concerne, $this->request->data);
            if ($this->Concerne->save($concerne)) {
                $this->Flash->success(__('The concerne has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The concerne could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('concerne'));
        $this->set('_serialize', ['concerne']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Concerne id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $concerne = $this->Concerne->get($id);
        if ($this->Concerne->delete($concerne)) {
            $this->Flash->success(__('The concerne has been deleted.'));
        } else {
            $this->Flash->error(__('The concerne could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
