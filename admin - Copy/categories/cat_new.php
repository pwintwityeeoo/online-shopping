<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <link rel="stylesheet" href="../css/all.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-scroller">
    <!--header-->
    <?php include("../config/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!--sidebar-->
      <?php include("../config/sidebar.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">New Category</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="cat_add.php" method="post">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Category Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="types">Types</label>
                      <div class="col-sm-9">
                            <select class="form-control">
                              <option>women</option>
                              <option>men</option>
                              <option>kid</option>
                              <option>accessory</option>
                            </select>
                          </div>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Add</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- content-wrapper ends -->
    <!--footer-->
    <?php include("..config/footer.php");?>
      </div>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<script src="../js/all.js"></script>
<script src="../vendors/base/vendor.bundle.base.js"></script>
</body>

</html>