@extends('pages.index')
@section('title', 'Dashboard')

@section('content')
    <div class="row sales-cards">
        <div class="col-xl-6 col-sm-12 col-12 d-flex">
            <div class="card d-flex align-items-center justify-content-between flex-fill mb-4">
                <div>
                    <h6>Weekly Earning</h6>
                    <h3>$<span class="counters" data-count="95000.45">95000.45</span></h3>
                    <p class="sales-range"><span class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-up feather-16">
                                <polyline points="18 15 12 9 6 15"></polyline>
                            </svg>48%&nbsp;</span>increase compare to last week</p>
                </div>
                <img src="assets/img/icons/weekly-earning.svg" alt="img">
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card color-info bg-primary flex-fill mb-4">
                <div class="mb-2">
                    <img src="assets/img/icons/total-sales.svg" alt="img">
                </div>
                <h3 class="counters" data-count="10000.00">10000</h3>
                <p>No of Total Sales</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-rotate-ccw feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Refresh" data-bs-original-title="Refresh">
                    <polyline points="1 4 1 10 7 10"></polyline>
                    <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                </svg>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card color-info bg-secondary flex-fill mb-4">
                <div class="mb-2">
                    <img src="assets/img/icons/purchased-earnings.svg" alt="img">
                </div>
                <h3 class="counters" data-count="800.00">800</h3>
                <p>No of Total Sales</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-rotate-ccw feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Refresh" data-bs-original-title="Refresh">
                    <polyline points="1 4 1 10 7 10"></polyline>
                    <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                </svg>
            </div>
        </div>
    </div>


    <div class="row">



        <!-- Recent Transactions -->
        <div class="col-xl-6 col-sm-12 col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="d-inline-flex align-items-center">
                        <span class="title-icon bg-soft-orange fs-16 me-2"><i class="ti ti-flag"></i></span>
                        <h5 class="card-title mb-0">Daftar Pembayaran IPL Bulan Mei</h5>
                    </div>
                    <a href="online-orders.html" class="fs-13 fw-medium text-decoration-underline">View All</a>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-tabs nav-justified transaction-tab" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#sale"
                                data-bs-toggle="tab" aria-selected="true" role="tab">Sudah Bayar</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#purchase-transaction"
                                data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Belum Bayar</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#quotation" data-bs-toggle="tab"
                                aria-selected="false" tabindex="-1" role="tab">Telat Bayar</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#expenses"
                                data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Pembayaran
                                Lunas</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="sale" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-borderless custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer16.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6><a href="javascript:void(0);" class="fw-bold">Andrea
                                                                Willer</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="fs-16 fw-bold text-gray-9">$4,560</td>
                                        </tr>
                                        <tr>
                                            <td>23 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer17.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6><a href="javascript:void(0);" class="fw-bold">Timothy
                                                                Sandsr</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="fs-16 fw-bold text-gray-9">$3,569</td>
                                        </tr>
                                        <tr>
                                            <td>22 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer18.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6><a href="javascript:void(0);" class="fw-bold">Bonnie
                                                                Rodrigues</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-pink badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Draft</span></td>
                                            <td class="fs-16 fw-bold text-gray-9">$4,560</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer15.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6><a href="javascript:void(0);" class="fw-bold">Randy
                                                                McCree</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="fs-16 fw-bold text-gray-9">$2,155</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer13.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6><a href="javascript:void(0);" class="fw-bold">Dennis
                                                                Anderson</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="fs-16 fw-bold text-gray-9">$5,123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="purchase-transaction" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-borderless custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Supplier</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24 May 2025</td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Electro Mart</a>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="text-gray-9">$1000</td>
                                        </tr>
                                        <tr>
                                            <td>23 May 2025</td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Quantum Gadgets</a>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="text-gray-9">$1500</td>
                                        </tr>
                                        <tr>
                                            <td>22 May 2025</td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Prime Bazaar</a>
                                            </td>
                                            <td><span class="badge badge-cyan badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Pending</span></td>
                                            <td class="text-gray-9">$2000</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Alpha Mobiles</a>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="text-gray-9">$1200</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Aesthetic Bags</a>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="text-gray-9">$1300</td>
                                        </tr>
                                        <tr>
                                            <td>28 May 2025</td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Sigma Chairs</a>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="text-gray-9">$1600</td>
                                        </tr>
                                        <tr>
                                            <td>26 May 2025</td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">A-Z Store s</a>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Completed</span></td>
                                            <td class="text-gray-9">$1100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="quotation" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-borderless custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer16.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium"><a href="javascript:void(0);">Andrea
                                                                Willer</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Sent</span></td>
                                            <td class="text-gray-9">$4,560</td>
                                        </tr>
                                        <tr>
                                            <td>23 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer17.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium"><a href="javascript:void(0);">Timothy
                                                                Sandsr</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-warning badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Ordered</span></td>
                                            <td class="text-gray-9">$3,569</td>
                                        </tr>
                                        <tr>
                                            <td>22 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer18.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium"><a href="javascript:void(0);">Bonnie
                                                                Rodrigues</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-cyan badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Pending</span></td>
                                            <td class="text-gray-9">$4,560</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer15.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium"><a href="javascript:void(0);">Randy
                                                                McCree</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-warning badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Ordered</span></td>
                                            <td class="text-gray-9">$2,155</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer13.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium"><a href="javascript:void(0);">Dennis
                                                                Anderson</a></h6>
                                                        <span class="fs-13 text-orange">#114589</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Sent</span></td>
                                            <td class="text-gray-9">$5,123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="expenses" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-borderless custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Expenses</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24 May 2025</td>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Electricity
                                                        Payment</a></h6>
                                                <span class="fs-13 text-orange">#EX849</span>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Approved</span></td>
                                            <td class="text-gray-9">$200</td>
                                        </tr>
                                        <tr>
                                            <td>23 May 2025</td>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Electricity
                                                        Payment</a></h6>
                                                <span class="fs-13 text-orange">#EX849</span>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Approved</span></td>
                                            <td class="text-gray-9">$200</td>
                                        </tr>
                                        <tr>
                                            <td>22 May 2025</td>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Stationery
                                                        Purchase</a></h6>
                                                <span class="fs-13 text-orange">#EX848</span>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Approved</span></td>
                                            <td class="text-gray-9">$50</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">AC Repair
                                                        Service</a></h6>
                                                <span class="fs-13 text-orange">#EX847</span>
                                            </td>
                                            <td><span class="badge badge-cyan badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Pending</span></td>
                                            <td class="text-gray-9">$800</td>
                                        </tr>
                                        <tr>
                                            <td>21 May 2025</td>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Client Meeting</a>
                                                </h6>
                                                <span class="fs-13 text-orange">#EX846</span>
                                            </td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Approved</span></td>
                                            <td class="text-gray-9">$100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="invoices" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-borderless custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Customer</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer16.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-bold"><a href="javascript:void(0);">Andrea
                                                                Willer</a></h6>
                                                        <span class="fs-13 text-orange">#INV005</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>24 May 2025</td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Paid</span></td>
                                            <td class="text-gray-9">$1300</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer17.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-bold"><a href="javascript:void(0);">Timothy
                                                                Sandsr</a></h6>
                                                        <span class="fs-13 text-orange">#INV004</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>23 May 2025</td>
                                            <td><span
                                                    class="badge badge-warning badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Overdue</span></td>
                                            <td class="text-gray-9">$1250</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer18.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-bold"><a href="javascript:void(0);">Bonnie
                                                                Rodrigues</a></h6>
                                                        <span class="fs-13 text-orange">#INV003</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 May 2025</td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Paid</span></td>
                                            <td class="text-gray-9">$1700</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer15.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-bold"><a href="javascript:void(0);">Randy
                                                                McCree</a></h6>
                                                        <span class="fs-13 text-orange">#INV002</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>21 May 2025</td>
                                            <td><span
                                                    class="badge badge-danger badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Unpaid</span></td>
                                            <td class="text-gray-9">$1500</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                                        <img src="assets/img/customer/customer13.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-bold"><a href="javascript:void(0);">Dennis
                                                                Anderson</a></h6>
                                                        <span class="fs-13 text-orange">#INV001</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>21 May 2025</td>
                                            <td><span
                                                    class="badge badge-success badge-xs d-inline-flex align-items-center"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Paid</span></td>
                                            <td class="text-gray-9">$1000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Recent Transactions -->

    </div>
@endsection
