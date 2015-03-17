<?php
class Post extends AppModel
{
	public function beforeSave($options = array ())
	{
		if (isset($this->data[$this->alias]['name']) && 
			!isset($this->data[$this->alias]['slug']))
		{
			$this->data[$this->alias]['slug'] = strtolower(inflector::slug($this->data[$this->alias]['name']));
		}
		else
		{
			$this->data[$this->alias]['slug'] = "ça marche po";
		}
	}

	public function afterFind($results, $primary = false)
	{
		foreach ($results as $key => $result) 
		{
			if (isset($result[$this->alias]['id']) &&
				isset($result[$this->alias]['slug'])) 
			{
				$results[$key][$this->alias]['url'] = array(
					'controller' 	=> 'posts',
					'action'		=> 'view', 
					'id' 			=> $result[$this->alias]['id'],
					'slug'			=> $result[$this->alias]['slug']);
			}
		}
		return $results;
	}
}