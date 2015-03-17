<?php
class MembersController extends AppController
{
	//public $components = array('Session');

	public function index()
	{

	}
	public function add()
	{
		if($this->request->is('post'))
		{
			$this->Member->create($this->request->data, true);
			$member = $this->request->data;
			$this->Member->save(null, true, array('name', 'e-mail', 'password'));
			debug($member);
			$this->set(compact('member'));
			$this->render('add-success');
		}
	}
	public function all()
	{
		$members = $this->Member->find('all');
		$this->set(compact('members'));
	}
	public function logIn()
	{
		if($this->request->is('post'))
		{
			$member = $this->Member->findByPassword($this->request->data['Member']['password']);
			debug($this->request->data['Member']['password']);
			if ($member['Member']['e-mail'] == $this->request->data['Member']['e-mail'] 
				|| $member['Member']['password'] == $this->request->data['Member']['password']) {

				$this->set(compact('member'));
				$this->render('logIn-success');
			}
			else {
				throw new NotFoundException(__('Invalid ids'));
			}
		}
	}
}
?>