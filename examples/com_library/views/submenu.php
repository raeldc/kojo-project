<?php
class LibraryViewSubmenu
{

	protected $_object;
	
	public function __construct($object) {
    	$this->_object = $object;
    }
	
	public function displaySubmenu()
	{
		$views =  array(
			'books' 			=> 'Books',
			'authors' 			=> 'Authors',
			'genres' 			=> 'Genres'
	        );
                  
		foreach($views as $view => $title)
		{	
			$active = ($view == strtolower($this->_object->getClassName('suffix')) );
			JSubMenuHelper::addEntry(JText::_($title), 'index.php?option=com_library&view='.$view, $active );
		}
	}

}
?>