@extends('layouts.app')

@section('title')
    Turakeh
@endsection

@section('content')
  <div class="page-content page-home">
    <!-- a carousel section -->
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./images/banner-1.jpg" alt="carousel img" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./images/banner-1.jpg" alt="carousel img" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="./images/banner-1.jpg" alt="carousel img" class="d-block w-100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- categories section -->
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-img">
                <img src="./images/categories-gadgets.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">Gadgets</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-img">
                <img src="./images/categories-furniture.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">Furniture</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-img">
                <img src="./images/categories-makeup.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">Make Up</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-img">
                <img src="./images/categories-sneaker.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">Sneaker</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-img">
                <img src="./images/categories-tools.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">Tools</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-img">
                <img src="./images/categories-baby.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">Baby</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- products section -->
    <section class="store new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-applewatch.jpg')">
                </div>
              </div>
              <div class="products-text">Nuko Watch</div>
              <div class="products-price">Rp 265.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-orange.jpg')">
                </div>
              </div>
              <div class="products-text">Bogota Shoes</div>
              <div class="products-price">Rp 485.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-sofa.jpg')">
                </div>
              </div>
              <div class="products-text">Sofaku</div>
              <div class="products-price">Rp 4.265.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-bubuk.jpg')">
                </div>
              </div>
              <div class="products-text">Bubuk Maketti</div>
              <div class="products-price">Rp 45.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-tatakangelas.jpg')">
                </div>
              </div>
              <div class="products-text">Tatakan Gelas</div>
              <div class="products-price">Rp 15.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-drone.jpg')">
                </div>
              </div>
              <div class="products-text">Everdrone X5000 </div>
              <div class="products-price">Rp 3.488.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-nike-shoes.jpg')">
                </div>
              </div>
              <div class="products-text">Nike Running</div>
              <div class="products-price">Rp 1.265.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/products-monkey-toys.jpg')">
                </div>
              </div>
              <div class="products-text">Bokena Monyet Lucu</div>
              <div class="products-price">Rp 65.000</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection