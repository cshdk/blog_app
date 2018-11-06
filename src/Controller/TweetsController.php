<?php
namespace App\Controller;

use App\Controller\AppController;
<<<<<<< HEAD
use Cake\Event\Event;
=======
>>>>>>> 9966783fc8d5ea5473c82ccc2ef808356b8ac388

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
<<<<<<< HEAD


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('index');
    }


=======
>>>>>>> 9966783fc8d5ea5473c82ccc2ef808356b8ac388
    public function index()
    {
        $tweets = $this->paginate($this->Tweets);

        $this->set(compact('tweets'));
<<<<<<< HEAD
        $this->set(compact('user'));
=======
>>>>>>> 9966783fc8d5ea5473c82ccc2ef808356b8ac388
    }

    /**
     * View method
     *
     * @param string|null $id Tweet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
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
<<<<<<< HEAD

        $tweet = $this->Tweets->newEntity();
        if ($this->request->is('post')) {
            #ビューから送られてきた情報をここで取ってきて$tweetに入れている
=======
        $tweet = $this->Tweets->newEntity();
        if ($this->request->is('post')) {
>>>>>>> 9966783fc8d5ea5473c82ccc2ef808356b8ac388
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
