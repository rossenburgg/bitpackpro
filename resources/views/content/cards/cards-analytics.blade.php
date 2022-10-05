@extends('layouts/layoutMaster')

@section('title', 'Cards Analytics- UI elements')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/card-analytics.css')}}">
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-cards-analytics.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Analytics
</h4>


<div class="row">
  <!-- Customer Ratings -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Customer Ratings</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="customerRatings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customerRatings">
            <a class="dropdown-item" href="javascript:void(0);">Featured Ratings</a>
            <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
            <a class="dropdown-item" href="javascript:void(0);">See All</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-0">
        <div class="d-flex align-items-center gap-3 mb-3">
          <h1 class="display-3 mb-0">4.0</h1>
          <div class="ratings">
            <i class="bx bxs-star bx-sm text-warning"></i>
            <i class="bx bxs-star bx-sm text-warning"></i>
            <i class="bx bxs-star bx-sm text-warning"></i>
            <i class="bx bxs-star bx-sm text-warning"></i>
            <i class="bx bxs-star bx-sm text-lighter"></i>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <span class="badge bg-label-primary me-3">+5.0</span>
          <span>Points from last month</span>
        </div>
      </div>
      <div id="customerRatingsChart"></div>
    </div>
  </div>
  <!--/ Customer Ratings -->

  <!-- Sales Stats -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Sales Stats</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="salesStatsID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesStatsID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div id="salesStats"></div>
      <div class="card-body">
        <div class="d-flex justify-content-around">
          <div class="d-flex align-items-center lh-1 mb-3 mb-sm-0">
            <span class="badge badge-dot bg-success me-2"></span> Conversion Ratio
          </div>
          <div class="d-flex align-items-center lh-1 mb-3 mb-sm-0">
            <span class="badge badge-dot bg-label-secondary me-2"></span> Total requirements
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales Stats -->

  <!-- Sales Analytics -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-start justify-content-between">
        <div>
          <h5 class="card-title m-0 me-2 mb-2">Sales Analytics</h5>
          <span class="badge bg-label-success me-1">+42.6%</span> <span>Than last year</span>
        </div>
        <div class="dropdown">
          <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="salesAnalyticsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            2022
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesAnalyticsId">
            <a class="dropdown-item" href="javascript:void(0);">2021</a>
            <a class="dropdown-item" href="javascript:void(0);">2020</a>
            <a class="dropdown-item" href="javascript:void(0);">2019</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-0">
        <div id="salesAnalyticsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Sales Analytics -->

  <!-- Overview & Sales Activity -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Overview & Sales Activity</h5>
        <small class="card-subtitle">Check out each column for more details</small>
      </div>
      <div id="salesActivityChart"></div>
    </div>
  </div>
  <!--/ Overview & Sales Activity -->

  <!-- Total Income -->
  <div class="col-md-12 col-lg-8 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <div class="card-header">
            <h5 class="card-title mb-0">Total Income</h5>
            <small class="card-subtitle">Yearly report overview</small>
          </div>
          <div class="card-body">
            <div id="totalIncomeChart"></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-header d-flex justify-content-between">
            <div>
              <h5 class="card-title mb-0">Report</h5>
              <small class="card-subtitle">Monthly Avg. $45.578k</small>
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="report-list">
              <div class="report-list-item rounded-2 mb-3">
                <div class="d-flex align-items-start">
                  <div class="report-list-icon shadow-sm me-2">
                    <img src="{{asset('assets/svg/icons/paypal-icon.svg')}}" width="22" height="22" alt="Paypal">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Income</span>
                      <h5 class="mb-0">$42,845</h5>
                    </div>
                    <small class="text-success">+2.34k</small>
                  </div>
                </div>
              </div>
              <div class="report-list-item rounded-2 mb-3">
                <div class="d-flex align-items-start">
                  <div class="report-list-icon shadow-sm me-2">
                    <img src="{{asset('assets/svg/icons/shopping-bag-icon.svg')}}" width="22" height="22" alt="Shopping Bag">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Expense</span>
                      <h5 class="mb-0">$38,658</h5>
                    </div>
                    <small class="text-danger">-1.15k</small>
                  </div>
                </div>
              </div>
              <div class="report-list-item rounded-2">
                <div class="d-flex align-items-start">
                  <div class="report-list-icon shadow-sm me-2">
                    <img src="{{asset('assets/svg/icons/wallet-icon.svg')}}" width="22" height="22" alt="Wallet">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Profit</span>
                      <h5 class="mb-0">$18,220</h5>
                    </div>
                    <small class="text-success">+1.35k</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Total Income -->
  </div>
  <!--/ Total Income -->
