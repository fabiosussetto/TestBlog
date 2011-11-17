<h3><?php echo $post['Post']['title'] ?></h3>

<p>
  <strong>Autore:</strong> <?php echo $post['User']['name'] ?>
</p>

<p>
  <?php echo $post['Post']['body'] ?>
</p>

<h4>Commenti:</h4>

<ol>
  <?php foreach ($post['Comment'] as $comment): ?>
    <li>
      <strong><?php echo $comment['author'] ?>: </strong>
      <?php echo $comment['body'] ?>
    </li>
  <?php endforeach ?>
</ol>

<h4>Aggiungi commento:</h4>

<?php echo $this->Form->create('Comment', array('url' => array('controller' => 'comments', 'action' => 'add'))) ?>

  <?php echo $this->Form->input('post_id', array('type' => 'hidden', 'value' => $post['Post']['id'])) ?>

  <?php echo $this->Form->input('author') ?>

  <?php echo $this->Form->input('body') ?>

<?php echo $this->Form->end('Invia') ?>
