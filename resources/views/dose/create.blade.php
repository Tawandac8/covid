@extends('layouts.admin')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Facilities</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Facilities</li>
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
            <h3 class="mb-0">Light table</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="completion">Name</th>
                  <th scope="col" class="sort" data-sort="name">Address</th>
                  <th scope="col" class="sort" data-sort="budget">City</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                  @foreach ($facilities as $facility )
                  <tr>
                    <td>
                        <span class="status">{{ $facility->name }}</span>
                      </td>
                      <th>
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $facility->address }}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                        {{ $facility->city->name }}
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
          <form action="{{ route('dose.store') }}" method="POST">
            @csrf
            <h6 class="heading-small text-muted mb-4">Facility information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Dose Number</label>
                    <input type="text" id="input-username" class="form-control" name="dose">
                  </div>
                </div>
                <input type="text" id="input-username" hidden class="form-control" name="patient" value="{{ $patient }}">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="city">Professional</label>
                    <select name="professional" class="form-control" id="city">
                        <option value="" disabled>Select Professional</option>
                        @foreach ($professionals as $professional )
                            <option value="{{ $professional->id }}">{{ $professional->title}} {{ $professional->first_name}} {{ $professional->last_name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="city">Facility</label>
                    <select name="facility" class="form-control" id="city">
                        <option value="" disabled>Select Facility</option>
                        @foreach ($facilities as $facility )
                            <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="city">Vaccine</label>
                    <select name="vaccine" class="form-control" id="city">
                        <option value="" disabled>Select Vaccine</option>
                        @foreach ($vaccines as $vaccine )
                            <option value="{{ $vaccine->id }}">{{ $vaccine->name }}</option>
                        @endforeach
                    </select>
                  </div>
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
}

.add-form{
    width:500px;
    height:auto;
    position: absolute;
    top:20%;
    left:35%;
    z-index: 11000;
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


