<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>
  @stack('prepend-style')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="/style/main.css" rel="stylesheet" />
  @stack('addon-style')
</head>

<body>

  <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <!-- sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="/images/logo.svg" alt="" class="my-4">
        </div>
        <div class="list-group list-group-flush">
          <a href="/dashboard.html" class="list-group-item list-group-item-action active">
            Dashboard
          </a>
          <a href="/dashboard-products.html" class="list-group-item list-group-item-action">
            Products
          </a>
          <a href="/dashboard-transactions.html" class="list-group-item list-group-item-action">
            Transactions
          </a>
          <a href="/dashboard-settings.html" class="list-group-item list-group-item-action">
            Store Settings
          </a>
          <a href="/dashboard-account.html" class="list-group-item list-group-item-action">
            Account
          </a>
          <a href="/index.html" class="list-group-item list-group-item-action">
            Sign Out
          </a>
        </div>
      </div>
      <!-- page content -->
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
        @yield('content')

      </div>
    </div>
  </div>

  <!-- footer section -->
  <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="pt-4 pb-4">
            2020 Copyright Store. All Rights Reserved. <br>
            - AlphaLab Digital Indonesia -
          </p>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- Bootstrap core JavaScript -->
  @stack('prepend-script')
  <script src="/vendor/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    $('#menu-toggle').click(function (e) {
      e.preventDefault();
      $('#wrapper').toggleClass('toggled');
    })
  </script>
  @stack('addon-script')
</body>

</html>