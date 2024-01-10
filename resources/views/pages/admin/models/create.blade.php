<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-header-admin title="Cadastrar novo modelo" :paths="['Modelos', 'Cadastrar']"/>
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div>
                                    <h5 class="mb-0">Cadastrar novo modelo</h5>
                                </div>
                                <div class="ms-auto my-auto mt-lg-0 mt-4">
                                    <div class="ms-auto my-auto">
                                        <a href="{{ route('models.store') }}" class="btn bg-gradient-primary btn-sm mb-0">Voltar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">.
                            <form enctype="multipart/form-data" action="{{ route('models.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Descrição</label>
                                    <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description">
                                    @error('description')
                                        <p class="form-text text-danger text-xs ms-1">Informe a descrição</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-control-label">Imagem</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                    @error('image')
                                        <p class="form-text text-danger text-xs ms-1">Selecione uma imagem</p>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn bg-gradient-primary btn-sm mt-3 mb-0">Cadastrar</button>
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