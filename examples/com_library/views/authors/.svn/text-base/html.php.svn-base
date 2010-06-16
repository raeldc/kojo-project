<?php 
class LibraryViewAuthors extends KViewHtml
{
	public function display($tpl = null)
	{
		$model = KFactory::get('admin::com.library.model.authors');

		$this->assign('authors',   	$model->getList());
		$this->assign('filter',  	$model->getFilters());
		$this->assign('pagination', $model->getPagination());
		$this->displayToolbar();

		// Mixin a submenu object
        Koowa::import('admin::com.library.views.submenu');
        $this->mixin( new LibraryViewSubmenu($this));
        $this->displaySubmenu();
        
		// Display the layout
		parent::display($tpl);
	}

//JToolbar will be replaced with KtoolBar in Koowa 0.7
    public function displayToolbar()
    {
        $name = $this->getClassName();

		// Set the titlebar text
		JToolBarHelper::title( JText::sprintf( ucfirst($name['prefix']).' - %s', ucfirst($name['suffix']) ), 'user');

		JToolBarHelper::deleteList('Are you sure you want to delete these books?', 'delete');
		// edit doesn't work in Koowa 0.6
		//JToolBarHelper::editList();
		JToolBarHelper::addNew();

    }
}