<?php
include("config/db_connect.php");
$id = $_GET['id'];
$sql = "SELECT items.*,subcategories.name as sname,categories.name as cname,types.name as tname FROM items 
INNER JOIN subcategories ON items.subcategory_id=subcategories.id
INNER JOIN categories ON subcategories.category_id=categories.id
INNER JOIN types ON categories.type_id=types.id 
WHERE items.id=:value1";
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
                <div class="d-flex align-items-center" style="width: 100%;justify-content: space-between;">
                  <h3 class="font-weight-bold mb-0">Item</h3>
                  <div class="text-right">
                    <a href="stock_new.php?id=<?= $id ?>"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i><span class="d-block">Add Stock</span></button></a>
                    <a href="item_edit.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="fas fa-edit"></i><span class="d-block">Item Edit</span></a>

                    <form class="d-inline-block" action="item_delete.php" method="post" onsubmit="return confirm('Are you sure you want to delete this item?')">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <button type="DELETE" class="btn btn-danger" type="submit" value="DELETE ITEM">
                        <i class="fas fa-trash-alt"></i><span class="d-block">Item</span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="detail mt-3">
                <div>
                  <p class="codeno mt-2"><?php echo $items['codeno'] ?></p>
                  <img src="covers/<?php echo $items['cover'] ?>" class="img-fluid" alt="" height="150">
                </div>
                <ul class="list-unstyled">
                    <li><?php echo $items['sname'] ?></li>
                    <li><?php echo $items['price']."MMK" ?></li>
                    <li class="prd-discount"><?php echo $items['discount']."MMK" ?></li>
                  </ul>   
              </div>
              <div class="table-responsive col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Stock</th>
                      <th>Color</th>
                      <th>Size</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        
                      </td>
                      <td>

                      </td>
                      <td>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
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