@extends('layouts/layoutMaster')

@section('title', 'Alerts - UI elements')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">UI elements /</span> Alerts
</h4>
<div class="row mb-4">
  <!-- Basic Alerts -->
  <div class="col-md mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Basic Alerts</h5>
      <div class="card-body">
        <div class="alert alert-primary" role="alert">
          This is a primary alert — check it out!
        </div>

        <div class="alert alert-secondary" role="alert">
          This is a secondary alert — check it out!
        </div>

        <div class="alert alert-success" role="alert">
          This is a success alert — check it out!
        </div>

        <div class="alert alert-danger" role="alert">
          This is a danger alert — check it out!
        </div>

        <div class="alert alert-warning" role="alert">
          This is a warning alert — check it out!
        </div>

        <div class="alert alert-info" role="alert">
          This is an info alert — check it out!
        </div>

        <div class="alert alert-dark mb-0" role="alert">
          This is a dark alert — check it out!
        </div>
      </div>
    </div>
  </div>
  <!--/ Basic Alerts -->
  <!-- Dismissible Alerts -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Dismissible Alerts</h5>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible" role="alert">
          This is a primary dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-secondary alert-dismissible" role="alert">
          This is a secondary dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-success alert-dismissible" role="alert">
          This is a success dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-danger alert-dismissible" role="alert">
          This is a danger dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-warning alert-dismissible" role="alert">
          This is a warning dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-info alert-dismissible" role="alert">
          This is an info dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
          This is a dark dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Dismissible Alerts -->
</div>
<div class="row">
  <!-- Alerts with headings -->
  <div class="col-md mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Alerts with Heading</h5>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible" role="alert">
          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">For a watch</h6>
          <p class="mb-0">Bonbon sweet roll dragée lemon drops tart.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-secondary alert-dismissible" role="alert">
          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Alert Heading</h6>
          <p class="mb-0">Cupcake jelly cookie chocolate bar topping.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-success alert-dismissible" role="alert">
          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Well done :)</h6>
          <p class="mb-0">Halvah cheesecake toffee. Cupcake jelly cookie chocolate.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
          <p class="mb-0">Aww yeah, you successfully read alert message.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Be Aware!!</h6>
          <p class="mb-0">Gummies wafer candy canes chocolate lemon drops.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-info alert-dismissible" role="alert">
          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Alert!!</h6>
          <p class="mb-0">Eos mutat malis maluisset et, agam ancillae quo te, in vim.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Be Aware!!</h6>
          <p class="mb-0">Aldus PageMaker including versions of Lorem Ipsum</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Alerts with headings -->
  <!-- Alerts with Icons -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Alerts with Icons</h5>
      <div class="card-body">
        <div class="alert alert-primary d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-primary border-label-primary p-3 me-2"><i class="bx bx-command fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">For a watch</h6>
            <span>This is a primary solid alert — check it out!</span>
          </div>
        </div>

        <div class="alert alert-secondary d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-secondary border-label-secondary p-3 me-2"><i class="bx bx-envelope fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Alert Heading</h6>
            <span>This is a secondary solid alert — check it out!</span>
          </div>
        </div>

        <div class="alert alert-success d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-success border-label-success p-3 me-2"><i class="bx bx-desktop fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Well done :)</h6>
            <span>This is a success solid alert — check it out!</span>
          </div>
        </div>

        <div class="alert alert-danger d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-danger border-label-danger p-3 me-2"><i class="bx bx-store fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
            <span>This is a danger solid alert — check it out!</span>
          </div>
        </div>

        <div class="alert alert-warning d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-warning border-label-warning p-3 me-2"><i class="bx bx-wallet fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Be Aware!!</h6>
            <span>This is a warning solid alert — check it out!</span>
          </div>
        </div>

        <div class="alert alert-info d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-info border-label-info p-3 me-2"><i class="bx bx-detail fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Alert!!</h6>
            <span>This is an info solid alert — check it out!</span>
          </div>
        </div>

        <div class="alert alert-dark d-flex mb-0" role="alert">
          <span class="badge badge-center rounded-pill bg-dark border-label-dark p-3 me-2"><i class="bx bx-save fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Be Aware!!</h6>
            <span>This is a dark solid alert — check it out!</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Alerts with Icons -->
</div>
@endsection
