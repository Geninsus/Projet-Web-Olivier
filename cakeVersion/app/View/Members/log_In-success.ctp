<header>
	<h1>Bravo you succed!</h1>
	<ul>
		<li><?php echo $this->Html->link('add Member', array('controller' => 'members','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in Member', array('controller' => 'members','action' => 'logIn' )); ?></li>
		<li><?php echo $this->Html->link('view all Member', array('controller' => 'members','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>
<h1>Welcome <?= $member['Member']['name']; ?></h1>
	<p><?= $member['Member']['id']; ?></p>
	<p><?= $member['Member']['e-mail']; ?></p>
	<p><?= $member['Member']['password']; ?></p>