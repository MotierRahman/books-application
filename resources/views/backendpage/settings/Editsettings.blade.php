@extends('layouts.backend.link')
  @section('details')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Setting Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Setting Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Webside Setting</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('update/settings/'.$settings->id) }}"enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Logo name</label>
                  <input type="text" class="form-control" id="inputEmail3" name="logoname" placeholder="logoname" value="{{ $settings->logoname }}" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Number</label>
                  <input type="number" class="form-control" id="inputEmail3" name="number" placeholder="number" value="{{ $settings->number }}" />
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="email" value="{{ $settings->email }}" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Line</label>
                  <input type="text" class="form-control" id="inputEmail3" name="line" placeholder="line" value="{{ $settings->line }}" />
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Closed day</label>
                  <input type="text" class="form-control" id="inputEmail3" name="closed_day" placeholder="closed_day" value="{{ $settings->closed_day }}" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>open day </label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_one" placeholder="open day" value="{{ $settings->open_day_one }}" />
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>open day time</label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_time_one" placeholder="open day time" value="{{ $settings->open_day_time_one }}" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>open day</label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_two" placeholder="open day" value="{{ $settings->open_day_two }}" />
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>open day time</label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_time_two" placeholder="open day time" value="{{ $settings->open_day_time_two }}" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>address </label>
                  <input type="text" class="form-control" id="inputEmail3" name="address_one" placeholder="address" value="{{ $settings->address_one }}" />
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>address</label>
                  <input type="text" class="form-control" id="inputEmail3" name="address_two" placeholder="address" value="{{ $settings->address_two }}" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>address</label>
                  <input type="text" class="form-control" id="inputEmail3" name="address_three" placeholder="address" value="{{ $settings->address_three }}" />
                </div>
                <!-- /.form-group -->
              </div>
            </div>
            <!-- /.row -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Update </button>
              <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>
          </div>
        </form>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->

        
    </section>
    <!-- /.content -->
  @endsection