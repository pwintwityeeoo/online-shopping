<!DOCTYPE html>
<html>

<head>
  <title>Online Shopping</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../css/top.css">
  <link rel="stylesheet" type="text/css" href="../css/common.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/common.js"></script>
  <script src="../js/qty.js"></script>
  <script src="../js/all.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
  <p class="time-count">
    <?php
    $now = new DateTime();
    $now->setTimezone(new DateTimeZone('Asia/Yangon'));
    echo $now->format('Y-m-d H:i:s');
    ?>
  </p>
  <header>
    <div class="head-nav inner">
      <ul class="head-list clearfix">
        <li><a href="../">TOP</a></li>
        <li><a href="../women/">WOMEN</a></li>
        <li><a href="../men/">MEN</a></li>
        <li><a href="../kids/">KID</a></li>
        <li><a href="../accessory/">ACCESSORY</a></li>
      </ul>
      <h1 class="text-center fs-50 page-logo">7 DAYS</h1>
      <form action="search.php" method="get" class="btn-search">
        <input type="text" name="search" placeholder="Search">
        <input type="submit" name="submit" value="search">
      </form>
    </div>
  </header>
  <div class="inner">
    <div class="breadcrumbs">
      <ul class="breadcrumbs-list clearfix">
        <li><a href="../">Home</a></li>
        <li><a href="women/">Women</a></li>
        <li>Clothing</li>
      </ul>
      <ul>
        <li>
          <a href="../cart_view.php" class="cart-noti">
            <span class="noti">1</span>
            <i class="fas fa-cart-arrow-down"></i>
          </a>
        </li>
        <!--<li>
          <a href="#" class="user-name">Pwint</a>
        </li>-->
        <li>
          <a href="#" class="user-name" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">Register</a>
        </li>
      </ul>
    </div>
    <div class="cloth-cat">
      <h2 class="fs-35">Clothes <span class="lady-allprd fs-22">1000 Products</span></h2>
      <ul class="tab-cat cloth">
        <li><a href="#" class="current" data-tab="tab-1">Crop-Tops</a></li>
        <li><a href="#" data-tab="tab-2">T-Shirts</a></li>
        <li><a href="#" data-tab="tab-3">Hoodies</a></li>
        <li><a href="#" data-tab="tab-4">Skirts</a></li>
        <li><a href="#" data-tab="tab-5">Babydolls</a></li>
        <li><a href="#" data-tab="tab-6">Jeans</a></li>
      </ul>
      <div id="tab-1" class="lady-cat crop-top tab-content cloth-content current">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/crop-top/crop_top_img1.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/crop-top/crop_top_img2.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">18000MMK</p>
                <p class="normal-price">20000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/crop-top/crop_top_img3.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">18000MMK</p>
                <p class="normal-price">20000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/crop-top/crop_top_img4.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">18000MMK</p>
                <p class="normal-price">20000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/crop-top/crop_top_img5.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">18000MMK</p>
                <p class="normal-price">20000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/crop-top/crop_top_img6.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">18000MMK</p>
                <p class="normal-price">20000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
        </ul>

      </div>
      <div id="tab-2" class="lady-cat t-shirt tab-content cloth-content">
        <ul>
          <li>
            <img src="../images/women/cloth/t-shirt/t_shirt_img01.jpg">
            <div>
              <p class="price">10000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/t-shirt/t_shirt_img02.jpg">
            <div>
              <p class="price">13000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/t-shirt/t_shirt_img03.jpg">
            <div>
              <p class="price">13000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/t-shirt/t_shirt_img04.jpg">
            <div>
              <p class="price">13000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/t-shirt/t_shirt_img05.jpg">
            <div>
              <p class="price">13000MMK</p>
            </div>
          </li>
        </ul>
      </div>
      <div id="tab-3" class="lady-cat hoodie tab-content cloth-content">
        <ul>
          <li>
            <img src="../images/women/cloth/hoodie/girl_hoodie_img01.jpg">
            <div>
              <p class="price">10000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/hoodie/girl_hoodie_img02.jpg">
            <div>
              <p class="price">13000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/hoodie/girl_hoodie_img03.jpg">
            <div>
              <p class="price">10000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/hoodie/girl_hoodie_img04.jpg">
            <div>
              <p class="price">10000MMK</p>
            </div>
          </li>
        </ul>
      </div>
      <div id="tab-4" class="lady-cat skirt tab-content cloth-content">
        <ul>
          <li>
            <img src="../images/women/cloth/skirt/skirt_img01.jpg">
            <div>

              <p class="price">10000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/skirt/skirt_img02.jpg">
            <div>

              <p class="price">13000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/skirt/skirt_img03.jpg">
            <div>

              <p class="price">10000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/skirt/skirt_img04.jpg">
            <div>

              <p class="price">10000MMK</p>
            </div>
          </li>
          <li>
            <img src="../images/women/cloth/skirt/skirt_img05.jpg">
            <div>

              <p class="price">10000MMK</p>

            </div>
          </li>
          <li>
            <img src="../images/women/cloth/skirt/skirt_img06.jpg">
            <div>

              <p class="price">10000MMK</p>

            </div>
          </li>
        </ul>
      </div>
      <div id="tab-5" class="lady-cat babydoll tab-content cloth-content">
        <ul>
          <li>
            <img src="../images/women/cloth/babydoll/babydoll_img01.jpg">
            <div>

              <p class="price">10000MMK</p>

            </div>
          </li>
          <li>
            <img src="../images/women/cloth/babydoll/babydoll_img02.jpg">
            <div>

              <p class="price">13000MMK</p>

            </div>
          </li>
          <li>
            <img src="../images/women/cloth/babydoll/babydoll_img03.jpg">
            <div>

              <p class="price">10000MMK</p>

            </div>
          </li>
          <li>
            <img src="../images/women/cloth/babydoll/babydoll_img04.jpg">
            <div>

              <p class="price">10000MMK</p>

            </div>
          </li>
          <li>
            <img src="../images/women/cloth/babydoll/babydoll_img05.jpg">
            <div>

              <p class="price">10000MMK</p>

            </div>
          </li>
          <li>
            <img src="../images/women/cloth/babydoll/babydoll_img06.jpg">
            <div>

              <p class="price">10000MMK</p>
            </div>
          </li>
        </ul>
      </div>
      <div id="tab-6" class="lady-cat jeans tab-content cloth-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/jean/jeans_img01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a href="#">
                    <h3 class="content-title">Item Detail</h3>
                  </a>
                </div>
              </div>

            </div>
            <p class="price">20000MMK</p>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/jean/jeans_img02.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a href="#">
                    <h3 class="content-title">Item Detail</h3>
                  </a>
                </div>
              </div>

            </div>
            <p class="price">25000MMK</p>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/jean/jeans_img03.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a href="#">
                    <h3 class="content-title">Item Detail</h3>
                  </a>
                </div>
              </div>

            </div>
            <p class="price">22000MMK</p>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/jean/jeans_img04.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a href="#">
                    <h3 class="content-title">Item Detail</h3>
                  </a>
                </div>
              </div>

            </div>
            <p class="price">28000MMK</p>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/cloth/jean/jeans_img05.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a href="#">
                    <h3 class="content-title">Item Detail</h3>
                  </a>
                </div>
              </div>

            </div>
            <p class="price">24000MMK</p>
          </li>
        </ul>
      </div>
      <div class="animated">
        <a href="#" class="btn-common">SeeMore</a>
      </div>
    </div>
    <div class="cloth-cat">
      <h2 class="fs-35">Shoes <span class="lady-allprd fs-22">800 Products</span></h2>
      <ul class="tab-cat shoes">
        <li><a href="#" class="current" data-tab="tab-7">Sneakers</a></li>
        <li><a href="#" data-tab="tab-8">Slippers</a></li>
        <li><a href="#" data-tab="tab-9">Comforts</a></li>
        <li><a href="#" data-tab="tab-10">High Heels</a></li>
        <li><a href="#" data-tab="tab-11">Boots</a></li>
      </ul>
      <div id="tab-7" class="lady-cat crop-top tab-content current shoes-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker02.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker03.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker04.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker05.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker06.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker07.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/sneakers/women_sneaker08.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
        </ul>

        <div class="animated">
          <a href="#" class="btn-common">SeeMore</a>
        </div>

      </div>
      <div id="tab-8" class="lady-cat slipper tab-content shoes-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/slippers/girl_slipper01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/slippers/girl_slipper02.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/slippers/girl_slipper03.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/slippers/girl_slipper04.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/slippers/girl_slipper05.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
        </ul>
        <div class="animated">
          <a href="#" class="btn-common">SeeMore</a>
        </div>
      </div>
      <div id="tab-9" class="lady-cat hoodie tab-content shoes-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/comforts/girl_comfort01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/comforts/girl_comfort02.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/comforts/girl_comfort03.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/comforts/girl_comfort04.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/comforts/girl_comfort05.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/comforts/girl_comfort06.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
        </ul>
        <div class="animated">
          <a href="#" class="btn-common">SeeMore</a>
        </div>
      </div>
      <div id="tab-10" class="lady-cat skirt tab-content shoes-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/high-heels/girl_highheel01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/high-heels/girl_highheel02.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/high-heels/girl_highheel03.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/high-heels/girl_highheel04.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/high-heels/girl_highheel05.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/high-heels/girl_highheel06.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/high-heels/girl_highheel07.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
        </ul>
        <div class="animated">
          <a href="#" class="btn-common">SeeMore</a>
        </div>
      </div>
      <div id="tab-11" class="lady-cat trumpet tab-content shoes-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/boots/girl_boot01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/boots/girl_boot02.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/boots/girl_boot03.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/boots/girl_boot04.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/women/shoes/boots/girl_boot05.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">17000MMK</p>
                <p class="normal-price">19000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
        </ul>
        <div class="animated">
          <a href="#" class="btn-common">SeeMore</a>
        </div>
      </div>
    </div>
    <div class="cloth-cat">
      <h2 class="fs-35">Bags <span class="lady-allprd fs-22">500 Products</span></h2>
      <ul class="tab-cat bags">
        <li><a href="#" class="current" data-tab="tab-12">ShoulderBags </a></li>
        <li><a href="#" data-tab="tab-13">Backpacks </a></li>
      </ul>
      <div id="tab-12" class="lady-cat crop-top tab-content bags-content current">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/women/bags/shoulderbags/women_bags_img01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <p class="discount">25000MMK</p>
                <p class="normal-price">30000MMK</p>
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/shoulderbags/women_bags_img02.jpg">
            <div>

              <p class="price">103000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/shoulderbags/women_bags_img03.jpg">
            <div>

              <p class="price">110000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/shoulderbags/women_bags_img04.jpg">
            <div>

              <p class="price">100000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/shoulderbags/women_bags_img01.jpg">
            <div>

              <p class="price">110000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/shoulderbags/women_bags_img05.jpg">
            <div>
              <p class="price">110000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
        </ul>
        <div class="animated">
          <a href="#" class="btn-common">SeeMore</a>
        </div>
      </div>
      <div id="tab-13" class="lady-cat crop-top tab-content bags-content">
        <ul>
          <li>
            <img src="../images/women/bags/backpacks/backpack_img01.jpg">
            <div>
              <p class="price">90000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/backpacks/backpack_img02.jpg">
            <div>
              <p class="price">103000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/backpacks/backpack_img03.jpg">
            <div>
              <p class="price">110000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/backpacks/backpack_img04.jpg">
            <div>
              <p class="price">100000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/backpacks/backpack_img05.jpg">
            <div>
              <p class="price">110000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
          <li>
            <img src="../images/women/bags/backpacks/backpack_img06.jpg">
            <div>
              <p class="price">110000MMK</p>
              <p class="avaliable-size">
              </p>
            </div>
          </li>
        </ul>
        <div class="animated">
          <a href="#" class="btn-common">SeeMore</a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p class="copyright">©All rights reserved.</p>
  </footer>
