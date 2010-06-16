<?php defined('SYSPATH') or die('404 Not Found.');

class Model_Author extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->table('library_authors')
			->fields(array(
				'id' => new Field_Primary(array(
					'column' => 'library_author_id'
				)),
				'name' => new Field_String,
				'books' => new Field_HasMany(array(
					'foreign' => 'books.library_book_id'
				))
			));
	}
}