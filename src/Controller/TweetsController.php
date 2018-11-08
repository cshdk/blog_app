<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Log\Log;
use Cake\Error\Debugger;

/**
 * Tweets Controller
 *
 * @property \App\Model\Table\TweetsTable $Tweets
 *
 * @method \App\Model\Entity\Tweet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TweetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('index');
    }

    public $paginate = [
        'limit' => 4,
        'order' => ['created' => 'DESC']
     ];

    public function index()
    {
        // $tweets = $this->paginate($this->Tweets);
        // $tweets = TableRegistry::getTableLocator()->get('Tweets');
        // $tweets = $this->Tweets->find();
        // $tweets_user = $this->paginate($this->Tweets->find('all')->contain(['Users']));
     $tweets_user = $this->Tweets->find('all')->contain(['Users']);
        // Log::debug($tweets);
     Log::debug($tweets_user);
        // Debugger::dump($tweets_user);
        // Debugger::dump($tweets);
        // $this->set(compact('tweets'));
      $this->set('tweets_user', $this->paginate($tweets_user));
    }

    /**
     * View method
     *
     * @param string|null $id Tweet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

      #何に使われるかいまいちわかっていないため消しておいた
    public function view($id = null)
    {
        $tweet = $this->Tweets->get($id, [
            'contain' => []
        ]);
        $this->set('tweet', $tweet);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tweet = $this->Tweets->newEntity();
        // $tweet->user = $user;
        if ($this->request->is('post')) {
            #ビューから送られてきた情報をここで取ってきて$tweetに入れている
        $tweet = $this->Tweets->newEntity();
        if ($this->request->is('post')) {
            $tweet = $this->Tweets->patchEntity($tweet, $this->request->getData());
             Log::debug($tweet);
            // eval(\Psy\sh());
            $tweet->user_id = $this->Auth->user('id');
            if ($this->Tweets->save($tweet)) {
                $this->Flash->success(__('The tweet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tweet could not be saved. Please, try again.'));
        }
         $this->set(compact('tweet'));
      }
    }

    /**
     * Edit method
     *
     * @param string|null $id Tweet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tweet = $this->Tweets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tweet = $this->Tweets->patchEntity($tweet, $this->request->getData());
            if ($this->Tweets->save($tweet)) {
                $this->Flash->success(__('The tweet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tweet could not be saved. Please, try again.'));
        }
        $this->set(compact('tweet'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tweet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tweet = $this->Tweets->get($id);
        if ($this->Tweets->delete($tweet)) {
            $this->Flash->success(__('The tweet has been deleted.'));
        } else {
            $this->Flash->error(__('The tweet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

?>
