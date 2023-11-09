<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
              <h6 class="font-weight-bolder mb-0">Vendas</h6>
            </nav>
          </div>
        </nav>

        <div class="container-fluid py-4">
          <div class="row mt-4">
            <div class="col-12">
              <div class="card z-index-2">
                <div class="card-header pb-0">
                  <h6>Página vendas em desenvolvimento</h6>
                </div>
                <div class="card-body p-3">
                  <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
</x-layout.admin>
