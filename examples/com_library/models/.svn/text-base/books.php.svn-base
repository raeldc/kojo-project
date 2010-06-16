<?php
class LibraryModelBooks extends KModelTable
{	
	protected function _buildQueryJoins(KDatabaseQuery $query)
	{
		$query->join('LEFT', 'library_authors AS au', 'au.library_author_id = tbl.library_author_id')
			  ->join('LEFT', 'library_genres AS ge', 'ge.library_genre_id = tbl.library_genre_id');
	}
	
	protected function _buildQueryFields(KDatabaseQuery $query)
	{
		$query->select('au.name AS author')
			  ->select('ge.name AS genre');
			
	}

// getItem need to be extended in Koowa 0.6 if you want to show the name fields of the left joins in singular view
	public function getItem()
	{
		if(!isset($this->_item))
		{
	        $query = $this->_buildQuery()->where('tbl.library_book_id', '=', $this->getState('id'));
			$this->_item = $this->getTable()->fetchRow( $query);    
		}
		return $this->_item;
	}	
}
    