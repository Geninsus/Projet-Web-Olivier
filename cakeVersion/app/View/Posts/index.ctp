<header>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'members','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('add Post', array('controller' => 'posts','action' => 'add' )); ?></li>
	</ul>
</header>
<?php foreach ($posts as $k => $post): ?>
	<h1><?= $post ['Post']['name']; ?> </h1>
	<p><?= $post['Post']['content']; ?></p>
	<p><?= $post['Post']['slug']; ?></p>
	<p><?= $this->Html->link('lire la suite', $post['Post']['url']); ?></p>
<?php endforeach ?>