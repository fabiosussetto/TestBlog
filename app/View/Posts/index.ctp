<?php echo $this->Html->link('Inserisci nuovo post', array('action' => 'add')) ?>
<h3>Elenco post prova</h3>
<table>
  <tr>
    <th>Titolo</th>
    <th>Body</th>
    <th>Autore</th>
    <th>Pubblicato</th>
    <th>Azioni</th>
  </tr>
  <?php foreach ($posts as $post) : ?>
    <tr>
      <td><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?></td>
      <td><?php echo $post['Post']['body'] ?></td>
      <td><?php echo $post['User']['name'] ?></td>
      <td><?php echo $post['Post']['published'] ?></td>
      <td>
        <?php echo $this->Html->link('modifica', array('action' => 'edit', $post['Post']['id'])); ?>
        <?php echo $this->Html->link('cancella', array('action' => 'delete', $post['Post']['id'])); ?>
      </td>
    </tr>
  <?php endforeach ?>
</table>