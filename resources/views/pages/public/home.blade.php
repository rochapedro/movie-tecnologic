<x-layout.public>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain py-lg-3">
                                <div class="card-body text-center">
                                    <h2 class="mb-4 font-weight-bolder">Pesquisa de garantia</h2>
                                    <p class="mt-5 mb-4">Dissuade ecstatic and properly saw entirely sir why laughter
                                        endeavor. In on my jointure horrible margaret suitable he followed speedily.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('img/background/woman.jpg') }}')"></div>
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
                    @if (optional($configurations)->whatsapp)
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            {{ $configurations->whatsapp }}
                        </a>
                    @endif

                    @if (optional($configurations)->telephone)
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
                        @if (optional($configurations)->email)
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                              {{ $configurations->email }}
                          </a>
                    @endif
                      
                      @if (optional($configurations)->cnpj)
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            <strong>CNPJ: </strong>
                            {{ $configurations->cnpj }}
                        </a>
                    @endif
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
