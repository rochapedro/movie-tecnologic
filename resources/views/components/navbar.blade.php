<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid pe-0">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                        Logo
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto">
                        </ul>
                        <ul class="navbar-nav d-lg-flex d-none">
                            @if (!Request::is('/'))
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="btn btn-round mb-0 me-1 bg-gradient-dark">
                                        <i class="fa fa-home opacity-6 text-white me-1"></i>
                                        Home
                                    </a>
                                </li>
                            @endif
                            @if (Request::is('/'))
                                <li class="nav-item">
                                    <a href="{{ url('/warranty') }}" class="btn btn-round mb-0 me-1 bg-gradient-dark">
                                        <i class="fa fa-file-text-o opacity-6 text-white me-1"></i>
                                        Garantia
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>

<!-- Navbar Light -->
{{-- <nav
  class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Soft UI Dashboard
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <div class="row">
          <div class="col-auto m-auto">
            <a class="cursor-pointer">
              <i class="fa fa-cog fixed-plugin-button-nav"></i>
            </a>
          </div>
          <div class="col-auto m-auto">
            <div class="dropdown">
              <a class="cursor-pointer" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-right px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                ...
              </ul>
            </div>
          </div>
          <div class="col-auto">
            <div class="bg-white border-radius-lg d-flex me-2">
              <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">
              <button class="btn bg-gradient-primary my-1 me-1">Search</button>
            </div>
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav> --}}
<!-- End Navbar -->
