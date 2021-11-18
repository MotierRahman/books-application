@extends('layouts.backend.link')
  @section('details')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>all settings Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Setting page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">all Setting </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>logoname</th>
                  <th>number</th>
                  <th>email</th>
                  <th>closed day</th>
                  <th>open day</th>
                  <th>address</th>
                  <th>Action</h>

       
                 
                </tr>
                </thead>
                <tbody>
                    @foreach($allsettings as $row)
                <tr>
                  <td>{{$row->logoname}}</td>
                  <td>{{$row->number}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->closed_day}}</td>
                  <td>{{$row->open_day_two}}</td>
                  <td>{{$row->address_one}}</td>
                
                  <td>
                    <a href="{{ url('edit/settings/'.$row->id) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a><br>
                    <a href="{{ url('delete/settings/'.$row->id) }}" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                 </td>
                
                </tr>
                @endforeach
                
              
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    

    </section>
    <!-- /.content -->
  @endsection