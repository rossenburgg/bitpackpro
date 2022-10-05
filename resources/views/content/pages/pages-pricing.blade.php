@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Pricing - Pages')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-pricing.css')}}" />
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-pricing.js')}}"></script>
@endsection

@section('content')
<div class="card overflow-hidden">
  <!-- Pricing Plans -->
  <div class="pricing-plans pb-sm-5 pb-2 rounded-top">
    <div class="container py-5">
      <h1 class="text-center mb-4">Find the right plan for your site</h1>
      <p class="text-center pb-3"> Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your needs. </p>
      <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 my-5 pt-sm-5">
        <label class="switch switch-primary ps-sm-5 mt-3 me-0">
          <span class="switch-label ps-0 ms-sm-5">Monthly</span>
          <input type="checkbox" class="switch-input price-duration-toggler" checked />
          <span class="switch-toggle-slider">
            <span class="switch-on"></span>
            <span class="switch-off"></span>
          </span>
          <span class="switch-label">Annual</span>
        </label>
        <div class="pricing-offer mt-n5 ms-n5 d-none d-sm-block">
          <img src="{{asset('assets/img/pages/pricing-arrow-'.$configData['style'].'.png')}}" alt="arrow img" class="position-absolute scaleX-n1-rtl" data-app-dark-img="pages/pricing-arrow-dark.png" data-app-light-img="pages/pricing-arrow-light.png">
          <span class="badge badge-sm bg-label-primary ms-4 mt-2">Save upto 10%</span>
        </div>
      </div>

      <div class="row mx-0 gy-3">
        <!-- Starter -->
        <div class="col-lg mb-md-0 mb-4">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title fw-bold text-center text-uppercase mt-3">Starter</h3>
              <div class="my-4 py-2 text-center">
                <img src="{{asset('assets/img/icons/unicons/bookmark.png')}}" alt="Starter Image" height="80">
              </div>

              <div class="text-center mb-4">
                <div class="mb-2 d-flex justify-content-center">
                  <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                  <h1 class="fw-bold h1 mb-0">0</h1>
                  <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                </div>
                <small class="price-yearly price-yearly-toggle text-muted">Free</small>
              </div>

              <ul class="ps-3 pt-4 pb-2 list-unstyled">
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Rich landing pages</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 100+ components</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
              </ul>

              <a href="{{url('auth/register-cover')}}" class="btn btn-label-primary d-grid w-100">Get started for free</a>
            </div>
          </div>
        </div>

        <!-- Exclusive -->
        <div class="col-lg mb-md-0 mb-4">
          <div class="card border border-primary">
            <div class="card-body">
              <div class="pricing-exclusive">
                <span class="badge bg-label-primary">Exclusive</span>
              </div>
              <h3 class="card-title fw-bold text-center text-uppercase mt-3">Pro</h3>
              <div class="my-4 py-2 text-center">
                <img src="{{asset('assets/img/icons/unicons/wallet-round.png')}}" alt="Pro Image" height="80">
              </div>
              <div class="text-center mb-4">
                <div class="mb-2 d-flex justify-content-center">
                  <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                  <h1 class="price-toggle price-yearly fw-bold h1 mb-0">42</h1>
                  <h1 class="price-toggle price-monthly fw-bold h1 mb-0 d-none">49</h1>
                  <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                </div>
                <small class="price-yearly price-yearly-toggle text-muted">$ 499 / year</small>
              </div>

              <ul class="ps-3 pt-4 pb-2 list-unstyled">
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Up to 5 users</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 120+ components</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Monthly updates</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Integrations</li>
              </ul>

              <a href="{{url('auth/register-basic')}}" class="btn btn-primary d-grid w-100">Get Started</a>
            </div>
          </div>
        </div>

        <!-- Enterprise -->
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center text-uppercase mt-3 fw-bold">Enterprise</h3>

              <div class="my-4 py-2 text-center">
                <img src="{{asset('assets/img/icons/unicons/briefcase-round.png')}}" alt="Pro Image" height="80">
              </div>

              <div class="text-center mb-4">
                <div class="mb-2 d-flex justify-content-center">
                  <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                  <h1 class="price-toggle price-yearly fw-bold h1 mb-0">84</h1>
                  <h1 class="price-toggle price-monthly fw-bold h1 mb-0 d-none">99</h1>
                  <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                </div>
                <small class="price-yearly price-yearly-toggle text-muted">$ 999 / year</small>
              </div>

              <ul class="ps-3 pt-4 pb-2 list-unstyled">
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Up to 10 users</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 150+ components</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Monthly updates</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Integrations</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Product Support</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> API access</li>
                <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Speedy build tooling</li>
              </ul>
              <a href="{{url('auth/register-basic')}}" class="btn btn-label-primary d-grid w-100">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Pricing Plans -->
  <!-- Pricing Free Trial -->
  <div class="pricing-free-trial">
    <div class="container">
      <div class="position-relative">
        <div class="d-flex justify-content-between flex-column flex-md-row align-items-center p-5 pb-0">
          <!-- image -->
          <div class="text-center">
            <img src="{{asset('assets/img/illustrations/sitting-girl-with-laptop-'.$configData['style'].'.png')}}" class="img-fluid" alt="Api Key Image" width="350" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png">
          </div>
          <div class="text-center text-md-end mt-3">
            <h3 class="text-primary">Still not convinced? Start with a 14-day FREE trial!</h3>
            <h6 class="text-body">You will get full access to with all the features for 14 days.</h6>
            <a href="{{url('auth/register-front')}}" class="btn btn-primary my-3 my-sm-5">Start 14-day FREE trial</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Pricing Free Trial -->
  <!-- Plans Comparison -->
  <div class="pricing-plans-comparison">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 text-center mb-4">
          <div class="badge bg-label-primary badge-sm">Plans</div>
          <h1 class="my-4">Pick a plan that works best for you</h1>
          <p class="text-muted">Stay cool, we have a 48-hour money back guarantee!</p>
        </div>
      </div>
      <div class="row mx-0 mb-0 mb-md-5">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-striped table-borderless text-center mb-0">
              <thead>
                <tr>
                  <th scope="col">
                    <p class="h5 mb-2">Features</p>
                    <small class="text-muted">Native front features</small>
                  </th>
                  <th scope="col">
                    <p class="h5 mb-2">Starter</p>
                    <small class="text-muted">Free</small>
                  </th>
                  <th scope="col" class="pt-3">
                    <p class="h5 mb-2 position-relative">Pro <span class="badge rounded-pill bg-primary badge-center mt-n3 position-absolute"><i class="bx bxs-star"></i></span></p>
                    <small class="text-muted">$7.5/month</small>
                  </th>
                  <th scope="col">
                    <p class="h5 mb-2">Enterprise</p>
                    <small class="text-muted">$16/month</small>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>14-days free trial</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>No user limit</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>Product Support</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>Email Support</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge bg-label-primary badge-sm">Add-on Available</span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>Integrations</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>Removal of Front branding</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge bg-label-primary badge-sm">Add-on Available</span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>Active maintenance & support</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>Data storage for 365 days</td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary"><i class="bx bx-x bx-xs"></i></span>
                  </td>
                  <td>
                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary"><i class="bx bx-check bx-xs"></i></span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <a href="{{url('auth/register-basic')}}" class="btn text-nowrap btn-label-primary">Choose Plan</a>
                  </td>
                  <td>
                    <a href="{{url('auth/register-basic')}}" class="btn text-nowrap btn-primary">Choose Plan</a>
                  </td>
                  <td>
                    <a href="{{url('auth/register-basic')}}" class="btn text-nowrap btn-label-primary">Choose Plan</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Plans Comparison -->
  <!-- FAQS -->
  <div class="pricing-faqs bg-alt-pricing rounded-bottom">
    <div class="container py-5">
      <div class="row mt-0 mt-md-5">
        <div class="col-12 text-center mb-4">
          <div class="badge bg-label-primary badge-sm">FAQ</div>
          <h1 class="my-4">Frequently Asked Questions</h1>
          <p class="text-muted">Let us help answer the most common questions you might have.</p>
        </div>
      </div>
      <div class="row mx-0 mb-md-5">
        <div class="col-12">
          <div id="faq" class="accordion accordion-popout">
            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#faq-1" aria-controls="faq-1">
                  What counts towards the 100 responses limit?
                </button>
              </h6>

              <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  We count all responses submitted through all your forms in a month.
                  If you already received 100 responses this month, you won’t be able to receive any more of them until next
                  month when the counter resets.
                </div>
              </div>
            </div>

            <div class="card accordion-item active">
              <h6 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="true" aria-controls="faq-2">
                  How do you process payments?
                </button>
              </h6>
              <div id="faq-2" class="accordion-collapse collapse show" data-bs-parent="#faq">
                <div class="accordion-body">
                  We accept Visa®, MasterCard®, American Express®, and PayPal®.
                  So you can be confident that your credit card information will be kept
                  safe and secure.
                </div>
              </div>
            </div>

            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                  What payment methods do you accept?
                </button>
              </h6>
              <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  2Checkout accepts all types of credit and debit cards.
                </div>
              </div>
            </div>

            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                  Do you have a money-back guarantee?
                </button>
              </h6>
              <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  Yes. You may request a refund within 30 days of your purchase without any additional explanations.
                </div>
              </div>
            </div>

            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
                  I have more questions. Where can I get help?
                </button>
              </h6>
              <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  Please <a href="javascript:void(0);">contact</a> us if you have any other questions or concerns. We’re
                  here to help!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ FAQS -->
</div>
@endsection
