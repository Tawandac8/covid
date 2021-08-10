@extends('layouts.admin')

@section('content')

<!-- Header -->
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white">{{ $patient->first_name }} {{ $patient->last_name }}</h1>
          <p class="text-white mt-0 mb-5"><b>History: </b>{{ $patient->history }}</p>

        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-4 order-xl-2">
        <div class="card card-profile">

          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">

              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

          </div>
          <div class="card-body pt-0">

            <div class="text-center">
              <h5 class="h3">
                Vaccine Card
              </h5>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>Doses: {{ $doses->count() }}
              </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="completion">Dose</th>
                      <th scope="col" class="sort" data-sort="name">Vaccine</th>
                      <th scope="col" class="sort" data-sort="budget">Facility</th>

                    </tr>
                  </thead>
                  <tbody class="list">
                      @foreach ($doses as $dose )
                      <tr>
                        <td>
                            <span class="status">{{ $dose->dose_number }}</span>
                          </td>
                          <th>
                          <div class="media align-items-center">
                            <div class="media-body">
                              <span class="name mb-0 text-sm">{{ $dose->vaccine->name }}</span>
                            </div>
                          </div>
                        </th>
                        <td class="budget">
                            {{ $dose->healthFacility->name }}
                        </td>
                      </tr>

                      @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Patient Details</h3>
                  </div>
                </div>
            </div>
              <div class="card-body">
                <form action="#" method="POST">
                  @csrf
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">First Name</label>
                          <input type="text" id="input-username" class="form-control" value="{{ $patient->first_name }}" name="f_name">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Last Name</label>
                          <input type="text" id="input-email" value="{{ $patient->last_name }}" class="form-control" name="l_name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-first-name">ID Number</label>
                          <input type="text" id="input-first-name" value="{{ $patient->id_number }}" class="form-control" name="id">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-last-name">Age</label>
                          <input type="number" id="input-last-name" value="{{ $patient->age }}" class="form-control" name="age">
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
                          <input id="input-address" class="form-control" value="{{ $patient->address }}" name="address" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="city">City</label>
                          <select name="city" class="form-control" id="city">
                              <option value="{{ $patient->city->id }}" selected>{{ $patient->city->name }}</option>

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
                      <textarea rows="4" name="history" class="form-control">{{ $patient->history }}</textarea>
                    </div>
                  </div>
                </form>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
