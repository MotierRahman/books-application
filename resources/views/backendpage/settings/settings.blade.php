@extends('layouts.backend.link')
  @section('details')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Setting Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting Page</li>
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
            <h3 class="card-title">Add Webside Setting</h3>
          </div>
          <!-- /.card-header -->
          <form class="form-horizontal"method="post" action="{{ route('store.settings') }}"enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Logo name</label>
                  <input type="text" class="form-control" id="inputEmail3" name="logoname" placeholder="logoname" value="" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Number</label>
                  <input type="number" class="form-control" id="inputEmail3" name="number" placeholder="number" value="" />
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="email" value="" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Line</label>
                  <input type="text" class="form-control" id="inputEmail3" name="line" placeholder="line" value="" />
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Closed day</label>
                  <input type="text" class="form-control" id="inputEmail3" name="closed_day" placeholder="closed_day" value="" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>open day </label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_one" placeholder="open day" value="" />
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>open day time</label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_time_one" placeholder="open day time" value="" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>open day</label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_two" placeholder="open day" value="" />
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>open day time</label>
                  <input type="text" class="form-control" id="inputEmail3" name="open_day_time_two" placeholder="open day time" value="" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>address </label>
                  <input type="text" class="form-control" id="inputEmail3" name="address_one" placeholder="address" value="" />
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>address</label>
                  <input type="text" class="form-control" id="inputEmail3" name="address_two" placeholder="address" value="" />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>address</label>
                  <input type="text" class="form-control" id="inputEmail3" name="address_three" placeholder="address" value="" />
                </div>
                <!-- /.form-group -->
              </div>
            </div>
            <!-- /.row -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">save </button>
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