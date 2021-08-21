@extends('layouts.admin')

@section('content')

<!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  </ol>
                </nav>
              </div>
            </div>
            <!-- Card stats -->
            @role('admin')
            <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Users</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $users->count() }}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="ni ni-active-40"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Patients</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $patients->count() }}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Health Professionals</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $professionals->count() }}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Health Facilities</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $facilities->count() }}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                          <i class="ni ni-chart-bar-32"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endrole
          </div>
        </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">
          @role('admin')
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Health Facilities</h3>
                        </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Total Doses</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilities as $facility)
                            <tr>
                                <th scope="row">
                                {{ $facility->name }}
                                </th>
                                <td>
                                    {{ $facility->address }}
                                </td>
                                <td>
                                    {{ $facility->city->name }}
                                </td>
                                <td>
                                    {{ count($facility->doses) }}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Health Professionals</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('professionals') }}" class="btn btn-sm btn-primary">See all</a>
                        </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Facility</th>
                            <th scope="col">Professionals</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilities as $facility)
                            <tr>
                                <th scope="row">
                                {{ $facility->name }}
                                </th>
                                <td>
                                {{ count($facility->professionals) }}
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            @endrole
            @role('professional')
            <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
                <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
                <!-- Header container -->
                <div class="container-fluid d-flex align-items-center">
                  <div class="row">
                    <div class="col-lg-7 col-md-10">
                      <h1 class="display-2 text-white">Hi, {{ $professional->first_name }}</h1>

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

                        </div>
                      </div>

                      <div class="card-body pt-0">

                        <div class="text-center">
                          <h5 class="h3">
                            {{ $professional->first_name }} {{ $professional->last_name }}<span class="font-weight-light">, {{ $professional->title }}</span>
                          </h5>
                          <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ $professional->qualifications }}
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-8 order-xl-1">
                    <div class="card">
                      <div class="card-header">
                        <div class="row align-items-center">
                          <div class="col-8">
                            <h3 class="mb-0">Edit profile </h3>
                          </div>
                          <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-primary">Settings</a>
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
                                  <input type="text" id="input-username" value="{{ $professional->first_name }}" class="form-control" name="f_name">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-email">Last Name</label>
                                  <input type="text" id="input-email" value="{{ $professional->last_name }}"  class="form-control" name="l_name">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-first-name">Title</label>
                                  <input type="text" id="input-first-name" value="{{ $professional->title }}"  class="form-control" name="title">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="input-last-name">User ID</label>
                                  <input type="number" value="{{ $professional->user->id }}"  id="input-last-name" class="form-control" name="user">
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
                                  <label class="form-control-label" for="input-address">Phone</label>
                                  <input id="input-address" value="{{ $professional->phone }}"  class="form-control" name="phone" type="text">
                                </div>
                              </div>
                            </div>

                            </div>

                          </div>
                          <hr class="my-4" />
                          <!-- Description -->
                          <h6 class="heading-small text-muted mb-4">Qualifications</h6>
                          <div class="pl-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Qualifications</label>
                              <textarea rows="4" name="qualifications" value=""  class="form-control">{{ $professional->qualifications }}</textarea>
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endrole
      </div>

@endsection
