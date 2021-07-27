<?php
include("config/db_connect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM sizes WHERE id=:value1";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$id);
$statement->execute();
$sizes = $statement->fetch(PDO::FETCH_ASSOC);

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
            <div style="width:60%;">
              <form action="size_add.php" method="post">
                <h4 class="mb-3">Create New Size</h4>
                <input type="hidden" name="id" value="<?php echo $sizes['id']?>">
                <div class="control-group">
                  <select name="subcategory_id" class="form-control form-select" aria-label="Default select example">
                    <?php
                    include("config/db_connect.php");
                    $sql_type = "SELECT * FROM subcategories";
                    $statement = $conn->prepare($sql_type);
                    $statement->execute();
                    $subcategories = $statement->fetchAll();

                    foreach ($subcategories as $subcategory) {
                      $subcategory_id = $subcategory['id'];
                      $subcategory_name = $subcategory['name'];
                    ?>
                    <option value="<?= $subcategory_id ?>" <?php if($subcategory_id == $sizes['subcategory_id']){ echo "selected";}?>>
                      <?php echo $subcategory_name; ?>
                    </option>
                    <?php } ?>

                  </select>
                </div>
                <div class="control-group" id="fields">
                  <label class="control-label" for="field1"></label>
                  <div class="controls" id="profs">
                    <div id="field">
                      <input autocomplete="off" class="input" id="field1" name="name" value="<?php echo $sizes['name']?>" type="text" placeholder="Type something" data-items="8" />
                      <button id="b1" class="btn add-more" type="button">+ AddSize</button>
                    </div>
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary mr-2">SaveChange</button>
                      <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <br>
                  </div>
                </div>
              </form>
            </div>
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
    var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >- Remove</button></div><div id="field">';
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