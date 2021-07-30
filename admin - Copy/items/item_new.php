<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-scroller item">
    <!--header-->
    <?php include("../config/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!--sidebar-->
      <?php include("../config/sidebar.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">New Item</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="subcat_add.php" method="post">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Item Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Code No</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cover" class="col-sm-3 col-form-label">Photo</label>
                      <div class="col-md-9">
                        <input type="file" name="cover" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Price</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Discount</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="color" class="col-sm-3 col-form-label">Cloth Size</label>
                      <div class="col-sm-9 d-flex">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-S" value="">
                          <label class="form-check-label" for="size-S">S</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-M" value="">
                          <label class="form-check-label" for="size-M">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-L" value="">
                          <label class="form-check-label" for="size-L">L</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-XL" value="">
                          <label class="form-check-label" for="size-XL">XL</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="color" class="col-sm-3 col-form-label">Avaliable Color</label>
                      <div class="col-sm-9 d-flex">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-35" value="">
                          <label class="form-check-label" for="size-35">red</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-36" value="">
                          <label class="form-check-label" for="size-36">green</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-37" value="">
                          <label class="form-check-label" for="size-37">black</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-38" value="">
                          <label class="form-check-label" for="size-38">orange</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-39" value="">
                          <label class="form-check-label" for="size-39">purpel</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-40" value="">
                          <label class="form-check-label" for="size-40">white</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-41" value="">
                          <label class="form-check-label" for="size-41">blue</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-42" value="">
                          <label class="form-check-label" for="size-42">skyblue</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-43" value="">
                          <label class="form-check-label" for="size-43">grey</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-44" value="">
                          <label class="form-check-label" for="size-44">pink</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="color" class="col-sm-3 col-form-label">Shoe Size</label>
                      <div class="col-sm-9 d-flex">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-35" value="">
                          <label class="form-check-label" for="size-35">35</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-36" value="">
                          <label class="form-check-label" for="size-36">36</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-37" value="">
                          <label class="form-check-label" for="size-37">37</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-38" value="">
                          <label class="form-check-label" for="size-38">38</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-39" value="">
                          <label class="form-check-label" for="size-39">39</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-40" value="">
                          <label class="form-check-label" for="size-40">40</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-41" value="">
                          <label class="form-check-label" for="size-41">41</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-42" value="">
                          <label class="form-check-label" for="size-42">42</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-43" value="">
                          <label class="form-check-label" for="size-43">43</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="size-44" value="">
                          <label class="form-check-label" for="size-44">44</label>
                        </div>
                      </div>
                    </div>

                  </form>
                  <a href="../items/item_list.php">
                    <button type="submit" class="btn btn-primary mr-2">Add</button>
                  </a>
                  <a href="">
                    <button class="btn btn-light">Cancel</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
    <!--footer-->
    <?php include("..config/footer.php");?>
      </div>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="../js/all.js"></script>
  <script src="../vendors/base/vendor.bundle.base.js"></script>
</body>

</html>