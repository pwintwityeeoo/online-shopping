<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/all.css">
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
                  <h4 class="font-weight-bold mb-0">New SubCategory</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="subcat_add.php" method="post">
                    <div class="form-group row">
                      <label for="subcat-name" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="subcat-name" placeholder="SubCategory Name">
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <label for="cat-name" class="col-sm-3 col-form-label">Category Name</label>
                      <div class="col-sm-9">
                      <select class="form-control">
                              <option>clothes</option>
                              <option>shoes</option>
                              <option>bags</option>
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
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
        </div>
      </footer>
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