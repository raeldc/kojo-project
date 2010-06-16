<?php defined('SYSPATH') or die('404 Not Found.');

class Model_Book extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->table('library_books')
			->fields(array(
				'id' => new Field_Primary(array(
					'column' => 'library_book_id'
				)),
				'title' => new Field_String,
				'author' => new Field_BelongsTo(array(
					'column' => 'library_author_id',
					'foreign' => 'author.library_author_id',
				)),
				'genre' => new Field_BelongsTo(array(
					'column' => 'library_genre_id',
					'foreign' => 'genre.library_genre_id',
				)),
			));
	}
}