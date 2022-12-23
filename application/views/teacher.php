<?
include 'include/header.php';
?>

<div class="panel panel-primary col-md-8" style="margin-left:50px">
	<div class="panel-heading">
		<span>Add Teacher</span>
	</div>
	<div class="panel-body">
		<div class="row">  
			<form action="<?=base_url()?>Welcome/teacher" method="post">
				<div class="form-group">
					<label>Add Teacher</label>
					<input type="text" class="form-control" value="<?php set_value('t_name')?>" name="t_name" placeholder="Teacher Name">
				</div>
				<div class="form-group">
					<label>Enter Mail Id</label>
					<input type="email" class="form-control" value="<?php set_value('t_email')?>" name="t_email" placeholder="Email Id">
				</div>
				<div class="form-group">
					<label>Mobile No.</label>
					<input type="number" class="form-control" value="<?php set_value('t_mobile')?>" name="t_mobile" placeholder="Mobile no.">
				</div>
				<div class="form-group">
					<label>Qualification</label>
					<input type="text" class="form-control" vlaue="<?php set_value('qualification')?>" name="qualification" placeholder="Qualification">
				</div>
				<div>
					<center><button type="submit" class="btn btn-danger">Add</button></center>
				</div>
			</form>
		</div>
	</div>
</div>



<?
include 'include/footer.php';
?>