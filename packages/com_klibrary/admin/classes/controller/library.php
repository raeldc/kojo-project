<?php defined('SYSPATH') or die('404 Not Found.');

class Controller_Library extends Controller 
{	
	public function action_books()
	{	
		$ordering = $this->request->param('ordering', 'asc');
		$table = $this->request->param('table', 'title');
		
		$books = Jelly::select('book')
					->order_by($table, $ordering)
					->execute();
		
		$this->request->response = View::factory('books/list')
			->set('books', $books)
			->set('ordering', $ordering)
			->set('table', $ordering)
			->render();
	}
	
	public function action_authors()
	{
		$ordering = $this->request->param('ordering', 'asc');
		$table = $this->request->param('table', 'name');
		
		$authors = Jelly::select('author')
					->order_by($table, $ordering)
					->execute();
		
		$this->request->response = View::factory('authors/list')
			->set('authors', $authors)
			->set('ordering', $ordering)
			->set('table', $ordering)
			->render();
	}
	
	public function action_genres()
	{
		$ordering = $this->request->param('ordering', 'asc');
		$table = $this->request->param('table', 'name');
		
		$genres = Jelly::select('genre')
					->order_by($table, $ordering)
					->execute();
		
		$this->request->response = View::factory('genres/list')
			->set('genres', $genres)
			->set('ordering', $ordering)
			->set('table', $ordering)
			->render();
	}
	
	public function action_book()
	{
		$task = $this->request->param('task', 'edit');
		$id = $this->request->param('id', NULL);
		
		$book = $this->submit($task, $id, 'book');
		
		$authors = Jelly::select('author')->execute()->as_array('id', 'name');
		$genres = Jelly::select('genre')->execute()->as_array('id', 'name');
		
		$this->request->response = View::factory('books/edit')
			->set('book', $book)
			->set('authors', $authors)
			->set('genres', $genres)
			->render();
	}
	
	public function action_author()
	{
		$task = $this->request->param('task', 'edit');
		$id = $this->request->param('id', NULL);
		
		$author = $this->submit($task, $id, 'author');
		
		$this->request->response = View::factory('authors/edit')
			->set('author', $author)
			->render();
	}
	
	public function action_genre()
	{
		$task = $this->request->param('task', 'edit');
		$id = $this->request->param('id', NULL);
		
		$genre = $this->submit($task, $id, 'genre');
		
		$this->request->response = View::factory('genres/edit')
			->set('genre', $genre)
			->render();
	}
	
	public function submit($task, $id, $type)
	{
		$item = Jelly::select($type, $id);
		
		$redirect = HTML::uri(
			Route::get('default')->uri(array(
				'action' => Inflector::plural($type)
			))
		);
		
		switch ($task) 
		{
			case 'apply':
				$item->set($_POST)->save();
				
				$redirect = HTML::uri(
					Route::get('default')->uri(array(
						'action' => $type,
						'task' => 'edit',
						'id' => $item->id,
					))
				);
				$this->request->redirect($redirect);
			break;

			case 'save':
				$item->set($_POST)->save();
				$this->request->redirect($redirect);
			break;

			case 'cancel':
				$this->request->redirect($redirect);
			break;
			
			case 'delete':
				if ($ids = Arr::get($_POST, 'cid', NULL)) 
				{
					$items = Jelly::delete($item)->where(':primary_key', 'IN', $ids)->execute();
				}
				
				$this->request->redirect($redirect);
			break;
			
			case 'default':
				if ( ! $item->loaded()) 
				{
					$this->request->redirect($redirect);
				}
			break;
		}
		
		return $item;
	}
	
	public function after()
	{
		$task = $this->request->param('task', 'list');
		$action = $this->request->action;

		JToolBarHelper::title(JText::_(ucfirst($task).' '.ucfirst($action)));

		switch ($task) 
		{
			case 'edit':
			case 'add':
				JToolBarHelper::save();
				JToolBarHelper::apply();
				JToolBarHelper::cancel('cancel', JText::_('Close'));		
				JToolBarHelper::divider();
			break;
			
			default:
				JToolBarHelper::deleteList('Are you sure you want to delete these '.ucfirst($action).'?', 'delete');
				JToolBarHelper::addNew();
				
				$views =  array(
					'books' 			=> 'Books',
					'authors' 			=> 'Authors',
					'genres' 			=> 'Genres'
			        );

				foreach($views as $view => $title)
				{
					$active = ($this->request->action == $view);
					JSubMenuHelper::addEntry(JText::_($title), HTML::uri($view), $active);
				}
			break;
		}
	}
}