<?php
include("config/db_connect.php");
//items=>id
$id = $_GET['id'];
$sql = "SELECT * FROM items WHERE id=:value1";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$id);
$statement->execute();
$item = $statement->fetch(PDO::FETCH_ASSOC);
$subcategory_id = $item['subcategory_id'];
$sql = "SELECT * FROM sizes WHERE sizes.subcategory_id=:value2";
$statement = $conn->prepare($sql);
$statement->bindParam(':value2',$subcategory_id);
$statement->execute();
$sizes = $statement->fetchAll();

$sql = "SELECT * FROM colors";
$statement = $pdo->prepare($sql);
$statement->execute();
$colors = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1">
  <title>7DAYS Online Shopping Admin</title>
  <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/all.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!--header-->
    <?php include("config/header.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!--sidebar_index-->
      <?php include("config/sidebar_index.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="width:83% !important">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                  <h4 class="font-weight-bold mb-0">Add Stock</h4>
                </div>
                <a href="item_list.php"><button type="button" class="btn btn-light"><i class="fas fa-long-arrow-alt-left"></i></button></a>
              </div>
            </div>
          </div>
          <form action="stock_add.php" method="post"  style="width:80% !important">
          <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Size</label>
              <div class="col-sm-10">
                <select name="name" id="name" class="form-control">
                  <?php
                    include("config/db_connect.php");
                    foreach ($sizes as $size) {
                      $size_id = $size['id'];
                      $size_name = $size['name'];  
                    ?>
                  <option value="<?php echo $size_id; ?>">
                    <?php echo $size_name; ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="qty" class="col-sm-2 col-form-label">Quanity</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="qty" name="qty">
              </div>
            </div>
            <div class="form-group row">
              <label for="pc" class="col-sm-2 col-form-label">PC</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="pc" id="pc">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-sm-2 col-form-label" for="color_id"> Color </label>
              <div class="col-sm-10">
                <?php
                foreach($colors as $color) {
                ?>
                <div class="color" style="background-color: <?php echo $color['colorcode']?>">
                  <input type="checkbox" name="colors[]" value="<?php echo $color['id']?>">
                  <i class="checkbox-icon"></i>
                </div>
                <?php  } ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
        </div>
        <!-- content-wrapper ends -->
        <!--footer-->
        <?php include("config/footer.php"); ?>
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