</body>

</html>

<!--modal-box-->

<div class="modal fade" id="exampleModalToggle" tabindex="-1" aria-labelledby="exampleModalToggle" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-25" id="exampleModalLabel">Order Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form>
          <figure class="text-center">
            <img src="../images/women/cloth/crop-top/crop_top_img1.jpg">
          </figure>
          <div class="mb-3 d-flex">
            <label for="product-price" class="col-form-label col-md-4">Product Price</label>
            <p class="col-md-8 p-2 border border-secondary rounded price" id="product-price">19000 MMK</p>
          </div>
          <div class="mb-3 d-flex">
            <label for="product-color" class="col-form-label col-md-4">Avaliable Color</label>
            <div class="product-nav col-md-8">
              <label for="color-1"></label>
              <label for="color-2"></label>
              <label for="color-3"></label>
            </div>
          </div>
          <div class="mb-3 shoe-size d-flex">
            <label for="product-color" class="col-form-label col-md-4">Shoe Size</label>
            <div class="col-md-8">
              <label class="sizeno">
                <input type="radio" name="avaliable-size" value="35">
                <span>35</span>
              </label>
              <label class="sizeno">
                <input type="radio" name="avaliable-size" value="36">
                <span>36</span>
              </label>
              <label class="sizeno">
                <input type="radio" name="avaliable-size" value="37">
                <span>37</span>
              </label>
              <label class="sizeno">
                <input type="radio" name="avaliable-size" value="38">
                <span>38</span>
              </label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn border border-round" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
          Add To Cart
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalToggle2" tabindex="-1" role="dialog" aria-labelledby="exampleModalToggle2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <i class="far fa-check-circle"></i>
        <h5 class="modal-title fs-25">Thank You!</h5>
        <p>The Product have been successully in add to cart</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!--<div class="modal fade" id="bag" tabindex="-1" arial-labelledby="bag" arial-modal="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-25" id="exampleModalLabel">Order Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form>
          <figure class="text-center">
            <img src="../images/women/cloth/crop-top/crop_top_img1.jpg">
          </figure>
          <div class="mb-3 d-flex">
            <label for="product-price" class="col-form-label col-md-4">Product Price</label>
            <p class="col-md-8 p-2 border border-secondary rounded price" id="product-price">19000 MMK</p>
          </div>
          <div class="mb-3 d-flex">
            <label for="product-price" class="col-form-label col-md-4">Discount Price</label>
            <p class="col-md-8 p-2 border border-secondary rounded" id="product-price">17000 MMK</p>
          </div>
          <div class="mb-3 d-flex">
            <label for="product-color" class="col-form-label col-md-4">Avaliable Color</label>
            <div class="product-nav col-md-8">
              <label for="color-1"></label>
              <label for="color-2"></label>
              <label for="color-3"></label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
          Add To Cart
        </button>
      </div>
    </div>
  </div>
