	<div class="col-md-12">
		<div class="panel panel-default">
        <?php if($details):?>
		<div class="panel-heading">Job Details </div>
		<div class="panel-body">
		<div class="col-md-12">
			<div class="row">
			<div class="col-md-4">
				<div class="media">
				<div class="media-left media-middle">
					<a href="#">
						<img class="media-object reduce" src="<?php echo base_url(); ?>assets/images/game2.jpg" alt="...">
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
            <p><label>Name:</label><?php echo $details->company_name; ?></p>
            <p><label>Position:</label><?php echo $details->title; ?></p>
            <p><label>Duration:</label>Four Month</p>
            <p><label>Category:</label><?php echo $details->category_name; ?></p>
            <p>
                <label>Type:</label><?php echo $details->category_name;?>
            </p>
            <p>
             <a href="<?php echo base_url(); ?>jobs/booking_job/<?php echo $details->id; ?>"><button class="btn btn-success">Apply Now</button></a>
            
            </p>
			</div>
            <div class="col-md-4">
                <p><label>Requirement:</label>
                	<?php echo $details->Requirement; ?>
                </p> 
                <p>
                <label>Description:</label>
                <?php echo $details->description; ?>
                </p>
            </div>   
		</div>	
	</div>
	<?php endif; ?>
	</div>
</div>

	</div>