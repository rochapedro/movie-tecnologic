<x-layout.admin>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Produtos</h6>
                </nav>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div>
                                    <h5 class="mb-0">All Products</h5>
                                    <p class="text-sm mb-0">
                                        A lightweight, extendable, dependency-free javascript HTML table plugin.
                                    </p>
                                </div>
                                <div class="ms-auto my-auto mt-lg-0 mt-4">
                                    <div class="ms-auto my-auto">
                                        <a href="./new-product.html" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; New Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                    <div class="dataTable-container">
                                        <table class="table table-flush dataTable-table" id="products-list">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th data-sortable="" style="width: 42.4217%;"><a href="#"
                                                            class="dataTable-sorter">Produto</a></th>
                                                    <th data-sortable="" style="width: 9.80231%;"><a href="#"
                                                            class="dataTable-sorter">Category</a></th>
                                                    <th data-sortable="" style="width: 7.57825%;"><a href="#"
                                                            class="dataTable-sorter">Price</a></th>
                                                    <th data-sortable="" style="width: 9.88468%;"><a href="#"
                                                            class="dataTable-sorter">SKU</a></th>
                                                    <th data-sortable="" style="width: 8.15486%;"><a href="#"
                                                            class="dataTable-sorter">Quantity</a></th>
                                                    <th data-sortable="" style="width: 11.4498%;"><a href="#"
                                                            class="dataTable-sorter">Status</a></th>
                                                    <th data-sortable="" style="width: 10.7908%;"><a href="#"
                                                            class="dataTable-sorter">Action</a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img class="w-10 ms-3"
                                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/adidas-hoodie.jpg"
                                                                alt="hoodie">
                                                            <h6 class="ms-3 my-auto">BKLGO Full Zip Hoodie</h6>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm">Clothing</td>
                                                    <td class="text-sm">$1,321</td>
                                                    <td class="text-sm">243598234</td>
                                                    <td class="text-sm">0</td>
                                                    <td>
                                                        <span class="badge badge-danger badge-sm">Out of Stock</span>
                                                    </td>
                                                    <td class="text-sm">
                                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                                            data-bs-original-title="Preview product">
                                                            <i class="fas fa-eye text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                        <a href="javascript:;" class="mx-3"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-original-title="Edit product">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                                            data-bs-original-title="Delete product">
                                                            <i class="fas fa-trash text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
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
