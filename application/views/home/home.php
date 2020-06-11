
<?php 
 if(!isset($_SESSION['user_pn']))
    {
        redirect('home/index');
    }

$this->load->view('includes/header.php');
?>


<!-- Side Bar -->
<div class="col-sm-3 side_bar">
 
  	<button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<h4>Post a Project</h4><p>Task, Project, Logo, Web Application, IOS App, Android, Graphic Design,Databases ... Simply fill three Parts and post the project soon freelancers will msg you</p>">tips to post the project</button>
 
  	<form action="<?php echo base_url();?>home/insert_post" method="post">
	  	<table>
	  		<tr>
	  			<td>
	  				<input type="text" placeholder="Project Subject" name="post_title">
	  			</td>
	  		</tr>
	  		
	  		<tr>
	  			<td>
	  				<textarea placeholder="Project Description" name="post_description"></textarea>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<input type="text" name="project_bid" placeholder="project bid">
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<input type="submit" id="sign_up" class="btn " data-toggle="tooltip" data-placement="bottom" data-html=" true" name="submit" title="<h4>Post the project</h4>"  value="Post the Project">
	  			</td>
	  		</tr>
	  	</table>
  	</form>
</div>

<!-- Post Code -->
<?php foreach($posts as $post){ ?>
  <div class="col-sm-8 col-1">
	  	<div class=" mb-40">
	        <div class="blog-content">
	            <h2 class="blog-title">
	            	<a class="logo" id="logo" href="<?php echo base_url() . 'home/profile' ?>"><img id="img_profile" src="<?php echo base_url() . "uploads/users/" . $post['user_image'] ?>" width="150"></a>
	                <a href="blog-details.html" id="post_title"><?php echo $post['post_title'] ?></a>
	            </h2>
	            <p><?php echo $post['post_description']; ?></p>
	        </div>

	        <div class="meta-info">
	            <ul>
	                <li class="posts-time ml-40"><?php echo $post['post_date']; ?></li>
	                <li id="bid">project bid: <?php echo $post['project_bid']; ?></li>
	            </ul>
	        </div>

	    </div>
	    <br>
	    <br>
  </div>
  	<?php } ?>


  

<div style="margin-top:500px;"></div>
<?php 
 $this->load->view('includes/footer.php');
?> 