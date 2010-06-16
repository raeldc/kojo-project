<?php defined('SYSPATH') or die('404 Not Found.');?>

<?php
	$form_url = Route::get('default')->uri(array(
		'action' => 'book'
	));
?>
<form action="<?php echo HTML::uri($form_url);?>" method="post" name="adminForm">

	<fieldset>
		<legend><?php echo JText::_('Book'); ?></legend>
			<table class="admintable">
				<tr>
					<td width="100" align="right" class="key">
						<label for="title">
						<?php echo JText::_( 'Book' ); ?>:
						</label>
					</td>
					<td>
						<input type="text" name="title" id="title" size="48" maxlength="250" value="<?php echo $book->title; ?>" />
					</td>
					</tr>
					<tr>
					<td width="100" align="right" class="key">
						<label for="title">
						<?php echo JText::_( 'Author' ); ?>:
						</label>
					</td>
					<td>
					<?php echo Form::select('author', $authors, $book->author->id); ?>
					</td>
					</tr>
					<tr>
					<td width="100" align="right" class="key">
						<label for="title">
						<?php echo JText::_( 'Genre' ); ?>:
						</label>
					</td>
					<td>
						<?php echo Form::select('genre', $genres, $book->genre->id); ?>
					</td>
					</tr>
							
			</table>
			
	</fieldset>
	<input type="hidden" name="id" value="<?php echo $book->id?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="action" value="book" />
</form>