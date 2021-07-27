<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-scroller item">
    <!--header-->
    <?php include("config/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!--sidebar-->
      <?php include("config/sidebar_index.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">New Size</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card" style="width: 80% !important; min-width: auto !important;">
                <div class="card-body">
                  <form action="size_add.php" method="post">
                    <h4 class="mb-3">Create New Size</h4>
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

                        <option value="<?php echo $subcategory_id; ?>">
                          <?php echo $subcategory_name; ?>
                        </option>
                        <?php } ?>

                      </select>
                    </div>
                    <div class="control-group" id="fields">
                      <label class="control-label" for="field1"></label>
                      <div class="controls" id="profs">
                        <div id="field">
                          <input autocomplete="off" class="input" id="field1" name="name" type="text" placeholder="Fill Size" data-items="8" />
                          <button id="b1" class="btn add-more" type="button">+ AddSize</button>
                        </div>
                        <div class="text-right">
                        <button class="btn btn-light">Cancel</button>
                          <button type="submit" class="btn btn-primary mr-2">SaveChange</button>
                        </div>
                        <br>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!--footer-->
        <?php include("config/footer.php");?>
      </div>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/all.js"></script>
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
    var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >- Remove</button><div id="field"></div>';
    var removeButton = $(removeBtn);
    $(addto).after(newInput);
    $(addRemove).after(removeButton);
    $("#field" + next).attr('data-source', $(addto).attr('data-source'));
    $("#count").val(next);

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