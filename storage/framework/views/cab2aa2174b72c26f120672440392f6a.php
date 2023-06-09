<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Panel - Real Estate </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo e(asset('../assets/vendors/core/core.css')); ?>">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo e(asset('../assets/vendors/flatpickr/flatpickr.min.css')); ?>">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo e(asset('../assets/fonts/feather-font/css/iconfont.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo e(asset('../assets/css/demo2/style.css')); ?>">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?php echo e(asset('../assets/images/favicon.png')); ?>" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<?php echo $__env->make('admin.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<?php echo $__env->make('admin.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- partial -->

		 	<?php echo $__env->yieldContent('admin'); ?>

			<!-- partial:partials/_footer.html -->
			<?php echo $__env->make('admin.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="<?php echo e(asset('../assets/vendors/core/core.js')); ?>"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="<?php echo e(asset('')); ?>"></script>
  <script src="<?php echo e(asset('../assets/vendors/apexcharts/apexcharts.min.js')); ?>"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="<?php echo e(asset('../assets/vendors/feather-icons/feather.min.js')); ?>"></script>
	<script src="<?php echo e(asset('../assets/js/template.js')); ?>"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="<?php echo e(asset('../assets/js/dashboard-dark.js')); ?>"></script>
	<!-- End custom js for this page -->

</body>
</html>    <?php /**PATH C:\xampp2\htdocs\laravel\project6\realestate\resources\views/admin/admin_dashboard.blade.php ENDPATH**/ ?>