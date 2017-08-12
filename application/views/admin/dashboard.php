<div class="col-md-8">
<?php
	if($this->session->flashdata('Success')): ?>
		<?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>
<?php endif; ?>

	
                <section>
                <h2>Recent Activity</h2>
                 <table class="table">
                 
                  <tr>
                     <th>User Name</th>
                    <th>Job Title</th>
                    <th>Category</th>
                    <th>Date</th>
                      <th>Permission Actions</th>
                 </tr>
                     <tr>
                     <?php foreach($jobs as $job) :?>
		<td><?php echo $job['first_name']; ?></td>
		<td><?php echo $job['title']; ?></td>
        <td><?php echo $job['category_name']; ?></td>
		<td><?php echo $job['created']; ?></td>
        <td><button class="btn btn-success"><a href="<?php echo base_url(); ?>admin/edit/<?php echo $job['id']; ?> ">Edit</a></button> <a  href="<?php echo base_url();?>admin/delete/<?php echo $job['id']?>"class="btn btn-danger">Delete</a></td>
		</tr>
        <?php endforeach; ?>
                </table>
                
                </section>
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
