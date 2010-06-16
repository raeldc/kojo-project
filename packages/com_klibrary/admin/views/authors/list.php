<?php defined('SYSPATH') or die('404 Not Found.');?>

<?php
	$form_url = Route::get('default')->uri(array(
		'action' => 'authors'
	));
?>

<form action="<?php echo HTML::uri($form_url);?>" method="post" name="adminForm">

	<table class="adminlist" style="clear: both;">
		<thead>
			<tr>
				<th width="5">
					<?php echo "#"; ?>
				</th>
				<th width="20">
					<input type="checkbox" name="toggle" value="" onclick="checkAll(<?echo $authors->count(); ?>);" />
				</th>
				<th>
					<?php 
					// First parameter should be the current ordering
					echo HTML::ordering($ordering, 'name', JText::_('Name'), 'default', array('action' => 'authors'));
					?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; $m = 0; ?>
			<?php foreach ($authors as $author) : ?>
			<tr class="<?php echo 'row'.$m; ?>">
				<td align="center">
					<?php echo $i + 1; ?>
				</td>
				<td align="center">
					<?php echo JHtml::_('grid.id', $i, $author->id); ?>
				</td>
				<td>
					<?php $url = Route::get('default')->uri(array(
						'action' => 'author',
						'task' => 'edit',
						'id' => $author->id,
					)); ?>
					<?php echo HTML::anchor($url, $author->name); ?>
				</td>	
			</tr>
			<?php $i = $i + 1; $m = (1 - $m); ?>
			<?php endforeach; ?>

			<?php if ( ! $authors->count()) : ?>
			<tr>
				<td colspan="8" align="center">
					<?php echo JText::_('No items found'); ?>
				</td>
			</tr>
			<?php endif; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="20">
					<?php //echo @$pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
	</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="action" value="author" />
	<input type="hidden" name="boxchecked" value="0" />
</form>