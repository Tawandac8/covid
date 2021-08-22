@extends('layouts.admin')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Vaccines</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Vaccines</li>
              </ol>
            </nav>
          </div>
          @role('admin')
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral new-patient">New</a>
          </div>
          @endrole
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="completion">Name</th>
                  <th scope="col" class="sort" data-sort="name">Country Of Origin</th>
                  <th scope="col" class="sort" data-sort="budget">Quantity</th>
                  <th scope="col" class="sort" data-sort="budget">Batch Number</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                  @foreach ($vaccines as $vaccine )
                  <tr>
                    <td>
                        <span class="status">{{ $vaccine->name }}</span>
                      </td>
                      <th>
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $vaccine->country_of_origin }}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                        {{ $vaccine->efficacy }}
                    </td>
                    <td class="budget">
                        {{ $vaccine->batch_number }}
                    </td>

                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">View</a>
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>

                  @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="backdrop"></div>
<div class="add-form">
    <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Add Facility</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('vaccine.add') }}" method="POST">
            @csrf
            <h6 class="heading-small text-muted mb-4">Vaccine information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Name</label>
                    <input type="text" id="input-username" class="form-control" name="name">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Country Of Origin</label>
                    <input type="text" id="input-email" class="form-control" name="origin">
                  </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Quantity</label>
                      <input type="number" id="input-email" class="form-control" name="efficacy">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Batch Number</label>
                      <input type="text" id="input-email" class="form-control" name="batch">
                    </div>
                  </div>

            </div>
            <hr class="my-4" />

            <div class="pl-lg-4">
            <div class="form-group">
                <button class="form-control form-button" type="submit">Add</button>
              </div>
            </div>
          </form>
        </div>
      </div>

</div>
@endsection

@section('styles')
<style>
.backdrop{
    width: 100%;
    height:100vh;
    position: absolute;
    left: 0;
    top: 0;
    background: rgba(255, 255, 255, 0.473);
    backdrop-filter: blur(4px);
    z-index: 10000;
    display: none;
}

.add-form{
    width:500px;
    height:auto;
    position: absolute;
    top:20%;
    left:35%;
    z-index: 11000;
    display: none;
}

.form-button{
    background: #5E72E4;
    color: white;
}

.form-button:hover{
    background: #3c4a9b;
    color: white;
}
</style>
@endsection

@section('scripts')
<script>
    $('.new-patient').click(function(){
        $('.backdrop').fadeIn('slow','swing',function(){
            $('.add-form').slideDown('slow','swing')
        })
    })
</script>

@endsection
