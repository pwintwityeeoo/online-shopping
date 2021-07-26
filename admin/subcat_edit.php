<?php
include("config/db_connect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM subcategories WHERE id=:value1";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$id);
$statement->execute();
$subcategories = $statement->fetch(PDO::FETCH_ASSOC);
?>
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
  <style>
  option .type-span {
    display: none;
  }
  </style>
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
                  <h4 class="font-weight-bold mb-0">Subcategory New</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="subcat_update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $subcategories['id'] ?>">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">SubCategory Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $subcategories['name']?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="category_id" class="col-sm-3 col-form-label">Choose Category</label>
                      <div class="col-sm-9">
                        <select name="category_id" class="form-control">
                          <?php
                          include("config/db_connect.php");
                          $sql = "SELECT * FROM categories";
                          $statement = $conn->prepare($sql);
                          $statement->execute();
                          $categories = $statement->fetchAll();

                          foreach ($categories as $category) { 
                            $category_id = $category['id'];
                            $category_name = $category['name']; 
                          ?>
                          <option value="<?php echo $category_id; ?>" <?php if($category_id == $subcategories['category_id']){ echo "selected";}?>>
                          <?php echo $category_name; ?>
                          </option>
                          <?php } ?>

                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="type_id" class="col-sm-3 col-form-label">Choose Type</label>
                      <div class="col-sm-9">
                        <select name="type_id" class="form-control">
                          <?php
                          include("config/db_connect.php");
                          //for types
                          $sql_type = "SELECT * FROM types";
                          $statement = $conn->prepare($sql_type);
                          $statement->execute();
                          $types = $statement->fetchAll();

                          foreach ($types as $type) { 
                            $type_id = $type['id'];
                            $type_name = $type['name']; 
                          ?>

                          <option value="<?= $type_id ?>" <?php if($type_id == $subcategories['type_id']){ echo "selected";}?>>
                            <?php echo $type_name; ?>
                          </option>
                          <?php } ?>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row align-items-center">
                        <label for="cover" class="col-sm-3 col-form-label">Cover</label>
                        <div class="col-sm-9">
                          <img src="covers/<?php echo $subcategories['cover'] ?>" alt="" height="150">
                          <input type="file" name="cover" id="cover" class="d-block mt-3">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">UPDATE</button>
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
  <!--<script src="vendors/base/vendor.bundle.base.js"></script>-->

</body>

</html>