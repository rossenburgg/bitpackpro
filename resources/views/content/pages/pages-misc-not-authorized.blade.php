@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Not Authorized - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-misc.css')}}">
@endsection


@section('content')
<!-- Not Authorized -->
<div class="container-xxl container-p-y">
  <div class="misc-wrapper">
    <h2 class="mb-2 mx-2">You are not authorized!</h2>
    <p class="mb-4 mx-2">You do not have permission to view this page using the credentials that you have provided while login. <br> Please contact your site administrator.</p>
    <a href="{{url('/')}}" class="btn btn-primary">Back to home</a>
    <div class="mt-5">
      <img src="{{asset('assets/img/illustrations/girl-with-laptop-'.$configData['style'].'.png')}}" alt="page-misc-error-light" width="450" class="img-fluid" data-app-dark-img="illustrations/girl-with-laptop-dark.png" data-app-light-img="illustrations/girl-with-laptop-light.png">
    </div>
  </div>
</div>
<!-- /Not Authorized -->
@endsection
