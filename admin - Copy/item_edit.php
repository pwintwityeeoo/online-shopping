<?php
include("config/db_connect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM items WHERE id=:value1";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$id);
$statement->execute();
$items = $statement->fetch(PDO::FETCH_ASSOC);

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
                  <form class="forms-sample" action="item_update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $items['id']?>">
                    <div class="form-group row">
                      <label for="subcategory_id" class="col-sm-3 col-form-label">Subcategory</label>
                      <div class="col-md-9">
                        <select name="subcategory_id" id="subcategory_id" class="form-control form-select" aria-label="Default select example">
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

                          <option value="<?= $subcategory_id ?>" <?php if($subcategory_id == $items['subcategory_id']){ echo "selected";}?>>
                            <?php echo $subcategory_name; ?>
                          </option>
                          <?php } ?>

                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">Item Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $items['name']?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="codeno" class="col-sm-3 col-form-label">Code No</label>
                      <div class="col-sm-9">
                        <input type="text" name="codeno" id="codeno" class="form-control" value="<?php echo $items['codeno']?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row align-items-center">
                        <label for="cover" class="col-sm-3 col-form-label">Cover</label>
                        <div class="col-sm-9">
                          <img src="covers/<?php echo $items['cover'] ?>" alt="" height="150">
                          <input type="file" name="cover" id="cover" class="d-block mt-3">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="price" class="col-sm-3 col-form-label">Price</label>
                      <div class="col-md-9">
                        <input type="text" name="price" id="price" class="form-control" value="<?php echo $items['price']?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="discount" class="col-sm-3 col-form-label">Discount</label>
                      <div class="col-md-9">
                        <input type="text" name="discount" id="discount" class="form-control" value="<?php echo $items['discount']?>">
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
  <script src="vendors/base/vendor.bundle.base.js"></script>

</body>

</html>