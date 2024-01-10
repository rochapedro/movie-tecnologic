<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-header-admin title="Vendas" :paths="['Vendas']"/>
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div class="ms-auto my-auto mt-lg-0 mt-4">
                                    <div class="ms-auto my-auto">
                                        <a href="{{ route('sales.create') }}"
                                            class="btn bg-gradient-primary btn-sm mb-0">Cadastrar nova venda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">.

                            <div class="table-responsive">
                                <div
                                    class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                    <div class="dataTable-container">
                                        <table class="table table-flush dataTable-table" id="products-list">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th data-sortable="" style="width: 25%;" class="px-2"><a
                                                            href="" class="dataTable-sorter">Modelo</a></th>
                                                    <th data-sortable="" style="width: 25%;" class="px-2"><a
                                                            href="" class="dataTable-sorter">N° de série</a>
                                                    </th>
                                                    <th data-sortable="" style="width: 25%;" class="px-2"><a
                                                            href="" class="dataTable-sorter">Data da venda</a>
                                                    </th>
                                                    <th data-sortable="" style="width: 25%;" class="px-2"><a
                                                            href="" class="dataTable-sorter">Prazo de
                                                            garantia</a></th>
                                                    <th data-sortable=""><a href=""
                                                            class="dataTable-sorter"></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sales as $sale)
                                                    <tr>
                                                        <td scope="row">{{ $sale->models->description }}</td>
                                                        <td scope="row">{{ $sale->serial_number }}</td>
                                                        <td scope="row">
                                                            {{ date('d-m-Y', strtotime($sale->sale_date)) }}</td>
                                                        <td scope="row">
                                                            {{ date('d-m-Y', strtotime($sale->warranty_period)) }}</td>
                                                        <td>
                                                            <a href="{{ route('sales.edit', $sale) }}"
                                                                class="btn bg-warning btn-sm mb-0 text-white">Editar</a>
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
</x-layout.admin>
