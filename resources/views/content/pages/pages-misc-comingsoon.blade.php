@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Coming Soon - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-misc.css')}}">
@endsection

@section('content')
<!-- Under Maintenance -->
<div class="container-xxl py-3">
  <div class="misc-wrapper">
    <h2 class="mb-2 mx-2">We are launching soon</h2>
    <p class="mb-4 mx-2">We're creating something awesome. Please subscribe to get notified when it's ready!</p>
    <form onsubmit="return false">
      <div class="d-flex gap-2">
        <input type="text" class="form-control" placeholder="email" autofocus>
        <button type="submit" class="btn btn-primary">Notify</button>
      </div>
    </form>
    <div class="mt-5">
      <img src="{{asset('assets/img/illustrations/boy-with-rocket-'.$configData['style'].'.png')}}" alt="boy-with-rocket-light" width="500" class="img-fluid" data-app-dark-img="illustrations/boy-with-rocket-dark.png" data-app-light-img="illustrations/boy-with-rocket-light.png">
    </div>
  </div>
</div>
<!-- /Under Maintenance -->
@endsection
