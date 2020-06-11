<?php 
 if(!isset($_SESSION['user_pn']))
    {
        redirect('home/index');
    }
$this->load->view('includes/header.php');

?>

<style type="text/css">
    .profile{
        /*border: 1px solid black;*/
        float: left;
        margin-top: 20px;
        border: 1px solid #FFD34E;
    }
    tr td img{
        width: 150px;
        /*padding: 5px 5px;*/
        margin: 5px;
        border-radius: 3px;
    }
    tr td{
        padding: 10px;
        margin: 10px;
    }
    #posts{ 
        float: right;
        margin-right: 20px;
        margin-top: 20px;

    }
</style>
<?php 
	
 ?>
<div class="container">
    <div class="col-sm-4 profile">            
    <?php foreach($users as $key => $value){ ?>
        <table >
            
            <tr>
                <!-- <th>Profile</th> -->
                <td><img src="<?php echo base_url() . "uploads/users/".$value->user_image;?>"/></td>
            </tr>
            <tr>
                <th>User Name</th>
                <td><?php echo $value->user_name; ?></td>
            </tr>
             <tr>
                <th>User Email</th>
                <td><?php echo $value->user_email; ?></td>
            </tr>
             <tr>
                <th>User Private Number</th>
                <td><?php echo $value->user_pn; ?></td>
            </tr>
             <tr>
                <th>User Join Date</th>
                <td><?php echo $value->user_join_date; ?></td>
            </tr>
             <tr>
                <th>User Kind</th>
                <td><?php echo ($value->user_kind == 1) ? "Freelancer" : "Offer a job"; ?></td>
            </tr>

        </table>
    </div>
      <?php } ?>
  
         <!-- <?php //foreach($posts //as $post){ ?> -->
   <!--  <div class="col-sm-6" id="posts" >
        <div class=" mb-40">
            <div class="blog-content">
                <h2 class="blog-title">
                    <a class="logo" id="logo" href="<?php //echo base_url() . //'home/profile' ?>"><img src="<?php //echo base_url() . "uploads/users/" . $user['user_image'] ?>" width="150"></a>
                    <a href="blog-details.html" id="post_title"><?php //echo $user['post_title'] ?></a>
                </h2>
                <p><?php// echo $user['post_description']; ?></p>
            </div>

            <div class="meta-info">
                <ul>
                    <li class="posts-time ml-40"><?php //echo $user['post_date']; ?></li>
                </ul>
            </div>

        </div>
        <br>
        <br>
   </div> -->
<!-- <?//php } ?> -->

   
  
</div>
<br>
<br>
<br>
<br>