</div>-->
<div class="modal fade" id="cloth" tabindex="-1" arial-labelledby="cloth" arial-modal="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-25" id="exampleModalLabel">Order Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form>
          <figure class="text-center">
            <img src="../images/women/cloth/crop-top/crop_top_img1.jpg">
          </figure>
          <div class="mb-3 d-flex">
            <label for="product-price" class="col-form-label col-md-4">Product Price</label>
            <p class="col-md-8 p-2 border border-secondary rounded price" id="product-price">19000 MMK</p>
          </div>
          <div class="mb-3 d-flex">
            <label for="product-price" class="col-form-label col-md-4">Discount Price</label>
            <p class="col-md-8 p-2 border border-secondary rounded" id="product-price">17000 MMK</p>
          </div>
          <div class="mb-3 d-flex">
            <label for="product-color" class="col-form-label col-md-4">Avaliable Color</label>
            <div class="product-nav col-md-8">
              <label for="color-1"></label>
              <label for="color-2"></label>
              <label for="color-3"></label>
            </div>
          </div>
          <div class="mb-3 d-flex">
            <label for="product-color" class="col-form-label col-md-4">Avaliable Size</label>
            <div class="product-nav col-md-8">
              <span for="color-1">S</span>
              <span for="color-2">M</span>
              <span for="color-3">L</span>
              <span for="color-3">XL</span>
              <span for="color-3">XXL</span>
              <span for="color-3">FREE SIZE</span>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn border border-round" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
          Add To Cart
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade customer-info" id="x" tabindex="-1" arial-labelledby="x" arial-modal="true">
  <div class="inner row">
    <div id="register-form" class="modal-dialog col-md-7">
      <div class="modal-content">
        <div class="modal-header d-block">
          <h5 class="modal-title fs-25" id="exampleModalLabel">Sign Up</h5>
          <p class="">Please fill in this form to create an account!</p>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3 d-flex justify-content-between">
              <input type="text" class="col-md-6" name="first_name" placeholder="First Name" required="required">
              <input type="text" class="col-md-5" name="last_name" placeholder="Last Name" required="required">
            </div>
            <div class="mb-3 d-flex">
              <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="mb-3 d-flex">
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="mb-3 d-flex">
              <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
            </div>
            <div class="mb-3 d-flex">
              <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#" class="d-inline">Terms of Use</a> &amp; <a href="#" class="d-inline">Privacy Policy</a></label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark">Sign Up</button>
        </div>
      </div>
    </div>
    <div id="login-form" class="modal-dialog col-md-5">
      <div class="modal-content">
        <div class="modal-header d-block">
          <h5 class="modal-title fs-25" id="exampleModalLabel">Sign In</h5>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3 d-flex justify-content-between">
              <input type="text" class="col-md-12" name="username" placeholder="Username" required="required">
            </div>
            <div class="mb-3 d-flex">
              <input type="email" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="mb-3 d-flex">
              <label class="form-check-label"><input type="checkbox" required="required">Remember me</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>