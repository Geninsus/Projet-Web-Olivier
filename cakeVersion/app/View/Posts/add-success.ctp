<header>
	<h1>you're a genius</h1>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'members','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('add Post', array('controller' => 'posts','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('view Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>

<p><?= "name : ".$post['Post']['name']; ?></p>
<p><?= "content : ".$post['Post']['content']; ?></p>
<!--<p><?= "slug : ".$post['Post']['slug']; ?></p>-->