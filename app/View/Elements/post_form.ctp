<?php echo $this->Form->create('Post') ?>

  <?php echo $this->Form->input('id') ?>

  <?php echo $this->Form->input('title') ?>

  <?php echo $this->Form->input('body') ?>
  
  <?php echo $this->Form->input('published') ?>

  <?php echo $this->Form->input('email') ?>

<?php echo $this->Form->end('Invia') ?>