<div class="col-md-8">
<h2></h2>
<div class="panel panel-default">
		<div class="panel-heading"><?php echo $title; ?> 
        <p><?php echo validation_errors('<div class="alert alert-danger"></div>')?></p>
        </div>
		<div class="panel-body">
        <?php if($edit_job): ?>
    	<form method="post" action="<?php echo base_url(); ?>admin/edit/<?php echo $edit_job->id; ?>" class="form-group">
			<label for="name">Company Name:</label>
            <input type="text" name="name" value="<?php echo $edit_job->company_name; ?>" class="form-control"/>
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="<?php echo $edit_job->title; ?>"/>
            <label for="description">Description</label>
            <textarea class="form-control" name="description"> <?php echo $edit_job->description; ?> </textarea>
            <label for="requirement">Requirement</label>
            <textarea class="form-control" name="requirement"><?php echo $edit_job->Requirement; ?></textarea>
            <input type="hidden" name=""  />
            <label for="category">Category</label>
           	<select id="state-select" class="form-control" name="category_id">
			<option value="<?php echo $edit_job->category_id; ?>" > <?php echo $edit_job->category_name;?></option>
            <?php foreach($categories as $section):?>
			<option value="<?php echo $section['category_id']; ?>" ><?php echo $section['category_name']; ?></option>
            <?php endforeach; ?>
		</select>
        <label>Mode Of Employment</label>
          <select class="form-control" name="type_id">
          <option value="<?php echo $edit_job->type_id; ?>"><?php echo $edit_job->name?></option> 
		  <?php foreach($types as $mode): ?>
          <option value=<?php echo $mode['type_id']; ?> ><?php echo $mode['name']; ?></option>
          <?php endforeach; ?>
          </select> 
            <label for="City">City</label>
             <input type="text" class="form-control" name="city" value="<?php echo $edit_job->city; ?>"/>
              <label for="City">Contact Email</label>
             <input type="email" class="form-control" name="email" value="<?php echo $edit_job->contact_email; ?>" />
            <p></p>
            <button name="edit"  type="submit" class="btn btn-primary">Add Job</button>
        </form>
        <?php endif; ?>
      
	
	</div>
	
		
</div>
            </div>
      </div>
        
    
        
        

    </div><!-- /.container -->
      
      
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>