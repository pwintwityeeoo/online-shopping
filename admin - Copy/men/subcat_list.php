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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">t-shirts</h4>
                    <a href="../items/item_new.php">
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">hoodies</h4>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">jeans</h4>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                          <select>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                            </select>
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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">sneaker</h4>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">slipper</h4>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">boots</h4>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                          <select>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                            </select>
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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">shoulder-bags</h4>
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
                  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-secondary">
                    <h4 class="card-title m-0">back-bags</h4>
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