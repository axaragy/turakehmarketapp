@extends('layouts.dashboard')

@section('title')
  Turakeh Dashboard Products Detail
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
        <h2 class="dashboard-title">Shirup Marzan</h2>
        <p class="dashboard-subtitle">Product Details</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <form action="">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" name="productName" id="productName" class="form-control"
                          value="Shirup Marzan">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="100.00">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="category">Kategori</label>
                        <select name="category" id="category" class="form-control">
                          <option value="Shipping" selected>Shipping</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="editor">Description</label>
                        <textarea name="editor"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-right">
                      <button type="submit" class="btn btn-success px-5 btn-block">
                        Update Product
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-2 mb-4">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img src="./images/product-card-1.png" alt="" class="w-100">
                      <a href="#" class="delete-gallery">
                        <img src="./images/ic_remove.svg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img src="./images/product-card-2.png" alt="" class="w-100">
                      <a href="#" class="delete-gallery">
                        <img src="./images/ic_remove.svg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img src="./images/product-card-3.png" alt="" class="w-100">
                      <a href="#" class="delete-gallery">
                        <img src="./images/ic_remove.svg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-12">
                    <input type="file" name="" id="file" style="display: none;" multiple>
                    <button class="btn btn-secondary btn-block mt-4" onclick="thisFileUpload()">Add Photo</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
  function thisFileUpload() {
    document.getElementById("file").click()
  }
</script>
<script>
  CKEDITOR.replace('editor');
</script>
@endpush