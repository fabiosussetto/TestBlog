<?php
class Post extends AppModel {
  
  public $hasMany = array(
    'Comment'
  );
  
  public $belongsTo = array(
    'User'
  );
  
  public $validate = array(
    'title' => array(
      array(
        'rule' => 'notEmpty',
        'message' => 'Inserisci il titolo'
      ),
      array(
        'rule' => 'isUnique',
        'message' => 'Titolo già presente'
      )
    ),
    'email' => array(
      'rule' => 'email',
      'message' => 'Email non valida',
      'allowEmpty' => true      
    )
  );
  
  
}
