
<div class="col-md-12">
    	<div class="panel panel-default">
		<div class="panel-heading">Apply  For this Job</div>
		<div class="panel-body">
			<div class="row">
            
			<div class="col-md-6">
				<div class="media">
				<div class="media-left media-middle">
					<a href="#">
						<img class="media-object reduce" src="<?php echo base_url(); ?>/assets/images/game2.jpg" alt="...">
					</a>
				</div>
			</div>
                 <p><label>Name:</label>Company Nmae</p>
            <p><label>Position:</label>Web Developer</p>
            <p><label>Category:</label>Digital Media</p>
            <h5><a href="jobs/details/">View Full Details</a></h5>
				<button class="btn btn-primary">Full Time</button>
		
		</div>
                <div class="col-md-6">
                <?php echo validation_errors('<div class="alert alert-danger"></div>')?>
                <?php if($data_book): ?>
             <form action="<?php echo base_url(); ?>jobs/booking_job/<?php echo $data_book->id; ?>" method="post" class="form-group">
             
             <input type="hidden" name="job_id" value="<?php echo $data_book->id; ?>" class="form-control"/>
            <label for="name">Surname</label>
            <input type="text" name="surname" class="form-control"/>
            <label for="title">First Name</label>
            <input type="text" class="form-control" name="firstname"/>
            <label for="title">Primary Email Address</label>
            <input type="text" class="form-control" name="P_email"/>
            
            <label for="category">Last Qualification</label>
           	<select id="state-select" class="form-control" name="qualification">
			<option>Kind of Qualification</option>
			<option value="OND">Ordinary National Diploma</option>
			<option value="ND">National Diploma</option>
			<option value="B.SCI">Bacholor Of Science</option>
			<option value="	B.ENG">Bacholor Of Engineering</option>
			<option value="B.TECH">Bacholor of Technology</option>
			<option value="B.ART">Bacholor of Art</option>
			<option value="B.EDU">Bacholor of Education</option>
		</select>
        
         <label for="category">Year Obtained</label>
           	<select id="state-select" class="form-control" name="Year_Q">
			<option>Year Obtained</option>
			<option value="Year">2010</option>
            <option value="Year">2011</option>
            <option value="Year">2012</option>
            <option value="Year">2013</option>
            <option value="Year">2014</option>
			<option value="Year">2015</option>
            <option value="Year">2016</option>
            <option value="Year">2017</option>
            <option value="Year">2018</option>
            <option value="Year">2019</option>
		</select>
        <label>Work Experince</label><br>
        <label>Company Name</label>
        <input type="text" name="company_name" class="form-control"/>
          <label for="category">Year</label>
           	<select id="state-select" class="form-control" name="year_e">
			<option>Select Year</option>
			<option value="Year">10</option>
            <option value="Year">9</option>
            <option value="Year">8</option>
            <option value="Year">7</option>
            <option value="Year">6</option>
			<option value="Year">5</option>
            <option value="Year">4</option>
            <option value="Year">3</option>
            <option value="Year">2</option>
            <option value="Year">1</option>
		</select>  
            <label for="City">Current Location</label>
             <input type="text" class="form-control" name="city"/>
             <label>Uplad Your CV</label>
             <input type="file" name="CV" class="form-control" />
            <p></p>
            <button name="booking"  type="submit" class="btn btn-success">Apply Now</button>
        </form>
        <?php endif; ?>
                </div>
    </div>               
			
		</div>	

    </div>
    
        
        </div>
       