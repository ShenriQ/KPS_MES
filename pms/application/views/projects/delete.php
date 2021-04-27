<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
tpl_assign("title_for_layout", 'Remove : <u>'.$project->getName().'</u>');?>

<form method="post" action="<?php echo get_page_base_url($project->getDeleteURL());?>" id="i_complete_project_form" class="form-horizontal">

<div class="form-group">

<h4>Are you sure you want to remove this project?</h4>
<!-- <p><?php echo lang('c_260'); ?></p> -->

</div>

<input type="hidden" name="submited" value="submited" />

<div class="form-group text-right">
	<button type="submit" class="btn btn-primary" data-loading-text="<?php echo lang('c_277'); ?>" id="i_complete_project_submit">Move to Trash</button>
	<a class="btn btn-default" data-dismiss="modal"><?php echo lang('c_37'); ?></a>
</div>

</form>
