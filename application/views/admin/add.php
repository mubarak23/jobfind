
<div class="col-md-8">
<h2><?php echo $title; ?></h2>
<div class="panel panel-default">
		<div class="panel-heading">Add Job 
        <p><?php echo validation_errors('<div class="alert alert-danger"></div>')?></p>
        </div>
		<div class="panel-body">
    	<form action="add" method="post" class="form-group">
			<label for="name">Company Name:</label>
            <input type="text" name="name" class="form-control"/>
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title"/>
            <label for="description">Description</label>
            <textarea class="form-control" name="description"></textarea>
            <label for="requirement">Requirement</label>
            <textarea class="form-control" name="requirement" ></textarea>
            <input type="hidden" name=""  />
            <label for="category">Category</label>
           	<select id="state-select" class="form-control" name="category">
			<option>Select Category</option>
            <?php foreach($categories as $section):?>
			<option value="<?php echo $section['category_id']; ?>" ><?php echo $section['category_name']; ?></option>
            <?php endforeach; ?>
		</select>
        <label>Mode Of Employment</label>
          <select class="form-control" name="type">
          <option>Mode Of Employment</option> 
		  <?php foreach($types as $mode): ?>
          <option value=<?php echo $mode['type_id']; ?> ><?php echo $mode['name']; ?></option>
          <?php endforeach; ?>
          </select> 
            <label for="City">City</label>
             <input type="text" class="form-control" name="city"/>
              <label for="City">Contact Email</label>
             <input type="email" class="form-control" name="email"/>
            <p></p>
            <button name="add_job"  type="submit" class="btn btn-primary">Add Job</button>
        </form>
      
	
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