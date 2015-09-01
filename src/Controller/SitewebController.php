<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Siteweb Controller
 *
 * @property \App\Model\Table\SitewebTable $Siteweb
 */
class SitewebController extends AppController
{

    public function isAuthorized($user = null)
    {
    return parent::isAuthorized();
    //return true;
    }

    /**
     * Index method
     *
     * @return void
     */
    public function getSite()
    {
      $query = $this->Siteweb->find('all');
      $query->hydrate(false);
      $results = $query->all();
      $results = $results->toArray();
      $o = array();
      for ($i = 0;$i<count($results);$i++){
        $o[$results[$i]["ID_SITE"]] = $results[$i]["URLSITE"];
      }
      return $o;
    }

    public function index()
    {
        $this->set('siteweb', $this->paginate($this->Siteweb));
        $this->set('_serialize', ['siteweb']);
    }

    /**
     * View method
     *
     * @param string|null $id Siteweb id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $siteweb = $this->Siteweb->get($id, [
            'contain' => []
        ]);
        $this->set('siteweb', $siteweb);
        $this->set('_serialize', ['siteweb']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $siteweb = $this->Siteweb->newEntity();
        if ($this->request->is('post')) {
            $siteweb = $this->Siteweb->patchEntity($siteweb, $this->request->data);
            if ($this->Siteweb->save($siteweb)) {
                $this->Flash->success(__('The siteweb has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The siteweb could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('siteweb'));
        $this->set('_serialize', ['siteweb']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Siteweb id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $siteweb = $this->Siteweb->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $siteweb = $this->Siteweb->patchEntity($siteweb, $this->request->data);
            if ($this->Siteweb->save($siteweb)) {
                $this->Flash->success(__('The siteweb has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The siteweb could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('siteweb'));
        $this->set('_serialize', ['siteweb']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Siteweb id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $siteweb = $this->Siteweb->get($id);
        if ($this->Siteweb->delete($siteweb)) {
            $this->Flash->success(__('The siteweb has been deleted.'));
        } else {
            $this->Flash->error(__('The siteweb could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
