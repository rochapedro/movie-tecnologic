<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Drives</h6>
                </nav>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <a href="javascript:;" class="btn btn-icon bg-gradient-primary">
                        Cadastrar novo drive
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <div
                                class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-container">
                                    <table class="table table-flush dataTable-table" id="datatable-search">
                                        <thead class="thead-light">
                                            <tr>
                                                <th data-sortable="" style="width: 14.6623%;"><a href="#" class="dataTable-sorter">Id</a></th>
                                                <th data-sortable="" style="width: 16.3921%;"><a href="#" class="dataTable-sorter">Data upload</a></th>
                                                <th data-sortable="" style="width: 19.687%;"><a href="#" class="dataTable-sorter">Descrição</a></th>
                                                <th data-sortable="" style="width: 22.4053%;"><a href="#" class="dataTable-sorter">Equipamento</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="customCheck1">
                                                        </div>
                                                        <p class="text-xs font-weight-bold ms-2 mb-0">#10421</p>
                                                    </div>
                                                </td>
                                                <td class="font-weight-bold">
                                                    <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                                                </td>
                                                <td class="text-xs font-weight-bold">
                                                    <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                                                </td>
                                                <td class="text-xs font-weight-bold">
                                                    <span class="my-2 text-xs">Nike Sport V2</span>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
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
