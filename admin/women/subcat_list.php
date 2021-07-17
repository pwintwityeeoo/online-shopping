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
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="../images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="fas fa-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="../images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="../images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="../images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-shopping-cart"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!--sidebar-->
      <?php include("../config/sidebar.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h3 class="font-weight-bold mb-0">clothes</h3>
                </div>
                <a href="subcat_new.php">
                  <button type="button" class="btn btn-light">New SubCategory</button>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">crop-tops</h4>
                    <a href="../items/item_new.php">
                      <button type="button" class="btn btn-light">New CropTop</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Cloth-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            L
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            M
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          XL
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            S
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">t-shirts</h4>
                    <a href="item_new.php">
                      <button type="button" class="btn btn-light">New T-shirt</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Cloth-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            XL
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            M
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            S
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            L
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">hoodies</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Hoodie</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Cloth-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            M
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            L
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            XL
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            M
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">skits</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Skit</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Cloth-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            S
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            L
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            L
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          S
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">babydolls</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Babydoll</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Cloth-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            XL
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          L
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            M
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          L
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">jeans</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">new jean</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Cloth-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          L
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          XL
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            S
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          L
                          </td>
                          <td>
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
            <h3 class="subcat-ttl">shoes</h3>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">sneaker</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Sneaker</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Shoe-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          35
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            38
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            37
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          36
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">slipper</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Slipper</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Shoe-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            37
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          38
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          38
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          37
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">comfort</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Comfort</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Shoe-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          35
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          36
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            37
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                          38
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">high-heels</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New High-Heel</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Shoe-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            37
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            37
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            37
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            36
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">boots</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Boot</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Shoe-Size
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            37
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            38
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            35
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            36
                          </td>
                          <td>
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
            <h3 class="subcat-ttl">Bags</h3>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">shoulder-bags</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Shoulder-Bag</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">back-bags</h4>
                    <a href="subcat_new.php">
                      <button type="button" class="btn btn-light">New Back-Bag</button>
                    </a>
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
                            CodeNo
                          </th>
                          <th>
                            Photo
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Color
                          </th>
                          <th colspan="3">

                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>
                            Product 00
                          </td>
                          <td>
                            PR 00
                          </td>
                          <td class="py-1">
                            <img src="../images/category/category_women_cloth.jpg" alt="image" />
                          </td>
                          <td>
                            19000MMK
                          </td>
                          <td>
                            17000MMK
                          </td>
                          <td>
                            red
                          </td>
                          <td>
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
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
          </div>
        </footer>
      </div>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <script src="../js/all.js"></script>
</body>

</html>