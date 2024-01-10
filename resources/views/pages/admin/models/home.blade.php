<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-header-admin title="Modelos" :paths="['Modelos']"/>
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div class="ms-auto my-auto mt-lg-0 mt-4">
                                    <div class="ms-auto my-auto">
                                        <a href="{{ route('models.create') }}" class="btn bg-gradient-primary btn-sm mb-0">Cadastrar novo modelo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">.

                            <div class="table-responsive">
                                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                    <div class="dataTable-container">
                                        <table class="table table-flush dataTable-table" id="products-list">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th data-sortable="" style="width: 100%;" class="px-2"><a href="" class="dataTable-sorter">Descrição</a></th>
                                                    <th data-sortable=""><a href="" class="dataTable-sorter"></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($models as $model)
                                                <tr>
                                                    <td scope="row">{{ $model->description }}</td>
                                                    <td>
                                                        <a href="{{ route('models.edit', ($model)) }}" class="btn bg-warning btn-sm mb-0 text-white">Editar</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
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