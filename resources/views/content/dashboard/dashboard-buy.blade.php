@extends('layouts/layoutMaster')

@section('title', 'Buy') 
@section('content')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>
<script src="{{asset('assets/vendor/libs/autosize/autosize.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-wizard-numbered.js')}}"></script>
<script src="{{asset('assets/js/form-wizard-validation.js')}}"></script>
<script src="{{asset('assets/js/forms-selects.js')}}"></script>
<script src="{{asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{asset('assets/js/forms-typeahead.js')}}"></script>
<script src="{{asset('assets/js/forms-extras.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Form Wizard/</span> Numbered
</h4>




  <!-- Validation Wizard -->
  <div class="col-12 mb-4">
    <div id="wizard-validation" class="bs-stepper mt-2">
      <div class="bs-stepper-header">
        <div class="step" data-target="#account-details-validation">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">1</span>
            <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Order Details</span>
              <span class="bs-stepper-subtitle">Setup order Details</span>
            </span>
          </button>
        </div>
        <div class="line">
          <i class="bx bx-chevron-right"></i>
        </div>
        <div class="step" data-target="#personal-info-validation">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">2</span>
            <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add personal info</span>
            </span>
          </button>
        </div>
        <div class="line">
          <i class="bx bx-chevron-right"></i>
        </div>
        <div class="step" data-target="#social-links-validation">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">3</span>
            <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add social links</span>
            </span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <form id="wizard-validation-form" onSubmit="return false">
          <!-- Account Details -->
          <div id="account-details-validation" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Order Details</h6>
              <small>Please make sure all information are correct.</small>
            </div>

            <div class="mb-3">
          <label for="selectCryptoBuy" class="form-label">Choose cryptocurrency</label>
            <select id="select2Icons" class="select2-icons  form-select form-select-lg" data-allow-clear="true">
              <option value="BTC" data-icon="bx bxl-bitcoin">Bitcoin</option>
              <option value="BTC" data-icon="bx bx-bitcoin">Bitcoin Cash</option>
              <option value="LTC" data-icon="bx bx-hive">Litecoin</option>
              <option value="ETH" data-icon="bx bx-meteor">Ethereum</option>
              <option value="LYXE" data-icon="bx bxs-coin">Lukso</option>
              <option value="USDT" data-icon="bx bx-money" >Tether</option>
</select>


          

            <div class="row g-3">
              <div class="col-sm-6">
              <label class="form-label" for="numeral-maskusd">Amount in USD</label>
              <input type="text" id="numeral-maskusd" class="form-control numeral-mask" placeholder="Enter amount in dollars" />
              </div>
              <div class="col-sm-6">
              <label class="form-label" for="numeral-maskghs">Amount in GHS</label>
              <input type="text" id="numeral-maskghs" class="form-control numeral-mask" placeholder="Enter amount in cedis" />
              </div>

              <label class="form-label" for="bootstrap-maxlength-example1">Bitcoin Address</label>
            <input type="text" id="inpAddress" pattern="([13]|bc1)[A-HJ-NP-Za-km-z1-9]{27,34}" title="Please enter a correct address" class="form-control bootstrap-maxlength-example" maxlength="25" />
          

              <div class="col-sm-6 form-password-toggle">
                <label class="form-label" for="formValidationPass">Password</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="formValidationPass" name="formValidationPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="formValidationPass2" />
                  <span class="input-group-text cursor-pointer" id="formValidationPass2"><i class="bx bx-hide"></i></span>
                </div>
              </div>

           
              <div class="col-sm-6 form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="formValidationConfirmPass" name="formValidationConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="formValidationConfirmPass2" />
                  <span class="input-group-text cursor-pointer" id="formValidationConfirmPass2"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev" disabled>
                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next">
                  <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                  <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- Personal Info -->
          <div id="personal-info-validation" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Personal Info</h6>
              <small>Enter Your Personal Info.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="formValidationFirstName">First Name</label>
                <input type="text" id="formValidationFirstName" name="formValidationFirstName" class="form-control" placeholder="John" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="formValidationLastName">Last Name</label>
                <input type="text" id="formValidationLastName" name="formValidationLastName" class="form-control" placeholder="Doe" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="formValidationCountry">Country</label>
                <select class="select2" id="formValidationCountry" name="formValidationCountry">
                  <option label=" "></option>
                  <option>UK</option>
                  <option>USA</option>
                  <option>Spain</option>
                  <option>France</option>
                  <option>Italy</option>
                  <option>Australia</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="formValidationLanguage">Language</label>
                <select class="selectpicker w-auto" id="formValidationLanguage" data-style="btn-transparent" data-icon-base="bx" data-tick-icon="bx-check text-white" name="formValidationLanguage" multiple>
                  <option>English</option>
                  <option>French</option>
                  <option>Spanish</option>
                </select>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-primary btn-prev">
                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next">
                  <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                  <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- Social Links -->
          <div id="social-links-validation" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Social Links</h6>
              <small>Enter Your Social Links.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="formValidationTwitter">Twitter</label>
                <input type="text" name="formValidationTwitter" id="formValidationTwitter" class="form-control" placeholder="https://twitter.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="formValidationFacebook">Facebook</label>
                <input type="text" name="formValidationFacebook" id="formValidationFacebook" class="form-control" placeholder="https://facebook.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="formValidationGoogle">Google+</label>
                <input type="text" name="formValidationGoogle" id="formValidationGoogle" class="form-control" placeholder="https://plus.google.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="formValidationLinkedIn">LinkedIn</label>
                <input type="text" name="formValidationLinkedIn" id="formValidationLinkedIn" class="form-control" placeholder="https://linkedin.com/abc" />
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-primary btn-prev">
                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-success btn-next btn-submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Validation Wizard -->

</div>
@endsection

