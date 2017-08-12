<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">Latest Job Openning</div>
		<div class="panel-body">
<?php foreach($jobs as $job):?>
        	<div class="col-md-6">
			<div class="row">
			<div class="col-md-6">
				<div class="media">
				<div class="media-left media-middle">
					<a href="#">
						<img class="media-object reduce" src="<?php echo base_url(); ?>/assets/images/game2.jpg" alt="...">
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
            <p><label>Name:</label><?php echo $job['company_name']; ?></p>
            <p><label>Position:</label><?php echo $job['title']; ?></p>
            <p><label>Category:</label><?php echo $job['category_name']; ?></p>
            <h5><a href="jobs/details/<?php echo $job['id']; ?>">View Full Details</a></h5>
				<button class="btn btn-primary"><?php echo $job['name']; ?></button>
		
			</div>	
		</div>	
	</div>
<?php endforeach; ?>    
        
        </div>
        </div>
        </div>
        

</div>


