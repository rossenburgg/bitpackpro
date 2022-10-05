@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Cards Gamifications- UI elements')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Gamifications
</h4>

<div class="row">
  <div class="col-md-6 col-lg-4 mb-4 order-lg-1 order-2">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-8">
          <div class="card-body">
            <h6 class="card-title mb-1 text-nowrap">Congratulations Katie!</h6>
            <small class="d-block mb-3 text-nowrap">Best seller of the month</small>

            <h5 class="card-title text-primary mb-1">$48.9k</h5>
            <small class="d-block mb-3 text-muted">78% of target</small>

            <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
          </div>
        </div>
        <div class="col-4 pt-3 ps-0">
          <img src="{{asset('assets/img/illustrations/prize-light.png')}}" width="90" height="140" class="rounded-start" alt="View Sales">
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 order-lg-2 order-1 align-self-end mb-4">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/man-with-laptop-'.$configData['style'].'.png')}}" height="140" alt="View Badge User" data-app-light-img="illustrations/man-with-laptop-light.png" data-app-dark-img="illustrations/man-with-laptop-dark.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 order-lg-3 col-12 align-self-end order-4 mb-4">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0">
            <img src="{{asset('assets/img/illustrations/sitting-girl-with-laptop-'.$configData['style'].'.png')}}" height="140" alt="Target User" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png">
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title">Welcome back Anna!</h5>
            <p class="mb-4">You have 12 task to finish today, Your already completed 189 task good job.</p>

            <span class="badge bg-label-primary">78% of target</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-md-4 col-lg-4 order-lg-4 order-3 mb-4">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-4 pt-3 text-center">
          <img src="{{asset('assets/img/illustrations/superman-flying-'.$configData['style'].'.png')}}" width="100" height="140" class="rounded-start" alt="upgrade account" data-app-dark-img="illustrations/superman-flying-dark.png" data-app-light-img="illustrations/superman-flying-light.png">
        </div>
        <div class="col-8 text-center">
          <div class="card-body">
            <h6 class="card-title mb-1">Upgrade Account</h6>
            <small class="d-block mb-3">Add 15 team members</small>

            <h5 class="card-title text-info mb-1">$129</h5>
            <small class="d-block mb-3 text-muted">20% OFF</small>

            <a href="javascript:;" class="btn btn-sm btn-info">Upgrade</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
