<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\UsersController;
use App\Controller\ArticleController;
use App\Controller\ConcerneController;
use Cake\I18n\Time;

/**
 * Bulettinvul Controller
 *
 * @property \App\Model\Table\BulettinvulTable $Bulettinvul
 */
class BulettinvulController extends AppController
{

    public function isAuthorized($user = null)
    {
    // Admin can access every action
    if (($this->Auth->user("TYPEUSER") == 4) && (in_array($this->request->action, ['index','view','edit']))) {
        return true;
    }
    if (($this->Auth->user("TYPEUSER") == 2) && (in_array($this->request->action, ['index','view']))) {
        return true;
    }
    if (($this->Auth->user("TYPEUSER") == 3) && (in_array($this->request->action, ['index','view','edit']))) {
        return true;
    }

    // Default deny
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
        if ($this->Auth->user("TYPEUSER") == 3){
          $c = new ConcerneController();
          $q = $c->getConcerne($this->Auth->user("ID_USER"));
          $this->set('q', $q);
          //$r = null;
          //foreach ($qs as $q){
          //;
          //}
          //$r = (Object)$r;
          //$this->set('bulettinvul', $this->paginate($this->Bulettinvul->find('all', ['conditions' => ['bulettinvul.ID_BUL' => $q]])));
          $this->set('bulettinvul', $this->paginate($this->Bulettinvul->find()->where(["ID_BUL in"=>$q])));
          $this->set('_serialize', ['bulettinvul']);
          if ($this->Auth->user("TYPEUSER") == 2) $this->set('commite', true);
          else $this->set('commite', false);
          if ($this->Auth->user("TYPEUSER") == 1) $this->set('admin', true);
          else $this->set('admin', false);
        }
        else{
        $this->set('bulettinvul', $this->paginate($this->Bulettinvul));
        $this->set('_serialize', ['bulettinvul']);
        if ($this->Auth->user("TYPEUSER") == 2) $this->set('commite', true);
        else $this->set('commite', false);
        if ($this->Auth->user("TYPEUSER") == 1) $this->set('admin', true);
        else $this->set('admin', false);
      }
    }

    /**
     * View method
     *
     * @param string|null $id Bulettinvul id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {

        $bulettinvul = $this->Bulettinvul->get($id, [
            'contain' => []
        ]);
        $this->set('bulettinvul', $bulettinvul);
        $this->set('_serialize', ['bulettinvul']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $now = Time::now();
        //$u = $this->Auth->user('ID_USER');
        $this->loadModel('Concerne');
        $o = new UsersController();
        $a = new ArticleController();
        $this->set("options",$o->getAnalysts());
        $this->set("aoptions",$a->getArticle());
        $bulettinvul = $this->Bulettinvul->newEntity();
        if ($this->request->is('post')) {
            $bulettinvul = $this->Bulettinvul->patchEntity($bulettinvul, $this->request->data);
            $bulettinvul->State = 1;
            $bulettinvul->DATECREATION = $now;
            if ($this->Bulettinvul->save($bulettinvul)) {
                //print_r($this->request->data["USERS"]);
                $anas = $this->request->data["USERS"];
                //echo count($ana);
                foreach ($anas as $ana){
                  //echo $ana;
                  $concerne = $this->Concerne->newEntity();
                  $concerne->ID_USER = $ana;
                  $concerne->ID_BUL = $bulettinvul->ID_BUL;
                  //$this->Flash->success($concerne->ID_USER);
                  //print_r($concerne);
                  //echo "-------------------";
                  if ($this->Concerne->save($concerne)) {
                    $this->Flash->success(__('The bulettinvul has been saved.'));
                    //return $this->redirect(['action' => 'index']);
                  }
                  else{
                      $this->Flash->error(__('Conerne Error.'));
                  }
                }
                /*foreach ($anas as $ana) {
                  $concerne = $this->Concerne->newEntity();
                  $concerne->ID_USER = $ana[];
                }*/
                /*$concerne = $this->Concerne->newEntity();
                $concerne->ID_USER = $this->Auth->user('ID_USER');
                $concerne->ID_BUL = $bulettinvul->ID_BUL;
                if ($this->Concerne->saveMany($concerne)) {
                  $this->Flash->success(__('The bulettinvul has been saved.'));
                  return $this->redirect(['action' => 'index']);
                }*/
            } else {
                $this->Flash->error(__('The bulettinvul could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bulettinvul'));
        $this->set('_serialize', ['bulettinvul']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bulettinvul id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('Concerne');
        $o = new UsersController();
        $a = new ArticleController();
        $this->set("options",$o->getAnalysts());
        $this->set("aoptions",$a->getArticle());
        $u = $this->Auth->user('TYPEUSER');
        if ($u==2){ $this->set('commite',true);}
        else $this->set('commite',false);
        if ($u==3){ $this->set('analyst',true);
        $state = 2;}
        else $this->set('analyst',false);
        if ($u==4){ $this->set('inter',true);
        $state = 3;}
        else $this->set('inter',false);
        if ($u==1){ $this->set('admin',true);
        $state = 4;}
        else $this->set('admin',false);
        $bulettinvul = $this->Bulettinvul->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $bulettinvul = $this->Bulettinvul->patchEntity($bulettinvul, $this->request->data);
            $bulettinvul->State = $state;
            //$bulettinvul->ETAT = 1;
            if ($this->Bulettinvul->save($bulettinvul)) {
                $this->Flash->success(__('The bulettinvul has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bulettinvul could not be saved. Please, try again.'));
                //debug($this->Bulettinvul->validationErrors);
                debug($bulettinvul);
                debug($bulettinvul->errors());

            }
        }
        $this->set(compact('bulettinvul'));
        $this->set('_serialize', ['bulettinvul']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bulettinvul id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bulettinvul = $this->Bulettinvul->get($id);
        if ($this->Bulettinvul->delete($bulettinvul)) {
            $this->Flash->success(__('The bulettinvul has been deleted.'));
        } else {
            $this->Flash->error(__('The bulettinvul could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
