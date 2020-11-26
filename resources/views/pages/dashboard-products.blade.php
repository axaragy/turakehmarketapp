@extends('layouts.dashboard')

@section('title')
  Turakeh Dashboard Products
@endsection

@section('content')
<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top aos-init aos-animate scrolled"
    data-aos="fade-down">
    <div class="container-fluid">
      <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">&laquo; Menu</button>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- desktop menu -->
        <ul class="navbar-nav d-none d-lg-flex ml-auto">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
              <img src="/images/ic_user.png" alt="" class="rounded-circle mr-2 profile-picture">
              Hi, Nurifati
            </a>
            <div class="dropdown-menu">
              <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
              <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
              <div class="dropdown-divider"></div>
              <a href="/" class="dropdown-item">Sign Out</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-inline-block mt-2">
              <img src="/images/ic_cart-empty.svg" alt="" />
              <div class="card-badge badge badge-pill">2</div>
            </a>
          </li>
        </ul>
        <!-- mobile -->
        <ul class="navbar-nav d-block d-lg-none">
          <li class="nav-item">
            <a href="#" class="nav-link">
              Hi, Nurifati
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-inline-block">
              Cart
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- section content -->
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Products</h2>
        <p class="dashboard-subtitle">Manage it well and get money</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <a href="/dashboard-products-create.html" class="btn btn-success">Add New Product</a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
              <div class="card-body">
                <img src="/images/product-card-1.png" alt="" class="w-100 mb-2">
                <div class="product-title">
                  Shirup Marzzan
                </div>
                <div class="product-category">
                  Foods
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
              <div class="card-body">
                <img src="/images/product-card-2.png" alt="" class="w-100 mb-2">
                <div class="product-title">
                  Shirup Marzzan
                </div>
                <div class="product-category">
                  Foods
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
              <div class="card-body">
                <img src="/images/product-card-3.png" alt="" class="w-100 mb-2">
                <div class="product-title">
                  Shirup Marzzan
                </div>
                <div class="product-category">
                  Foods
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
              <div class="card-body">
                <img src="/images/product-card-4.png" alt="" class="w-100 mb-2">
                <div class="product-title">
                  Shirup Marzzan
                </div>
                <div class="product-category">
                  Foods
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
              <div class="card-body">
                <img src="/images/product-card-5.png" alt="" class="w-100 mb-2">
                <div class="product-title">
                  Shirup Marzzan
                </div>
                <div class="product-category">
                  Foods
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection