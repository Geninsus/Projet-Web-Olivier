<?php
class PostsController extends AppController
{
	public function add()
	{

		if($this->request->is('post'))
		{
			$this->Post->create($this->request->data, true);
			$this->Post->save(null, true, array('name', 'content', 'slug'));
			$post = $this->request->data;
			$this->set(compact('post'));
			$this->render('add-success');
		}
	}

	function index()
	{
		$posts = $this->Post->find('all', array('order' => array('created' => 'desc')));
		$this->set(compact('posts'));
	}

	
}