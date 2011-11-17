<?php
class PostsController extends AppController {
  
  public function index () {
    $posts = $this->Post->find('all', array(
      'contain' => array('User')
    ));
    
    $this->set(array('posts' => $posts));
  }
  
  public function test () {
    $conditions = array(
      'or' => array(
        'title LIKE' => '%post%',
        'published' => true
      )
    );
    $posts = $this->Post->find('all', array(
      'conditions' => $conditions,
      'contain' => array('User')
    ));
  }
  
  public function view ($id) {
    $post = $this->Post->read(null, $id);
    $this->set(compact('post'));
  }
  
  public function add () {
    if ($this->request->is('post')) {
      if ($this->Post->save($this->request->data)) {
        $this->Session->setFlash("Post salvato!");
        $this->redirect(array('action' => 'index'));
      }
    }
  }
  
  public function edit ($id) {
    if (!empty($this->data)) {
      if ($this->Post->save($this->request->data)) {
        $this->Session->setFlash("Post salvato!");
        $this->redirect(array('action' => 'edit', $id));
      } else {
        $this->Session->setFlash("Errore salvataggio");
      }
    } else {
      $this->data = $this->Post->read(null, $id);
    }
  }
  
  public function delete ($id) {
    if ($this->Post->delete($id)) {
      $msg = "Post cancellato";
    } else {
      $msg = "Errore in cancellazione";
    }
    $this->Session->setFlash($msg);
    $this->redirect(array('action' => 'index'));
  }
  
  
  
}

