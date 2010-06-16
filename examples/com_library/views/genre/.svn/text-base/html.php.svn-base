<?php 
class LibraryViewGenre extends KViewHtml
{
	public function display($tpl = null)
	{
		$model = KFactory::get('admin::com.library.model.genres');

		$this->assign('genre',   	$model->getItem());
		
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