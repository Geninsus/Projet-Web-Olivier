<header>
	<h1>Ici, tu peux te connecter au site</h1>
	<ul>
		<li><?php echo $this->Html->link('add Member', array('controller' => 'members','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in Member', array('controller' => 'members','action' => 'logIn' )); ?></li>
		<li><?php echo $this->Html->link('view all Member', array('controller' => 'members','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>


<?= $this->Form->create('Member'); ?>
	<?= $this->Form->input('e-mail', array('label' => 'votre adresse mail','type' => 'email', 'placeholder' => 'ici' )); ?>
	<?= $this->Form->input('password', array('label' => 'votre mots de passe', 'placeholder' => 'te trompe po', 'type' => 'password' )); ?>
	<br />
<?= $this->Form->end('Soumettre le formulaire'); ?>