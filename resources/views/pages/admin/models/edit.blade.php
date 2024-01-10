<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-header-admin title="Editar modelo" :paths="['Modelos', 'Editar']"/>
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div class="ms-auto my-auto mt-lg-0 mt-4">
                                    <div class="ms-auto my-auto">
                                        <a href="{{ route('models.index') }}" class="btn bg-gradient-primary btn-sm mb-0">Voltar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">.
                            <form enctype="multipart/form-data" action="{{ route('models.update', ($model)) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Descrição</label>
                                    <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" value="{{ $model->description }}">
                                    @error('description')
                                        <p class="form-text text-danger text-xs ms-1">Informe a descrição</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-control-label">Imagem</label>
                                    <input type="hidden" name="current_image" value="{{ $model->image }}">
                                    @error('current_image')
                                        <p class="form-text text-danger text-xs ms-1">{{$message}}</p>
                                    @enderror
                                    <input class="form-control" type="file" id="image" name="image">
                                    @error('image')
                                        <p class="form-text text-danger text-xs ms-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn bg-gradient-primary btn-sm mt-3 mb-0">Editar</button>
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