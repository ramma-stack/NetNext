<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="swiper/swiper-bundle.min.css" />

  <script src="swiper/swiper-bundle.js"></script>
  <script src="swiper/swiper-bundle.min.js"></script>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/Home.css" />
  <link rel="icon" href="image/cursor-icon-move.cur">
  <title>NetNext</title>
</head>

<body>
  <header>

    <?php include 'includes/nav.php' ?>

    <?php  include 'includes/navbar.php'  ?>

    <section class="section_three">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="transition: all 5s">
          <div class="carousel-item active">
            <img style="
                background-image: linear-gradient(
                  rgba(0, 0, 0, 0.8),
                  rgba(0, 0, 0, 0.6)
                );
                position: absolute;
                height: 100%;
              " src="image/color-bg.png" class="d-block w-100" alt="..." />
        <img src="image/pexels-andrea-piacquadio-853151.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
              <h5>Expreience <span>Next Gen+</span> Internet</h5>
              <p>Comes Prepacked With <span>NetNext</span> Movie Pack</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="
                object-fit: cover;
                background-image: linear-gradient(
                  rgba(0, 0, 0, 0.6),
                  rgba(0, 0, 0, 0.7)
                );
                position: absolute;
                height: 100%;
              " src="image/color-bg.png" class="d-block w-100" alt="..." />
        <img src="image/pexels-andrea-piacquadio-935756.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
              <h5>
                Stream your <br />
                Favorite Showing
              </h5>
              <p>Start from <span>$39</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="
                background-image: linear-gradient(
                  rgba(0, 0, 0, 0.7),
                  rgba(0, 0, 0, 0.7)
                );
                background-repeat: repeat-y;
                position: absolute;
                height: 100%;
              " src="image/color-bg.png" class="d-block w-100" alt="..." />
        <img src="image/pexels-pixabay-373543.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
              <p>Get the Next Gen Broadband Internet Connection</p>
              <h5>1 Gbps Internet <span>$14.99/mo </span> <br /></h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

  </header>

  <main>
    <section class="section_four container d-flex justify-content-center flex-column ">
      <div class="sec1 d-flex align-items-center flex-column ">
        <h1>Recent Shows</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Ut enim ad minim
          veniam.</p>
      </div>
      <div class="sec2">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="recetn_slide card h-100">
              <img src="image/8 wenaka/shop-3-1000x1000.jpg" class="card-img-top" alt="...">
              <div class="photo">
                <ul>
                  <li>
                    <a href="#">Select Option</a>
                  </li>
                  <li>
                    <i class="fas fa-cart-arrow-down"></i>
                  </li>
                </ul>
              </div>
              <div class="card-body d-flex align-items-center flex-column">
                <h5 class="card-title">Additional Boost NetNext Router</h5>
                <p class="card-text">This is a wider card with supporting text below</p>
                <bdi class="card-subtitle"><span>$</span>15.00</bdi>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="recetn_slide card h-100 justify-content-sm-center">
              <img src="image/8 wenaka/shop-11-1000x1000.jpg" class="card-img-top" alt="...">
              <div class="photo">
                <ul>
                  <li>
                    <a href="#">Select Option</a>
                  </li>
                  <li>
                    <i class="fas fa-cart-arrow-down"></i>
                  </li>
                </ul>
              </div>
              <div class="card-body d-flex align-items-center flex-column">
                <h5 class="card-title">NetNext Mega Speed Router</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in</p>
                <bdi class="card-subtitle"><span>$</span>15.00</bdi>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="recetn_slide card h-100">
              <img src="image/8 wenaka/shop-9-1000x1000.jpg" class="card-img-top" alt="...">
              <div class="photo">
                <ul>
                  <li>
                    <a href="#">Select Option</a>
                  </li>
                  <li>
                    <i class="fas fa-cart-arrow-down"></i>
                  </li>
                </ul>
              </div>
              <div class="card-body d-flex align-items-center flex-column">
                <h5 class="card-title">Virtual Reality Helmet Zero Spin</h5>
                <p class="card-text">Pellente que habitant morbi tri tique enectu et netu et</p>
                <bdi class="card-subtitle"><span>$</span>35.00</bdi>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section_five container-fluid">
      <div class="sect_one row d-flex justify-content-start flex-nowrap">
        <div class="col-2"></div>
        <div class="col-5">
          <div class="sect_one row col-4 mb-5">
            <h1>We Deliver the Best Networking Devices</h1>
          </div>
          <div class="sect_one row mb-5">
            <p>Get HighBand Internet. Starting from
              <bdi><span>$</span>35</bdi></p>
          </div>
          <div class="sect_one row ps-3 ">
            <button class="btn1">Browse Routers &MediumSpace;<i class="fas fa-long-arrow-alt-right"></i></button>
          </div>
        </div>
      </div>
    </section>
      <section id="image" class="image container-fluid">
        <button id="buton-exit" class="exit_icon fas fa-times"></button>
        
        <div id="carouselExampleIndicators" class="carousel slide show-image d-flex flex-nowrap" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/swiper/shop-2-1000x1000_adobespark.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="image/swiper/shop-3-1000x1000_adobespark.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="image/swiper/shop-4_adobespark.png" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    <section class="section_sex container d-flex justify-content-center flex-column ">



      <div class="sec1 d-flex align-items-center flex-column ">
        <h1 class="h1">Featured Product</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Ut enim ad minim
          veniam.</p>
      </div>
      <div class="container d-flex flex-sm-wrap mt-4">
        <div class="sec2 row d-flex flex-wrap justify-content-center">
          <div class="col-6">
            <div class="swiper-container gallery-top">
              <button id="buton-show" class="viwe_icon fas fa-search"></button>
              <div class="swiper-wrapper">
                <img class="swiper-slide" src="image/swiper/shop-2-1000x1000_adobespark.png" alt="">
                <img class="swiper-slide" src="image/swiper/shop-4_adobespark.png" alt="">
                <img class="swiper-slide" src="image/swiper/shop-3-1000x1000_adobespark.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="row">
              <h1 style="font-size: 40px; font-weight: bold;">NetNext Mega Hyper Router</h1>
              <h1 style="color: #ff156e; font-size: 40px; font-weight: bold;">$20.00</h1>
            </div>
            <br>
            <div class="row">
              <p style="font-size: 20px;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            </div>
            <br>
            <div class="row">
              <h5 style=" font-size: 30px; font-weight: 500;">Quantity</h5>
            </div>
            <div class="row mt-3 ms-0">
              <input
                style="padding-left: 10px; outline: none; border: none; border-bottom:3px solid rgb(160, 160, 160); width: 150px; height: 50px; font-size: 25px;"
                type="number" step="1" min="1" value="1">
            </div>
            <br>
            <button class="btn1 mt-4 ms-0">Add to cart</button>
            <div class="row ms-2"></div>
            <div class="row ms-2"></div>
            <div class="row ms-2"></div>
          </div>
        </div>
      </div>

    </section>

    <section class="section_seven mt-5">
      <div class="backg">
        <div class="div_one">
          <div class="line_up"></div>
        </div>
        <div class="container">
          <div class="col-10">
            <h1 class="title my-5">Internet Service Designed with your Business in Mind.</h1>
          </div>
        </div>
        <div class="line_down"></div>
      </div>
      <div class="div_tow mt-5">
        <div class="container">
          <div class="row">
            <div class="col px-0  row_col1 me-5">
              <div class="img ms-0"></div>
              <div class="row row2">
                <div class="data">
                  <img class="mx-4 mt-5" src="image/technology-icon-1.png" alt="">
                  <h2 class="mx-4 mt-4">Most Reliable and Fastest Internet For Your Business</h2>
                  <ul class="mt-4 mb-4">
                    <li>
                      <i class="fas fa-check-circle me-2"></i>
                      Fast service and fast to deploy
                    </li>
                    <li>
                      <i class="fas fa-check-circle me-2"></i>
                      Peerless network reliability
                    </li>
                    <li>
                      <i class="fas fa-check-circle me-2"></i>
                      White-glove customer support
                    </li>
                  </ul>
                  <hr class="ms-4" style="width: 85%;">
                  <button class="btn1 mt-4 ms-4 mb-5">Browse Routers &MediumSpace;<i
                      class="fas fa-long-arrow-alt-right"></i></button>
                </div>
              </div>

            </div>

            <div class="col px-0 row_col2 ms-5 mt-3">
              <div class="img ms-0"></div>
              <div class="row row2">
                <div class="data">
                  <img class="mx-4 mt-5" src="image/technology-icon-2.png" alt="">
                  <h2 class="mx-4 mt-4">Built for Speed. Built for Privacy. Built for Streaming.</h2>
                  <ul class="mt-4 mb-4">
                    <li>
                      <i class="fas fa-check-circle me-2"></i>
                      Price for Life guarantee
                    </li>
                    <li>
                      <i class="fas fa-check-circle me-2"></i>
                      Privacy taken seriously
                    </li>
                    <li>
                      <i class="fas fa-check-circle me-2"></i>
                      No throttling. No data cap.
                    </li>
                  </ul>
                  <hr class="ms-4" style="width: 85%;">
                  <button class="btn1 mt-4 ms-4 mb-5">Browse Routers &MediumSpace;<i
                      class="fas fa-long-arrow-alt-right"></i></button>
                </div>
              </div>

            </div>
          </div>



        </div>
      </div>
    </section>

    <section class="section_elevn container d-flex justify-content-center flex-column ">
      <div class="sec1 d-flex align-items-center flex-column ">
        <h1>Our Quality Products</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Ut enim ad minim
          veniam.</p>
      </div>
      <div class="sec2">
        <div class="container">
          <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-10-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-11-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-13-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-15-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-6-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-7-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-9-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xxl-3">
              <div class="col">
                <div class="Products_slide card mb-4">
                  <img src="image/8 wenaka/shop-3-1000x1000.jpg" class="card-img-top" alt="...">
                  <div class="photo">
                    <ul>
                      <li>
                        <a href="#">Select Option</a>
                      </li>
                      <li>
                        <i class="fas fa-cart-arrow-down"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body d-flex align-items-center flex-column">
                    <h5 class="card-title">Additional Boost NetNext Router</h5>
                    <bdi class="card-title mt-4 mb-0"><span>$</span>15.00</bdi>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

  </main>

  <?php  include 'includes/footer.php'  ?>

  <script src="js\Home.js"></script>
</body>

</html>