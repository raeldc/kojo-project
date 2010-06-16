<?php defined('SYSPATH') or die('404 Not Found.');

class Model_Genre extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->table('library_genres')
			->fields(array(
				'id' => new Field_Primary(array(
					'column' => 'library_genre_id'
				)),
				'name' => new Field_String,
				'books' => new Field_HasMany(array(
					'foreign' => 'books.library_book_id'
				))
			));
	}
}