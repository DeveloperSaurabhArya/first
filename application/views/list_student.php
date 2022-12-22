<?php
include 'include/header.php';
?>

<div class="panel panel-primary col-md-8" style="margin-left:50px;">
	<div class="panel-heading">
		<span>List Student</span>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id.</th>
					<th>Student Name</th>
					<th>Email</th>
					<th>Mobile No.</th>
					<th>Address</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i = 1;
				foreach ($fetch->result() as $row){
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $row->name ?></td>
					<td><?php echo $row->email ?></td>
					<td><?php echo $row->mobile ?></td>
					<td><?php echo $row->address ?></td>
					<td><a href="<?php echo site_url('Welcome/edit_student/').$row->id; ?>"><i class="fa fa-edit"></i></a></td>
					<td><a href="<?php echo site_url('Welcome/delete/').$row->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
			<?php
			}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php
include 'include/footer.php';
?>

<td><a href="javascript:Delete('.$row->id.',\'add_student\', \'add_student\')" class="btn btn-danger btn-xs btn-sm"><i class="fa fa-trash"></i></a></td>