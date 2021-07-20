<?php
include("config/db_connect.php");
$sql = "SELECT categories.*, types.id as type_id, types.name as type_name FROM categories INNER JOIN types ON categories.type_id = types.id";
$statement = $pdo->prepare($sql);
$statement->execute();
$categories = $statement->fetchAll();

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
                <a href="cat_new.php"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i></button></a>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="table-responsive col-md-12">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <!--<th>Type_id</th>-->
                    <th>Type_name</th>
                    <th col-span="2"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach($categories as $category){
                    $id = $category['id'];
                    $name = $category['name'];

                    $type_id = $category['type_id'];
                    $type_name = $category['type_name'];
                 
                  ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $type_name ?></td>
                    <td>
                      <a href="cat_edit.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                      <form class="d-inline-block" action="cat_delete.php" method="post" onsubmit="return confirm('Are you sure you want to delete this item?')">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="DELETE" class="btn btn-danger" type="submit" value="DELETE">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                      </form>
                    </td>
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