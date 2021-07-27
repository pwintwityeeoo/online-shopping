<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-scroller item">
    <!--header-->
    <?php include("config/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!--sidebar-->
      <?php include("config/sidebar_index.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">New Item</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="item_add.php" method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                      <label for="subcategory_id" class="col-sm-3 col-form-label">Subcategory</label>
                      <div class="col-md-9">
                        <select name="subcategory_id" class="form-control form-select" aria-label="Default select example">
                          <?php
                          include("config/db_connect.php");
                          //for types
                          $sql_type = "SELECT * FROM subcategories";
                          $statement = $conn->prepare($sql_type);
                          $statement->execute();
                          $subcategories = $statement->fetchAll();

                          foreach ($subcategories as $subcategory) { 
                            $subcategory_id = $subcategory['id'];
                            $subcategory_name = $subcategory['name']; 
                          ?>

                          <option value="<?php echo $subcategory_id; ?>">
                            <?php echo $subcategory_name; ?>
                          </option>
                          <?php } ?>

                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" placeholder="Item Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="codeno" class="col-sm-3 col-form-label">Code No</label>
                      <div class="col-sm-9">
                        <input type="text" name="codeno" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cover" class="col-sm-3 col-form-label">Cover</label>
                      <div class="col-md-9">
                        <input type="file" name="cover" id="cover" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="price" class="col-sm-3 col-form-label">Price</label>
                      <div class="col-md-9">
                        <input type="text" name="price" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="discount" class="col-sm-3 col-form-label">Discount</label>
                      <div class="col-md-9">
                        <input type="text" name="discount" class="form-control">
                      </div>
                    </div>
                    <div class="text-right">
                    <button type="submit" class="btn btn-primary mr-2">Add</button>
                    <button class="btn btn-light">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!--footer-->
        <?php include("config/footer.php");?>
      </div>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="js/all.js"></script>
</body>

</html>