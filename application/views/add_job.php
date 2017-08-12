<?php echo validation_errors('<div class="alert alert-danger"></div>')?>
<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">Add Job </div>
		<div class="panel-body">
		<form action="add" method="post" class="form-group">
            <label for="name">Company Name:</label>
            <input type="text" name="name" class="form-control"/>
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title"/>
            <label for="description">Description</label>
            <textarea class="form-control" name="description"></textarea>
            <label for="requirement">Requirement</label>
            <textarea class="form-control" name="requirement" ></textarea>
            <label for="category">Category</label>
           	<select id="state-select" class="form-control" name="category">
			<option>Select Category</option>
			<option value="Banking And Finance">Banking And Finance</option>
			<option value="Telecommunication">Telecommunication</option>
			<option value="Media">Media</option>
			<option value="	Techlonogy">Techlonogy</option>
			<option value="Food and Restaurant">Food and Restaurant</option>
			<option value="Retail And Sale">Retail And Sale</option>
			<option value="Healthcare">Healthcare</option>
		</select>
           
            <label for="City">City</label>
             <input type="text" class="form-control" name="city"/>
            <p></p>
            <button name="submit"  type="submit" class="btn btn-primary">Add Job</button>
        </form>
	
	</div>
	
		
</div>

	</div>