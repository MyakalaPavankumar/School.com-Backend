@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Subject</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          
              <!-- form start -->
              <form method="POST" action="">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                    <label> Subject Name</label>
                    <input type="text" class="form-control" name="name" value="" required placeholder="Enter Subject name">
                  </div>
                  <div class="form-group" >
                    <label>Subject Type</label>
                    <select name="type" id="" name="type" class="form-control">
                      <option value="">Select Type</option>
                      <option value="Theory">Theory</option>
                      <option value="Practical">Practical</option>
                    </select>
                  </div>
                  <div class="form-group" >
                    <label>Status</label>
                    <select name="status" id="" class="form-control">
                      <option value="0">Active</option>
                      <option value="1">Inactive</option>
                    </select>
                  </div>
                 
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection