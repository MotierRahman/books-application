@extends('layouts.backend.link')
  @section('details')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>menus Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All menus</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">all menus </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Action</h>
                 
                </tr>
                </thead>
                <tbody>
                    @foreach($menus as $row)
                <tr>
                    <td>
                        <img src="{{ asset($row->image) }}" style="height: 50px;width:50px;" alt="order image"  />
                     </td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->price}}</td>
                
                  <td>
                    <a href="{{ url('edit/menus/'.$row->id) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a><br>
                    <a href="{{ url('delete/menus/'.$row->id) }}" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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