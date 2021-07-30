<?php
  include("config/db_connect.php");
  $sql = "SELECT subcategories.*, types.id as type_id,types.name as type_name FROM subcategories INNER JOIN types ON subcategories.type_id=types.id  ORDER BY types.id";
  $statement = $pdo->prepare($sql);
  $statement->execute();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Online Shopping</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="css/top.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <div class="inner head-nav">
      <ul class="head-list clearfix">
        <li><a href="/online-shopping">TOP</a></li>
        <li><a href="women/">WOMEN</a></li>
        <li><a href="men/">MEN</a></li>
        <li><a href="kids/">KID</a></li>
        <li><a href="accessory/">ACCESSORY</a></li>
      </ul>
      <h1 class="text-center fs-50 page-logo">7 DAYS</h1>
      <form action="search.php" method="get" class="btn-search">
        <input type="text" name="search" placeholder="Search">
        <input type="submit" name="submit" value="search">
      </form>
    </div>
  </header>
  <div class="inner">
    <div class="kp-carousel">
      <div class="swiper-container kp-panel">
        <!-- メイン表示部分 -->
        <div class="swiper-wrapper">
          <!-- 各スライド -->
          <div class="swiper-slide"><a href="women/"><img class="swiper-slide_img pc" src="images/top/pc-mv1.jpg" alt=""></a></div>
          <div class="swiper-slide"><a href="women/"><img class="swiper-slide_img pc" src="images/top/pc-mv2.jpg" alt=""></a></div>
          <div class="swiper-slide"><a href="men/"><img class="swiper-slide_img pc" src="images/top/pc-mv3.jpg" alt=""></a></div>
        </div>

        <div class="min-container">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="kp-carousel-pagination"></div>
      </div>
      <div class="scroll-container min-container">
        <div class="scrollblock">
          <div class="scrolltext">scroll</div>
          <div class="scroll-line"></div>
        </div>
      </div>
    </div>
    <div class="subcat">
      <?php while($row = $statement->fetch(PDO::FETCH_ASSOC)) :?>
      <div class="subcat-list" style="width:24%;display:inline-block;margin-bottom:30px;">
        <?php if($row['type_id'] == 1){ ?>
        <div class="text-center">
          <a href="indexfashion.php?id=<?php echo $row['id'] ?>">
            <img src="admin/covers/<?php echo $row['cover']; ?>">
          </a>
          <div class="product-detail">
            <div class="price">
              <p class="discount mb-0"><?php echo $row['name']; ?></p>
              <?php echo $row['type_name']; ?>
            </div>
          </div>
        </div>
        <?php }elseif($row['type_id'] == 2){?>          
          <div class="text-center">
          <a href="indexfashion.php?id=<?php echo $row['id'] ?>">
            <img src="admin/covers/<?php echo $row['cover']; ?>">
          </a>
          <div class="product-detail">
            <div class="price">
              <p class="discount mb-0"><?php echo $row['name']; ?></p>
              <?php echo $row['type_name']; ?>
            </div>
          </div>
        </div>
        <?php  }else{
      } ?>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="subcat">
      <?php while($row = $statement->fetch(PDO::FETCH_ASSOC)) :?>
      <div class="subcat-list-men">
        <div class="text-center">
          <?php if($row['type_id'] == 2){ ?>
          <a href="#">
            <img src="admin/covers/<?php echo $row['cover']; ?>">
          </a>
          <div class="product-detail">
            <div class="price">
              <p class="discount mb-0"><?php echo $row['name']; ?></p>
              <?php echo $row['type_name']; ?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="main-cat">
      <h2 class="fs-35">Shopping Category</h2>
      <ul>
        <li>
          <div class="content">
            <a href="women/">
              <figure class="cat-img">
                <span class="img-wrapper" style="background-image:url('images/top/girl_shopping_img01.jpg')"></span>
              </figure>
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">WOMEN<br>FASHION</h3>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li>
          <div class="content">
            <a href="men/">
              <figure class="cat-img">
                <span class="img-wrapper" style="background-image:url('images/top/boy_shopping_img01.jpg')"></span>
              </figure>
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">MEN<br>FASHION</h3>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li>
          <div class="content">
            <a href="kid/">
              <figure class="cat-img">
                <span class="img-wrapper" style="background-image:url('images/top/kids_shopping_img01.jpg')"></span>
              </figure>
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">KID<br>FASHION</h3>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li>
          <div class="content">
            <a href="accessory/">
              <figure class="cat-img">
                <span class="img-wrapper" style="background-image:url('images/top/accessories_img01.jpg')"></span>
              </figure>
              <div class="overlay"></div>
              <div class="content-overlay">
                <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">ACCESSORY</h3>
                </div>
              </div>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <div class="map">
      <h2 class="fs-35">Map Of Shop</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477.25390774878025!2d96.1544340821506!3d16.874348016880436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193873f6cf8a9%3A0xc1dba72638842729!2sThumeikta%2016th%20St%2C%20Yangon!5e0!3m2!1sen!2smm!4v1625238562725!5m2!1sen!2smm" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <footer>
    <p class="copyright">©All rights reserved.</p>
  </footer>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/common.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/swiper.js"></script>

</body>

</html>