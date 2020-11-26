@extends('layouts.app')

@section('title')
  Turakeh | Cart
@endsection

@section('content')
  
  <div class="page-content page-cart">
    <!-- breadcrumb -->
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- breadcrumb -->
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item">Cart</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- store cart -->
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 15%;">
                    <img src="/images/product-cart-1.jpg" class="cart-image w-100" />
                  </td>
                  <td style="width: 35%;">
                    <div class="product-detail">Sofa Ternyaman</div>
                    <div class="product-subtitle">by Novi Widiawati</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-detail">Rp 4.750.000</div>
                    <div class="product-subtitle">Rupiah</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 15%;">
                    <img src="/images/product-cart-2.jpg" class="cart-image w-100" />
                  </td>
                  <td style="width: 35%;">
                    <div class="product-detail">Orange Sneaker</div>
                    <div class="product-subtitle">by Esto Store</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-detail">Rp 1.570.000</div>
                    <div class="product-subtitle">Rupiah</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 15%;">
                    <img src="/images/product-cart-3.jpg" class="cart-image w-100" />
                  </td>
                  <td style="width: 35%;">
                    <div class="product-detail">Tatakan Gelas</div>
                    <div class="product-subtitle">by Perkakas Dapur Kita</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-detail">Rp 7.000</div>
                    <div class="product-subtitle">Rupiah</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shipping Details</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 1</label>
              <input type="text" class="form-control" id="addressOne" name="addressOne" value="Sentra Duta Cemara">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressTwo">Address 2</label>
              <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Blok B2 No.46">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="province">Province</label>
              <select name="province" id="province" class="form-control">
                <option value="West Java">West Java</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control">
                <option value="Bandung">Bandung</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="PostalCode">Postal Code</label>
              <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="40512">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" id="country" name="country" value="Indonesia">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Phone Number</label>
              <input type="text" class="form-control" id="mobile" name="mobile" value="+62 85881160001">
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-2">Payment Information</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">Rp 25.000</div>
            <div class="product-subtitle">Country Tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">Rp 38.000</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">Rp 46.000</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">Rp 11.765.000</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">Checkout Now</a>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
