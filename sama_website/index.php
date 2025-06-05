<?php require 'db_connect.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sama</title>

  <script src="https://kit.fontawesome.com/77d12f9e8c.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="custom.css">

  <link rel="stylesheet" href="style.css?v=1.1">
  <link rel="stylesheet" href="./responsive.css">
</head>

<body>

  <!-- navigation -->

  <nav id="nav" class="container-fluid navigation  px-2 px-sm-0   p-0    m-0 justify-content-center d-flex   ">
    <div class="container  m-0 nav-bar d-flex justify-content-between align-items-center px-2 px-sm-0">

      <div class="logo  ">

        <a href="#">
          <img src="./images/sama logo.PNG" height="100%" alt="">
        </a>
      </div>

      <div
        class=" nav-items d-none d-lg-flex gap-5 justify-content-end align-items-center">



        <ul class="nav-items-list justify-content-between align-items-center d-none d-lg-flex list-unstyled m-0 ">

          <li class="dropdown_all"><a href="#" class="nav-item">Motorcycle</a>
            <ul class="sub-menu container p-0  list-unstyled   d-flex flex-column gap-2">

              <div class="sub-menu-list  d-flex flex-column gap-2 h-100 w-100">

                <?php 

                $sql = "SELECT * FROM bike_models ORDER BY created_at asc";
                $stmt = $pdo->query($sql);
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :

                ?>
                <li class="sub-li "><a href="#" class="nav-item1"><?php echo $row['model_name']; ?></a></li>
                <?php endwhile; ?>

                <div class="right-style d-flex align-items-center">
                  <img src="./images/sama logo.PNG" alt="">
                </div>
              </div>

            </ul>
          </li>
          <li class="dropdown_all"><a href="#" class="nav-item">shop</a>

            <ul class="sub-menu-shop sub-menu-acces   list-unstyled  justify-content-between  d-flex  gap-2 ">

              <div class="sub-cata-menu d-flex   align-items-center  justify-content-between   w-100 ">


                <li class=" li-shop "><a href="#" class="nav-item-shop ">accesories</a>
                  <ul class="sub-menu-accesories   list-unstyled   d-flex flex-column gap-1 mt-3">
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                  </ul>
                </li>
                <li class=" li-shop"><a href="#" class="nav-item-shop ">gear</a>
                  <ul class="sub-menu-accesories  list-unstyled   d-flex flex-column gap-1 mt-3">
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                  </ul>
                </li>
                <li class=" li-shop"><a href="#" class="nav-item-shop ">Apparels</a>
                  <ul class="sub-menu-accesories    list-unstyled   d-flex flex-column gap-1 mt-3">
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                    <li class="sub-li sub-li-acces "><a href="#" class="show-item-shop ">all access</a></li>
                  </ul>
                </li>

              </div>




            </ul>
          </li>
          <li><a href="#" class="nav-item">support</a></li>
          <li><a href="#" class="nav-item">locate us</a></li>
          <li><a href="#" class="nav-item">about us</a></li>



        </ul>


        <div class="search-container  bg-white ">
          <input type="text" class=" search-box" placeholder="Search for products..." />
          <div class="divider"></div>
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>





      </div>
      <div class="d-flex align-items-center gap-3 d-lg-none">


        <div class="search-container d-block bg-white">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="bar   d-flex justify-content-end d-lg-none">

          <div class="bar_all">
            <div class="bar-1 bar-2"></div>
            <div class="bar-1 bar-3"></div>
            <div class="bar-1 bar-4"></div>

          </div>

        </div>

      </div>







  </nav>

  <!-- scroll tap up  -->
  <div class="scroll-up" id="scroll-up">
    <svg class="progress-ring" width="60" height="60">
      <circle class="progress-ring-bg" cx="30" cy="30" r="26" />
      <circle class="progress-ring-circle" cx="30" cy="30" r="26" />
    </svg>
    <i class="fa-solid fa-arrow-up"></i>
  </div>


  <!-- herosection -->

  <main class="hero-section  container-fluid d-flex justify-content-center px-2 px-sm-0   p-0 m-0">



    <div class=" hero container d-flex align-items-center    m-0">

      <div class="hero-content col-12 col-md-9  d-flex flex-column  justify-content-center align-items-start gap-1 ">

        <h1 class="hero-title">
          Royal Enfield
        </h1>


        <p class="hero-para">
          spare parts
        </p>
        <button class="btn-secondary shop-now ">
          explore now <i class="fa-solid fa-magnifying-glass"></i>
        </button>




      </div>


    </div>



  </main>

  <!-- hero tag -->

  <section class="hero-tag-section container-fluid d-flex flex-column justify-content-center gap-5  px-0 m-0">

    <div class="hero-tag container d-flex flex-column  px-2 px-sm-0 gap-3">

      <h2 class="hero-tag-title">
        shop <span style="color: var(--secondary-color);">by category </span>
      </h2>

      <div class="horizontal-line col-12  "></div>


    </div>


    <div class="col-12 hero-tag-carousel-wrapper position-relative p-0 ">
      <button class="scroll-btn left"><i class="fa-solid fa-chevron-left"></i></button>

      <div class="hero-tag-carousel d-flex gap-2 gap-md-3    ">
        <!-- Items (same repeated items) -->
      <?php   

      require 'db_connect.php';

      $sql = "SELECT * FROM bike_models ORDER BY created_at asc";
      $stmt = $pdo->query($sql);
      $result = $stmt->fetchAll();

      
      foreach ($result as $bikes) :

      ?>

        <a href="#" class="hero-tag-item">
          <div class="hero-img-container">
            <img src="../sama backend/<?php echo $bikes['image_path']; ?>" alt="<?php echo $bikes['model_name'];?>_image">
          </div>
          <div class="model-name">
            <p class="model-name-1"><?php echo $bikes['model_name']; ?></p>
          </div>
        </a>

        <?php endforeach;?>
      
      </div>

      <button class="scroll-btn right"><i class="fa-solid fa-chevron-right"></i></button>
    </div>

  </section>



  <!-- product section -->

  <section
    class="latest-section container-fluid d-flex flex-column justify-content-center align-items-center p-0  m-0 ">


    <div
      class="container latest-container d-flex flex-column align-items-center justify-content-center px-2 px-sm-0 gap-5">
      <div class=" col-12 latest-content d-flex flex-column gap-4   px-sm-0  ">

        <div class="col-12 d-flex justify-content-between align-items-center   ">

          <div class="">

            <h2 class="accessories-title m-0 ">
              latest products
            </h2>
          </div>

          <div class="view-all  ">
            <p class=" m-0 d-flex justify-content-center align-items-center gap-1">
              view all <i class="fa-solid fa-chevron-right"></i>
            </p>
          </div>
        </div>


        <div class="col-12 horizontal-line">


        </div>
      </div>

      <div class="latest-content-2 col-12 ">

        <div class=" grid   latest-content-2-1 gap-2 gap-md-3 gap-xl-4  row-gap-md-3   ">

          <?php
          $sql = "SELECT * FROM accessories ORDER BY created_at  LIMIT 8";
          $stmt = $pdo->query($sql);
          $accessories = $stmt->fetchAll();

          foreach ($accessories as $accessory) {
            $stmt2 = $pdo->prepare("SELECT image_path FROM accessory_images WHERE accessory_id = ?");
            $stmt2->execute([$accessory['id']]);
            $images = $stmt2->fetchAll();
          ?>

            <div class="g-col-6    g-col-md-4 g-col-xl-3    latest-item ">

          
              <button class="latest-item-seen">
                <i class="fa-solid fa-eye"></i>
              </button>

              <div class="latest-item-1  d-flex flex-column justify-content-center align-items-center gap-4">

                <div
                  class="latest-item-img carousel-container col-12  d-flex justify-content-center overflow-hidden align-items-center">

                  <div class="carousel-track col-12">

                    <?php foreach ($images as $image) : ?>

                      <div class="card1 d-flex justify-content-center col-12">
                        <img src="../sama backend/<?php echo $image['image_path']; ?>"
                          alt="seat_image" />

                      </div>


                    <?php endforeach; ?>

                  </div>

                  <div class="dots"></div>

                  <div class="card-btn">
                    <button class="btn-cara btn-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="btn-cara btn-next"><i class="fa-solid fa-chevron-right"></i></button>
                  </div>

                </div>

                <div class=" col-12 d-flex flex-column justify-content-center align-items-start gap-3">
                  <div class="latest-item-name d-flex flex-column justify-content-center align-items-start gap-1">
                    <h2 class="latest-name m-0">

                      <?php echo htmlspecialchars($accessory['name']); ?>

                    </h2>
                    <p class="latest-desc m-0">
                      <?php echo htmlspecialchars($accessory['sub_heading']); ?>
                    </p>
                  </div>
                  <div class="latest-title-2 col-12    d-flex justify-content-between align-items-center">
                    <div class="latest-title-2-1 d-flex align-items-center gap-1 ">

                      <p class="latest-title-2-1-fake m-0">
                        <i class="fa-solid fa-dollar-sign">
                        </i>

                        <?php echo htmlspecialchars($accessory['price']) + 100; ?>
                      </p>

                      <p class="latest-title-2-1 m-0">
                        <i class="fa-solid fa-dollar-sign"></i>

                        <?php echo htmlspecialchars($accessory['price']); ?>
                      </p>
                    </div>
                    <button type="button" class="latest-btn d-flex justify-content-center align-items-center"

                        data-bs-toggle="modal"
                        data-bs-target="#accessoryModal"
                        data-name="<?php echo $accessory['name']; ?>"
                        data-subheading="<?php echo $accessory['sub_heading']; ?>"
                        data-description="<?php echo $accessory['description']; ?>"
                        data-price="<?php echo $accessory['price']; ?>"
                        data-stock="<?php echo $accessory['stock']; ?>"
                        data-image="<?php echo '../sama backend/' . $images[0]['image_path']; ?>"
                        >
                        <i class="fa-solid fa-shopping-cart"></i>
                      </button>

                    </button>



                  </div>


                </div>
              </div>
            </div>


          <?php } ?>



        </div>
      </div>
    </div>

  </section>


  <!-- product section end -->


  <!-- show three section  -->


  <section class="show-catory-section container-fluid d-flex justify-content-center   px-2 px-sm-0 p-0 m-0 ">

    <div class="show-catory  container p-0 d-flex  m-0">

      <div class="grid col-12 gap-2  gap-lg-3 ">


        <div class="g-col-12 g-col-lg-7 show-catory-1  d-flex align-items-center px-2 px-sm-3 px-xl-5 ">

          <img src="./images/seat_1(1).png" class="shop-catory-img" alt="">

          <div class="shop-catory-1-content col-8  col-xl-6 d-flex flex-column align-items-start gap-1">

            <h3 class="shop-catory-title">
              accessories
            </h3>

            <p class="shop-catory-para">
              Elevate Every Move - Premium Nike Accessories for Style and Performance
            </p>


            <div class="discount">
              <span>30% off</span>
            </div>

            <button class="shop-catory-btn btn-secondary mt-3 ">
              explore now
            </button>


          </div>

        </div>

        <div class="g-col-12 g-col-lg-5 grid gap-2 gap-md-2 gap-lg-0 align-items-between show-catory-2 ">

          <div class="g-col-12 shop-catory-2-1  d-flex align-items-center px-2 px-sm-3  ">
            <img src="./images/gear_jacket.png" class="shop-catory-img" height="90%" alt="">

            <div
              class="shop-catory-1-content mt-sm-4 col-8 col-xl-8 d-flex flex-column align-items-start gap-lg-1 gap-2 ">

              <h3 class="shop-catory-title">
                gear
              </h3>

              <p class="shop-catory-para small-catory-p">
                Gear Up. Go Beyond – High-Performance Nike Gears for Every Athlete
              </p>

              <button class="shop-catory-btn1 btn-secondary mt-3 ">
                explore now
              </button>


              <div class="discount">
                <span>15% off</span>
              </div>

            </div>

          </div>

          <div class="g-col-12 shop-catory-2-1 shop-catory-2-2 d-flex align-items-center px-2 px-sm-3 ">
            <img src="./images/aparel-glass12.png" class="shop-catory-img" height="90%" alt="">

            <div
              class="shop-catory-1-content mt-sm-4 col-8 col-xl-8 d-flex flex-column align-items-start gap-lg-1 gap-2 ">

              <h3 class="shop-catory-title">
                apparel
              </h3>

              <p class="shop-catory-para small-catory-p">
                Wear the Winning Edge – Iconic Nike Apparel Built for Comfort and Powe
              </p>


              <div class="discount">
                <span>20% off</span>
              </div>

              <button class="shop-catory-btn1 btn-secondary mt-3 ">
                explore now
              </button>


            </div>

          </div>

        </div>


      </div>


  </section>


  <!-- accesories product list  -->


  <section class="accesories-section container-fluid d-flex justify-content-center ">

    <div
      class="container  accessories-container d-flex flex-column align-items-center justify-content-center px-2 px-sm-0 p-0  gap-2  gap-md-5">
      <div
        class=" col-12  accessories-heading d-flex flex-column align-items-center justify-content-center  gap-4  px-sm-0">
        <div class="col-12  d-flex justify-content-between align-items-center ">

          <h2 class="accessories-title  ">
            top picked accessories
          </h2>

          <button class="accessories-see-all  d-flex justify-content-center align-items-center gap-2">
            view all <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <div class="line-2  col-12 "></div>
      </div>

      <div class="accessories-content-2 col-12 ">

        <div class=" grid gap-3 row-gap-4   ">


          <?php

          $sql = "SELECT * FROM accessories ORDER BY created_at  LIMIT 4";
          $stmt = $pdo->query($sql);
          $accessories = $stmt->fetchAll();

          foreach ($accessories as $accessory) {
            $stmt2 = $pdo->prepare("SELECT image_path FROM accessory_images WHERE accessory_id = ? LIMIT 1");
            $stmt2->execute([$accessory['id']]);
            $images = $stmt2->fetchAll();
          ?>

            <div class="g-col-12 g-col-md-6   d-flex  justify-content-between align-items-center  accessories-item ">


              <div class="grid g-col-12 gap-2 gap-lg-4 accessories-item-1 ">


                <div class="accessories-item-img  g-col-5  d-flex justify-content-center align-items-center">

                  <img src="../sama backend/<?php echo $images[0]['image_path'] ?>" alt="">


                </div>

                <div
                  class="accessories-content-2-1 g-col-7 d-flex flex-column  justify-content-end  align-items-start gap-2 gap-sm-3 gap-lg-4">

                  <div
                    class="accessories-item-name d-flex flex-column justify-content-center align-items-start gap-1 gap-sm-2 ">
                    <h3 class="accessories-name">

                      <?php echo $accessory['name']; ?>
                    </h3>
                    <p class="accessories-desc">
                      <?php echo $accessory['sub_heading']; ?>
                    </p>

                    <div class="accessories-title-2-1 d-flex align-items-center gap-2 ">
                      <p class="accessories-price-fake">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <?php echo $accessory['price'] + 100; ?>
                      </p>
                      <p class="accessories-price">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <?php echo $accessory['price']; ?>
                      </p>
                    </div>
                  </div>

                  <div class="accessories-title-2 col-12   d-flex flex-column  align-items-start ">


                    <div
                      class="product-btn col-12 d-flex justify-content-between justify-content-sm-start    align-items-start gap-4 ">

                      <button type="button" class="accessories-btn-see">
                        <i class="fa-solid fa-eye"></i>
                      </button>
                      <button type="button" class="accessories-btn-add"
                        data-bs-toggle="modal"
                        data-bs-target="#accessoryModal"
                        data-name="<?php echo $accessory['name']; ?>"
                        data-subheading="<?php echo $accessory['sub_heading']; ?>"
                        data-description="<?php echo $accessory['description']; ?>"
                        data-price="<?php echo $accessory['price']; ?>"
                        data-stock="<?php echo $accessory['stock']; ?>"
                        data-image="<?php echo '../sama backend/' . $images[0]['image_path']; ?>">
                        <i class="fa-solid fa-shopping-cart"></i>
                        shopping
                      </button>





                    </div>



                  </div>
                </div>

              </div>
            </div>

          <?php } ?>

        </div>
      </div>
    </div>

  </section>


  <!-- show item in modal  -->

 <div class="modal fade" id="accessoryModal" tabindex="-1" aria-labelledby="accessoryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="accessoryModalLabel">Accessory Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3 id="modalName"></h3>
        <img id="modalImage" src="" alt="Accessory Image" height="200" class=" object-fit-cover  mb-3" />
        <p class="text-muted" id="modalSubHeading"></p>
        <p id="modalDescription"></p>
        <p><strong>Price: ₹</strong><span id="modalPrice"></span></p>
        <p><strong>Stock:</strong> <span id="modalStock"></span></p>
      </div>
    </div>
  </div>
