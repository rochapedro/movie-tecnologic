<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-admin-header title="Configurações" :paths="['Configurações']"/>
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">.
                            <form action="{{ route('configurations.update', ($configurations)) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="whatsapp" class="form-control-label">Whatsapp</label>
                                    <input class="form-control" type="text" id="whatsapp" name="whatsapp" value="{{ $configurations->whatsapp }}">
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="form-control-label">Telefone</label>
                                    <input class="form-control" type="text" id="telephone" name="telephone" value="{{ $configurations->telephone }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-control-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email" value="{{ $configurations->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="cnpj" class="form-control-label">CNPJ</label>
                                    <input class="form-control" type="text" id="cnpj" name="cnpj" value="{{ $configurations->cnpj }}">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn bg-gradient-primary btn-sm mt-3 mb-0">Salvar informações</button>
                                </div>
                            </form>
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