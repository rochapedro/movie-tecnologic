<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-header-admin title="Criar nova venda" :paths="['Vendas', 'Cadastrar']"/>
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div class="ms-auto my-auto mt-lg-0 mt-4">
                                    <div class="ms-auto my-auto">
                                        <a href="{{ route('sales.store') }}" class="btn bg-gradient-primary btn-sm mb-0">Voltar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">.
                            <form action="{{ route('sales.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Modelo</label>
                                            <select class="form-control" id="models_id" name="models_id">
                                                <option value="0">Selecione o modelo</option>
                                                @foreach ($models as $model)
                                                <option value="{{ $model->id }}">{{ $model->description }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="serial_number" class="form-control-label">N° de série</label>
                                            <input class="form-control @error('serial_number') is-invalid @enderror" type="text" id="serial_number" name="serial_number">
                                            @error('serial_number')
                                            <p class="form-text text-danger text-xs ms-1">Informe a descrição</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Data da venda</label>
                                        <input class="form-control datetimepicker flatpickr-input" type="date" name="sale_date" id="sale_date">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Prazo de garantia</label>
                                        <input class="form-control datetimepicker flatpickr-input" type="date" name="warranty_period" id="warranty_period">
                                    </div>
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