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
					<th>Teacher Name</th>
					<th>Email</th>
					<th>Mobile No.</th>
					<th>Qualification</th>
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
					<td><?php echo $row->t_name ?></td>
					<td><?php echo $row->t_email ?></td>
					<td><?php echo $row->t_mobile ?></td>
					<td><?php echo $row->qualification ?></td>
					<!-- <td><a href="<?php echo site_url('Welcome/edit_student/').$row->id; ?>"><i class="fa fa-edit"></i></a></td>
					<td><a href="<?php echo site_url('Welcome/delete_teacher/').$row->id?>"><i class="fa fa-trash"></i></a></td> -->
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

<script type="text/javascript">
        delete_teacher();
      
        function delete_teacher(id)
        {
            $.ajax({
                type:'post',
                url:'<?=base_url.('Welcome/ajax')?>',
                data:{status:"delete_teacher",id:id},
                dataType:"json",
                success:function(res){
                    $("#Load_status").html(res.status);
                    $("#hide_"+id).hide(1000);
                    location.reload(true);
                }

            });	
        }


</script>