</div>




  <!-- accessories product list end -->

  <!-- gear section -->
  <section class="accesories-section container-fluid d-flex justify-content-center ">

    <div
      class="container  accessories-container d-flex flex-column align-items-center justify-content-center px-2 px-sm-0 p-0 m-0 gap-2  gap-md-5">
      <div
        class=" col-12  accessories-heading d-flex flex-column align-items-center   justify-content-center  gap-4  px-sm-0">
        <div class="col-12  d-flex justify-content-between align-items-center ">

          <h2 class="accessories-title  ">
            top picked gear
          </h2>

          <button class="accessories-see-all  d-flex justify-content-center align-items-center gap-2">
            view all <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <div class="line-2  col-12 "></div>
      </div>

      <div class="accessories-content-2 col-12 ">

        <div class=" grid gap-3 row-gap-4 accessories-grid   ">

        <?php 

        $sql = "SELECT * FROM gears ORDER BY created_at  LIMIT 4";
        $stmt = $pdo->query($sql);
        $gear_items = $stmt->fetchAll();

        foreach ($gear_items as $gear_item) :
          $stmt2 = $pdo->prepare("SELECT image_path FROM gears_images WHERE gear_id = ? LIMIT 1");
          $stmt2->execute([$gear_item['id']]);
          $images = $stmt2->fetchAll();

          // echo '<pre>';
          // print_r($images);
          // echo '</pre>';



        ?>

          <div class="g-col-12 g-col-md-6   d-flex  justify-content-between align-items-center  accessories-item ">


            <div class="grid g-col-12 gap-2 gap-lg-4 accessories-item-1 ">


              <div class="accessories-item-img  g-col-5  d-flex justify-content-center align-items-center">

                <img src="../sama backend/<?php echo $images[0]['image_path']; ?>" alt="">
              </div>

              <div
                class="accessories-content-2-1 g-col-7 d-flex flex-column  justify-content-end  align-items-start gap-2 gap-sm-3 gap-lg-4">

                <div
                  class="accessories-item-name d-flex flex-column justify-content-center align-items-start gap-1 gap-sm-2 ">
                  <h3 class="accessories-name">

                    <?php echo $gear_item['name']; ?>
                  </h3>
                  <p class="accessories-desc">
                    <?php echo $gear_item['sub_heading']; ?>
                  </p>

                  <div class="accessories-title-2-1 d-flex align-items-center gap-2 ">
                    <p class="accessories-price-fake">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <?php echo $gear_item['price'] + 100; ?>
                    </p>
                    <p class="accessories-price">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <?php echo $gear_item['price']; ?>
                    </p>
                  </div>
                </div>

                <div class="accessories-title-2 col-12   d-flex flex-column  align-items-start ">


                  <div
                    class="product-btn col-12 d-flex justify-content-between justify-content-sm-start    align-items-start gap-4 ">

                    <button type="button" class="accessories-btn-see">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    <button type="button" class="accessories-btn-add"
                      data-bs-toggle="modal"
                        data-bs-target="#accessoryModal"
                      data-id="<?php echo $gear_item['id']; ?>"
                      data-name="<?php echo $gear_item['name']; ?>"
                      data-subheading="<?php echo $gear_item['sub_heading']; ?>"
                      data-description="<?php echo $gear_item['description']; ?>"
                      data-price="<?php echo $gear_item['price']; ?>"
                      data-stock="<?php echo $gear_item['stock']; ?>"
                      data-image="../sama backend/<?php echo $images[0]['image_path']; ?>"
                    >
                      <i class="fa-solid fa-shopping-cart"></i>
                      shopping
                    </button>




                  </div>



                </div>
              </div>

            </div>
          </div> 

          <?php endforeach;?>
          


















        </div>
      </div>
    </div>

  </section>

  <!-- gear section end -->



  <!-- Apparel section   -->

  <section class="accesories-section container-fluid d-flex justify-content-center ">

    <div
      class="container  accessories-container d-flex flex-column align-items-center justify-content-center px-2 px-sm-0 p-0 m-0 gap-2  gap-md-5">
      <div
        class=" col-12  accessories-heading d-flex flex-column align-items-center   justify-content-center  gap-4  px-sm-0">
        <div class="col-12  d-flex justify-content-between align-items-center ">

          <h2 class="accessories-title  ">
            top picked apparel
          </h2>

          <button class="accessories-see-all  d-flex justify-content-center align-items-center gap-2">
            view all <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <div class="line-2  col-12 "></div>
      </div>

      <div class="accessories-content-2 col-12 ">

        <div class=" grid gap-3  row-gap-4 accessories-grid   ">

          <div class="g-col-12 g-col-md-6   d-flex  justify-content-between align-items-center  accessories-item ">


            <div class="grid g-col-12 gap-2 gap-lg-4 accessories-item-1 ">


              <div class="accessories-item-img  g-col-5  d-flex justify-content-center align-items-center">
                <img src="./images/aparel-shirt1.webp" alt="">
              </div>

              <div
                class="accessories-content-2-1 g-col-7 d-flex flex-column  justify-content-end  align-items-start gap-2 gap-sm-3 gap-lg-4">

                <div
                  class="accessories-item-name d-flex flex-column justify-content-center align-items-start gap-1 gap-sm-2 ">

                  <h3 class="accessories-name">

                    Rider’s Life T-Shirt | White
                  </h3>
                  <p class="accessories-desc">
                    100% Cotton Crew neck T-Shirt.
                  </p>

                  <div class="accessories-title-2-1 d-flex align-items-center gap-2 ">
                    <p class="accessories-price-fake">
                      <i class="fa-solid fa-dollar-sign"></i>
                      900
                    </p>
                    <p class="accessories-price">
                      <i class="fa-solid fa-dollar-sign"></i>
                      1000
                    </p>
                  </div>
                </div>

                <div class="accessories-title-2 col-12   d-flex flex-column  align-items-start ">


                  <div
                    class="product-btn col-12 d-flex justify-content-between justify-content-sm-start    align-items-start gap-4 ">

                    <button type="button" class="accessories-btn-see">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    <button type="button" class="accessories-btn-add">
                      <i class="fa-solid fa-shopping-cart"></i>
                      add to cart
                    </button>




                  </div>



                </div>
              </div>

            </div>
          </div>
          <div class="g-col-12 g-col-md-6   d-flex  justify-content-between align-items-center  accessories-item ">


            <div class="grid g-col-12 gap-2 gap-lg-4 accessories-item-1 ">


              <div class="accessories-item-img  g-col-5  d-flex justify-content-center align-items-center">
                <img src="./images/aparel-shirt2.webp" alt="">
              </div>

              <div
                class="accessories-content-2-1 g-col-7 d-flex flex-column  justify-content-end  align-items-start gap-2 gap-sm-3 gap-lg-4">

                <div
                  class="accessories-item-name d-flex flex-column justify-content-center align-items-start gap-1 gap-sm-2 ">
                  <h3 class="accessories-name">

                    Raida Rider’s Life T-Shirt | Navy Blue
                  </h3>
                  <p class="accessories-desc">
                    100% Cotton Crew neck T-Shirt.
                  </p>

                  <div class="accessories-title-2-1 d-flex align-items-center gap-2 ">
                    <p class="accessories-price-fake">
                      <i class="fa-solid fa-dollar-sign"></i>
                      900
                    </p>
                    <p class="accessories-price">
                      <i class="fa-solid fa-dollar-sign"></i>
                      1000
                    </p>
                  </div>
                </div>

                <div class="accessories-title-2 col-12   d-flex flex-column  align-items-start ">


                  <div
                    class="product-btn col-12 d-flex justify-content-between justify-content-sm-start    align-items-start gap-4 ">

                    <button type="button" class="accessories-btn-see">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    <button type="button" class="accessories-btn-add">
                      <i class="fa-solid fa-shopping-cart"></i>
                      add to cart
                    </button>




                  </div>



                </div>
              </div>

            </div>
          </div>
          <div class="g-col-12 g-col-md-6   d-flex  justify-content-between align-items-center  accessories-item ">


            <div class="grid g-col-12 gap-2 gap-lg-4 accessories-item-1 ">


              <div class="accessories-item-img  g-col-5  d-flex justify-content-center align-items-center">
                <img src="./images/aparel-glass1.webp" alt="">
              </div>

              <div
                class="accessories-content-2-1 g-col-7 d-flex flex-column  justify-content-end  align-items-start gap-2 gap-sm-3 gap-lg-4">

                <div
                  class="accessories-item-name d-flex flex-column justify-content-center align-items-start gap-1 gap-sm-2 ">
                  <h3 class="accessories-name">

                    TrailCraft Goggle replacement Lens
                  </h3>
                  <p class="accessories-desc">
                    Replacement lens for TrailCraft goggles.
                  </p>

                  <div class="accessories-title-2-1 d-flex align-items-center gap-2 ">
                    <p class="accessories-price-fake">
                      <i class="fa-solid fa-dollar-sign"></i>
                      900
                    </p>
                    <p class="accessories-price">
                      <i class="fa-solid fa-dollar-sign"></i>
                      1000
                    </p>
                  </div>
                </div>

                <div class="accessories-title-2 col-12   d-flex flex-column  align-items-start ">


                  <div
                    class="product-btn col-12 d-flex justify-content-between justify-content-sm-start    align-items-start gap-4 ">

                    <button type="button" class="accessories-btn-see">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    <button type="button" class="accessories-btn-add">
                      <i class="fa-solid fa-shopping-cart"></i>
                      add to cart
                    </button>




                  </div>



                </div>
              </div>

            </div>
          </div>
          <div class="g-col-12 g-col-md-6   d-flex  justify-content-between align-items-center  accessories-item ">


            <div class="grid g-col-12 gap-2 gap-lg-4 accessories-item-1 ">


              <div class="accessories-item-img  g-col-5  d-flex justify-content-center align-items-center">
                <img src="./images/aparel-bag.webp" alt="">
              </div>

              <div
                class="accessories-content-2-1 g-col-7 d-flex flex-column  justify-content-end  align-items-start gap-2 gap-sm-3 gap-lg-4">

                <div
                  class="accessories-item-name d-flex flex-column justify-content-center align-items-start gap-1 gap-sm-2 ">
                  <h3 class="accessories-name">

                    saddel bag

                  </h3>
                  <p class="accessories-desc">
                    Spacious and durable saddle bag for all your riding essentials.
                  </p>

                  <div class="accessories-title-2-1 d-flex align-items-center gap-2 ">
                    <p class="accessories-price-fake">
                      <i class="fa-solid fa-dollar-sign"></i>
                      900
                    </p>
                    <p class="accessories-price">
                      <i class="fa-solid fa-dollar-sign"></i>
                      1000
                    </p>
                  </div>
                </div>

                <div class="accessories-title-2 col-12   d-flex flex-column  align-items-start ">


                  <div
                    class="product-btn col-12 d-flex justify-content-between justify-content-sm-start    align-items-start gap-4 ">

                    <button type="button" class="accessories-btn-see">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    <button type="button" class="accessories-btn-add">
                      <i class="fa-solid fa-shopping-cart"></i>
                      add to cart
                    </button>




                  </div>



                </div>
              </div>

            </div>
          </div>


















        </div>
      </div>
    </div>

  </section>
  <!-- apparel section end -->





  <!-- about section -->

  <!-- <section class="about-section container-fluid d-flex justify-content-center  px-2 px-sm-0 p-0 m-0">

    <div
      class="container about d-flex flex-column flex-md-row justify-content-center align-items-start about m-0 gap-3 gap-md-0">


      <div class="col-12 col-md-5  about-img d-flex justify-content-center align-items-center">



        <img src="./images/img-about.jpg" class="section-about__img" alt="">


      </div>

      <div
        class="col-12 col-md-7 about-content d-flex flex-column justify-content-space-between align-items-start gap-3 gap-md-4 gap-lg-5">

        <div class="about-content-1  d-flex flex-column justify-content-center align-items-start gap-3">

          <h3 class="about-title">
            About Us
          </h3>

          <h2 class="about-subtitle">
            Great performance <br>
            that matters in future

          </h2>

          <p class="about-para">
            Dolore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip exa comads consequat asuis
            aute irure dolor in reprehenderit in voluptate velit esse cilum dolore fugiat sed ipsum nulla pariatur
            nostrul done elit magna. </p>



        </div>


        <div class="grid main-grid row-gap-4  ">



          <div class="g-col-12 g-col-sm-6 g-col-md-6 about-item">

            <div class="d-flex gap-2 gap-lg-3 ">

              <div class="about-item-img d-flex  align-items-start">
                <div class="about-item-img-1 d-flex justify-content-center align-items-center">

                  <i class="fa-solid fa-bolt"></i>

                </div>


              </div>

              <div class="grid-item-text d-flex flex-column justify-content-center align-items-start gap-2">

                <h3 class="about-title-2">

                  Cutting Edge Tech

                </h3>

                <p class="about-para">
                  Exercitation ullamco laboris nis exa duis aute irure dolor.

                </p>


              </div>



            </div>

          </div>
          <div class="g-col-12 g-col-sm-6 g-col-md-6 about-item">

            <div class="d-flex gap-3 ">

              <div class="about-item-img d-flex  align-items-start">
                <div class="about-item-img-1 d-flex justify-content-center align-items-center">

                  <i class="fa-solid fa-helmet-safety"></i>

                </div>


              </div>

              <div class="grid-item-text d-flex flex-column justify-content-center align-items-start gap-2">

                <h3 class="about-title-2">

                  Perfect Styling

                </h3>

                <p class="about-para">
                  Exercitation ullamco laboris nis exa duis aute irure dolor.

                </p>


              </div>



            </div>

          </div>
          <div class="g-col-12 g-col-sm-6 g-col-md-6 about-item">

            <div class="d-flex gap-3 ">

              <div class="about-item-img d-flex  align-items-start">
                <div class="about-item-img-1 d-flex justify-content-center align-items-center">

                  <i class="fa-solid fa-gear"></i>

                </div>


              </div>

              <div class="grid-item-text d-flex flex-column justify-content-center align-items-start gap-2">

                <h3 class="about-title-2">

                  Distinctive Beauty

                </h3>

                <p class="about-para">
                  Exercitation ullamco laboris nis exa duis aute irure dolor.

                </p>


              </div>



            </div>

          </div>
          <div class="g-col-12 g-col-sm-6 g-col-md-6 about-item">

            <div class="d-flex gap-3 ">

              <div class="about-item-img d-flex  align-items-start">
                <div class="about-item-img-1 d-flex justify-content-center align-items-center">

                  <i class="fa-solid fa-lightbulb"></i>

                </div>


              </div>

              <div class="grid-item-text d-flex flex-column justify-content-center align-items-start gap-2">

                <h3 class="about-title-2">

                  Radiance Polishing

                </h3>

                <p class="about-para">
                  Exercitation ullamco laboris nis exa duis aute irure dolor.

                </p>


              </div>



            </div>

          </div>


        </div>

        <div class="col-12 about-content-3 d-none d-md-block  ">

          <div class="grid col-12  about-image-2    row-gap-4  ">

            <div class="about-image-2-1 g-col-6">

            </div>
            <div class="about-image-2-2 g-col-6">

            </div>




          </div>

        </div>











      </div>







    </div>

  </section> -->


  <!-- about section end -->

  <!-- faq section  -->



  <section class="faq-container container-fluid">

    <div class="faq-list container px-2 px-sm-0 p-0  ">
      <div class="faq-header my-2 my-md-5">

        <h2 class="faq-h2">Frequently Asked Questions</h2>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>Are these accessories compatible with my Royal Enfield model?</h3>
        </div>
        <div class="faq-answer">
          <p>Yes! Most products list compatible models (e.g., Classic 350, Himalayan) in the description. For specific
            compatibility, contact our support team via WhatsApp.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>What's your delivery time?</h3>
        </div>
        <div class="faq-answer">
          <p>Standard shipping takes 3-7 days in India and 7-15 days internationally. Express shipping options are
            available at checkout.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>Do you offer installation guides for accessories?</h3>
        </div>
        <div class="faq-answer">
          <p>Most accessories come with DIY guides. For complex installations, we recommend professional help or refer
            to our YouTube tutorials.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>What if the product doesn't fit my bike?</h3>
        </div>
        <div class="faq-answer">
          <p>We offer 7-day returns for unused items in original packaging. Check sizing charts or contact us before
            ordering to ensure perfect fitment.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>Can I return an item?</h3>
        </div>
        <div class="faq-answer">
          <p>Yes! We offer 7-day returns for unused items in original packaging. Check sizing charts or contact us
            before ordering to ensure perfect fitment.</p>
        </div>


      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>Do you offer international shipping?</h3>
        </div>
        <div class="faq-answer">
          <p>Yes! We ship worldwide. Shipping costs and delivery times vary by location. Check our shipping policy for
            details.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>What payment methods do you accept?</h3>
        </div>
        <div class="faq-answer">
          <p>We accept major credit cards, PayPal, and Cash on Delivery (COD) for Indian orders. International orders
            require prepayment via PayPal/credit card.</p>
        </div>
      </div>

  </section>

  <!-- faq section end -->

  <!-- video container  -->

  <div class="video-container" id="video-container">
    <video autoplay muted loop id="background-video">
      <source src="https://cdn.pixabay.com/video/2015/08/25/569-137189528_large.mp4" type="video/mp4">

    </video>
    <div class="overlayvc"></div>

  </div>

  <!-- video container end -->


  <!-- footer -->

  <footer class="footer-section container-fluid d-flex flex-column justify-content-center align-items-center">

    <div class="footer-fake">

    </div>




    <div class=" container footer-container d-flex justify-content-between align-items-center px-2 px-sm-0 p-0 ">

      <div class="footer-logo d-flex justify-content-center align-items-center gap-2">
        <div class="logo">

          <a href="#">
            <img src="./images/sama logo.PNG" height="100%" alt="">
          </a>
        </div>

      </div>
      <div class="social-link d-flex gap-2 align-items-center">
        <h3 class="footer-para d-none d-md-block  ">
          follow on :
        </h3>

        <a href="#" class="social-link-item">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="#" class="social-link-item">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="#" class="social-link-item">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="#" class="social-link-item">
          <i class="fa-brands fa-youtube"></i>
        </a>
      </div>
    </div>

    <div class="footer-line "></div>

    <!-- footer content  -->

    <div class="container d-none d-md-block z-index-2 footer-container    px-2 px-sm-0 p-0   ">

      <div class="grid">


        <div
          class=" footer-content g-col-lg-3 g-col-md-6 g-col-12   d-flex flex-column justify-content-start align-items-start gap-2">

          <h2 class="footer-title">
            Motorcycle
          </h2>


          <ul class="footer-list  d-flex flex-column justify-content-center align-items-start gap-1">



            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Classic 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Hunter 350 </a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Continental GT 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Interceptor 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Shotgun 650</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Super Meteor 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Meteor 350</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Scram 440</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Goan Classic 350</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Bear 650</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Guerrilla 450</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Shotgun 650</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Himalayan 450</a>
            </li>
          </ul>






        </div>
        <div
          class=" footer-content g-col-lg-3 g-col-md-6 g-col-12   d-flex flex-column justify-content-start align-items-start gap-2">

          <h2 class="footer-title">
            General Inquiries
          </h2>






          <ul class="footer-list  d-flex flex-column justify-content-center align-items-start gap-1">

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> About Us</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Shipping and Returns</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Privacy Policy</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Terms and Conditions</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> FAQs</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Warranty Information</a>
            </li>

          </ul>


        </div>
        <div
          class="footer-content g-col-lg-3 g-col-md-6 g-col-12   d-flex flex-column justify-content-start align-items-start gap-2">

          <h2 class="footer-title">
            Quick Links
          </h2>



          <ul class=" footer-page-links d-flex flex-column   gap-1">

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Home</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Accessories</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Gear</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Apparels</a>
            </li>



          </ul>


        </div>

        <div
          class="footer-content g-col-lg-3 g-col-md-6 g-col-12   d-flex flex-column justify-content-start align-items-start gap-2">


          <h2 class="footer-title">
            Contact Us
          </h2>




          <div class="footer-contact-info d-flex flex-column justify-content-center align-items-start gap-1">

            <ul class="footer-list d-flex flex-column justify-content-center align-items-start gap-1">

              <li class="footer-list-item">
                <p class="footer-para">
                  Address:
                  <a href="#" class="footer-list-link"> 1234 Street Name, City, State, Zip</a>

                </p>
              </li>

              <li class="footer-list-item">
                <p class="footer-para">
                  Phone:
                  <a href="#" class="footer-list-link"> +91 1234567890</a>

                </p>
              </li>
              <li class="footer-list-item">
                <p class="footer-para">
                  Email:

                  <a href="#" class="footer-list-link"> support@example.com</a>
                </p>
              </li>

            </ul>



          </div>

        </div>

      </div>








    </div>

    <div class="container d-block d-md-none z-index-2 footer-container-2   px-2 px-sm-0 p-0   ">
      <div class="footer-item">
        <div class="footer-acc">
          <h3 class="footer-title">Motorcycle <i class="fa-solid fa-angle-down"></i></h3>
        </div>
        <div class="footer-answer">
          <ul class="footer-list  d-flex flex-column justify-content-center align-items-start gap-1">



            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Classic 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Hunter 350 </a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Continental GT 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Interceptor 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Shotgun 650</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Super Meteor 650</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Meteor 350</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Scram 440</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Goan Classic 350</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Bear 650</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Guerrilla 450</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Shotgun 650</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Himalayan 450</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-item">
        <div class="footer-acc">
          <h3 class="footer-title">General Inquiries <i class="fa-solid fa-angle-down"></i></h3>
        </div>
        <div class="footer-answer">
          <ul class="footer-list  d-flex flex-column justify-content-center align-items-start gap-1">

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> About Us</a>
            </li>

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Shipping and Returns</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Privacy Policy</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Terms and Conditions</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> FAQs</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Warranty Information</a>
            </li>

          </ul>
        </div>
      </div>
      <div class="footer-item">
        <div class="footer-acc">
          <h3 class="footer-title">Quick Links <i class="fa-solid fa-angle-down"></i></h3>
        </div>
        <div class="footer-answer">
          <ul class=" footer-page-links d-flex flex-column   gap-1">

            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Home</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Accessories</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Gear</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link"> Apparels</a>
            </li>

          </ul>
        </div>
      </div>

      <div class="footer-item">
        <div class="footer-acc">
          <h3 class="footer-title">Contact Us <i class="fa-solid fa-angle-down"></i></h3>
        </div>
        <div class="footer-answer">
          <ul class="footer-list d-flex flex-column justify-content-center align-items-start gap-1">

            <li class="footer-list-item">
              <p class="footer-para">
                Address:
                <a href="#" class="footer-list-link"> 1234 Street Name, City, State, Zip</a>

              </p>
            </li>

            <li class="footer-list-item">
              <p class="footer-para">
                Phone:
                <a href="#" class="footer-list-link"> +91 1234567890</a>

              </p>
            </li>
            <li class="footer-list-item">
              <p class="footer-para">
                Email:

                <a href="#" class="footer-list-link"> 1A5lL@example.com</a>

              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>




    <div class="footer-line "></div>
    <div class="footer-copyright d-flex justify-content-center align-items-center gap-2">
      <p class="footer-para">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script> Sama. All rights reserved.
      </p>



    </div>



  </footer>







<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script type="module" src="./js/java.js"></script>



</body>

</html>