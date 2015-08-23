<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\SitewebController;

/**
 * Spider Controller
 *
 * @property \App\Model\Table\SpiderTable $Spider
 */
class SpiderController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('spider', $this->paginate($this->Spider));
        $this->set('_serialize', ['spider']);
    }

    /**
     * View method
     *
     * @param string|null $id Spider id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $spider = $this->Spider->get($id, [
            'contain' => []
        ]);
        $this->set('spider', $spider);
        $this->set('_serialize', ['spider']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $o = new SitewebController();
        $this->set("options",$o->getSite());
        $spider = $this->Spider->newEntity();
        if ($this->request->is('post')) {
            $spider = $this->Spider->patchEntity($spider, $this->request->data);
            if ($this->Spider->save($spider)) {
                $this->Flash->success(__('The spider has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The spider could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('spider'));
        $this->set('_serialize', ['spider']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Spider id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $spider = $this->Spider->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $spider = $this->Spider->patchEntity($spider, $this->request->data);
            if ($this->Spider->save($spider)) {
                $this->Flash->success(__('The spider has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The spider could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('spider'));
        $this->set('_serialize', ['spider']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Spider id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $spider = $this->Spider->get($id);
        if ($this->Spider->delete($spider)) {
            $this->Flash->success(__('The spider has been deleted.'));
        } else {
            $this->Flash->error(__('The spider could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
