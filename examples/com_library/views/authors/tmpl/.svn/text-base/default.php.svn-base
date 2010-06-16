<? defined('_JEXEC') or die; ?>

<form action="<?= @route('index.php?option=com_library&view=authors')?>" method="post" name="adminForm">

	<table class="adminlist" style="clear: both;">
		<thead>
			<tr>
				<th width="5">
					<?= @text('NUM'); ?>
				</th>
				<th width="20">
					<input type="checkbox" name="toggle" value="" onclick="checkAll(<?= count(@$authors); ?>);" />
				</th>
				<th>
					<?= @helper('grid.sort', 'Name', 'tbl.name', @$filter['direction'], @$filter['order']); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<? $i = 0; $m = 0; ?>
			<? foreach (@$authors as $author) : ?>
			<tr class="<?php echo 'row'.$m; ?>">
				<td align="center">
					<?= $i + 1; ?>
				</td>
				<td align="center">
					<?= @helper('grid.id', $i, $author->id); ?>
				</td>
				<td>
					<a href="<?= JRoute::_('index.php?option=com_library&view=author&task=edit&id='.$author->id); ?>">
						<?= $author->name; ?>
					</a>
				</td>		
			</tr>
			<? $i = $i + 1; $m = (1 - $m); ?>
			<? endforeach; ?>

			<? if (!count(@$authors)) : ?>
			<tr>
				<td colspan="8" align="center">
					<?= @text('No items found'); ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="20">
					<?= @$pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
	</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?= @$filter['order']; ?>" />
	<input type="hidden" name="filter_direction" value="<?= @$filter['direction']; ?>" />
</form>