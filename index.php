<?php include 'connection.php'?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
        	<!--Nav bare-->
            <?php include 'include-home-pages/nav.php';?> 
            <!--Slide  Show  -->
            <?php include 'include-home-pages/slideshow.php';?>
 			<b><h3>Welcome CUS Project</h3></b>
            
            <!--Body Content-->
			<?php include 'include-home-pages/content.php'?>
            <!--Feature-->
            <?php include 'include-home-pages/feature.php'?>
           <!-- Footer-->
            <?php include 'include-home-pages/footer.php'?>
            
</div>          

</body>
<script src="assets/bootstrap/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
</html>