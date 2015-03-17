<header>
	<h1>Ici, tu peux t'inscrire au site</h1>
	<ul>
		<li><?php echo $this->Html->link('add Member', array('controller' => 'members','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in Member', array('controller' => 'members','action' => 'logIn' )); ?></li>
		<li><?php echo $this->Html->link('view all Member', array('controller' => 'members','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>


<?= $this->Form->create('Member'); ?>
	<?= $this->Form->input('name', array('label' => 'Votre prénom', 'placeholder' => 'Jean le beau gosse' )); ?>
	<?= $this->Form->input('password', array('label' => 'votre mots de passe', 'placeholder' => 'pas trop court', 'type' => 'password' )); ?>
	<?= $this->Form->input('e-mail', array('label' => 'votre adresse mail','type' => 'email', 'placeholder' => 'ici' )); ?>
	<br />
<?= $this->Form->end('Soumettre l\'inscription'); ?>