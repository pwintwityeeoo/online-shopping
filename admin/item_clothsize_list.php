<?php
include("config/db_connect.php");
$sql = "SELECT item_clothsizes.*,items.id as item_id, items.name as item_name,cloth_sizes.id as clothsize FROM item_clothsizes INNER JOIN cloth_sizes ON item_clothsizes.clothsize_id = cloth_sizes.sizeno INNER JOIN items ON items.id = item_clothsizes.item_id";
$statement = $pdo->prepare($sql);
$statement->execute();
$item_clothsizes = $statement->fetchAll();
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
                  <h4 class="font-weight-bold mb-0">Types List</h4>
                </div>
                <a href="type_new.php"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i></button></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th col-span="2"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ( $item_clothsizes as $item_clothsize ) {
                    $id = $item_clothsize['id'];
                    $item_name = $item_clothsize['item_name'];
                    $sizeno = $item_clothsize['clothsize_id'];
                    $sizeno_id = $item_clothsize['sizeno_id'];
                  ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $item_name ?></td>
                      <td><?php echo $sizeno_id ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
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