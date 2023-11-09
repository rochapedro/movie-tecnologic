<x-layout.public>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Bem Vindo!</h3>
                                    <p class="mb-0">Digite seu e-mail e senha para fazer login</p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" aria-describedby="email-addon" name="email" id="email">
                                        </div>
                                        <label>Senha</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Senha"
                                                aria-label="Password" aria-describedby="password-addon" name="password" id="password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe"
                                                checked="" name="remember" id="remember">
                                            <label class="form-check-label" for="rememberMe">Lembrar de mim</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0">Fazer login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('img/background/curved.jpg') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
</x-layout.public>
