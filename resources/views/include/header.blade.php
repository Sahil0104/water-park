<header class="main">
    <nav class="navbar navbar-default navbar-static-top fluid_header">
      <div class="container">
        <!-- Logo -->
        <div class="col-md-4">
          <a class="navbar-brand" href="index.html"
            ><img src="images/logo.svg" alt="logo"
          /></a>
          <!-- INSERT YOUR LOGO HERE -->
        </div>

        <!-- Main Menu -->
        <div class="col-md-8">
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle toggle-menu menu-right push-body"
              data-toggle="collapse"
              data-target="#main-nav"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div
            class="collapse navbar-collapse pull-right cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right"
            id="main-nav"
          >
            <h3>Menu</h3>
            <ul class="nav navbar-nav navbar-right">
              <li class="active dropdown" role="presentation">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-expanded="false"
                  >home<i class="fa fa-caret-down"></i
                ></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="index.html">Main - Slider</a></li>
                  {{-- <li>
                    <a href="fullscreen-image.html">Fullscreen Image</a>
                  </li>
                  <li>
                    <a href="fullscreen-video.html">Fullscreen Video</a>
                  </li> --}}
                </ul>
              </li>
              <li class="dropdown" role="presentation">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-expanded="false"
                  >pages<i class="fa fa-caret-down"></i
                ></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('about') }}">about us</a></li>
                  <li><a href="404.html">404</a></li>
                  <li><a href="coming-soon.html">coming soon</a></li>
                </ul>
              </li>
              <li class="dropdown" role="presentation">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-expanded="false"
                  >blog<i class="fa fa-caret-down"></i
                ></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="blog-listing.html">blog listing</a></li>
                  <li><a href="blog-detail.html">blog detail</a></li>
                </ul>
              </li>
              <li class="dropdown" role="presentation">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-expanded="false"
                  >contact us<i class="fa fa-caret-down"></i
                ></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="contact.html">contact 1</a></li>
                  <li><a href="contact2.html">contact 2</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>