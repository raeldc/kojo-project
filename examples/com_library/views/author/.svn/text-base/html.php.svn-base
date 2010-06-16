<?php 
class LibraryViewAuthor extends KViewHtml
{
	public function display($tpl = null)
	{
		$model = KFactory::get('admin::com.library.model.authors');

		$this->assign('author',   	$model->getItem());
		
		$this->displayToolbar();
		
		// Display the layout
		parent::display($tpl);
	}


    public function displayToolbar()
    {
        $name = $this->getClassName();

		// Set the titlebar text
		JToolBarHelper::title( JText::sprintf( ucfirst($name['prefix']).' - %s', ucfirst($name['suffix']) ), 'user');
	
		JToolBarHelper::save();
		JToolBarHelper::apply();
		JToolBarHelper::cancel('cancel', JText::_('Close'));		
		JToolBarHelper::divider();
    }
}