<?php
include 'inc/header.php';
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Portfolio</span>
    </nav>

    <div class="sl-pagebody">
        <!-- ####### Page Title Start ######  -->
        <div class="sl-page-title">
            <h5>Portfolio</h5>
        </div>
        <!-- ####### Page Title End ######  -->

        <!-- ####### Table Start ######  -->
        <div class="row row-sm mg-t-20">
            <!-- Left Column Start -->
            <div class="col-xl-6">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h6 class="card-body-title">Portfolio</h6>
                    <form action="portfolio-post.php" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <label class="col-sm-4 form-control-label">Large Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" class="form-control" name="large_image">
                            </div>
                        </div><!-- row -->

                        <div class="row">
                            <label class="col-sm-4 form-control-label">Small Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" class="form-control" name="small_image">
                            </div>
                        </div><!-- row -->

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" name="project_title">
                            </div>
                        </div>


                        <div class="form-layout-footer mg-t-30">
                            <button style="cursor: pointer;" type="submit" class="btn btn-info mg-r-5">Submit</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- card -->
            </div>
            <!-- Left Column End -->
        </div>
        <!-- ####### Table End ######  -->
    </div><!-- sl-pagebody -->
    <?php include 'inc/footer.php'; ?>