<h1>Rentre ton post	</h1>

<?= $this->Form->create('Post'); ?>
	<?= $this->Form->input('name', array('label' => 'Votre titre', 'placeholder' => 'ma super journée' )); ?>
	<?= $this->Form->input('content', array('label' => 'Votre post', 'placeholder' => 'qu\'as tu fais ajd?' )); ?>
<?= $this->Form->end('Rentrer un post'); ?>
