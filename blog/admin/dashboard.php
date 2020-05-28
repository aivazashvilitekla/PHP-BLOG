<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin Section - Dashboard</title>
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!-- ADMIN PAGE WRAPPER -->
    <div class="admin-wrapper">
        <!-- LEFT SIDEBAR -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        
        <!-- //LEFT SIDEBAR -->

        <!-- ADMIN CONTENT -->
        <div class="admin-content">
            
            <div class="content">
                <h2 class="page-title">Dashboard</h2>
                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                
            </div>
        </div>
        <!-- //ADMIN CONTENT -->
    </div>
    
    
    <!-- //FOOTER -->
    <!--JQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- CKEDITOR -->
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../assets/js/scripts.js"></script>
</body>
</html>