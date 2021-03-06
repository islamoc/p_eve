<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Article Controller
 *
 * @property \App\Model\Table\ArticleTable $Article
 */
class ArticleController extends AppController
{
    /*public function isAuthorized($user = null)
    {
    // Admin can access every action
    /*if ((in_array($this->request->action, ['index']))) {
        return true;
    }
    return parent::isAuthorized();
    if ($loggedIn === null) {
        return true;
    }
    return true;
  }*/
    function beforeFilter(Event $event)
    {
    parent::beforeFilter($event);
    $this->Auth->allow('index');
    }

    public function getArticle()
    {
      $query = $this->Article->find('all');;
      $query->hydrate(false);
      $results = $query->all();
      $results = $results->toArray();
      $o = array();
      //$o[0] = "Autre";
      for ($i = 0;$i<count($results);$i++){
        $o[$results[$i]["ID_ARTICLE"]] = $results[$i]["DESCRI"];
      }
      $s = count($o);
      $o[0] = "Autre";
      return $o;
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->loadModel('Article');
        $this->set('article', $this->paginate($this->Article->find("all",["contain"=>["siteweb"]])));
        $this->set('_serialize', ['article']);
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Article->get($id, [
            'contain' => []
        ]);
        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Article->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Article->patchEntity($article, $this->request->data);
            if ($this->Article->save($article)) {
                $this->Flash->success(__('The article has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The article could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('article'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Article->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Article->patchEntity($article, $this->request->data);
            if ($this->Article->save($article)) {
                $this->Flash->success(__('The article has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The article could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('article'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Article->get($id);
        if ($this->Article->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
