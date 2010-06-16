<?php
class LibraryModelGenres extends KModelTable
{
    public function getAll()
    {
        // Get the data if it doesn't already exist
        if (!isset($this->_all)) 
        {
        	$this->_list = $this->getTable()->fetchAll(
        		$this->_buildQuery(), 0, 0
        	);
        }

        return parent::getList();
    }
    
    public function getEmpty()
    {
    	return $this->getTable()->fetchRow();
    }
}