<?php
include("config/db_connect.php");
$sql = "SELECT subcategories.*, categories.id as category_id, categories.name as category_name, types.id as type_id, types.name as type_name FROM subcategories INNER JOIN types ON subcategories.type_id = types.id INNER JOIN categories ON subcategories.category_id = categories.id";
$statement = $pdo->prepare($sql);
$statement->execute();
$subcategories = $statement->fetchAll();

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <h4 class="font-weight-bold mb-0">SubCategory List</h4>
                </div>
                <a href="subcat_new.php"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i></button></a>
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
                    <th>Type</th>
                    <th>Category</th>
                    <th>Cover</th>
                    <th col-span="2"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i =1;
                  foreach ($subcategories as $subcategory) {
                    $id = $subcategory['id'];
                    $name = $subcategory['name'];

                    $category_id = $subcategory['category_id'];
                    $category_name = $subcategory['category_name']; 

                    $type_id = $subcategory['type_id'];
                    $type_name = $subcategory['type_name']; 

                    $cover = $subcategory['cover'];
                  ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $name ?></td>
                       <td><?php echo $type_name ?></td>
                      <td><?php echo $category_name ?></td>
                      <td><img src="covers/<?php echo $cover ?>" alt="" height="140"></td>
                     
                      <td class="text-right">
                        <a href="subcat_edit.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <form class="d-inline-block" action="subcat_delete.php" method="post" onsubmit="return confirm('Are you sure you want to delete this item?')">
                          <input type="hidden" name="id"  value="<?php echo $id; ?>">
                          <button type="DELETE" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i>
                          </button>
                        </form>
                        </a>
                        
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