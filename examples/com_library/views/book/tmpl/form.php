<?
// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<script language="javascript" type="text/javascript">
<!--
 function submitbutton(pressbutton) {
  var form = document.adminForm;
  if (pressbutton == 'cancel') {
  submitform( pressbutton );
  return;
  }
 // do field validation
  if (form.name.value == ""){
  alert( "<?php echo JText::_( 'Please give a title', true ); ?>" );
  }  else {
  submitform( pressbutton );
  }
  }
  -->
</script>

<form action="<?= @route('index.php?option=com_library&view=book&layout=form&id='.@$book->id) ?>" method="post" class="adminform" name="adminForm" >

	<fieldset>
		<legend><?= @text('Book'); ?></legend>
			<table class="admintable">
				<tr>
					<td width="100" align="right" class="key">
						<label for="title">
						<?php echo JText::_( 'Book' ); ?>:
						</label>
					</td>
					<td>
						<input type="text" name="title" id="title" size="48" maxlength="250" value="<?= @$book->title; ?>" />
					</td>
					</tr>
					<tr>
					<td width="100" align="right" class="key">
						<label for="title">
						<?php echo JText::_( 'Author' ); ?>:
						</label>
					</td>
					<td>
					<?= @helper('library.book.authors', @$book->library_author_id) ?>
					
					</td>
					</tr>
					<tr>
					<td width="100" align="right" class="key">
						<label for="title">
						<?php echo JText::_( 'Genre' ); ?>:
						</label>
					</td>
					<td>
					<?= @helper('library.book.genres', @$book->library_genre_id) ?>
					
					</td>
					</tr>
							
			</table>
			<input type="hidden" name="id" value="<?=@$book->id?>" />
			<input type="hidden" name="task" value="" />
	</fieldset>
</form>