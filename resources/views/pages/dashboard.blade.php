@extends('layouts.dashboard')

@section('title')
  Turakeh Dashboard
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
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Customer
                </div>
                <div class="dashboard-card-subtitle">
                  15,209
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Revenue
                </div>
                <div class="dashboard-card-subtitle">
                  $931,290
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Transaction
                </div>
                <div class="dashboard-card-subtitle">
                  22,409,399
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transactions</h5>
            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="./images/dashboard-icon-product-1.png" alt="">
                  </div>
                  <div class="col-md-4">Latte Coffe</div>
                  <div class="col-md-3">Nizam Ahmad</div>
                  <div class="col-md-3">20 Oktober 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img src="./images/ic_arrow.svg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="./images/dashboard-icon-product-2.png" alt="">
                  </div>
                  <div class="col-md-4">Nike Lebron Max</div>
                  <div class="col-md-3">Kevin Sanjaya</div>
                  <div class="col-md-3">20 Oktober 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img src="./images/ic_arrow.svg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="./images/dashboard-icon-product-3.png" alt="">
                  </div>
                  <div class="col-md-4">Sofa Indor Komura</div>
                  <div class="col-md-3">Wulan Sukma</div>
                  <div class="col-md-3">20 Oktober 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img src="./images/ic_arrow.svg" alt="">
                  </div>
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