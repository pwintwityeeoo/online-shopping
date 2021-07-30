<?php
include("config/db_connect.php");
$sql = "SELECT subcategories.* FROM subcategories INNER JOIN sizes ON subcategories.id=sizes.subcategory_id GROUP BY sizes.subcategory_id";
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
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                  <h4 class="font-weight-bold mb-0">Size List</h4>
                </div>
                <a href="size_new.php"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i></button></a>
              </div>

            </div>
          </div>
          <div class="row">
            <?php
            foreach ($subcategories as $subcategorie) {
              $id = $subcategorie['id'];
              $name = $subcategorie['name'];
            ?>
            <div class="col-sm-6">
              <div class="card">
                <div class="sizes">
                  <div class="bg-light p-3">
                    <div class="subcat-name d-flex justify-content-between">
                      <span><?php echo $name ?></span>
                      <a href="size_edit.php?id=<?php echo $id ?>">
                        <span><i class="fas fa-cogs"></i></span>
                      </a>
                    </div>
                    <?php 
                    $sql="SELECT * FROM sizes WHERE subcategory_id=:value1";
                    $statement = $pdo->prepare($sql);
                    $statement->bindParam(':value1',$id);
                    $statement->execute();
                    $sizes = $statement->fetchAll();
                    foreach($sizes as $size){
                      $size_id = $size['id'];
                      $size_name = $size['name'];
                    ?>
                    <p>

                      <span class="sizeno">
                        <?php echo $size_name; ?>
                      </span>
                    </p>
                 <?php  } ?>
                  </div>

                </div>
              </div>
            </div>

            <?php } ?>
          </div>
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

<script>
$(document).ready(function() {
  var next = 1;
  $(".add-more").click(function(e) {
    e.preventDefault();
    var addto = "#field" + next;
    var addRemove = "#field" + (next);
    next = next + 1;
    var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
    var newInput = $(newIn);
    var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
    var removeButton = $(removeBtn);
    $(addto).after(newInput);
    $(addRemove).after(removeButton);
    $("#field" + next).attr('data-source', $(addto).attr('data-source'));
    $("#count").val(next);
    console.log($("#count").val(next));

    $('.remove-me').click(function(e) {
      e.preventDefault();
      var fieldNum = this.id.charAt(this.id.length - 1);
      var fieldID = "#field" + fieldNum;
      $(this).remove();
      $(fieldID).remove();
    });
  });
});
</script>