<?php

namespace App\Controller;



class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
       $posts = $this->set('posts', $this->Post->find('all'));
       Log::debug($posts);
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
}
