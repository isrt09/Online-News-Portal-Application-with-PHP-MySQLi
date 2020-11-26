<?php 
    session_start();
    if($_SESSION['email']==true){
      $page = 'category';
      include 'include/header.php';
      include 'db/dbcon.php';
      $id = $_GET['id'];
      if(isset($_POST['update'])){
          $category_name = $_POST['category_name'];
          $category_desc = $_POST['category_description'];
          $sql           = "insert into tbl_category(category_name,category_description) values('$category_name','$category_desc')";
          $query         = mysqli_query($con, $sql);
          if($query){
             echo "<script>alert('Updated Saved Successfully!!!')</script>";
          }else{
             echo "<script>alert('Updated Failed to Save')</script>";
          }
       }
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
		<h3>Add Category</h3>    
		<form action="" name='category_form' onsubmit="return validateForm()"  method="post">
			<div class="form-group">
				<label for="name">Category Name : </label>
				<input type="text" class="form-control" name="category_name" id="name">
			</div>
			<div class="form-group">
				<label for="desc">Category Description : </label>
				<textarea name="category_description" id="desc" cols="30" rows="10" class="form-control"></textarea>
			</div>
		    <input type="submit" class="btn btn-success" value="Update Category" name="update">
	    </form>
      <script type="text/javascript">
          function validateForm(){
             var x = document.forms['category_form']['category_name'].value;             
             if(x == ""){
                 alert("Category Name must be required");
                 return false;
             }
             var y = document.forms['category_form']['category_description'].value;
             if(y == ""){
                 alert("Category Description must be required");
                 return false;
             }
          }
      </script>		
	</div>         
</main>
<?php include 'include/footer.php'; ?>
