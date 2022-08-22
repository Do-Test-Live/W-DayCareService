<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
    $page = "web-support";
    include("includes/head.php")
    ?>
    <?php
    if (isset($_POST['submit'])) {
        $sname = mysqli_real_escape_string($con, $_POST['s_name']);
        $sheading = mysqli_real_escape_string($con, $_POST['s_heading']);
        $sdes = mysqli_real_escape_string($con, $_POST['s_des']);

        $fileName = $_FILES['s_image']['tmp_name'];
        $resizeFileName = time();
        $uploadPath = "service/";
        $fileExt = pathinfo($_FILES['s_image']['name'], PATHINFO_EXTENSION);

        $url = $uploadPath . "thump_" . $resizeFileName . "." . $fileExt;
        if (move_uploaded_file($fileName, $url)) {
            $con->query("insert into services(`heading`,`description`,`image`)values('" . $sname . "','" . $sheading . "','" . $url . "')");
            echo '<script type="text/javascript">';
            echo "alert('Data inserted successfully');";
            echo '</script>';

        } else {
            echo '<script type="text/javascript">';
            echo "alert('Sorry Something went wrong');";
            echo '</script>';
        }
    }
    ?>

</head>
<body class="tm-container-1340px has-side-panel side-panel-right">
<!-- preloader -->
<?php
include("includes/preloader.php")
?>

<!--right side panel-->
<?php
include("includes/rightSidePanel.php")
?>


<div id="wrapper" class="clearfix">

    <!-- Header -->
    <?php
    include("includes/navbar.php")
    ?>

    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: inner-header Start -->
        <section class="page-title divider layer-overlay overlay-theme-colored1-8 section-typo-light bg-img-center"
                 data-tm-bg-img="images/bg/bg1.jpg">
            <div class="container pt-90 pb-90">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title text-white" style="text-transform: uppercase">Service Data Input form</h2>
                            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: inner-header End -->

        <div class="container mt-5">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Service Name</label>
                    <input type="text" name="s_name" class="form-control" id="exampleInputEmail1"
                           placeholder="Enter Service Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Service Heading</label>
                    <input type="text" name="s_heading" class="form-control"
                           placeholder="Enter Service Heading">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Service Description</label>
                    <input type="text" name="s_des" class="form-control"
                           placeholder="Enter Service Description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Service Image</label>
                    <input type="file" name="s_image" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>

    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <?php
    include("includes/footer.php")
    ?>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
</body>

</html>