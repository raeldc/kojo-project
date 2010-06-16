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
  alert( "<?php echo JText::_( 'Please give a name', true ); ?>" );
  }  else {
  submitform( pressbutton );
  }
  }
  -->
</script>

<form action="<?= @route('index.php?option=com_library&view=author&layout=form&id='.@$author->id) ?>" method="post" class="adminform" name="adminForm" >

	<fieldset>
		<legend><?= @text('Author'); ?></legend>
			<table class="admintable">
				<tr>
					<td width="100" align="right" class="key">
						<label for="title">
						<?php echo JText::_( 'Author' ); ?>:
						</label>
					</td>
					<td>
						<input type="text" name="name" id="name" size="48" maxlength="250" value="<?= @$author->name; ?>" />
					</td>
					</tr>
			</table>
			<input type="hidden" name="id" value="<?=@$author->id?>" />
			<input type="hidden" name="task" value="" />
	</fieldset>
</form>