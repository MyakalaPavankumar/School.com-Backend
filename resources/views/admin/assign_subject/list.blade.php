@extends('layouts.app')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign Subject List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{url('admin/assign_subject/add')}}" class="btn btn-primary">Add New Assign Subject</a>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
      <div class="container-fluid">

   
          <div class=" card ">
          <div class="card-header">
                <h3 class="card-title">Search Class</h3>
              </div>
              <!-- form start -->
              <form method="get" action="">
              
                <div class="card-body">
                <div class="row">
                <div class="form-group col-md-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{Request::get('name')}}"  placeholder="Enter name">
                  </div>
                 
                  <div class="form-group col-md-3">
                    <label>Date</label>
                    <input type="date" class="form-control" name="date" value="{{Request::get('date')}}"  >
                  </div>
                  <div class="form-group col-md-3">
                    <button class="btn btn-primary" type="submit" style="margin-top: 30px;">Search</button>
                    <a href="{{url('admin/class/list')}}" style="margin-top: 30px;" class="btn btn-success">Reset</a>
                  </div>
                  </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col -->
          <div class="col-md-12">
            @include('_message')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Asiign Subject List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Created By</th>
                      <th>Created Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                </table>
                <div style="padding: 10px; float:right;">
                  
                </div>
               

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                  <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection