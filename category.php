<?php 
   include 'header.php';   
   if($_SESSION['email']==true){
   		$page = 'category';
   }else{
   		header('location:admin_login.php');
   }
?>
<?php include 'include/header.php'; ?>
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
</main>
<?php include 'include/footer.php'; ?>
