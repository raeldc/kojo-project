<?php 
class LibraryViewBook extends KViewHtml
{
	public function display($tpl = null)
	{
		$model = KFactory::get('admin::com.library.model.books');

		$this->assign('book',   	$model->getItem());
		
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