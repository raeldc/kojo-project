<?php
class LibraryHelperBook extends KViewHelper
{

	public static function genres($selected = 0)
	{
		$emtpy = new stdClass;
		$empty->id = 0; 
		$empty->name = '- '.JText::_('Select genre').' -';
		$list = array($empty);
		foreach(KFactory::get('admin::com.library.model.genres')->getAll() as $item)
		{
			$list[] = $item;	
		}
		return KViewHelper::_('select.genericlist', $list, 'library_genre_id', null, 'id', 'name', $selected, 'library_genre_id');
	}
	public static function authors($selected = 0)
	{
		$emtpy = new stdClass;
		$empty->id = 0; 
		$empty->name = '- '.JText::_('Select author').' -';
		$list = array($empty);
		foreach(KFactory::get('admin::com.library.model.authors')->getAll() as $item)
		{
			$list[] = $item;	
		}
		return KViewHelper::_('select.genericlist', $list, 'library_author_id', null, 'id', 'name', $selected, 'library_author_id');
	}

}