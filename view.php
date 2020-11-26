<?php 
    session_start();
    if($_SESSION['email']==true){
      $page = 'category';
      include 'include/header.php';
      include 'db/dbcon.php';
      $id = $_GET['id'];
    }else{
      header('location:admin_login.php');      
    }
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   <h3 align="center">Welcome to <span><?php echo $_SESSION['email']; ?>  </span></h3>
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Category</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
         </div>
         <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
         <span data-feather="calendar"></span>
         This week
         </button>
      </div>
   </div>
   <div class="container mb-3">   		   		
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope='col'>SL No</th>
		      <th scope='col'>Category Name</th>
		      <th scope='col'>Category Description</th>		      
		    </tr>
		  </thead>
		  <tbody>
		  	  <?php 		  	  	  
	  	  	  	 $sql    = "select * from tbl_category where category_id ='$id'";
	  	  	  	 $result = mysqli_query($con, $sql);	  	  	  	 	  	  	  
	  	  	  	 while($row=mysqli_fetch_array($result)){ ?>
	  	  	  	 <tr>
	  	  	  	 	<td><?php echo $row['category_id'];?></td>
	  	  	  	 	<td><?php echo $row['category_name'];?></td>
	  	  	  	 	<td><?php echo $row['category_description'];?></td>
	  	  	  	 </tr>
	  	  	  <?php	}
		  	   ?>		  	  
		  </tbody>
		</table>				
   </div>         
</main>
<?php include 'include/footer.php'; ?>
