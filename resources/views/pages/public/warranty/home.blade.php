<x-layout.public>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain py-lg-3">
                                <div class="card-body text-center">
                                    <h4 class="mb-0 font-weight-bolder">Pesquisa de garantia</h4>
                                    <p class="mb-4">Pesquisar por número de série</p>
                                    @if (session()->has('errors'))
                                        <div class="alert alert-danger text-white" role="alert">
                                            {{$errors->first()}}
                                        </div>
                                    @endif
                                    <form action="{{ route('findWarranty') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Ex: XXXXXXX"
                                                name="serial_number" id="serial_number"
                                                oninput="activeButton(this.value.length)">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg w-100 bg-gradient-dark mb-0"
                                                onclick="findWarranty()" id="findButton" disabled>Pesquisar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('img/background/curved-blue.jpg') }}')"></div>
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
        function findWarranty() {

        }

        function activeButton(value) {
            const button = document.getElementById('findButton');

            if (value >= 5) {
                button.disabled = false;
            }
        }
    </script>
</x-layout.public>
