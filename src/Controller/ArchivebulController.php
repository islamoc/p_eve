<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\BulettinvulController;
use Cake\I18n\Time;

/**
 * Archivebul Controller
 *
 * @property \App\Model\Table\ArchivebulTable $Archivebul
 */
class ArchivebulController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('archivebul', $this->paginate($this->Archivebul));
        $this->set('_serialize', ['archivebul']);
    }

    /**
     * View method
     *
     * @param string|null $id Archivebul id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $archivebul = $this->Archivebul->get($id, [
            'contain' => []
        ]);
        $this->set('archivebul', $archivebul);
        $this->set('_serialize', ['archivebul']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        /*$archivebul = $this->Archivebul->get($id, [
            'contain' => []
        ]);*/
        $this->loadModel('Bulettinvul');
        $now = Time::now();
        $archivebul = $this->Archivebul->newEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $archivebul = $this->Archivebul->patchEntity($archivebul, $this->request->data);
            $archivebul->DATEARCHIVAGE = $now;
            $archivebul->ID_BUL = $id;
            if ($this->Archivebul->save($archivebul)) {
                $bulettinvul = $this->Bulettinvul->get($id, [
                    'contain' => []
                ]);
                $bulettinvul->State = 5;
                if ($this->Bulettinvul->save($bulettinvul)) {
                    $this->Flash->success(__('The bulettinvul has been saved.'));
                    //return $this->redirect(['action' => 'index']);
                }
                /*$this->Flash->success(__('The archivebul has been saved.'));
                return $this->redirect(['action' => 'index']);*/
            } else {
                $this->Flash->error(__('The archivebul could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('archivebul'));
        $this->set('_serialize', ['archivebul']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Archivebul id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $archivebul = $this->Archivebul->get($id, [
            'contain' => []
        ]);
        $archivebul = $this->Archivebul->newEntity();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $archivebul = $this->Archivebul->patchEntity($archivebul, $this->request->data);
            if ($this->Archivebul->save($archivebul)) {
                $this->Flash->success(__('The archivebul has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The archivebul could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('archivebul'));
        $this->set('_serialize', ['archivebul']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Archivebul id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $archivebul = $this->Archivebul->get($id);
        if ($this->Archivebul->delete($archivebul)) {
            $this->Flash->success(__('The archivebul has been deleted.'));
        } else {
            $this->Flash->error(__('The archivebul could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
