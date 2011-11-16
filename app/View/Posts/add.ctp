<h3>Inserisci un nuovo post</h3>
<?php echo $this->Html->link('Lista dei post', array('action' => 'index')) ?>

<?php echo $this->Form->create('Post') ?>

  <?php echo $this->Form->input('title') ?>

  <?php echo $this->Form->input('body') ?>
  
  <?php echo $this->Form->input('published') ?>

<?php echo $this->Form->end('Invia') ?>
