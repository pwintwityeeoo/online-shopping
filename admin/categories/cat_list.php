<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/all.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-scroller">
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
            <div class="col-md-12">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">All Categories</h4>
                </div>
                <a href="cat_new.php">
                  <button type="button" class="btn btn-light">New Cat</button>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="mr-2 mb-3"><a href="#women-anchor" class="anchor btn btn-inverse-secondary btn-fw"> Women Fashion </a></li>
                <li class="mr-2 mb-3"><a href="#men-anchor" class="anchor btn btn-inverse-secondary btn-fw"> Men Fashion </a></li>
                <li class="mr-2 mb-3"><a href="#kid" class="anchor btn btn-inverse-secondary btn-fw"> Kid </a></li>
                <li class="mr-2 mb-3"><a href="#accessory" class="anchor btn btn-inverse-secondary btn-fw"> Accessory </a></li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div class="row">
              <div id="women-anchor" class="col-md-12 grid-margin stretch-card tab-pane">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="card-title">Women Fashion(Types of name)</h4>

                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped text-center">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>
                              Name
                            </th>
                            <th>
                              Type-Name
                            </th>
                            <th colspan="3">

                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              Clothes
                            </td>
                            <td>
                              women
                            </td>
                            <td class="text-right">
                              <button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>
                              Shoes
                            </td>
                            <td>
                              men
                            </td>
                            <td class="text-right">
                              <button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>
                              Bags
                            </td>
                            <td>
                              women
                            </td>
                            <td class="text-right">
                              <button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div id="men-anchor" class="col-md-12 grid-margin stretch-card tab-pane">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="card-title">Men Fashion(Types of name)</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped text-center">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>
                              Name
                            </th>
                            <th>
                              Type-Name
                            </th>
                            <th colspan="3">

                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              Clothes
                            </td>
                            <td>
                              men
                            </td>
                            <td class="text-right">
                              <button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>
                              Shoes
                            </td>
                            <td>
                              kid
                            </td>
                            <td class="text-right">
                              <button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>
                              Bags
                            </td>
                            <td>
                              accesssory
                            </td>
                            <td class="text-right">
                              <button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div id="kid" class="col-md-12 grid-margin stretch-card tab-pane">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="card-title">kid(Types of name)</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped text-center">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>
                              Name
                            </th>
                            <th>
                              Type-Name
                            </th>
                            <th colspan="3">

                            </th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div id="accessory" class="col-md-12 grid-margin stretch-card tab-pane">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="card-title">Accessory(Types of name)</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped text-center">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>
                              Name
                            </th>
                            <th>
                              Type-Name
                            </th>
                            <th colspan="3">

                            </th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
    <!--footer-->
    <?php include("../config/footer.php");?>
      </div>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!--anchor-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $('.anchor').click(function() {
      var sectionTo = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(sectionTo).offset().top-70
      }, 1500);
    });
  </script>

  <!-- container-scroller -->
    <script src="../js/all.js"></script>
    <script src="../vendors/base/vendor.bundle.base.js"></script>
</body>

</html>