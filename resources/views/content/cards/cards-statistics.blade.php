@extends('layouts/layoutMaster')

@section('title', 'Cards Statistics- UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/cards-statistics.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Statistics
</h4>
<!-- Cards with few info -->
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Session</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2">58,352</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>Last Week Analytics</small>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-primary rounded p-2">
              <i class='bx bx-trending-up bx-sm'></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Time On Site</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2">28m 14s</h4>
              <small class="text-success">(+18%)</small>
            </div>
            <small>Last Week Analytics</small>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-info rounded p-2">
              <i class='bx bx-time-five bx-sm'></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Bounce Rate</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2">62%</h4>
              <small class="text-danger">(-14%)</small>
            </div>
            <small>Last Week Analytics</small>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-danger rounded p-2">
              <i class='bx bx-pie-chart-alt bx-sm'></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Users</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2">18,472</h4>
              <small class="text-success">(+42%)</small>
            </div>
            <small>Last Week Analytics</small>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-success rounded p-2">
              <i class='bx bx-user bx-sm'></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Cards with few info -->

<!-- Centered align Cards -->
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="card-title m-0 me-2">Total Sales</h6>
        <div class="dropdown">
          <button class="btn btn-sm p-0" type="button" id="totalSalesList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Today <i class="bx bx-chevron-down"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalSalesList">
            <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
          </div>
        </div>
      </div>
      <div class="card-body text-center">
        <div class="avatar avatar-md border-5 border-light-primary rounded-circle mx-auto mb-4">
          <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-trending-up bx-sm'></i></span>
        </div>
        <h3 class="card-title mb-1 me-2">8,352</h3>
        <small class="d-block mb-2">12% of target</small>
        <span class="text-success">+29% <i class='bx bx-chevron-up'></i></span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="card-title m-0 me-2">Referral Income</h6>
        <div class="dropdown">
          <button class="btn btn-sm p-0" type="button" id="referralsList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Today <i class="bx bx-chevron-down"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="referralsList">
            <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
          </div>
        </div>
      </div>
      <div class="card-body text-center">
        <div class="avatar avatar-md border-5 border-light-info rounded-circle mx-auto mb-4">
          <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-dollar bx-sm'></i></span>
        </div>
        <h3 class="card-title mb-1 me-2">$1,271</h3>
        <small class="d-block mb-2">34% of target</small>
        <span class="text-danger">-23% <i class='bx bx-chevron-down'></i></span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="card-title m-0 me-2">Customers</h6>
        <div class="dropdown">
          <button class="btn btn-sm p-0" type="button" id="customersList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Today <i class="bx bx-chevron-down"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customersList">
            <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
          </div>
        </div>
      </div>
      <div class="card-body text-center">
        <div class="avatar avatar-md border-5 border-light-success rounded-circle mx-auto mb-4">
          <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-user bx-sm'></i></span>
        </div>
        <h3 class="card-title mb-1 me-2">24,680</h3>
        <small class="d-block mb-2">29% of target</small>
        <span class="text-success">+42% <i class='bx bx-chevron-up'></i></span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="card-title m-0 me-2">Orders Received</h6>
        <div class="dropdown">
          <button class="btn btn-sm p-0" type="button" id="orderReceivedList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Today <i class="bx bx-chevron-down"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderReceivedList">
            <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
          </div>
        </div>
      </div>
      <div class="card-body text-center">
        <div class="avatar avatar-md border-5 border-light-warning rounded-circle mx-auto mb-4">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-archive bx-sm'></i></span>
        </div>
        <h3 class="card-title mb-1 me-2">1,862</h3>
        <small class="d-block mb-2">47% of target</small>
        <span class="text-success">+82% <i class='bx bx-chevron-up'></i></span>
      </div>
    </div>
  </div>
</div>
<!--/ Centered align Cards -->

<!-- Cards with unicons & charts -->
<div class="row">
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="{{asset('assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded">
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="cardOpt1">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Transactions</span>
        <h4 class="card-title mb-2">$14,857</h4>
        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="{{asset('assets/img/icons/unicons/cube-secondary.png')}}" alt="cube" class="rounded">
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt2">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Order</span>
        <h4 class="card-title mb-2">$1,286</h4>
        <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> -13.24%</small>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Profit</span>
        <h4 class="card-title mb-2">$12,628</h4>
        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +72.80%</small>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="paypal" class="rounded">
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Payments</span>
        <h4 class="card-title mb-2">$2,456</h4>
        <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> -14.82%</small>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="{{asset('assets/img/icons/unicons/computer.png')}}" alt="computer" class="rounded">
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Revenue</span>
        <h4 class="card-title mb-2">$42,389</h4>
        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +52.18%</small>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="wallet info" class="rounded">
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Sales</span>
        <h4 class="card-title mb-2">$4,679</h4>
        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <span class="d-block fw-semibold mb-2">Order</span>
        <h3 class="card-title">276k</h3>
      </div>
      <div id="orderChart" class="mb-3"></div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body pb-2">
        <span class="d-block fw-semibold mb-2">Revenue</span>
        <h3 class="card-title mb-2">425k</h3>
        <div id="revenueChart"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body pb-2">
        <span class="d-block fw-semibold mb-2">Profit</span>
        <h3 class="card-title mb-0">624k</h3>
        <div id="profitChart"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <span class="d-block fw-semibold mb-2">Sessions</span>
        <h3 class="card-title mb-2">2,845</h3>
      </div>
      <div id="sessionsChart" class="mb-3"></div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <span class="d-block fw-semibold mb-2">Expenses</span>
      </div>
      <div id="expensesChart" class="mb-2"></div>
      <div class="p-3 pt-2">
        <small class="text-muted d-block text-center">$21k Expenses more than last month</small>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <span class="d-block fw-semibold mb-2">Sales</span>
        <h3 class="card-title mb-2">482k</h3>
        <span class="badge bg-label-info mb-4">+34%</span>
        <small class="text-muted d-block">Sales Target</small>
        <div class="d-flex align-items-center">
          <div class="progress w-75 me-2" style="height: 8px;">
            <div class="progress-bar bg-info" style="width: 78%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span>78%</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Cards with unicons & charts -->

<!-- Cards with charts & info -->
<div class="row">
  <div class="col-lg-8 mb-4">
    <div class="card">
      <div class="card-body row g-4">
        <div class="col-md-6 pe-md-4 card-separator">
          <div class="card-title d-flex align-items-start justify-content-between">
            <h5 class="mb-0">New Visitors</h5>
            <small>Last Week</small>
          </div>
          <div class="d-flex justify-content-between">
            <div class="mt-auto">
              <h2 class="mb-2">23%</h2>
              <small class="text-danger text-nowrap fw-semibold"><i class='bx bx-down-arrow-alt'></i> -13.24%</small>
            </div>
            <div id="visitorsChart"></div>
          </div>
        </div>
        <div class="col-md-6 ps-md-4">
          <div class="card-title d-flex align-items-start justify-content-between">
            <h5 class="mb-0">Activity</h5>
            <small>Last Week</small>
          </div>
          <div class="d-flex justify-content-between">
            <div class="mt-auto">
              <h2 class="mb-2">82%</h2>
              <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> 24.8%</small>
            </div>
            <div id="activityChart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex flex-column">
            <div class="card-title mb-auto">
              <h5 class="mb-0">Generated Leads</h5>
              <small>Monthly Report</small>
            </div>
            <div class="chart-statistics">
              <h3 class="card-title mb-1">4,230</h3>
              <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> +12.8%</small>
            </div>
          </div>
          <div id="leadsReportChart"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Cards with charts & info -->
@endsection
