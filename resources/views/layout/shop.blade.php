@include('vite')
@include('layout.header')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.2/css/easyzoom.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>Document</title>
</head>

<body>
  @vite('resources/assets/css/bootstrap.min.css')
  <div class="container m-auto mt-5 row">
    <p><b>Home</b> / Shop</p>
    <div class="d-flex bg-light col-md-5 p-3" style="max-width: 573px;">
      <div class="d-flex flex-column gap-3">
        <div class="thumbnail text-center">
          <img onclick="change_image(this)" src="img/slideblock/01.png" width="100">
        </div>
        <div class="thumbnail text-center">
          <img onclick="change_image(this)" src="img/slideblock/02.png" width="100">
        </div>
        <div class="thumbnail text-center">
          <img onclick="change_image(this)" src="img/slideblock/03.png" width="100">
        </div>
        <div class="thumbnail text-center">
          <img onclick="change_image(this)" src="img/slideblock/04.png" width="100">
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="text-center p-4">
          <img id="main-image" src="img/slideblock/preview.png" width="404" />
        </div>
      </div>
      <div>
      </div>
    </div>
    <div class="col-md-7">
      <h4><b>Barberton Daisy</b></h4>
      <div class="">
        <div class="d-flex justify-content-between border-bottom border-success-subtle pb-3">
          <h3 class="text-success"><b>$119.00</b></h3>
          <div class="d-flex justify-content-between gap-4">
            <div class="d-flex gap-3 ">
              <i class=" text-warning bi bi-star-fill"></i>
              <i class="text-warning bi bi-star-fill"></i>
              <i class="text-warning bi bi-star-fill"></i>
              <i class="text-warning bi bi-star-fill"></i>
              <i class="text-black-50 bi bi-star-fill"></i>
            </div>
            <p>19 Customer Review</p>
          </div>
        </div>
        <div class="mt-3">
          <h4>Short Description:</h4>
          <p class="text-secondary">
            The ceramic cylinder planters come with a wooden stand to help elevate your plants off the ground. The ceramic
            cylinder planters come with a wooden stand to help elevate your plants off the ground.
          </p>
        </div>
        <div>
          <p>Size:</з>
          <div class="d-flex gap-4 mt-3">
            <button style="width: 30px; height: 30px;" class="d-flex align-items-center justify-content-center border border-success-subtle rounded-circle">S</button>
            <button style="width: 30px; height: 30px;" class="d-flex align-items-center justify-content-center border border-success-subtle rounded-circle text-secondary">M</button>
            <button style="width: 30px; height: 30px;" class="d-flex align-items-center justify-content-center border border-success-subtle rounded-circle text-secondary">L</button>
            <button style="width: 30px; height: 30px;" class="d-flex align-items-center justify-content-center border border-success-subtle rounded-circle text-secondary">XL</button>
          </div>
        </div>
        <div class="mt-3 d-flex align-items-center gap-4">
          <div class="d-flex align-items-center gap-4">
            <button id="decrement" class="btn btn-success rounded-pill">-</button>
            <span id="counter">1</span>
            <button id="increment" class="btn btn-success rounded-pill ">+</button>
          </div>
          <div class="d-flex gap-3">
            <a href="/product" class="btn btn-success rounded"><b>Buy NOW</b></a>
            <button class="border border-success-subtle rounded "><b>Add to cart</b></button>
            <button class="border border-success-subtle rounded p-2 text-success"><i class=" bi bi-heart"></i></button>
          </div>
        </div>
        <div class="mt-3">
          <p class="text-secondary "><span class="text-black-50">SKU:</span> 1995751877966</p>
          <p class="text-secondary"><span class="text-black-50">Categories:</span> Potter Plants</p>
          <p class="text-secondary"><span class="text-black-50">Tags:</span> Home, Garden, Plants</p>
        </div>
        <div class="d-flex align-items-center gap-4  ">
          <p><b>Share this products:</b></p>
          <div class="d-flex align-items-center gap-4 mb-2 ">
            <button><i class="bi bi-facebook"></i></button>
            <button><i class="bi bi-twitter"></i></button>
            <button><i class="bi bi-instagram"></i></button>
            <button><i class="bi bi-pinterest"></i></button>
          </div>
        </div>
      </div>
    </div>



    <div class="mt-5 p-3">
      <nav>
        <div class="d-flex gap-5 mb-5" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews (19)</button>
        </div>
      </nav>

      <div class="tab-content mt-5" id="nav-tabContent">
        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <p class="text-secondary">
            The ceramic cylinder planters come with a wooden stand to help elevate your plants off the ground. The ceramic
            cylinder planters come with a wooden stand to help elevate your plants off the ground. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate
            rutrum.
            Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
          <p class="text-secondary">
            Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit.
            Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero
            hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus,
            consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. The
            ceramic
            cylinder planters come with a wooden stand to help elevate your plants off the ground.
          </p>
          </p>
          <span><b>Living Room:</b></span>
          <p class="text-secondary">
            The ceramic cylinder planters come with a wooden stand to help elevate your plants off the ground. The ceramic
            cylinder planters come with a wooden stand to help elevate your plants off the ground. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit.
          </p>
          <span><b>Dining Room</b>:</span>
          <p class="text-secondary">
            The benefits of houseplants are endless. In addition to cleaning the air of harmful toxins, they can help to
            improve
            your mood, reduce stress and provide you with better sleep. Fill every room of your home with houseplants and
            their
            restorative qualities will improve your life.
          </p>
          <span><b>Office</b>:</span>
          <p class="text-secondary">
            The ceramic cylinder planters come with a wooden stand to help elevate your plants off the ground. The ceramic
            cylinder planters come with a wooden stand to help elevate your plants off the ground. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit.
          </p>
        </div>
        <div class="d-flex gap-4 mt-5  border-bottom">
          <h5 class=text-success><b>Releted Products</b></h5>
        </div>
        <div class="mt-5">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/swiper/image 1.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="img/swiper/image 2.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="img/swiper/image 3.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="img/swiper/image 4.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="img/swiper/image 5.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="img/swiper/image 6.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="img/swiper/image 7.png" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.2/dist/easyzoom.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="/assets/js/app.js"></script>
</body>

</html>
@include('layout.footer')