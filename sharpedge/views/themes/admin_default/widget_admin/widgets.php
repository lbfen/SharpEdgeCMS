<script type="text/javascript">
$('#tab2').live('click', function()
{
	$('#tabs-2').html('<div class="admin_ajax"><img src="/assets/images/system_images/loading/loaderB64.gif" alt="" /><br />Loading...</div>');
	$.ajax(
	{
		url: "<?php echo site_url();?>/widget_admin/addwidget",
		type: "GET",
		success: function(msg)
		{
			if (CKEDITOR.instances['bbcode']) {
				delete CKEDITOR.instances['bbcode'];
			}
			$('#tabs-2').html(msg);
		}
	})
});

$('#tab3').live('click', function()
{
	$('#tabs-3').html('<div class="admin_ajax"><img src="/assets/images/system_images/loading/loaderB64.gif" alt="" /><br />Loading...</div>');
	$.ajax(
	{
		url: "<?php echo site_url();?>/widget_admin/manage_groups",
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
		url: "<?php echo site_url();?>/widget_admin/new_widget_group",
		type: "GET",
		success: function(msg)
		{
			$('#tabs-4').html(msg);
		}
	})
});

$('#tab5').live('click', function()
{
	$('#tabs-5').html('<div class="admin_ajax"><img src="/assets/images/system_images/loading/loaderB64.gif" alt="" /><br />Loading...</div>');
	$.ajax(
	{
		url: "<?php echo site_url();?>/widget_admin/add_to_group",
		type: "GET",
		success: function(msg)
		{
			$('#tabs-5').html(msg);
		}
	})
});
</script>
	<ul class="nav nav-tabs remove_underline" id="tabs">
		<li class="active"><a href="#tabs-1" data-toggle="tab"><?php echo $this->lang->line('manage_widgets');?></a></li>
		<li><a id="tab2" href="#tabs-2" data-toggle="tab"><?php echo $this->lang->line('new_widget');?></a></li>
		<li><a id="tab3" href="#tabs-3" data-toggle="tab"><?php echo $this->lang->line('manage_mod_groups');?></a></li>
		<li><a id="tab4" href="#tabs-4" data-toggle="tab"><?php echo $this->lang->line('new_mod_group');?></a></li>
		<li><a id="tab5" href="#tabs-5" data-toggle="tab"><?php echo $this->lang->line('new_mod_group_item');?></a></li>
	</ul>
	
	<div class="tab-content">
		<div class="tab-pane active" id="tabs-1">
			<table class="table table-striped text-size">
			<thead>
			<tr>
			<th>ID</th>
			<th><?php echo $this->lang->line('label_name');?></th>
			<th><?php echo $this->lang->line('label_lang');?></th>
			<th><?php echo $this->lang->line('label_controls');?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($query->result() as $row): ?>
			<tr>
			<td><?php echo $row->id?></td>
			<td><?php echo $row->name?></td>
			<td><?php echo $row->lang?></td>
			<td>
			<a class="btn" href="<?php echo site_url();?>/widget_admin/editwidget/<?php echo $row->id?>"><i class="icon-pencil"></i> <?php echo $this->lang->line('label_edit');?></a>
			<a class="btn btn-danger" href="<?php echo site_url();?>/widget_admin/deletewidget/<?php echo $row->id?>" onClick="return confirm('Are you sure you want to Delete this item?')"><i class="icon-trash icon-white"></i> <?php echo $this->lang->line('label_delete');?></a>
			</td>
			</tr>
			<?php endforeach;?>
			</tbody>
			</table>
		</div>
		
		<div class="tab-pane" id="tabs-2">
		</div>

		<div class="tab-pane" id="tabs-3">
		</div>

		<div class="tab-pane" id="tabs-4">
		</div>

		<div class="tab-pane" id="tabs-5">
		</div>
	</div>