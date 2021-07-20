<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1">
  <title>7DAYS Online Shopping Admin</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!--header-->
    <?php include("config/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <!--sidebar_index-->
    <?php include("config/sidebar_index.php");?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Type New</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="cat_add.php" method="POST">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">Category Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Category Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="type_id" class="col-sm-3 col-form-label">Choose Type</label>
                      <div class="col-sm-9">
                        <select name="type_id" class="form-control">
                          <?php
                          include("config/db_connect.php");
                          $sql = "SELECT * FROM types";
                          $statement = $conn->prepare($sql);
                          $statement->execute();
                          $types = $statement->fetchAll();

                          $i = 1;
                          foreach ($types as $type) {
                            $type_id = $type['id'];
                            $type_name = $type['name'];  
                          ?>
                          <option value="<?php echo $type_id; ?>">
                          <?php echo $type_name; ?>
                          </option>
                          <?php } ?>
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
    <?php include("config/footer.php");?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- plugins:js -->
  <script src="js/all.js"></script>
  <script src="vendors/base/vendor.bundle.base.js"></script>

</body>

</html>