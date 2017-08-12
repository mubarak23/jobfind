<?php echo validation_errors('<div class="alert alert-danger"></div>')?>

<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">Create An Account.</div>
		<div class="panel-body">
		  <form class="form-group" method="post" action="register">
            <p>
                <label for="first_name">First Name</label>
                <input class="form-control" name="first_name" type="text" />
            </p>
            <p>
            <label for="last_name">Last Name</label> 
            <input type="text" name="last_name" class="form-control" />    
            </p>  
            <p>
             <label for="email">Email</label>
             <input type="email" name="email" class="form-control" />    
            </p>
            <p>
             <label for="email">Username</label>
             <input type="text" name="username" class="form-control" ,/>    
            </p>  
            <p>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control"/>    
            </p>  
            <p>
                <label>Confirm Password</label>
                <input type="password" name="password2" class="form-control"/>
            </p>
            <p>
             <label>Select Account Type</label>
             <select class="form-control" name="type">
             <option>Slect Account Type</option>
                <option value="employer">Employer</option>
                 <option value="employee">Employee</option>
            </select>    
            </p>  
              <p>
                <input type="submit" name="register" value="Register" class="form_control"/>
              </p>
         </form>
        </div>

	</div>


<!-- end of listing -->
  

    </div>