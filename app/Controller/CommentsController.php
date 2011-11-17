<?php
class CommentsController extends AppController {


  public function add () {
    if (!empty($this->data)) {
      if ($this->Comment->save($this->data)) {
        $this->Session->setFlash('Commento aggiunto');
      }  else {
        $this->Session->setFlash('Errore salvataggio');
      }
      $this->redirect(array('controller' => 'posts', 'action' => 'view', $this->data['Comment']['post_id']));
    }
  }  
  
  
}

