<header>
	<ul>
		<li><?php echo $this->Html->link('add Member', array('controller' => 'members','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in Member', array('controller' => 'members','action' => 'logIn' )); ?></li>
		<li><?php echo $this->Html->link('view all Member', array('controller' => 'members','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>
<ul>
	<?php foreach ($members as $k => $member): ?>
		<li><?= $member['Member']['name']; ?></li>
		<li><?= $member['Member']['e-mail']; ?></li>
	<?php endforeach ?>
</ul>