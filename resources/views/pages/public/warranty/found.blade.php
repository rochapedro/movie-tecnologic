<x-layout.public>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header mt-7">
                <div class="container">
                    <x-header title="Editar modelo" :paths="['Suporte de Garantia']" />
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="main mt-5">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('img/models') . '/' . $sale->models->image }}" alt="">
                                <h4 class="font-weight-normal">{{ $sale->models->description }}</h4>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-shield fa-2x" aria-hidden="true"></i>
                                    <h3 class="mb-0 mx-2 font-weight-bold">Garantia</h3>
                                </div>
                                <div class="d-flex flex-column">
                                  <p class="font-weight-normal mt-4 mb-2">Status da garantia: <span class="{{ $sale->warranty_status ? 'text-success' : 'text-danger' }} font-weight-bold">{{ $sale->warranty }}</span></p>

                                  @if ($sale->warranty_status)
                                    <p class="font-weight-normal">Prazo de garantia: <span class="font-weight-bold">{{ $sale->warranty_result }} dias restantes</span></p>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: {{ $sale->warranty_percent }}%;" aria-valuenow="{{ $sale->warranty_percent }}" aria-valuemin="0" aria-valuemax="100">{{ $sale->warranty_percent }}%</div>
                                    </div>
                                  @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer py-5 mt-4">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-4 mx-auto text-center">
                  @if ($configurations->whatsapp)
                      <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                          <i class="fa fa-whatsapp" aria-hidden="true"></i>
                          {{ $configurations->whatsapp }}
                      </a>
                  @endif

                  @if ($configurations->telephone)
                      <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                          {{ $configurations->telephone }}
                      </a>
                  @endif
              </div>
          </div>
          <div class="row">
              <div class="col-8 mx-auto text-center mt-1">
                  <p class="mb-0 text-secondary">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                        {{ $configurations->email }}
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                      <strong>CNPJ: </strong>
                        {{ $configurations->cnpj }}
                    </a>
                  </p>
              </div>
          </div>
      </div>
  </footer>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
</x-layout.public>
