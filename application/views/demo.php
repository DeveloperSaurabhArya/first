<?php
include 'include/header.php';
?>

 
    <style type="text/css">
        	.myform
        	{
        
        		background-color: white;
        		margin-top:15px;
        		border-radius: 7px;
        		padding: 20px;
        	}
        	
        	.myinput
        	{
                outline: 0px;
                border:0;
        		border-bottom: 1px solid #afaaaa;
        	}
        	.mybutton
        	{

        		border-radius: 10px;
        		margin-top:20px;
        		padding-left: 90px;
        		padding-right: 90px;
        	}
           
    </style>


		<form action="<?=base_url()?>Welcome/demo" method="post" class="row">
    			<div class="col-lg-3"></div>
    			<div class="col-lg-6" style="margin: 10px"> 
                        <div class="myform" style="border-top:10px solid blue">
                            <h3 style="font-family:cursive;font-size: 20px;">Enter Details to check Genuity of the part..</h3>
                        </div>
    				  	<div class="myform">
    				  		<label>Name <font >*</font></label>
    				  		<input placeholder="Enter Your Name" name="name" class="form-control myinput" type="text">
    				  	</div> 
    				  	<div class="myform">
    				  		<label>Number <font >*</font></label>
    				  		<input placeholder="Enter Phone Number" name="phone" class="form-control myinput" type="number">
    				  	</div>  

    				  	<center><button class=" btn btn-primary mybutton"> Submit </button></center>
    			</div>

    					

    			<div class="col-lg-3"></div>
    	</form>


<?php
include 'include/footer.php';
?>