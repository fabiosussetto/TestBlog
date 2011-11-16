<?php echo $this->Html->link('Inserisci nuovo post', array('action' => 'add')) ?>
<h3>Elenco post</h3>
<table>
  <tr>
    <th>Titolo</th>
    <th>Body</th>
  </tr>
  <?php foreach ($posts as $post) : ?>
    <tr>
      <td><?php echo $post['Post']['title'] ?></td>
      <td><?php echo $post['Post']['body'] ?></td>
    </tr>
  <?php endforeach ?>
</table>