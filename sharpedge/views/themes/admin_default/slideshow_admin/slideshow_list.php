<script type="text/javascript">
$('#tab2').live('click', function()
{
	$('#tabs-2').html('<div class="admin_ajax"><img src="/assets/images/system_images/loading/loaderB64.gif" alt="" /><br />Loading...</div>');
	$.ajax(
	{
		url: "<?php echo site_url();?>/slideshow_admin/new_image",
		type: "GET",
		success: function(msg)
		{
			$('#tabs-2').html(msg);
		}
	})
});

$('#tab3').live('click', function()
{
	$('#tabs-3').html('<div class="admin_ajax"><img src="/assets/images/system_images/loading/loaderB64.gif" alt="" /><br />Loading...</div>');
	$.ajax(
	{
		url: "<?php echo site_url();?>/slideshow_admin/manage_groups",
		type: "GET",
		success: function(msg)
		{
			$('#tabs-3').html(msg);
		}
	})
});

$('#tab4').live('click', function()
{
	$('#tabs-4').html('<div class="admin_ajax"><img src="/assets/images/system_images/loading/loaderB64.gif" alt="" /><br />Loading...</div>');
	$.ajax(
	{
		url: "<?php echo site_url();?>/slideshow_admin/new_group",
		type: "GET",
		success: function(msg)
		{
			$('#tabs-4').html(msg);
		}
	})
});
</script>

	<ul class="nav nav-tabs remove_underline" id="tabs">
		<li class="active"><a href="#tabs-1" data-toggle="tab"><?php echo $this->lang->line('manage_slide_images');?></a></li>
		<li><a id="tab2" href="#tabs-2" data-toggle="tab"><?php echo $this->lang->line('add_slide_image');?></a></li>
		<li><a id="tab3" href="#tabs-3" data-toggle="tab"><?php echo $this->lang->line('manage_slide_groups');?></a></li>
		<li><a id="tab4" href="#tabs-4" data-toggle="tab"><?php echo $this->lang->line('add_slide_group');?></a></li>
	</ul>
	
	<div class="tab-content">		
		<div class="tab-pane active" id="tabs-1">
			<table class="table table-striped text-size">
			<thead>
			<tr>
			<th><?php echo $this->lang->line('label_filename');?></th>
			<th><?php echo $this->lang->line('label_sort');?></th>
			<th><?php echo $this->lang->line('label_controls');?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($query->result() as $id):?>
			<tr>
			<td><?php echo $id->userfile?></td>
			<td><?php echo $id->sort_id?></td>
			<td>
			<a class="btn" href="<?php echo site_url();?>/slideshow_admin/edit_image/<?php echo $id->id?>"><i class="icon-pencil"></i> <?php echo $this->lang->line('label_edit');?></a>
			<a class="btn btn-danger" href="<?php echo site_url();?>/slideshow_admin/delete_image/<?php echo $id->id?>" onClick="return confirm('Are you sure you want to Delete this item? You cannot restore it once it is deleted......')"><i class="icon-trash icon-white"></i> <?php echo $this->lang->line('label_delete');?></a>
			</td>
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
		</div>
		
		<div class="tab-pane" id="tabs-2">
		<?//php echo modules::run('slideshow_admin/new_image');?>
		</div>

		<div class="tab-pane" id="tabs-3">
		<?//php echo modules::run('slideshow_admin/manage_groups');?>
		</div>

		<div class="tab-pane" id="tabs-4">
		<?//php echo modules::run('slideshow_admin/new_group');?>
		</div>
	</div>