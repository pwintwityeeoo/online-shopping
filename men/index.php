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
        <li><a href="men/">Men</a></li>
        <li>Clothing</li>
      </ul>
      <ul>
        <li>
          <a href="../cart_view.php" class="cart-noti">
            <span class="noti">1</span>
            <svg class="svg-inline--fa fa-cart-arrow-down fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-arrow-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
              <path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM403.029 192H360v-60c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v60h-43.029c-10.691 0-16.045 12.926-8.485 20.485l67.029 67.029c4.686 4.686 12.284 4.686 16.971 0l67.029-67.029c7.559-7.559 2.205-20.485-8.486-20.485z"></path>
            </svg><!-- <i class="fas fa-cart-arrow-down"></i> Font Awesome fontawesome.com -->
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
      <h2 class="fs-35">Clothing <span class="lady-allprd fs-22">50 Products</span></h2>
      <ul class="tab-cat men-cloth">
        <li><a href="#" class="current" data-tab="tab-14">T-Shirts</a></li>
        <li><a href="#" data-tab="tab-15">Hoodies</a></li>
        <li><a href="#" data-tab="tab-16">Jeans</a></li>
      </ul>
      <div id="tab-14" class="lady-cat crop-top  tab-content mencloth-content current">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/clothes/t-shirts/men_shirt01.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt02.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt03.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt04.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt05.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt06.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt07.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt08.jpg">
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
              <img src="../images/men/clothes/t-shirts/men_shirt09.jpg">
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
      <div id="tab-15" class="lady-cat crop-top  tab-content mencloth-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/clothes/hoodies/men_hoodie01.jpg">
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
              <img src="../images/men/clothes/hoodies/men_hoodie02.jpg">
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
              <img src="../images/men/clothes/hoodies/men_hoodie03.jpg">
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
              <img src="../images/men/clothes/hoodies/men_hoodie04.jpg">
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
              <img src="../images/men/clothes/hoodies/men_hoodie05.jpg">
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
      <div id="tab-16" class="lady-cat jeans tab-content mencloth-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/clothes/jeans/men_jean01.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean02.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean03.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean04.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean05.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean06.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean07.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean08.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean09.jpg">
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
              <img src="../images/men/clothes/jeans/men_jean10.jpg">
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
      </div>
    </div>
    <div class="cloth-cat">
      <h2 class="fs-35">Shoes <span class="lady-allprd fs-22">800 Products</span></h2>
      <ul class="tab-cat men-shoe">
        <li><a href="#" class="current" data-tab="tab-17">Sneakers</a></li>
        <li><a href="#" data-tab="tab-18">Slippers</a></li>
        <li><a href="#" data-tab="tab-19">Boots</a></li>
      </ul>
      <div id="tab-17" class="lady-cat crop-top  tab-content menshoe-content current">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/shoes/sneakers/men_sneaker01.jpg">
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
              <img src="../images/men/shoes/sneakers/men_sneaker02.jpg">
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
              <img src="../images/men/shoes/sneakers/men_sneaker03.jpg">
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
              <img src="../images/men/shoes/sneakers/men_sneaker04.jpg">
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
              <img src="../images/men/shoes/sneakers/men_sneaker05.jpg">
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
              <img src="../images/men/shoes/sneakers/men_sneaker06.jpg">
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
              <img src="../images/men/shoes/sneakers/men_sneaker07.jpg">
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
              <img src="../images/men/shoes/sneakers/men_sneaker08.jpg">
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
      <div id="tab-18" class="lady-cat crop-top  tab-content menshoe-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/shoes/slippers/men_slipper01.png">
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
              <img src="../images/men/shoes/slippers/men_slipper02.jpg">
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
              <img src="../images/men/shoes/slippers/men_slipper03.jpg">
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
              <img src="../images/men/shoes/slippers/men_slipper04.jpg">
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
              <img src="../images/men/shoes/slippers/men_slipper05.jpg">
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
              <img src="../images/men/shoes/slippers/men_slipper06.jpg">
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
              <img src="../images/men/shoes/slippers/men_slipper07.jpg">
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
      <div id="tab-19" class="lady-cat crop-top  tab-content menshoe-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/shoes/boots/men_boot01.jpg">
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
              <img src="../images/men/shoes/boots/men_boot02.jpg">
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
              <img src="../images/men/shoes/boots/men_boot03.jpg">
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
              <img src="../images/men/shoes/boots/men_boot04.jpg">
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
              <img src="../images/men/shoes/boots/men_boot05.jpg">
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
      <ul class="tab-cat men-bag">
        <li><a href="#" class="current" data-tab="tab-20">ShoulderBags</a></li>
        <li><a href="#" data-tab="tab-21">Backpacks </a></li>
      </ul>
      <div id="tab-20" class="lady-cat crop-top tab-content menbag-content current">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/bags/shoulderpacks/men_shoulderpack01.jpg">
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-dark" data-bs-toggle="modal" href="#cloth">Item Detail</a>
                </div>
              </div>

            </div>
            <div class="product-detail">
              <div class="price">
                <!--<p class="discount">17000MMK</p>-->
                <p class="prd-price">19000MMK</p>
                <!--<p class="normal-price">19000MMK</p>-->
              </div>

              <a href="#" class="user-name rotate" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#x">
                <i class="far fa-heart"></i>
              </a>
            </div>
          </li>
          <li>
            <div class="product content">
              <img src="../images/men/bags/shoulderpacks/men_shoulderpack02.jpg">
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
              <img src="../images/men/bags/shoulderpacks/men_shoulderpack03.jpg">
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
              <img src="../images/men/bags/shoulderpacks/men_shoulderpack04.jpg">
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
              <img src="../images/men/bags/shoulderpacks/men_shoulderpack05.jpg">
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
      <div id="tab-21" class="lady-cat t-shirt  tab-content menbag-content">
        <ul>
          <li>
            <div class="product content">
              <img src="../images/men/bags/backpacks/men_backpack01.jpg">
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
              <img src="../images/men/bags/backpacks/men_backpack02.jpg">
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
              <img src="../images/men/bags/backpacks/men_backpack03.jpg">
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
              <img src="../images/men/bags/backpacks/men_backpack04.jpg">
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
              <img src="../images/men/bags/backpacks/men_backpack05.jpg">
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
  </div>
  <footer>
    <p class="copyright">©All rights reserved.</p>
  </footer>
</body>

</html>
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
<!--sign-in/up form-->
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
          <button type="submit" class="btn btn-dark btn-lg">Sign Up</button>
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
          <button type="submit" class="btn btn-dark btn-lg">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>