<?php
include("config/db_connect.php");
$sql = "SELECT items.*, subcategories.id as subcategory_id, subcategories.name as subcategory_name FROM items INNER JOIN subcategories ON items.subcategory_id = subcategories.id";
$statement = $pdo->prepare($sql);
$statement->execute();
$items = $statement->fetchAll();

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
                <a href="item_new.php"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i></button></a>
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
                    <th>CodeNo</th>
                    <th>Cover</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Subcategory</th>
                    <th col-span="2"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i =1;
                  foreach ($items as $item) {
                    $id = $item['id'];
                    $name = $item['name'];
                    $codeno = $item['codeno'];
                    $cover = $item['cover'];
                    $price = $item['price'];
                    $discount = $item['discount'];
                    $subcategory_name = $item['subcategory_name'];
                  ?>

                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><a href="item_detail.php?id=<?php echo $id ?>"><?php echo $name ?></a></td>
                    <td><?php echo $codeno ?></td>
                    <td>
                    <img src="covers/<?php echo $cover ?>" alt="">
                    </td>
                    <td><?php echo $price ?></td>
                    <td class="prd-discount"><?php echo $discount ?></td>
                    <td><?php echo $subcategory_name ?></td>
                    <td>
                      <a href="item_edit.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                      <form class="d-inline-block" action="item_delete.php" method="post" onsubmit="return confirm('Are you sure you want to delete this item?')">
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