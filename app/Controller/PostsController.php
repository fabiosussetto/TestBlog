<?php
class PostsController extends AppController {
  
  public function index () {
    $posts = $this->Post->find('all');
    $this->set(array('posts' => $posts));
  }
  
  public function add () {
    if ($this->request->is('post')) {
      if ($this->Post->save($this->request->data)) {
        $this->Session->setFlash("Post salvato!");
        $this->redirect(array('action' => 'index'));
      }
    }
  }
  
  public function edit () {
    
  }
  
  public function delete () {
    
  }
  
  
}

