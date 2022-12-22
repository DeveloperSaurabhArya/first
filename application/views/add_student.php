<?
include 'include/header.php';
?>

<div class="panel panel-primary col-md-8" style="margin-left:50px">
	<div class="panel-heading">
		<span>Add Student</span>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="<?=base_url()?>Welcome/add_student" method="post">
				<div class="form-group">
					<label>Enter Your Name</label>
					<input type="text" class="form-control" value="<?=set_value('name');?>" name="name" placeholder="Student Name">
				</div>
				<div class="form-group">
					<label>Enter E-mail Id</label>
					<input type="email" class="form-control" value="<?=set_value('email');?>" name="email" placeholder="E-mail">
				</div>
				<div class="form-group">
					<label>Enter Mobile</label>
					<input type="number" class="form-control" value="<?=set_value('mobile');?>" name="mobile" placeholder="mobile no.">
				</div>
				<div class="form-group">
					<label>Enter Address</label>
					<input type="text" class="form-control" value="<?=set_value('address');?>" name="address" placeholder="Address">
				</div>
				<div>
					<center>
						<button type="submit" class="btn btn-success">Add</button>
					</center>
				</div>
			</form>
		</div>
	</div>
</div>



<?
include 'include/footer.php';
?>