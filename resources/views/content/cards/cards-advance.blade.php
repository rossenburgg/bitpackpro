@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Cards Advance- UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/cards-advance.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-cc.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Advance
</h4>

<div class="row">
  <!-- Employee List -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Employee List</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList">
            <a class="dropdown-item" href="javascript:void(0);">Featured Employees</a>
            <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
            <a class="dropdown-item" href="javascript:void(0);">See All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/avatars/20.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 align-items-start gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Alberta</h6>
                  <small class="text-muted">UI Designer</small>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">100h:</h6> <span class="text-muted">138h</span>
                </div>
              </div>

              <div class="chart-progress" data-color="secondary" data-series="85"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/avatars/3.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 align-items-start gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Paul</h6>
                  <small class="text-muted">Branding</small>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">121h:</h6> <span class="text-muted">109h</span>
                </div>
              </div>

              <div class="chart-progress" data-color="warning" data-series="70"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/avatars/15.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 align-items-start gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Nannie</h6>
                  <small class="text-muted">iOS Developer</small>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">112h:</h6> <span class="text-muted">160h</span>
                </div>
              </div>

              <div class="chart-progress" data-color="primary" data-series="25"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/avatars/14.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 align-items-start gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Rodney</h6>
                  <small class="text-muted">iOS Developer</small>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">125h:</h6> <span class="text-muted">166h</span>
                </div>
              </div>

              <div class="chart-progress" data-color="danger" data-series="75"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/avatars/7.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 align-items-start gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Martin</h6>
                  <small class="text-muted">Product Designer</small>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">76h:</h6> <span class="text-muted">89h</span>
                </div>
              </div>

              <div class="chart-progress" data-color="info" data-series="60"></div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/avatars/18.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 align-items-start gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Nancy</h6>
                  <small class="text-muted">PHP Developer</small>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">22h:</h6> <span class="text-muted">45h</span>
                </div>
              </div>

              <div class="chart-progress" data-color="warning" data-series="45"></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Employee List -->

  <!-- Transactions -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Paypal</small>
                <h6 class="mb-0">Send money</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Mac'D</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/chart.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Transfer</small>
                <h6 class="mb-0">Refund</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/cc-success.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Credit Card</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Starbucks</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Mastercard</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->
  <!-- Shared Event -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header flex-grow-0">
        <div class="d-flex">
          <div class="avatar flex-shrink-0 me-3">
            <img src="{{asset('assets/img/avatars/20.png')}}" alt="User" class="rounded-circle">
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-1">
            <div class="me-2">
              <h5 class="mb-0">Olivia Shared Event</h5>
              <small class="text-muted">07 Sep 2020 at 10:30 AM</small>
            </div>
            <div class="dropdown d-none d-sm-block">
              <button class="btn p-0" type="button" id="eventList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-chevron-down"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="eventList">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="img-fluid" src="{{asset('assets/img/backgrounds/event.jpg')}}" alt="Card image cap" />
      <div class="featured-date mt-n4 ms-4 bg-white rounded w-px-50 shadow text-center p-1">
        <h5 class="mb-0 text-dark">21</h5>
        <span class="text-primary">May</span>
      </div>
      <div class="card-body">
        <h5 class="text-truncate">How To Excel In A Technical Terminology?</h5>
        <div class="d-flex gap-2">
          <span class="badge bg-label-primary">Technical</span>
          <span class="badge bg-label-primary">Account</span>
          <span class="badge bg-label-primary">Excel</span>
        </div>
        <div class="d-flex my-3">
          <ul class="list-unstyled m-0 d-flex align-items-center avatar-group">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Darcey Nooner" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar">
            </li>
          </ul>
          <a href="javascript:;" class="btn btn-primary ms-auto" role="button">Join Now</a>
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="card-actions">
            <a href="javascript:;" class="text-muted me-3"><i class="bx bx-heart me-1"></i> 236</a>
            <a href="javascript:;" class="text-muted"><i class="bx bx-message me-1"></i> 12</a>
          </div>
          <div class="dropup d-none d-sm-block">
            <button class="btn p-0" type="button" id="sharedList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sharedList">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Shared Event -->
  <!-- Payment Data -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Payment Data</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="paymentDataList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="paymentDataList">
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
            <a class="dropdown-item" href="javascript:void(0);">24 Hours</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <small class="text-muted">Price</small>
        <div class="d-flex align-items-center mb-3">
          <h5 class="text-primary me-3 mb-0">$455.60</h5>
          <span class="badge bg-label-primary">35% OFF</span>
        </div>
        <form id="paymentMethodForm" class="row g-3" onsubmit="return false">
          <div class="col-12">
            <small class="text-muted d-block mb-2">Choose payment method:</small>
            <div class="row gy-3 text-nowrap">
              <div class="col">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content py-2" for="customRadioPaypal">
                    <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioPaypal" checked />
                    <span class="custom-option-header pb-0">
                      <span>Paypal</span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content py-2" for="customRadioCC">
                    <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioCC" />
                    <span class="custom-option-header pb-0">
                      <span>Credit Card</span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label w-100" for="paymentAddCard">Card Number</label>
            <div class="input-group input-group-merge">
              <input id="paymentAddCard" name="paymentAddCard" class="form-control credit-card-payment" type="text" placeholder="1356 3215 6548 7898" aria-describedby="paymentAddCard2" />
              <span class="input-group-text cursor-pointer p-1" id="paymentAddCard2"><span class="card-payment-type"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="paymentAddCardExpiryDate">Exp. Date</label>
            <input type="text" id="paymentAddCardExpiryDate" class="form-control expiry-date-payment" placeholder="MM/YY" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="paymentAddCardCvv">CVV Code</label>
            <div class="input-group input-group-merge">
              <input type="text" id="paymentAddCardCvv" class="form-control cvv-code-payment" maxlength="3" placeholder="654" />
              <span class="input-group-text cursor-pointer" id="paymentAddCardCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label" for="paymentAddCardName">Name</label>
            <input type="text" id="paymentAddCardName" class="form-control" placeholder="John Doe" />
          </div>
          <div class="col-12">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="defaultCheck3">
              <label class="form-check-label" for="defaultCheck3">Save card?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-100 d-grid">Add Card</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/ Payment Data -->
  <!-- Business Shark -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">For Business Sharks</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="purchaseItemList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="purchaseItemList">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <p>Here, i focus ona range of items and featured that we use in life without them</p>
        <h6>Basic price is $30</h6>
        <form id="businessForm" onsubmit="return false">
          <div class="form-check custom-option custom-option-basic mb-3">
            <label class="form-check-label custom-option-content" for="brandingCheckbox">
              <input class="form-check-input" type="checkbox" id="brandingCheckbox" />
              <span class="custom-option-header pb-0">
                <span class="fw-semibold">Branding</span>
                <span class="badge bg-label-success">+ $30</span>
              </span>
            </label>
          </div>
          <div class="form-check custom-option custom-option-basic mb-3">
            <label class="form-check-label custom-option-content" for="marketingCheckbox">
              <input class="form-check-input" type="checkbox" id="marketingCheckbox" checked />
              <span class="custom-option-header pb-0">
                <span class="fw-semibold">Marketing</span>
                <span class="badge bg-label-primary">+ $75</span>
              </span>
            </label>
          </div>
          <div class="form-check custom-option custom-option-basic mb-3">
            <label class="form-check-label custom-option-content" for="appBuildingCheckbox">
              <input class="form-check-input" type="checkbox" id="appBuildingCheckbox" />
              <span class="custom-option-header pb-0">
                <span class="fw-semibold">App Building</span>
                <span class="badge bg-label-success">+ $125</span>
              </span>
            </label>
          </div>
          <div class="form-check custom-option custom-option-basic mb-3">
            <label class="form-check-label custom-option-content" for="seoCheckbox">
              <input class="form-check-input" type="checkbox" id="seoCheckbox" />
              <span class="custom-option-header pb-0">
                <span class="fw-semibold">SEO</span>
                <span class="badge bg-label-primary">+ $48</span>
              </span>
            </label>
          </div>
          <div class="d-flex justify-content-between mb-1">
            <span class="fw-bold">Vat Taxes</span>
            <span class="fw-bold">$24</span>
          </div>
          <div class="d-flex justify-content-between">
            <span class="fw-bold">Total Amount</span>
            <span class="h5 text-primary mb-0">$99</span>
          </div>
          <hr>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-100 d-grid">Purchase</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/ Business Shark -->
  <!-- Upgrade Plan -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Upgrade Your Plan</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <p class="mb-4">Please make the payment to start enjoying all the features of our premium plan as soon as possible.</p>
        <div class="d-flex border-primary p-2 border rounded mb-4">
          <div class="avatar flex-shrink-0 me-3">
            <img src="{{asset('assets/img/icons/unicons/briefcase.png')}}" alt="User" class="rounded">
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <p class="mb-0">Business</p>
              <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>
            </div>
            <div class="user-progress">
              <div class="d-flex justify-content-center">
                <sup class="mt-3 mb-0 me-1">$</sup>
                <h3 class="fw-bold mb-0">2,124</h3>
                <sub class="mt-auto mb-2"> /Year</sub>
              </div>
            </div>
          </div>
        </div>
        <form id="paymentDetailsForm" onsubmit="return false" class="pt-2">
          <h6 class="mb-4">Payment Details</h6>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="{{asset('assets/img/icons/payments/visa-'.$configData['style'].'.png')}}" alt="Visa" height="30" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Visa Card</h6>
                <small class="text-muted">8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV" />
              </div>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="{{asset('assets/img/icons/payments/master-'.$configData['style'].'.png')}}" alt="MasterCard" height="30" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Master Card</h6>
                <small class="text-muted">5688 xxxx xxxx 2356</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV" />
              </div>
            </div>
          </div>
          <a href="javascript:;" class="fw-semibold d-block my-2" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>
          <div class="col-12 mb-4">
            <input id="addEmail" name="addEmail" class="form-control" type="text" placeholder="Email Address" />
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-100 d-grid">Process to payment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/ Upgrade Plan -->
</div>
<div class="row">
  <!-- Sales By Country -->
  <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Sales by Countries</h5>
          <small class="text-muted">Monthly Sales Overview</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/svg/flags/us.svg')}}" alt="User" class="rounded-circle">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$8,567k</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    25.8%
                  </small>
                </div>
                <small class="text-muted">United states of america</small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">884k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/svg/flags/br.svg')}}" alt="User" class="rounded-circle">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$2,415k</h6>
                  <small class="text-danger fw-semibold">
                    <i class='bx bx-chevron-down'></i>
                    6.2%
                  </small>
                </div>
                <small class="text-muted">Brazil</small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">645k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/svg/flags/in.svg')}}" alt="User" class="rounded-circle">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$865k</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    12.4%
                  </small>
                </div>
                <small class="text-muted">India</small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">148k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/svg/flags/au.svg')}}" alt="User" class="rounded-circle">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$745k</h6>
                  <small class="text-danger fw-semibold">
                    <i class='bx bx-chevron-down'></i>
                    11.9%
                  </small>
                </div>
                <small class="text-muted">Australia</small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">86k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/svg/flags/fr.svg')}}" alt="User" class="rounded-circle">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$45</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    16.2%
                  </small>
                </div>
                <small class="text-muted">France</small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">42k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/svg/flags/cn.svg')}}" alt="User" class="rounded-circle">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$12k</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    14.8%
                  </small>
                </div>
                <small class="text-muted">China</small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">18k</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Sales By Country -->
  <!-- Order Statistics -->
  <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Order Statistics</h5>
          <small class="text-muted">42.82k Total Sales</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">8,258</h2>
            <span>Total Orders</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Electronic</h6>
                <small class="text-muted">Mobile, Earbuds, TV</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">82.5k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Fashion</h6>
                <small class="text-muted">T-shirt, Jeans, Shoes</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">23.8k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Decor</h6>
                <small class="text-muted">Fine Art, Dining</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">849k</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Sports</h6>
                <small class="text-muted">Football, Cricket Kit</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">99</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->
  <!-- Earning Reports -->
  <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Earning Reports</h5>
          <small class="text-muted">Weekly Earnings Overview</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="earningReports" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-0">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-trending-up'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Net Profit</h6>
                <small class="text-muted">12.4k Sales</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">$1,619</small><i class='bx bx-chevron-up text-success ms-1'></i> <small class="text-muted">18.6%</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-dollar'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Total Income</h6>
                <small class="text-muted">Sales, Affiliation</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">$3,571</small><i class='bx bx-chevron-up text-success ms-1'></i> <small class="text-muted">39.6%</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-credit-card'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Total Expenses</h6>
                <small class="text-muted">ADVT, Marketing</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">$430</small><i class='bx bx-chevron-up text-success ms-1'></i> <small class="text-muted">52.8%</small>
              </div>
            </div>
          </li>
        </ul>
        <div id="reportBarChart"></div>
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->
  <!-- Team Members -->
  <div class="col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Team Members</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>Name</th>
              <th>Project</th>
              <th>Task</th>
              <th>Progress</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-2">
                    <img src="{{asset('assets/img/avatars/17.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-0 text-truncate">Nathan Wagner</h6><small class="text-truncate text-muted">iOS Developer</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-primary rounded-pill text-uppercase">Zipcar</span></td>
              <td><small class="fw-semibold">87/135</small></td>
              <td>
                <div class="chart-progress" data-color="primary" data-series="65"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-2">
                    <img src="{{asset('assets/img/avatars/8.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-0 text-truncate">Emma Bowen</h6><small class="text-truncate text-muted">UI/UX Designer</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-danger rounded-pill text-uppercase">Bitbank</span></td>
              <td><small class="fw-semibold">320/440</small></td>
              <td>
                <div class="chart-progress" data-color="danger" data-series="85"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-2">
                    <span class="avatar-initial rounded-circle bg-label-warning">AM</span>
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-0 text-truncate">Adrian McGuire</h6><small class="text-truncate text-muted">PHP Developer</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-warning rounded-pill text-uppercase">Payers</span></td>
              <td><small class="fw-semibold">50/82</small></td>
              <td>
                <div class="chart-progress" data-color="warning" data-series="73"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-2">
                    <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-0 text-truncate">Alma Gonzalez</h6><small class="text-truncate text-muted">Product Manager</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-info rounded-pill text-uppercase">Brandi</span></td>
              <td><small class="fw-semibold">98/260</small></td>
              <td>
                <div class="chart-progress" data-color="info" data-series="61"></div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Team Members -->
  <!-- pill table -->
  <div class="col-md-6 mb-4">
    <div class="card text-center h-100">
      <div class="card-header">
        <ul class="nav nav-pills nav- card-header-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser" aria-selected="true">Browser</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-os" aria-controls="navs-pills-os" aria-selected="false">Operating System</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-country" aria-controls="navs-pills-country" aria-selected="false">Country</button>
          </li>
        </ul>
      </div>
      <div class="tab-content pt-0">
        <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
          <div class="table-responsive text-start text-nowrap">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Browser</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" height="24" class="me-2">
                      <span>Chrome</span>
                    </div>
                  </td>
                  <td>8.92k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 64.75%" aria-valuenow="64.75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">64.75%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/safari.png')}}" alt="Safari" height="24" class="me-2">
                      <span>Safari</span>
                    </div>
                  </td>
                  <td>1.29k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 18.43%" aria-valuenow="18.43" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">18.43%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/firefox.png')}}" alt="Firefox" height="24" class="me-2">
                      <span>Firefox</span>
                    </div>
                  </td>
                  <td>328</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 8.37%" aria-valuenow="8.37" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">8.37%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/edge.png')}}" alt="Edge" height="24" class="me-2">
                      <span>Edge</span>
                    </div>
                  </td>
                  <td>142</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 6.12%" aria-valuenow="6.12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">6.12%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/opera.png')}}" alt="Opera" height="24" class="me-2">
                      <span>Opera</span>
                    </div>
                  </td>
                  <td>82</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 1.94%" aria-valuenow="1.94" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">1.94%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
          <div class="table-responsive text-start text-nowrap">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>No</th>
                  <th>System</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/windows.png')}}" alt="Windows" height="24" class="me-2">
                      <span>Windows</span>
                    </div>
                  </td>
                  <td>875.24k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 61.50%" aria-valuenow="61.50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">61.50%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/mac.png')}}" alt="Mac" height="24" class="me-2">
                      <span>Mac</span>
                    </div>
                  </td>
                  <td>89.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 16.67%" aria-valuenow="16.67" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">16.67%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/ubuntu.png')}}" alt="Ubuntu" height="24" class="me-2">
                      <span>Ubuntu</span>
                    </div>
                  </td>
                  <td>37.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 12.82%" aria-valuenow="12.82" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">12.82%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" height="24" class="me-2">
                      <span>Chrome</span>
                    </div>
                  </td>
                  <td>8.34k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 6.25%" aria-valuenow="6.25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">6.25%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/img/icons/brands/cent.png')}}" alt="Cent" height="24" class="me-2">
                      <span>Cent</span>
                    </div>
                  </td>
                  <td>2.25k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 2.76%" aria-valuenow="2.76" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">2.76%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
          <div class="table-responsive text-start text-nowrap">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Country</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/svg/flags/us.svg')}}" alt="USA" height="24" class="me-2">
                      <span>USA</span>
                    </div>
                  </td>
                  <td>87.24k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 38.12%" aria-valuenow="38.12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">38.12%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/svg/flags/br.svg')}}" alt="Brazil" height="24" class="me-2">
                      <span>Brazil</span>
                    </div>
                  </td>
                  <td>42.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28.23%" aria-valuenow="28.23" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">28.23%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/svg/flags/in.svg')}}" alt="India" height="24" class="me-2">
                      <span>India</span>
                    </div>
                  </td>
                  <td>12.58k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 14.82%" aria-valuenow="14.82" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">14.82%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/svg/flags/au.svg')}}" alt="Australia" height="24" class="me-2">
                      <span>Australia</span>
                    </div>
                  </td>
                  <td>4.13k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 12.72%" aria-valuenow="12.72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">12.72%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('assets/svg/flags/fr.svg')}}" alt="France" height="24" class="me-2">
                      <span>France</span>
                    </div>
                  </td>
                  <td>2.21k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 7.11%" aria-valuenow="7.11" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">7.11%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ pill table -->
  <!-- Conversion rate -->
  <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Conversion Rate</h5>
          <small class="text-muted">Compared To Last Month</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="conversionRate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="conversionRate">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-row align-items-center gap-1 mb-4">
            <h2 class="mb-2">8.72%</h2>
            <small class="text-success fw-semibold">
              <i class='bx bx-chevron-up'></i>
              4.8%
            </small>
          </div>
          <div id="conversionRateChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Impressions</h6>
                <small class="text-muted">12.4k Visits</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-up-arrow-alt text-success me-2'></i> <small class="fw-smibold">12.8%</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Added To Cart</h6>
                <small class="text-muted">32 Product in cart</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-down-arrow-alt text-danger me-2'></i> <small class="fw-semibold">- 8.5% </small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Checkout</h6>
                <small class="text-muted">21 Products checkout</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-up-arrow-alt text-success me-2'></i> <small class="fw-semibold">9.12%</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Purchased</h6>
                <small class="text-muted">12 Orders</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-up-arrow-alt text-success me-2'></i> <small class="fw-semibold">2.83%</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Delivered</h6>
                <small class="text-muted">120 Orders</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-up-arrow-alt text-success me-2'></i> <small class="fw-semibold">12.1%</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Conversion rate -->
  <!-- Activity Timeline -->
  <div class="col-md-7 col-lg-8 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Activity Timeline</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <!-- Activity Timeline -->
        <ul class="timeline">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">Invoices have been paid to the company</p>
              <div class="d-flex">
                <a href="javascript:void(0)" class="me-3">
                  <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image" width="23" class="me-2">
                  <span class="h6 mb-0">invoices.pdf</span>
                </a>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-warning"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">Project meeting with john @10:15am</p>
              <div class="d-flex flex-wrap">
                <div class="avatar me-3">
                  <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
                <div>
                  <h6 class="mb-0">Lester McCarthy (Client)</h6>
                  <span class="text-muted">CEO of {{ config('variables.creatorName') }}</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">5 team members in a project</p>
              <div class="d-flex align-items-center avatar-group">
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy">
                  <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Marrie Patty">
                  <img src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Jackson">
                  <img src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristine Gill">
                  <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nelson Wilson">
                  <img src="{{asset('assets/img/avatars/14.png')}}" alt="Avatar" class="rounded-circle">
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
        <!-- /Activity Timeline -->
      </div>
    </div>
  </div>
  <!--/ Activity Timeline -->
  <!-- Finance Summary -->
  <div class="col-md-5 col-lg-6 mb-md-4 mb-0">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-2 me-2">Finance Summary</h5>
          <small class="text-muted">Check out each column for more details</small>
        </div>
        <span class="badge badge-center rounded-pill bg-label-primary p-4">
          <i class='bx bx-dollar fs-5'></i>
        </span>
      </div>
      <div class="card-body">
        <div class="d-flex flex-wrap gap-2 mb-4 mt-2">
          <div class="d-flex flex-column w-50 me-2">
            <small class="text-muted text-nowrap d-block mb-2">Annual Companies Taxes</small>
            <h6 class="mb-0">$500,00</h6>
          </div>
          <div class="d-flex flex-column">
            <small class="text-muted text-nowrap d-block mb-2">Next Tax Review Date</small>
            <h6 class="mb-0">July 24,2022</h6>
          </div>
        </div>
        <div class="d-flex flex-wrap gap-2 my-4 py-3">
          <div class="d-flex flex-column w-50 me-2">
            <small class="text-muted text-nowrap d-block mb-2">Average Product Price</small>
            <h6 class="mb-0">$89.90</h6>
          </div>
          <div class="d-flex flex-column flex-grow-1">
            <small class="text-muted text-nowrap d-block mb-2">Satisfaction Rate</small>
            <div class="d-flex align-items-center">
              <div class="progress w-100 me-3" style="height: 10px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small>75%</small>
            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap align-items-center">
          <ul class="list-unstyled w-50 me-2 d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Darcey Nooner" class="avatar pull-up">
              <img class="rounded-circle" src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar">
            </li>
          </ul>
          <span class="badge bg-label-primary rounded">5 Days Ago</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Finance Summary -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
<script>
// Check selected custom option
window.Helpers.initCustomOptionCheck();
</script>

@endsection
