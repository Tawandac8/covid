@extends('layouts.admin')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Professional</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Health Professional</li>
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
                    <th scope="col" class="sort" data-sort="completion">ID</th>
                  <th scope="col" class="sort" data-sort="name">Full Name</th>
                  <th scope="col" class="sort" data-sort="budget">Title</th>
                  <th scope="col" class="sort" data-sort="status">Hospital/Clinic</th>
                  <th scope="col">Phone</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                  @foreach ($professionals as $professional )
                  <tr>
                    <td>
                        <span class="status">{{ $professional->id }}</span>
                      </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $professional->first_name }} {{ $professional->last_name }}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      {{ $professional->title }}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">Mpilo</span>
                      </span>
                    </td>
                    <td>
                      <span class="status">{{ $professional->phone }}</span>
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
              <h3 class="mb-0">Add Health Practitioner</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('professional.add') }}" method="POST">
            @csrf
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">First Name</label>
                    <input type="text" id="input-username" class="form-control" name="f_name">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Last Name</label>
                    <input type="text" id="input-email" class="form-control" name="l_name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Title</label>
                    <input type="text" id="input-first-name" class="form-control" name="title">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">User ID</label>
                    <input type="number" id="input-last-name" class="form-control" name="user">
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
                    <input id="input-address" class="form-control" name="phone" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="city">Health Facility</label>
                    <select name="facility" class="form-control" id="city">
                        <option value="" disabled>Select Health Facility</option>
                        @foreach ($facilities as $facility )
                            <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                        @endforeach
                    </select>
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
                <textarea rows="4" name="qualifications" class="form-control"></textarea>
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
