@extends('layouts.admin')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Patients</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Patients</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral new-patient">New</a>
          </div>
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
                  <th scope="col" class="sort" data-sort="name">ID NUmber</th>
                  <th scope="col" class="sort" data-sort="budget">Full Name</th>
                  <th scope="col" class="sort" data-sort="status">Address</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                  @foreach ($patients as $patient )
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $patient->id_number }}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                        {{ $patient->first_name }} {{ $patient->last_name }}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">{{ $patient->address }}}</span>
                      </span>
                    </td>
                    <td class="text-right">
                          <a class="" href="{{ route('patient.show',$patient->id) }}">View</a>
                            <form class="dose-form" action="{{ route('dose.create') }}" method="post">@csrf <input type="text" value="{{ $patient->id }}" hidden name="patient"><button type="submit">Dose</button></form>
                          <a class="" href="#">Delete</a>

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
                <h3 class="mb-0">Patient Details</h3>
              </div>
            </div>
        </div>
          <div class="card-body">
            <form action="{{ route('patient.add') }}" method="POST">
              @csrf
              <h6 class="heading-small text-muted mb-4">User information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">First Name</label>
                      <input type="text" id="input-username" class="form-control"  name="f_name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Last Name</label>
                      <input type="text" id="input-email" " class="form-control" name="l_name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">ID Number</label>
                      <input type="text" id="input-first-name"  class="form-control" name="id">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Age</label>
                      <input type="number" id="input-last-name" class="form-control" name="age">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Contact information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-address">Address</label>
                      <input id="input-address" class="form-control" name="address" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="city">City</label>
                      <select name="city" class="form-control" id="city">
                          <option value="" selected>Select City</option>
                          @foreach ($cities as $city )
                          <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
                          @endforeach

                      </select>
                    </div>
                  </div>
                </div>

              </div>
              <hr class="my-4" />
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">Patient History</h6>
              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">History</label>
                  <textarea rows="4" name="history" class="form-control"></textarea>
                </div>
              </div>
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

.dose-form{
    display: inline-block;
}

.dose-form button{
    border:none;
    background:none;
    padding:10px;
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
