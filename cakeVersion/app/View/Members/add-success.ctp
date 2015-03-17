<header>
	<h1>Welcome <?= $member['Member']['name']; ?></h1>
	<ul>
		<li><?php echo $this->Html->link('add Member', array('controller' => 'members','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in Member', array('controller' => 'members','action' => 'logIn' )); ?></li>
		<li><?php echo $this->Html->link('view all Member', array('controller' => 'members','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>
	<p><?= "your password is : ".$member['Member']['password']; ?></p>
	<p><?= "your email is : ".$member['Member']['e-mail']; ?></p>
