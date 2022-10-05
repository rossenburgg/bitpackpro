@php
$configData = Helper::appClasses();
@endphp

@push('pricing-script')
<script src="{{asset('assets/js/pages-pricing.js')}}"></script>
@endpush

<!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
        <div class="pricing-plans">
          <div class="text-center mb-3">
            <h3>Find the right plan for your site</h3>
            <p> Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your needs. </p>
          </div>
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
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card border shadow-none">
                <div class="card-body">
                  <h3 class="fw-bold text-center text-uppercase mt-3">Starter</h3>
                  <div class="my-4 py-2 text-center">
                    <img src="{{asset('assets/img/icons/unicons/bookmark.png')}}" alt="Starter Image" height="80">
                  </div>

                  <div class="text-center mb-4">
                    <div class="mb-2 d-flex justify-content-center">
                      <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                      <h1 class="fw-bold h1 mb-0">0</h1>
                      <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                    </div>
                  </div>

                  <ul class="ps-3 pt-4 pb-2 list-unstyled">
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Rich landing pages</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 100+ components</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                  </ul>

                  <a href="{{url('auth/register-basic')}}" class="btn btn-label-primary d-grid w-100">Get started for free</a>
                </div>
              </div>
            </div>

            <!-- Exclusive -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card border border-primary shadow-none">
                <div class="card-body">
                  <div class="pricing-exclusive text-end m-n2">
                    <span class="badge bg-label-primary">Exclusive</span>
                  </div>
                  <h3 class="fw-bold text-center text-uppercase mt-2">Pro</h3>
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
                    <small class=" position-absolute start-0 end-0 m-auto price-yearly price-yearly-toggle text-muted">$ 499 / year</small>
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
            <div class="col-xl">
              <div class="card border shadow-none">
                <div class="card-body">
                  <h3 class="text-center text-uppercase fw-bold mt-3">Enterprise</h3>

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
                    <small class=" position-absolute start-0 end-0 m-auto price-yearly price-yearly-toggle text-muted">$ 999 / year</small>
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
        <!--/ Pricing Plans -->
      </div>
    </div>
  </div>
</div>
<!--/ Pricing Modal -->