</div>
<div class="row">
  <!-- Expense Overview -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex px-4">
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-3 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Expense Overview -->

  <!-- Performance -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Performance</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="performanceId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceId">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <small>Earnings: <span class="fw-semibold">$846.17</span></small>
          </div>
          <div class="col-6">
            <small>Sales: <span class="fw-semibold">25.7M</span></small>
          </div>
        </div>
      </div>
      <div id="performanceChart"></div>
    </div>
  </div>
  <!--/ Performance -->

  <!-- Total Balance -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Total Balance</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="totalBalance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalBalance">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-start">
          <div class="d-flex pe-4">
            <div class="me-3">
              <span class="badge bg-label-warning p-2"><i class="bx bx-wallet text-warning"></i></span>
            </div>
            <div>
              <h6 class="mb-0">$2.54k</h6>
              <small>Wallet</small>
            </div>
          </div>
          <div class="d-flex">
            <div class="me-3">
              <span class="badge bg-label-secondary p-2"><i class="bx bx-dollar text-secondary"></i></span>
            </div>
            <div>
              <h6 class="mb-0">$4.2k</h6>
              <small>Paypal</small>
            </div>
          </div>
        </div>
        <div id="totalBalanceChart" class="border-bottom mb-3"></div>
        <div class="d-flex justify-content-between">
          <small class="text-muted">You have done <span class="fw-bold">57.6%</span> more sales.<br>Check your new badge in your profile.</small>
          <div>
            <span class="badge bg-label-warning p-2"><i class="bx bx-chevron-right text-warning"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Balance -->

  <!-- Session Overview -->
  <div class="col-12 col-lg-6 col-xl-6 col-xxl-5 order-lg-0 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Session Overview</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="sessionOverview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sessionOverview">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body row gap-md-0 gap-4">
        <div class="col-md-5">
          <h1 class="mb-0 text-nowrap">32,754</h1>
          <small class="text-success">
            +0.7645%
          </small>

          <div id="sessionOverviewChart" class="ms-n3"></div>
        </div>
        <div class="col-md-7 d-flex flex-column justify-content-between">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
              <small class="text-muted">Today</small>
              <span class="fw-semibold">+ $340</span>
            </div>
            <div class="d-flex flex-column">
              <small class="text-muted">Last Week</small>
              <span class="fw-semibold">+ $680</span>
            </div>
            <div class="d-flex flex-column">
              <small class="text-muted">Today</small>
              <span class="fw-semibold">+ $3,540</span>
            </div>
          </div>
          <div class="progress-wrapper mb-4">
            <div class="mb-3">
              <small class="text-muted">Effective Return</small>
              <div class="d-flex align-items-center">
                <div class="progress w-100 me-2" style="height:8px">
                  <div class="progress-bar bg-primary" style="width: 74%" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">74%</small>
              </div>
            </div>
            <div>
              <small class="text-muted">Invalid Session</small>
              <div class="d-flex align-items-center">
                <div class="progress w-100 me-2" style=" height:8px">
                  <div class="progress-bar bg-primary" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">40%</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Session Overview -->

  <!-- Score -->
  <div class="col-md-6 col-lg-3 order-lg-1 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header text-center">
        <small class="card-subtitle mb-2">Your score is</small>
        <h5 class="card-title mb-0 mt-1">Awesome</h5>
      </div>
      <div class="card-body">
        <div id="scoreChart"></div>

        <div class="d-flex flex-column align-items-center mt-2">
          <small class="text-muted">Your score is based on the last</small>
          <small class="fw-semibold">287 Transactions</small>
          <a href="javascript:void(0)" class="btn btn-sm btn-primary mt-2" role="button">View My Account</a>
        </div>
      </div>
    </div>
  </div>
  <!--/ Score -->
</div>
<div class="row">
  <!-- Total Revenue -->
  <div class="col-12 col-lg-9 col-xl-9 col-xxl-8 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-2">Total Revenue</h5>
          <div id="totalRevenueChart" class="px-2"></div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="text-center">
              <div class="dropdown">
                <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2022
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                  <a class="dropdown-item" href="javascript:void(0);">2021</a>
                  <a class="dropdown-item" href="javascript:void(0);">2020</a>
                  <a class="dropdown-item" href="javascript:void(0);">2019</a>
                </div>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

          <div class="d-flex p-4 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2022</small>
                <h6 class="mb-0">$32.5k</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2021</small>
                <h6 class="mb-0">$41.2k</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Revenue -->
</div>
@endsection
